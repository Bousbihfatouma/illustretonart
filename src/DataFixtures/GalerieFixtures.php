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
   
  $userId = $this->getReference("user-" . rand(1, 8));
   $user = new User($userId);

    $category = $this->getReference("category-" . rand(1, 3));

    //
    $galerie = new Galerie();
    $galerie->setImage('bambou.jpg');
    $galerie->setTitre("");
    $galerie->setDescriptionimage("");

    
    // Utilisez l'objet User récupéré plutôt que son ID
    $galerie->setUser($userId);

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
