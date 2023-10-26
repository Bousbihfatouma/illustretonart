<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;





class BlogFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       $blog = new Blog();
       $blog->setImage('dior-harry-winston.jpg');
       $blog->setTitle("Éblouissantes Créations : L'Art de la Bijouterie Redéfini");
       $blog->setContent("Explorez les Articles de Blog de Nos Artistes pour un Aperçu Exclusif de l'Univers Étincelant de la Haute Joaillerie");

        $manager->persist($blog);
        $blog = new Blog();
       $blog->setImage('oeuvre1fatou.jpg');
       $blog->setTitle("Fatouma, Formée à l'École Descodeuses, Partage son Expertise : Le Digital Design Révolutionne la Bijouterie");
       $blog->setContent("Dans cet article, Fatouma nous plonge au cœur de son univers artistique, nous dévoilant en détail la conception de ses œuvres de bijouterie grâce au digital. Elle nous livre sa philosophie unique sur la création, révélant comment elle transforme sa vision en magnifiques créations. Découvrez son processus créatif, les défis qu'elle relève et les inspirations qui nourrissent son art");
       
       $manager->persist($blog);
       $blog = new Blog();
       $blog->setImage('princessafrica.jpg');
       $blog->setTitle("Éclat Éthique : La Création de Bijoux Responsables par Christelle");
       $blog->setContent("À la Croisée de l'Art et de l'Éthique : Des Bijoux Qui Respectent l'Environnement et Soutiennent des Familles en Afrique, Inspirés par les Civilisations du Continent");
         
        $manager->persist($blog);
        $blog = new Blog();
       $blog->setImage('princessafrica.jpg');
       $blog->setTitle("Éclat Éthique : La Création de Bijoux Responsables par Christelle");
       $blog->setContent("À la Croisée de l'Art et de l'Éthique : Des Bijoux Qui Respectent l'Environnement et Soutiennent des Familles en Afrique, Inspirés par les Civilisations du Continent");
         
        $manager->persist($blog);
         $blog = new Blog();
         $blog->setImage('josephine.jpg');
         $blog->setTitle("Une Invitation Spéciale dans l'Atelier de Joséphine : Où naissent les Bijoux uniques");
        $blog->setContent("Dans l'atelier de Joséphine, la magie prend vie. C'est l'endroit où chaque bijou prend forme avec passion, créativité et minutie. Chaque visite dans son espace de création est une expérience immersive, où l'on peut découvrir le processus de conception et de fabrication de bijoux uniques. Joséphine partage son expertise et son amour pour l'artisanat, vous permettant de voir de près comment naissent ces œuvres d'art. De l'inspiration initiale aux matériaux soigneusement sélectionnés, en passant par la création manuelle, chaque bijou porte une part de l'âme de son créateur. Plongez dans cet univers créatif et découvrez les secrets de la fabrication de bijoux authentiques");
        
         $manager->persist($blog);
        $blog = new Blog();
         $blog->setImage('princessasie.jpg');
         $blog->setTitle("Mulan : L'Art de Fusionner la Modernité et la Tradition Japonaise à travers ses Bijoux");
        $blog->setContent("Dans l'univers envoûtant de Mulan, les bijoux deviennent une véritable expression artistique qui allie habilement la modernité et les riches traditions japonaises. Chaque pièce qu'elle crée est une passerelle entre le passé et le présent, capturant l'élégance intemporelle de la culture japonaise tout en y insufflant une touche de contemporanéité. Les bijoux de Mulan reflètent une profonde appréciation pour les symboles, les motifs et les techniques qui ont traversé des générations au Japon, tout en les réinterprétant d'une manière résolument moderne. Lorsque vous explorez ses créations, vous entrez dans un monde où chaque bijou raconte une histoire, unissant l'héritage culturel japonais à l'esthétique contemporaine d'une manière à la fois fascinante et unique");
        
        $manager->persist($blog);      
         $blog = new Blog();
         $blog->setImage('');
         $blog->setTitle("");
        $blog->setContent("");
        
        

        $manager->flush();
       
        
        
        
        
        
        
        
        
        
        
        $manager->flush();


    }
}



        
        