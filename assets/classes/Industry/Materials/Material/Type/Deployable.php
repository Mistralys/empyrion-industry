<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials\Material\Type;

use function EmpyrionIndustry\t;

class Deployable extends Type
{
    public function getTypeLabel() : string
    {
        return t('Deployable');
    }
    
    public function hasMultipleRequirements() : bool
    {
        return false;
    }
}
