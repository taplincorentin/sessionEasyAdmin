<?php

namespace App\Controller\Admin;

use App\Entity\Programme;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProgrammeCrudController extends AbstractCrudController
{
    use Trait\ShowTrait;
    public static function getEntityFqcn(): string
    {
        return Programme::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            CollectionField::new('module'),
            CollectionField::new('session')
        ];
    }

}
