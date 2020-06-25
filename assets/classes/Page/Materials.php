<?php

namespace EmpyrionIndustry;

class Page_Materials extends Page
{
    public function getPageAbstract(): string
    {
        return '';
    }
    
    public function getPageTitle(): string
    {
        return t('Available materials');
    }
    
    public function getNavigationTitle() : string
    {
        return t('Materials overview');
    }
    
    public function getDefaultSlug(): string
    {
        return '';
    }
    
    protected function initNavigation(): void
    {
        
    }
    
    protected function _renderContent(): string
    {
        $all = $this->industry->getMaterials()->getMaterials();
        
        $grid = $this->ui->createDataGrid('materials');
        $grid->addColumn('name', t('Name'));
        $grid->addColumn('type', t('Type'));
        $grid->addColumn('placeable', t('Placeable'));
        
        foreach($all as $material)
        {
            $grid->addRow(
                '<a href="'.$material->getURLView().'">'.$material->getName().'</a>', 
                $material->getTypeLabel(),
                $material->getPlaceablesForList()
            );
        }
        
        return $grid->render();
        
    }
}
