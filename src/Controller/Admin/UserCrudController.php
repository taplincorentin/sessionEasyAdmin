<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    use Trait\ShowTrait;
    
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            EmailField::new('email'),
            TextField::new('password')->setFormType(PasswordType::class),            
        ];
    }

}
