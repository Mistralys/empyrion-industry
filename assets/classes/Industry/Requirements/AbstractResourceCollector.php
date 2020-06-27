<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Requirements;

use EmpyrionIndustry\Exception;
use EmpyrionIndustry\Materials\AbstractMaterial;

abstract class AbstractResourceCollector
{
   /**
    * @var MaterialAmount
    */
    private $amounts = array();
    
   /**
    * @var AbstractContainer
    */
    private $container;
    
    public function __construct(AbstractContainer $container)
    {
        $this->container = $container;
        
        $materials = $container->getMaterials();
        
        foreach($materials as $material)
        {
            $this->addMaterial($material);
        }
    }
    
   /**
    * @return MaterialAmount[]
    */
    public function getResources() : array
    {
        $result = array();
        
        foreach($this->amounts as $def) 
        {
            $result[] = new MaterialAmount($def['material'], $def['amount']);
        }
        
        return $result;
    }
    
    abstract protected function isMatch(AbstractMaterial $material) : bool;
    
    private function addMaterial(MaterialAmount $amount, int $multiplier=1) : void
    {
        if($this->isMatch($amount->getMaterial()))
        {
            $this->collectResource($amount, $multiplier);
        }
        else
        {
            $this->collectMaterial($amount, $multiplier);
        }
    }
    
    private function collectMaterial(MaterialAmount $material, int $multiplier) : void
    {
        $reqs = $material->getMaterial()->getRequirements();
        
        $containers = $reqs->getContainers();
        
        foreach($containers as $container)
        {
            if($container instanceof PlaceableMaterialsList)
            {
                throw new Exception(
                    'The resource collector does not support placeable materials requiring other placeables.',
                    sprintf(
                        'Tried adding [%s] to collection of [%s].',
                        $container->getLabel(),
                        $this->container->getLabel()
                    )
                );
            }
            
            $materials = $container->getMaterials();
            
            foreach($materials as $materialAmount)
            {
                $this->addMaterial($materialAmount, ($material->getAmount() * $multiplier));
            }
        }
    }
    
    private function collectResource(MaterialAmount $amount, int $multiplier=1)
    {
        $id = $amount->getID();
        
        if(!isset($this->amounts[$id]))
        {
            $this->amounts[$id] = array(
                'material' => $amount->getMaterial(),
                'amount' => 0
            );
        }
        
        $this->amounts[$id]['amount'] += ($amount->getAmount() * $multiplier);
    }
}
