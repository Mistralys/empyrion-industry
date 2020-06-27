<?php

declare(strict_types=1);

namespace EmpyrionIndustry;

use EmpyrionIndustry\Materials\AbstractMaterial;
use function AppLocalize\pt;
use function AppLocalize\pts;

class Page_View extends Page
{
   /**
    * @var AbstractMaterial
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
    
    protected function getMaterial() : AbstractMaterial
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
        $material = $this->getMaterial();

        ob_start();
        
        if($material->isRawResource())
        {
            ?>
            	<p><?php pt('This is a raw resource that does not require any materials to build.') ?></p>
            <?php 
            
            return ob_get_clean();
        }
        
        $reqs = $material->getRequirements();
        
        $containers = $reqs->getContainers();
        
        foreach($containers as $container)
        {
            ?>
            	<h4><?php echo $container->getLabel() ?></h4>
            <?php 

            $grid = $this->ui->createDataGrid();
            $grid->addColumn('name', t('Material'));
            $grid->addColumn('amount', t('Amount'))->alignRight();
            
            $materials = $container->getMaterials();
            
            foreach($materials as $reqMaterial)
            {
                $grid->addRow(
                    '<a href="'.$reqMaterial->getMaterial()->getURLView().'">'.$reqMaterial->getLabel().'</a>',
                    $reqMaterial->getAmount()
                );
            }
            
            $grid->display();
            
            ?>
            	<h5><?php pt('Refined materials') ?></h5>
            	<p>
            		<?php 
                        pts('The following shows a list of all the materials refined from raw resources required to build the listed materials.');
            		?>
            	</p>
            <?php
            
            $resources = $container->getRefinedMaterials();
            
            $grid = $this->ui->createDataGrid();
            $grid->addColumn('name', t('Material'));
            $grid->addColumn('amount', t('Amount'))->alignRight();
            
            foreach($resources as $resource)
            {
                $grid->addRow(
                    '<a href="'.$resource->getMaterial()->getURLView().'">'.$resource->getLabel().'</a>',
                    $resource->getAmount()
                );
            }
            
            $grid->display();
            
            ?>
            	<h5><?php pt('Raw resources') ?></h5>
            	<p>
            		<?php 
                        pts('The following shows a list of all the raw resources required to build the listed materials.');
            		?>
            	</p>
            <?php
            
            $resources = $container->getRawResources();
            
            $grid = $this->ui->createDataGrid();
            $grid->addColumn('name', t('Material'));
            $grid->addColumn('amount', t('Amount'))->alignRight();
            
            foreach($resources as $resource)
            {
                $grid->addRow(
                    '<a href="'.$resource->getMaterial()->getURLView().'">'.$resource->getLabel().'</a>',
                    $resource->getAmount()
                );
            }
            
            $grid->display();
        }
        
        return ob_get_clean();
    }
}
