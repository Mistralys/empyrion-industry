<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials\Material\Type;

use function EmpyrionIndustry\t;

class Module extends Type
{
    public function getTypeLabel() : string
    {
        return t('Module');
    }
    
    public function hasMultipleRequirements() : bool
    {
        return true;
    }
}
