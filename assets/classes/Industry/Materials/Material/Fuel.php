<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use function EmpyrionIndustry\t;

class Fuel extends AbstractMaterial
{
    public function getTypeLabel() : string
    {
        return t('Fuel');
    }
    
    public function isPlaceableMaterial() : bool
    {
        return false;
    }
}
