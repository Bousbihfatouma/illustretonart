<?php

namespace App\DataFixtures;

use Faker;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Galerie;
use App\DataFixtures\UserFixtures;
use App\DataFixtures\CategoryFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class GalerieFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create("fr_FR");

        $user = $this->getReference("user-" . rand(1, 8)); // Récupérez l'utilisateur à partir de la référence
        $category = $this->getReference("category-" . rand(1, 3));

        $galerie = new Galerie();
        $galerie->setImage('bambou.jpg');
        $galerie->setTitre("bijoux ressemble bambou");
        $galerie->setDescriptionimage("bijoux de fatouma");
        $galerie->setNom("Galerie de Bousbih"); // Ajoutez cette ligne pour définir le champ nom
        $galerie->setPrenom("Galerie de Fatouma");
        $galerie->setemail("fatoumabousbih@yahoo.fr");
        $galerie->setaPropos("designerbijouterie");
         $galerie->setaPropos("fatoumabousbih@yahoo.fr");
          $galerie->settitreimage("bambou");


        // Utilisez directement l'objet User récupéré à partir de la référence
        $galerie->setUser($user);

        $manager->persist($galerie);
        $manager->flush(); // Enregistrez les données dans la base de données
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
            CategoryFixtures::class,
        ];
    }
}
