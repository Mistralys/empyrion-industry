<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Requirements;

use EmpyrionIndustry\Materials\AbstractMaterial;

class MaterialAmount
{
   /**
    * @var AbstractMaterial
    */
    private $material;
    
   /**
    * @var int
    */
    private $amount;
    
    public function __construct(AbstractMaterial $material, int $amount)
    {
        $this->material = $material;
        $this->amount = $amount;
    }
    
    public function getID() : string
    {
        return $this->material->getID();
    }
    
    public function getMaterial() : AbstractMaterial
    {
        return $this->material;
    }
    
    public function getLabel() : string
    {
        return $this->material->getName();
    }
    
    public function getAmount() : int
    {
        return $this->amount;
    }
    
    public function isRawResource()
    {
        return $this->material->isRawResource();
    }
}
