<?php

namespace EmpyrionIndustry;

abstract class Page extends \Microsite\Page
{
   /**
    * @var Site
    */
    protected $site;
    
   /**
    * @var Industry
    */
    protected $industry;
    
    protected function init()
    {
        $this->industry = $this->site->getIndustry();
    }
}
