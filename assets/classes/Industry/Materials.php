<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use EmpyrionIndustry\Industry;
use AppUtils\FileHelper;
use EmpyrionIndustry\Materials\Material\Material;
use EmpyrionIndustry\Materials\Material\Type\Refined;
use EmpyrionIndustry\Materials\Material\Type\Fuel;
use EmpyrionIndustry\Materials\Material\Type\Component;
use EmpyrionIndustry\Materials\Material\Type\Module;
use EmpyrionIndustry\Materials\Material\Type\Deployable;
use EmpyrionIndustry\Exception;
use EmpyrionIndustry\Site;
use AppUtils\Request;

class Materials
{
    const ERROR_UNKNOWN_MATERIAL_TYPE = 60001;
    const ERROR_UNKNOWN_MATERIAL_ID = 60002;
    
   /**
    * @var Industry
    */
    private $industry;
    
   /**
    * @var string
    */
    private $dataFile;
    
   /**
    * @var Material[]
    */
    private $materials = array();
    
    public function __construct(Industry $industry)
    {
        $this->industry = $industry;
        $this->dataFile = $industry->getStorageFolder().'/materials.json';
        
        $this->loadMaterials();
    }
    
    private function loadMaterials() : void
    {
        $data = FileHelper::parseJSONFile($this->dataFile);
        
        foreach($data as $name => $config)
        {
            $this->materials[] = $this->createMaterial($name, $config);
        }
        
        usort($this->materials, function(Material $a, Material $b) 
        {
            return strnatcasecmp($a->getName(), $b->getName());
        });
    }
    
   /**
    * Retrieves all materials, sorted by name.
    * 
    * @return Material[]
    */
    public function getMaterials() : array 
    {
        return $this->materials;
    }
    
    private function createMaterial(string $name, array $config) : Material
    {
        switch($config['type'])
        {
            case 'Refined':
                return new Refined($name, $config);
                
            case 'Fuel':
                return new Fuel($name, $config);
                
            case 'Component':
                return new Component($name, $config);
                
            case 'Module':
                return new Module($name, $config);
                
            case 'Deployable':
                return new Deployable($name, $config);
        }
        
        throw new Exception(
            'Unknown material type.',
            sprintf(
                'The material type [%s] could not be found.',
                $config['type']
            ),
            self::ERROR_UNKNOWN_MATERIAL_TYPE
        );
    }
    
    public function getByRequest() : ?Material 
    {
        $request = Request::getInstance();
        
        $id = $request->registerParam('material_id')->setAlias()->get();
        
        if($this->idExists($id))
        {
            return $this->getByID($id);
        }
        
        return null;
    }
    
    public function idExists(string $materialID) : bool
    {
        foreach($this->materials as $material)
        {
            if($material->getID() === $materialID)
            {
                return true;
            }
        }
        
        return false;
    }
    
    public function getByID(string $materialID) : Material
    {
        foreach($this->materials as $material)
        {
            if($material->getID() === $materialID)
            {
                return $material;
            }
        }
        
        throw new Exception(
            'Unknown material',
            sprintf(
                'No material found with the ID [%s].',
                $materialID
            ),
            self::ERROR_UNKNOWN_MATERIAL_ID
        );
    }
}
