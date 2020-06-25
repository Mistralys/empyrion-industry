<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials\Material\Type;

use function EmpyrionIndustry\t;

class Refined extends Type
{
    public function getTypeLabel() : string
    {
        return t('Refined material');
    }
    
    public function hasMultipleRequirements() : bool
    {
        return false;
    }
}
