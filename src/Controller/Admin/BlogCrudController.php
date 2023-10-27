<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BlogCrudController extends AbstractCrudController
{
 
 
    public static function getEntityFqcn(): string
    {
        return Blog::class;
    }
     public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('blog')
            ->setEntityLabelInPlural('blogs')

            ->setPageTitle("index", "illustretonart - Administration blog")

            ->setPaginatorPageSize(20)

            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig');
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(),
            TextField::new('image'),
             TextField::new('title'),  // Ajout du champ 'title'
             TextEditorField::new('content'),
             TextField::new('category'),

      
        ];
    }
    
}
