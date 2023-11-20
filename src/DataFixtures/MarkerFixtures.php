<?php

namespace App\DataFixtures;

use App\Entity\Marker;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MarkerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $marker = new Marker();
        $marker->setMarkerTitle('Musée du Louvre');
        $marker->setMarkerImage('louvredehors.jpg');
        $marker->setMarkerEmail('https://louvre.fr');
        $marker->setTel('140205177');
        $marker->setLongitude('2.337257777255276');
        $marker->setLatitude('48.86123220406439');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('Le musée du Louvre est un musée situé dans le 1ᵉʳ arrondissement de Paris');
        $marker->setStreet('8 rue Sainte-Anne ');
        $marker->setZipCode('75001 Paris');
        $marker->setIcon('markermusee.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
      
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Musée Orsay');
        $marker->setMarkerImage('museeorsay.png');
        $marker->setMarkerEmail('https://www.musee-orsay.fr/fr');
        $marker->setTel('140494814');
        $marker->setLongitude('2.3265184817068305');
        $marker->setLatitude(' 48.860137833999495');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('Collections majeures dart européen des XIXe et XXe siècle exposées dans une ancienne gare monumentale.');
        $marker->setStreet('Esplanade Valéry Giscard dEstaing');
        $marker->setZipCode('75007 Paris');
        $marker->setIcon('markermusee.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Musée de lOrangerie');
        $marker->setMarkerImage('orangerie.png');
        $marker->setMarkerEmail('information@musee-orangerie.fr.');
        $marker->setTel(' 144504300');
        $marker->setLongitude('48.86399305231758');
        $marker->setLatitude(' 2.32267239705018');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('Musée avec collection dart européen du XXe siècle, dont 8 Nymphéas de Monet.');
        $marker->setStreet('Jardin des Tuilerie');
        $marker->setZipCode('75001 Paris');
        $marker->setIcon('markermusee.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
        
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Musee Picasso');
        $marker->setMarkerImage('museepicasso.png');
        $marker->setMarkerEmail('contact@museepicassoparis.fr.');
        $marker->setTel('142712521');
        $marker->setLongitude('2.3625372507507585'); 
        $marker->setLatitude('48.85985329818198');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('Édifice du XVIIe siècle abritant 5 000 œuvres de Pablo Picasso, sa collection personnelle & des archives.');
        $marker->setStreet('5 Rue de Thorigny');
        $marker->setZipCode('75003 Paris');
        $marker->setIcon('markermusee.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
        
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('mussée Carnavalet');
        $marker->setMarkerImage('museecarnavalet.png');
        $marker->setMarkerEmail('carnavalet.publics@paris.fr');
        $marker->setTel('144595858');
        $marker->setLongitude('2.362825710435734');
        $marker->setLatitude('48.85726452090635 ');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('Musée dans hôtels particuliers voisins, avec expositions sur lart et lhistoire de Paris, principalement aux XVIe et XVIIe siècles.');
        $marker->setStreet('23 Rue de Sévigné ');
        $marker->setZipCode(' 75003 Paris');
        $marker->setIcon('markermusee.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);

 $marker = new Marker();
        $marker->setMarkerTitle('École Nationale Supérieure des Beaux-Arts');
        $marker->setMarkerImage('ecolebeauart.png');
        $marker->setMarkerEmail('info@beauxartsparis.fr. ');
        $marker->setTel(' 147035000');
        $marker->setLongitude('2.33364152564846');
        $marker->setLatitude('48.85954717931019 ');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('Une école unique réunissant peinture, sculpture et architecture est créée le 1er floréal an V (20 avril 1797). Les professeurs sont choisis par les académiciens');
        $marker->setStreet('14 Rue Bonaparte');
        $marker->setZipCode('75006 Paris ');
        $marker->setIcon('markerecoleart.png');
        $marker->setFilters($this->getReference(FilterFixtures::ECOLEART));
       
        $manager->persist($marker);
        

       
       
        
       
       
       



        $manager->flush();
    }

      public function getDependencies(): array
{
    return [
        FilterFixtures::class,
    ];
}
}