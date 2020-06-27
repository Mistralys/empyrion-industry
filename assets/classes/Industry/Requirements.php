<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Requirements;

use EmpyrionIndustry\Materials\AbstractMaterial;
use EmpyrionIndustry\Industry;

class Requirements
{
   /**
    * @var AbstractMaterial
    */
    private $owner;
    
   /**
    * @var AbstractContainer[]
    */
    private $containers = array();
    
    public function __construct(AbstractMaterial $owner, array $reqs, array $reqsOptional)
    {
        $this->owner = $owner;
        
        if($this->owner->isPlaceableMaterial())
        {
            $this->parsePlaceables($reqs);
        }
        else
        {
            $this->parseMaterialsList($reqs);
        }
    }
    
    public function getIndustry() : Industry
    {
        return $this->owner->getIndustry();
    }
    
    private function parseMaterials(array $materialsList) : void
    {
        $container = new MaterialsList($this, $materialsList);
        
        $this->addContainer($container);
    }
    
    private function addContainer(AbstractContainer $container) : void
    {
        $this->containers[] = $container;
        
        return $container;
    }
    
    private function parsePlaceables(array $placeableDefs) : array
    {
        $collection = $this->owner->getIndustry()->getPlaceables();
        
        foreach($placeableDefs as $placeableIDs => $materials)
        {
            if($placeableIDs === 'ALL')
            {
                $placeableIDs = implode(',', $collection->getIDs());
            }
            
            $container = new PlaceableMaterialsList($materials);
            $this->addContainer($materials);
            
            $tokens = explode(',', $placeableIDs);
            
            foreach($tokens as $placeableID)
            {
                $container->addPlaceable($collection->getByID($placeableID));
            }
        }
    }
    
   /**
    * Retrieves all available material sets: In case of
    * placeables like modules (Reactor, O2 Station...) this
    * will return {@see PlaceableMaterialsList} instances.
    * Otherwise, a single {@see MaterialsList} is returned.
    * 
    * @return AbstractContainer[]
    * 
    * @see PlaceableMaterialsList
    * @see MaterialsList
    */
    public function getContainers() : array
    {
        return $this->containers;
    }
    
    public function hasPlaceables() : bool
    {
        return $this->owner->isPlaceableMaterial();
    }

    public function getPlaceablesForList() : string
    {
        return implode(', ', $this->getPlaceables());
    }
    
    public function getPlaceableIDs() : array
    {
        $result = array();
        
        foreach($this->containers as $container)
        {
            if($container instanceof PlaceableMaterialsList)
            {
                $result = array_merge($result, $container->getPlaceableIDs());
            }
        }
        
        return $result;
    }
}
