<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use function EmpyrionIndustry\t;

class Deployable extends AbstractMaterial
{
    public function getTypeLabel() : string
    {
        return t('Deployable');
    }
    
    public function isPlaceableMaterial() : bool
    {
        return false;
    }
}
