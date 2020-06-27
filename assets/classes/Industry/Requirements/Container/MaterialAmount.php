<?php

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
}
