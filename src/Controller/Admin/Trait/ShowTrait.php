<?php

namespace App\Controller\Admin\Trait;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;


trait ShowTrait{

    public function configureActions(Actions $actions): Actions {
        
        $actions->add(Crud::PAGE_INDEX, Action::DETAIL);

        return $actions;
    }
}