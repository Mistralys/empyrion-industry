<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use EmpyrionIndustry\Site;
use AppUtils\ConvertHelper;
use EmpyrionIndustry\Requirements\Requirements;
use EmpyrionIndustry\Industry;

abstract class AbstractMaterial
{
   /**
    * @var string
    */
    protected $name;
    
   /**
    * @var string
    */
    protected $type;
    
   /**
    * @var string
    */
    private $id;
    
   /**
    * @var Materials
    */
    protected $collection;
    
   /**
    * @var Requirements
    */
    protected $requirements;
    
    public function __construct(Materials $collection, string $name, array $config)
    {
        $this->collection = $collection;
        $this->name = $name;
        $this->type = $config['type'];
        $this->id = ConvertHelper::transliterate($name);
        
        if(!isset($config['requiresOptional']))
        {
            $config['requiresOptional'] = array();
        }
        
        $this->requirements = new Requirements(
            $this,
            $config['requires'],
            $config['requiresOptional']
        );
    }
    
    public function init() : void
    {
        $this->requirements->init();
    }
    
    public function getIndustry() : Industry
    {
        return $this->collection->getIndustry();
    }
    
    public function getCollection() : Materials
    {
        return $this->collection;
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
    
    abstract public function isPlaceableMaterial() : bool;
    
    public function getPlaceablesForList() : string
    {
        return $this->requirements->getPlaceablesForList();
    }
    
    public function getPlaceables() : array
    {
        return $this->requirements->getPlaceables();
    }
    
    public function getID() : string
    {
        return $this->id;
    }
    
    public function getURLView(array $params=array()) : string
    {
        $params['material_id'] = $this->getID();
        
        return Site::getInstance()->buildSlugURL('View', $params);
    }
    
    public function getRequirements() : Requirements
    {
        return $this->requirements;
    }
}
