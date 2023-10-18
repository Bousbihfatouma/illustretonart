<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//ajout du use pour utiliser le type input password de Symfony
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function index(): Response
    {
        return $this->render('form/index.html.twig', [
            'controller_name' => 'FormController',
        ]);
    }
   

        public function buildForm(FormBuilderInterface $builder, array $options)
        {
                $builder
                        ->add('username')
                        // suppression du role qui sera défini par défaut
                        ->add('password', PasswordType::class)
                ;
        }

        public function configureOptions(OptionsResolver $resolver)
        {
                $resolver->setDefaults([
                'data_class' => Utilisateur::class,
                ]);
        }
}
