<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogCrudController extends AbstractCrudController
{
 
  #[Route('/blog', name: 'blog')]
   
     
 
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
            IdField::new('id'),
            TextField::new('image'),
      
        ];
    }
    
}
