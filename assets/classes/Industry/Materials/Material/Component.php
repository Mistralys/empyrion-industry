<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use function EmpyrionIndustry\t;

class Component extends AbstractMaterial
{
    public function getTypeLabel() : string
    {
        return t('Component');
    }
    
    public function isPlaceableMaterial() : bool
    {
        return false;
    }
}
