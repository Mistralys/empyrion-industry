<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials\Material\Type;

use function EmpyrionIndustry\t;

class Component extends Type
{
    public function getTypeLabel() : string
    {
        return t('Component');
    }
    
    public function hasMultipleRequirements() : bool
    {
        return false;
    }
}
