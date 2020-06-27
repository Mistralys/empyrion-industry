<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Placeables;

use EmpyrionIndustry\Exception;
use EmpyrionIndustry\Industry;

class Placeables
{
    const ERROR_PLACEABLE_ID_DOES_NOT_EXIST = 60301;
    
   /**
    * @var Placeable[]
    */
    private $items = array();
   
   /**
    * @var Industry
    */
    private $industry;
    
    public function __construct(Industry $industry)
    {
        $this->industry = $industry;
        
        $this->registerItem('CV', t('Capital Vessel'));
        $this->registerItem('BA', t('Base'));
        $this->registerItem('SV', t('Small Vessel'));
        $this->registerItem('HV', t('Hover Vessel'));
        
        usort($this->items, function(Placeable $a, Placeable $b) {
            return strnatcasecmp($a->getLabel(), $b->getLabel());
        });
    }
    
    public function getIndustry() : Industry
    {
        return $this->industry;
    }
    
    private function registerItem(string $id, string $label) : void
    {
        $this->items[] = new Placeable($id, $label);
    }
    
   /**
    * @return Placeable[]
    */
    public function getAll() : array
    {
        return $this->items;
    }
    
    public function idExists(string $placeableID) : bool
    {
        foreach($this->items as $placeable)
        {
            if($placeable->getID() === $placeableID)
            {
                return true;
            }
        }
        
        return false;
    }
    
   /**
    * @return string[]
    */
    public function getIDs() : array
    {
        $result = array();
        
        foreach($this->items as $placeable)
        {
            $result[] = $placeable->getID();
        }
        
        return $result;
    }
    
   /**
    * @param string $placeableID
    * @throws Exception
    * @return Placeable
    */
    public function getByID(string $placeableID) : Placeable
    {
        foreach($this->items as $placeable)
        {
            if($placeable->getID() === $placeableID)
            {
                return $placeable;
            }
        }
        
        throw new Exception(
            'Unknown placeable ID.',
            sprintf(
                'The placeable ID [%s] does not exist.',
                $placeableID
            ),
            self::ERROR_PLACEABLE_ID_DOES_NOT_EXIST
        );
    }
}
