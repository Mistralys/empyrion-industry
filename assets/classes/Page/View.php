<?php

declare(strict_types=1);

namespace EmpyrionIndustry;

use EmpyrionIndustry\Materials\Material\Material;

class Page_View extends Page
{
   /**
    * @var Material
    */
    private $material;
    
    public function getPageAbstract(): string
    {
        return '';
    }
    
    public function getPageTitle(): string
    {
        return $this->getMaterial()->getName();
    }
    
    public function getNavigationTitle() : string
    {
        return t('Material detail');
    }
    
    public function getDefaultSlug(): string
    {
        return '';
    }
    
    protected function getMaterial() : Material
    {
        if(!isset($this->material))
        {
            $this->material = $this->industry->getMaterials()->getByRequest();
            
            if($this->material === null)
            {
                $this->redirect($this->site->buildURL());
            }
        }
        
        return $this->material;
    }
    
    protected function initNavigation(): void
    {
        
    }
    
    protected function _renderContent(): string
    {
        
        
        return $this->getMaterial()->getName();
    }
}
