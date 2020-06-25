<?php

declare(strict_types=1);

namespace EmpyrionIndustry;

use EmpyrionIndustry\Materials\Materials;

class Industry
{
   /**
    * @var Materials
    */
    private $materials;
    
   /**
    * @var string
    */
    private $storageFolder;
    
    public function __construct(string $storageFolder)
    {
        $this->storageFolder = $storageFolder;
    }
    
    public function getStorageFolder() : string
    {
        return $this->storageFolder;
    }
    
    public function getMaterials() : Materials
    {
        if(!isset($this->materials))
        {
            $this->materials = new Materials($this);
        }
        
        return $this->materials;
    }
}
