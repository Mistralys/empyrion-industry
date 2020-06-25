<?php

declare(strict_types=1);

namespace EmpyrionIndustry;

class Site extends \Microsite\Site
{
   /**
    * @var Industry
    */
    private $industry;
    
    public function getDefaultSlug() : string
    {
        return 'Materials';
    }
    
    public function getSlug() : string
    {
        return $this->getDefaultSlug();
    }
    
    public function getDocumentTitle() : string
    {
        return t('Empyrion Industry Tool');
    }
    
    public function getNavigationTitle() : string
    {
        return t('EIT');
    }
    
    protected function initNavigation() : void
    {
        $this->navigation->addPage($this->getPageBySlug($this->getDefaultSlug()));
    }

    public function getIndustry() : Industry
    {
        if(!isset($this->industry))
        {
            $this->industry = new Industry($this->getWebrootFolder().'/storage');
        }
        
        return $this->industry;
    }
    
    protected function init()
    {
        
    }
}
