<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Placeables;

class Placeable
{
    private $id;
    
    private $label;
    
    public function __construct($id, $label)
    {
        $this->id = $id;
        $this->label = $label;
    }
    
    public function getID() : string
    {
        return $this->id;
    }
    
    public function getLabel() : string
    {
        return $this->label;
    }
}
