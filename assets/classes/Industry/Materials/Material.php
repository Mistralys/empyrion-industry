<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials\Material;

use EmpyrionIndustry\Exception;

abstract class Material
{
    const ERROR_INVALID_PLACEABLE_IDENTIFIER = 60101;
    
   /**
    * @var string
    */
    protected $name;
    
   /**
    * @var string
    */
    protected $type;
    
   /**
    * @var string[]string
    */
    protected $requires = array();
    
    protected $placeables = array(
        'BA',
        'CV',
        'SV',
        'HV'
    );
    
    public function __construct(string $name, array $config)
    {
        $this->name = $name;
        $this->type = $config['type'];
        $this->requires = $config['requires'];
    }
    
    public function getName() : string
    {
        return $this->name;
    }
    
    public function getTypeID() : string
    {
        return $this->type;
    }
    
    abstract public function getTypeLabel() : string;
    
    abstract public function hasMultipleRequirements() : bool;
    
    public function getPlaceablesForList() : string
    {
        return implode(', ', $this->getPlaceables());
    }
    
    public function getPlaceables() : array
    {
        if(!$this->hasMultipleRequirements())
        {
            return array();
        }
        
        $result = array();
        $keys = array_keys($this->requires);
        
        foreach($keys as $key)
        {
            if($key === 'ALL')
            {
                $key = implode(',', $this->placeables);
            }
            
            $tokens = explode(',', $key);
            
            foreach($tokens as $token)
            {
                $this->requireValidPlaceable($token);
                
                if(!in_array($token, $result))
                {
                    $result[] = $token;
                }
            }
        }
        
        sort($result);
        
        return $result;
    }
    
    protected function requireValidPlaceable(string $placeableID) : void 
    {
        if(in_array($placeableID, $this->placeables))
        {
            return;
        }
        
        throw new Exception(
            'Invalid placeable identifier '.$placeableID,
            sprintf(
                'The placeable identifier [%s] does not exist. Valid placeables are: [%s].',
                $placeableID,
                implode(', ', $this->placeables)
            ),
            self::ERROR_INVALID_PLACEABLE_IDENTIFIER
        );
    }
}
