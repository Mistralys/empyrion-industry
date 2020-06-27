<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Requirements;

use EmpyrionIndustry\Materials\AbstractMaterial;

abstract class AbstractContainer
{
    const ERROR_INVALID_PLACEABLE_IDENTIFIER = 60101;
    
   /**
    * @var Requirements
    */
    private $reqs;
    
    /**
     * @var MaterialAmount[]
     */
    private $materials;
    
   /**
    * @var array
    */
    private $materialsList = array();
    
    public function __construct(Requirements $reqs, array $materialsList)
    {
        $this->reqs = $reqs;
        $this->materialsList = $materialsList;
    }
    
    private function initMaterials() : void
    {
        if(isset($this->materials))
        {
            return;
        }
        
        $this->materials = array();
        
        $materials = $this->reqs->getIndustry()->getMaterials();
        
        foreach($this->materialsList as $name => $amount)
        {
            $this->addMaterial($materials->getByName($name), $amount);
        }
    }
    
   /**
    * @param AbstractMaterial $material
    * @param int $amount
    * @return $this
    */
    private function addMaterial(AbstractMaterial $material, int $amount) : AbstractContainer
    {
        $this->materials[] = new MaterialAmount($material, $amount);
        
        return $this;
    }
    
   /**
    * @return MaterialAmount[]
    */
    public function getMaterials() : array
    {
        $this->initMaterials();
        
        return $this->materials;
    }
}
