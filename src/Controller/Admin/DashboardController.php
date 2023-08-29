<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Module;
use App\Entity\Session;
use App\Entity\Formateur;
use App\Entity\Programme;
use App\Entity\Stagiaire;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\SessionCrudController;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    { 
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(SessionCrudController::class)->generateUrl());

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SessionEasyAdmin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Sessions', 'fa-solid fa-graduation-cap', Session::class);
        yield MenuItem::linkToCrud('Formateurs', 'fa-solid fa-chalkboard-user', Formateur::class);
        yield MenuItem::linkToCrud('Stagiaires', 'fa-solid fa-book-open-reader', Stagiaire::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Modules', 'fa-solid fa-puzzle-piece', Module::class);
        yield MenuItem::linkToCrud('Programmes', 'fa-solid fa-list', Programme::class);

    }
}
