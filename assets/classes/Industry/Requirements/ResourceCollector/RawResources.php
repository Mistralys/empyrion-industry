<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Requirements;

use EmpyrionIndustry\Materials\AbstractMaterial;

class RawResources extends AbstractResourceCollector
{
    protected function isMatch(AbstractMaterial $material) : bool
    {
        return $material->isRawResource();
    }
}
