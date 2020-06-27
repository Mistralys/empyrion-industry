<?php

namespace EmpyrionIndustry\Requirements;

use EmpyrionIndustry\Placeables\Placeable;
use function EmpyrionIndustry\t;

class PlaceableMaterialsList extends AbstractContainer
{
   /**
    * @var Placeable[]
    */
    private $placeables = array();
    
    public function getLabel() : string
    {
        $tokens = array();
        
        foreach($this->placeables as $placeable)
        {
            $tokens[] = $placeable->getLabel();
        }
        
        return t('Materials list for:').' '.implode(', ', $tokens);
    }
    
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
