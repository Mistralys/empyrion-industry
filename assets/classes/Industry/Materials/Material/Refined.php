<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use function EmpyrionIndustry\t;

class Refined extends AbstractMaterial
{
    public function getTypeLabel() : string
    {
        return t('Refined material');
    }
    
    public function isPlaceableMaterial() : bool
    {
        return false;
    }
}
