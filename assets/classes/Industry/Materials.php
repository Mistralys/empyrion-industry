<?php

declare(strict_types=1);

namespace EmpyrionIndustry\Materials;

use AppUtils\Request;
use AppUtils\FileHelper;

use EmpyrionIndustry\Industry;
use EmpyrionIndustry\Exception;

class Materials
{
    const ERROR_UNKNOWN_MATERIAL_TYPE = 60001;
    const ERROR_UNKNOWN_MATERIAL_ID = 60002;
    const ERROR_UNKNOWN_MATERIAL_NAME = 60003;
    
   /**
    * @var Industry
    */
    private $industry;
    
   /**
    * @var string
    */
    private $dataFile;
    
   /**
    * @var AbstractMaterial[]
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
        
        usort($this->materials, function(AbstractMaterial $a, AbstractMaterial $b) 
        {
            return strnatcasecmp($a->getName(), $b->getName());
        });
    }
    
    public function getIndustry() : Industry
    {
        return $this->industry;
    }
    
   /**
    * Retrieves all materials, sorted by name.
    * 
    * @return AbstractMaterial[]
    */
    public function getMaterials() : array 
    {
        return $this->materials;
    }
    
    private function createMaterial(string $name, array $config) : AbstractMaterial
    {
        switch($config['type'])
        {
            case 'Refined':
                return new Refined($this, $name, $config);
                
            case 'Fuel':
                return new Fuel($this, $name, $config);
                
            case 'Component':
                return new Component($this, $name, $config);
                
            case 'Module':
                return new Module($this, $name, $config);
                
            case 'Deployable':
                return new Deployable($this, $name, $config);
                
            case 'RawResource':
                return new RawResource($this, $name, $config);
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
    
    public function getByRequest() : ?AbstractMaterial 
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
    
    public function getByID(string $materialID) : AbstractMaterial
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
    
    public function getByName(string $materialName) : AbstractMaterial
    {
        foreach($this->materials as $material)
        {
            if($material->getName() === $materialName)
            {
                return $material;
            }
        }
        
        throw new Exception(
            'Unknown material',
            sprintf(
                'No material found with the name [%s].',
                $materialName
            ),
            self::ERROR_UNKNOWN_MATERIAL_NAME
        );
    }
}
