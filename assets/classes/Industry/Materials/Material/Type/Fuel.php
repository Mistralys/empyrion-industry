<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials\Material\Type;

use function EmpyrionIndustry\t;

class Fuel extends Type
{
    public function getTypeLabel() : string
    {
        return t('Fuel');
    }
    
    public function hasMultipleRequirements() : bool
    {
        return false;
    }
}
