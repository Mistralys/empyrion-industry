<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use function EmpyrionIndustry\t;

class RawResource extends AbstractMaterial
{
    public function getTypeLabel() : string
    {
        return t('Raw resource');
    }
    
    public function isPlaceableMaterial() : bool
    {
        return false;
    }
}
