<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Contact;
use App\Entity\Blog;
use App\Entity\Galerie;
use App\Entity\Commentaire;
use App\Entity\Marker;
use App\Entity\Map;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;

use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;



class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ) {
    }
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Illustretonart - Administration');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
      
          yield MenuItem::section('User','fa fa-person');

        yield MenuItem::subMenu('UserActions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Create User', 'fas fa-plus', User::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show User', 'fas fa-eye', User::class),
             MenuItem::linkToCrud('Edit User', 'fas fa-edit', User::class)->setAction(Crud::PAGE_EDIT)

        ]);

        yield MenuItem::section('Contact','fa fa-envelope');


        yield MenuItem::subMenu('ContactActions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Create Contact', 'fas fa-plus', Contact::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Contact', 'fas fa-eye', Contact::class),
            MenuItem::linkToCrud('Edit Contact', 'fas fa-edit', Contact::class)->setAction(Crud::PAGE_EDIT)

        ]);

        yield MenuItem::section('Blog','fa fa-pencil');


        yield MenuItem::subMenu('BlogActions', 'fas fa-bars')->setSubItems([
             MenuItem::linkToCrud('Create Blog', 'fas fa-plus', Blog::class)->setAction(Crud::PAGE_NEW),
             MenuItem::linkToCrud('Show Blog', 'fas fa-eye', Blog::class),
             MenuItem::linkToCrud('Edit Blog', 'fas fa-edit', Blog::class)->setAction(Crud::PAGE_EDIT)

        ]);
       
        yield MenuItem::section('Galerie','fa fa-images');


        yield MenuItem::subMenu('GalerieActions', 'fas fa-bars')->setSubItems([
             MenuItem::linkToCrud('Create Galerie', 'fas fa-plus', Galerie::class)->setAction(Crud::PAGE_NEW),
             MenuItem::linkToCrud('Show Galerie', 'fas fa-eye', Galerie::class),
             MenuItem::linkToCrud('Edit Galerie', 'fas fa-edit', Galerie::class)->setAction(Crud::PAGE_EDIT)

        ]);

         yield MenuItem::section('Commentaire','fa fa-comment');
      
        yield MenuItem::subMenu('Commentaire', 'fas fa-comment')->setSubItems([
             MenuItem::linkToCrud('Create Commentaire', 'fas fa-plus', Commentaire::class)->setAction(Crud::PAGE_NEW),
             MenuItem::linkToCrud('Show Commentaire', 'fas fa-eye', Commentaire::class),
             MenuItem::linkToCrud('Edit Commentaire', 'fas fa-edit', Commentaire::class)->setAction(Crud::PAGE_EDIT)

        ]);

        
        yield MenuItem::section('Marker','fas fa-icone');


        yield MenuItem::subMenu('MarkerActions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Create Marker', 'fas fa-plus', Marker::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Marker', 'fas fa-eye', Marker::class),
            MenuItem::linkToCrud('Edit Marker', 'fas fa-edit', Marker::class)->setAction(Crud::PAGE_EDIT)

        ]);

    }
}
