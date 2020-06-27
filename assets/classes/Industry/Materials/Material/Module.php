<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use function EmpyrionIndustry\t;

class Module extends AbstractMaterial
{
    public function getTypeLabel() : string
    {
        return t('Module');
    }
    
    public function isPlaceableMaterial() : bool
    {
        return true;
    }
}
