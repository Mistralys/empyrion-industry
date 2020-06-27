<?php

namespace EmpyrionIndustry\Requirements;

use EmpyrionIndustry\Placeables\Placeable;

class PlaceableMaterialsList extends AbstractContainer
{
   /**
    * @var Placeable[]
    */
    private $placeables = array();
    
    public function addPlaceable(Placeable $placeable) : PlaceableMaterialsList
    {
        $this->placeables[] = $placeable;
        
        return $this;
    }
    
   /**
    * @return string[]
    */
    public function getPlaceableIDs() : array
    {
        $result = array();
        
        foreach($this->placeables as $placeable)
        {
            $result[] = $placeable->getID();
        }
        
        return $result;
    }
    
   /**
    * @return Placeable[]
    */
    public function getPlaceables() : array
    {
        return $this->placeables;
    }
}
