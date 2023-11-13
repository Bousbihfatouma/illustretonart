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
        $marker->setMarkerTitle('Femmes Solidaires');
        $marker->setMarkerImage('femmes-solidaires.png');
        $marker->setMarkerEmail('https://femmes-solidaires.org/');
        $marker->setTel('0140019090');
        $marker->setLongitude('2.377565927261007');
        $marker->setLatitude('48.84934981521592');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('association ou organisation');
        $marker->setStreet('5 rue Aligre');
        $marker->setZipCode('75012 Paris');
        $marker->setIcon('association-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
      
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Femmes battues international');
        $marker->setMarkerImage('femmes-international.png');
        $marker->setMarkerEmail('https://www.helloasso.com/associations/femmes-battues-internationales');
        $marker->setTel('0779984401');
        $marker->setLongitude('2.4076000579802925');
        $marker->setLatitude('48.85753736465962');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('association');
        $marker->setStreet('BL2, 91 Rue des Orteaux');
        $marker->setZipCode('75020 Paris');
        $marker->setIcon('association-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Maison des femmes de Paris');
        $marker->setMarkerImage('maison-des-femmes.png');
        $marker->setMarkerEmail('https://mdfparis.wordpress.com');
        $marker->setTel('0143434113');
        $marker->setLongitude('2.3838249594057888');
        $marker->setLatitude('48.8453381667502');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('association');
        $marker->setStreet('98 rue Haxo');
        $marker->setZipCode('75012 Paris');
        $marker->setIcon('association-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
        
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Femme Au Volant Protect');
        $marker->setMarkerImage('femme-volant.png');
        $marker->setMarkerEmail('http://www.femmeauvolantprotect.org/');
        $marker->setTel('0749219705');
        $marker->setLongitude('2.3838249594057888');
        $marker->setLatitude('48.8453381667502');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('association');
        $marker->setStreet('55 Rue de la Commune de Paris');
        $marker->setZipCode('93300 Aubervilliers');
        $marker->setIcon('association-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
        
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('ellesimaginent');
        $marker->setMarkerImage('imagine.png');
        $marker->setMarkerEmail('http://www.ellesimaginent.fr/');
        $marker->setTel('0661894790');
        $marker->setLongitude('2.3261219598675718');
        $marker->setLatitude('48.82901763957153');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('association');
        $marker->setStreet('8 Rue Poirier de Narçay ');
        $marker->setZipCode('75014 Paris');
        $marker->setIcon('association-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Sos Femmes Seine Saint Denis');
        $marker->setMarkerImage('sos-femme.png');
        $marker->setMarkerEmail('http://sosfemmes93.fr');
        $marker->setTel('0148481048');
        $marker->setLongitude(' 2.4733948499823435');
        $marker->setLatitude('48.9055088670084');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('association');
        $marker->setStreet('128 Rue Baudin');
        $marker->setZipCode('93140 Bondy ');
        $marker->setIcon('association-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);
        
        $marker = new Marker();
        $marker->setMarkerTitle('Collectif De Lutte Anti-Sexiste Contre Le Harcèlement Sexuel Dans Enseignement Supérieur');
        $marker->setMarkerImage('harcelement-sexuel.png');
        $marker->setMarkerEmail('https://clasches.fr');
        $marker->setTel('0148481048');
        $marker->setLongitude('2.328659240874732');
        $marker->setLatitude('48.901139046083706');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('association');
        $marker->setStreet('7 Imp. Milord');
        $marker->setZipCode('75018 Paris ');
        $marker->setIcon('association-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);
        

        $marker = new Marker();
        $marker->setMarkerTitle('Paris Aide aux Victimes');
        $marker->setMarkerImage('paris-aide.png');
        $marker->setMarkerEmail('http://www.pav75.fr');
        $marker->setTel('0153068350');
        $marker->setLongitude('2.3252775729598856');
        $marker->setLatitude('48.89748338499531');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('association');
        $marker->setStreet('22 Rue Jacques Kellner');
        $marker->setZipCode('75017 Paris');
        $marker->setIcon('association-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Tomasini Avocats - Violences conjugales et harcèlement');
        $marker->setMarkerImage('avocat-t.png');
        $marker->setMarkerEmail('https://www.tomasini-avocats-violences-conjugales.fr');
        $marker->setTel('0187443632');
        $marker->setLongitude('2.3007746692000075');
        $marker->setLatitude('48.88605595056379');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('avocat juridique');
        $marker->setStreet('7 Rue Puvis de Chavannes');
        $marker->setZipCode('75017 Paris');
        $marker->setIcon('accompagnement-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);

        
        $marker = new Marker();
        $marker->setMarkerTitle('Mon Expert Du Droit - Expert juridique');
        $marker->setMarkerImage('mon-expert.png');
        $marker->setMarkerEmail('https://monexpertdudroit.com');
        $marker->setTel('01347484939');
        $marker->setLongitude('2.3249343317989153');
        $marker->setLatitude('48.87482441701584');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('avocat juridique');
        $marker->setStreet('82 Bd Haussmann');
        $marker->setZipCode('75008 Paris');
        $marker->setIcon('accompagnement-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::MUSSEE));
       
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Chloé Combe - Avocat Droit de la famille');
        $marker->setMarkerImage('chloe.png');
        $marker->setMarkerEmail('chloeCombe.fr');
        $marker->setTel('0183622164');
        $marker->setLongitude('2.3729871971172165');
        $marker->setLatitude('48.859263274415305');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('avocat juridique');
        $marker->setStreet('22 R. Bréguet');
        $marker->setZipCode('75011 Paris');
        $marker->setIcon('accompagnement-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::ECOLEART));
       
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Cidff 93 (Centre d’information sur les droits des femmes et des familles)');
        $marker->setMarkerImage('cidiff.png');
        $marker->setMarkerEmail('https://seinesaintdenis.cidff.info');
        $marker->setTel('0148369902');
        $marker->setLongitude('2.381938838606659');
        $marker->setLatitude('48.92382989348388');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('centre');
        $marker->setStreet('1 Rue Pierre Curie');
        $marker->setZipCode( '93120 La Courneuve');
        $marker->setIcon('accompagnement-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::ECOLEART));
       
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Commissariat de Police du 20ème arrondissement');
        $marker->setMarkerImage('police.png');
        $marker->setMarkerEmail('https://www.masecurite.interieur.gouv.fr');
        $marker->setTel('3430');
        $marker->setLongitude('2.3960050095050955');
        $marker->setLatitude('48.86837545132751');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('police');
        $marker->setStreet('3 Rue des Gâtines');
        $marker->setZipCode( '75020 Paris');
        $marker->setIcon('accompagnement-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::ECOLEART));
        
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Pôle Accompagnement Judiciaire et Educatif');
        $marker->setMarkerImage('accompagnement.png');
        $marker->setMarkerEmail('http://www.sauvegarde93.fr');
        $marker->setTel('0148303084');
        $marker->setLongitude('2.4080919818148114');
        $marker->setLatitude('48.8977630302004');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('point accompagnement');
        $marker->setStreet('27 Rue Delizy');
        $marker->setZipCode( '93500 Pantin');
        $marker->setIcon('accompagnement-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::ECOLEART));
      
        $manager->persist($marker);

        $marker = new Marker();
        $marker->setMarkerTitle('Commissariat Central de Police du 12e arrondissement');
        $marker->setMarkerImage("{{ asset('images/marker/police.png') }}");
        $marker->setMarkerEmail('https://www.masecurite.interieur.gouv.fr/fr');
        $marker->setTel('3430');
        $marker->setLongitude('2.381058484538915');
        $marker->setLatitude('48.84440643300225');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('point accompagnement');
        $marker->setStreet('80 Av. Daumesnil');
        $marker->setZipCode( '75012 Paris');
        $marker->setIcon('accompagnement-marker.png');
        $marker->setFilters($this->getReference(FilterFixtures::ECOLEART));
        
        $manager->persist($marker);
         
         $marker = new Marker();
        $marker->setMarkerTitle('Maître Emmanuelle RIVIER - Avocat Violences Conjugales');
        $marker->setMarkerImage('emmanuel.png');
        $marker->setMarkerEmail('https://www.avocat-rivier.fr');
        $marker->setTel('0185532170');
        $marker->setLongitude('2.353931263597831');
        $marker->setLatitude('48.87380678305592');
        $marker->setMarkerSlug('marker-1');
        $marker->setMarkerDescription('point accompagnement');
        $marker->setStreet('323 Rue Saint-Martin');
        $marker->setZipCode( '75003 Paris');
        $marker->setIcon('accompagnement-marker.png');
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