<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\UserController;
use FOS\CKEditorBundle\Form\Type\CKEditorType;



class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureCrud(Crud $crud): Crud
    {
     return $crud
    ->setEntityLabelInPlural('Users')
    ->setEntityLabelInSingular('User')
    ->setPageTitle("index", "illustretonart - Administration des users")
    ->setPaginatorPageSize(10);

    }
}
  

