<?php

declare(strict_types=1);

namespace EmpyrionIndustry;

use EmpyrionIndustry\Materials\Materials;
use EmpyrionIndustry\Placeables\Placeables;

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
    
   /**
    * @var Placeables
    */
    private $placeables;
    
    public function __construct(string $storageFolder)
    {
        $this->storageFolder = $storageFolder;
        $this->placeables = new Placeables($this);
    }
    
   /**
    * Retrieves the placeables collection, which holds all
    * available structures that some materials may be placed
    * on (Base, Capital Vessel...).
    * 
    * @return Placeables
    */
    public function getPlaceables() : Placeables
    {
        return $this->placeables;
    }
    
    public function getStorageFolder() : string
    {
        return $this->storageFolder;
    }
    
   /**
    * Retrieves the materials collection that contains all
    * materials that are available in the game.
    * 
    * @return Materials
    */
    public function getMaterials() : Materials
    {
        if(!isset($this->materials))
        {
            $this->materials = new Materials($this);
        }
        
        return $this->materials;
    }
}
