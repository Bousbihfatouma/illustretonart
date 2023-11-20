<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class UserFixtures extends Fixture

{
    private UserPasswordHasherInterface $passwordEncoder;

    public function __construct( UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    public function load(ObjectManager $manager)
    { 


            for ($i = 0; $i < 10; $i++) {

                    $user = new User();
                    $user->setNom('nom' . $i);
                    $user->setPrenom("prenom" . $i);
                    $user->setEmail("email". $i);
                    $user->setRoles(['ROLE_USER']);
                    $user->setCreatedAt(new \DateTimeImmutable());
                    $user->setPassword($this->passwordEncoder->hashPassword($user, '123456'));
                    $manager->persist($user);
                    $manager->flush(); // Enregistrez les données dans la base de données``
                    $this->addReference('user-'.$i,  $user);

            }
   

        }


 }