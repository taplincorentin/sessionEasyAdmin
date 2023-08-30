<?php

namespace App\Controller\Admin;

use App\Entity\Formateur;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FormateurCrudController extends AbstractCrudController
{
    use Trait\ShowTrait;

    public static function getEntityFqcn(): string
    {
        return Formateur::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('prenom'),
            EmailField::new('email'),
            AssociationField::new('sessions')
                ->onlyOnIndex(),
            ArrayField::new('sessions')
                ->onlyOnDetail(),
        ];
    }
}
