<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;








class BlogFixtures extends Fixture implements DependentFixtureInterface

{
    public function load(ObjectManager $manager)
    { 
      $faker=Faker\Factory::create("fr_FR");
      $category= $this->getReference("category-".rand(1,3));
        //la page principal du blog 
       $blog = new Blog();
       $blog->setImage('dior-harry-winston.jpg');
       $blog->setTitle("Éblouissantes Créations : L'Art de la Bijouterie Redéfini");
       $blog->setContent("Explorez les Articles de Blog de Nos Artistes pour un Aperçu Exclusif de l'Univers Étincelant de la Haute Joaillerie");
        $blog->setCategory($category); 
        $manager->persist($blog);
        $blog = new Blog();
       $blog->setImage('oeuvre1fatou.jpg');
       $blog->setTitle("Fatouma, Formée à l'École Descodeuses, Partage son Expertise : Le Digital Design Révolutionne la Bijouterie");
       $blog->setContent("Dans cet article, Fatouma nous plonge au cœur de son univers artistique, nous dévoilant en détail la conception de ses œuvres de bijouterie grâce au digital. Elle nous livre sa philosophie unique sur la création, révélant comment elle transforme sa vision en magnifiques créations. Découvrez son processus créatif, les défis qu'elle relève et les inspirations qui nourrissent son art");
       $blog->setCategory($category); 
       $manager->persist($blog);
       $blog = new Blog();
       $blog->setImage('princessafrica.jpg');
       $blog->setTitle("Éclat Éthique : La Création de Bijoux Responsables par Christelle");
       $blog->setContent("À la Croisée de l'Art et de l'Éthique : Des Bijoux Qui Respectent l'Environnement et Soutiennent des Familles en Afrique, Inspirés par les Civilisations du Continent");
       $blog->setCategory($category); 
        $manager->persist($blog);
        $blog = new Blog();
       $blog->setImage('princessafrica.jpg');
       $blog->setTitle("Éclat Éthique : La Création de Bijoux Responsables par Christelle");
       $blog->setContent("À la Croisée de l'Art et de l'Éthique : Des Bijoux Qui Respectent l'Environnement et Soutiennent des Familles en Afrique, Inspirés par les Civilisations du Continent");
       $blog->setCategory($category); 
        $manager->persist($blog);
         $blog = new Blog();
         $blog->setImage('josephine.jpg');
         $blog->setTitle("Une Invitation Spéciale dans l'Atelier de Joséphine : Où naissent les Bijoux uniques");
        $blog->setContent("Dans l'atelier de Joséphine, la magie prend vie. C'est l'endroit où chaque bijou prend forme avec passion, créativité et minutie. Chaque visite dans son espace de création est une expérience immersive, où l'on peut découvrir le processus de conception et de fabrication de bijoux uniques. Joséphine partage son expertise et son amour pour l'artisanat, vous permettant de voir de près comment naissent ces œuvres d'art. De l'inspiration initiale aux matériaux soigneusement sélectionnés, en passant par la création manuelle, chaque bijou porte une part de l'âme de son créateur. Plongez dans cet univers créatif et découvrez les secrets de la fabrication de bijoux authentiques");
       $blog->setCategory($category); 
         $manager->persist($blog);
        $blog = new Blog();
         $blog->setImage('princessasie.jpg');
         $blog->setTitle("Mulan : L'Art de Fusionner la Modernité et la Tradition Japonaise à travers ses Bijoux");
        $blog->setContent("Dans l'univers envoûtant de Mulan, les bijoux deviennent une véritable expression artistique qui allie habilement la modernité et les riches traditions japonaises. Chaque pièce qu'elle crée est une passerelle entre le passé et le présent, capturant l'élégance intemporelle de la culture japonaise tout en y insufflant une touche de contemporanéité. Les bijoux de Mulan reflètent une profonde appréciation pour les symboles, les motifs et les techniques qui ont traversé des générations au Japon, tout en les réinterprétant d'une manière résolument moderne. Lorsque vous explorez ses créations, vous entrez dans un monde où chaque bijou raconte une histoire, unissant l'héritage culturel japonais à l'esthétique contemporaine d'une manière à la fois fascinante et unique");
        $blog->setCategory($category); 
        $manager->persist($blog);
       //Le blog de fatouma
        $blog = new Blog();
        $blog->setTitle("Fatouma : Designer Digital Passionnée de l'Art, Maître de la Perfection Naturelle entre Pierres Précieuses et Pixels Magiques");
        $blog->setContent("Explorez un Nouveau Paradigme de la Création Artistique : Découvrez Comment Fatouma, Designeuse Digitale, Révolutionne l'Art en Établissant une Connexion Magique entre le Numérique, la Matière des Pierres Naturelles et l'Énergie Créative. Laissez-vous Inspirer par un Monde où la Créativité et la Technologie Fusionnent Harmonieusement, Guidées par la Vision Unique de Fatouma, Reliant Ainsi l'Art au Digital et à la Beauté Naturelle des Pierres Précieuses.");
        $blog->setImage('pierrenaturel.jpg');
      $blog->setCategory($category); 
        $manager->persist($blog);
        
        $blog = new Blog();
        $blog->setTitle("De l'Essence de l'Âme à la Création de la Matière Minérale et au Numérique : Une Exploration Profonde de la Créativité");
        $blog->setContent("Les pierres naturelles, qui sont minutieusement extraites de la terre, jouent un rôle fondamental dans la création de bijoux d'exception. La gemmologie, une discipline qui se consacre à l'étude des gemmes, est essentielle pour les bijoutiers et artisans qui cherchent à concevoir des pièces uniques. La connaissance des minéraux et de la géomorphologie de la terre est un atout précieux dans ce domaine. Fatouma, forte de sa formation en géographie, maîtrise les secrets des gemmes et des précieux minéraux que la terre renferme. Elle puise son inspiration dans la beauté naturelle des pierres et les transforme en créations bijoutières qui reflètent l'émerveillement de la nature. Grâce à cette expertise, elle redéfinit l'art de la bijouterie en créant des pièces qui capturent la magnificence de la Terre elle-même. La combinaison de la gemmologie et de la géographie donne naissance à des bijoux uniques qui racontent l'histoire de la Terre à travers ses pierres précieuses.");
        $blog->setImage('pierrenaturel.jpg');
       $blog->setCategory($category); 
        $manager->persist($blog);

        $blog = new Blog();
        $blog->setTitle("De l'Essence de l'Âme à la Création de la Matière Minérale et au Numérique : Une Exploration Profonde de la Créativité");
        $blog->setContent("Les Fleurs du Désert blanc: Une Collection Éblouissante de Fatouma");
        $blog->setImage('bijoux1desertblanc.jpg');
       $blog->setCategory($category); 
        $manager->persist($blog);

        $blog = new Blog();
        $blog->setTitle("De l'Essence de l'Âme à la Création de la Matière Minérale et au Numérique : Une Exploration Profonde de la Créativité");
        $blog->setContent("Cette collection transporte le spectateur dans un monde où la pureté du blanc frais rafraîchit le désert brûlant, où la roche blanche immaculée se marie à la splendeur des saphirs bleus pour donner naissance à des bijoux d'une profondeur inégalée. Grâce à son expertise en design numérique, Fatouma confère à ses créations une réalisme saisissant, sans aucune limite imposée par la technologie. La perspective et les jeux d'ombre sont ses alliés pour créer des rendus finaux incroyablement captivants qui vous plongeront au cœur de ses œuvres uniques.");
        $blog->setImage('desertblanc.jpg');
      $blog->setCategory($category); 
        $manager->persist($blog);

        $blog = new Blog();
        $blog->setTitle("De l'Essence de l'Âme à la Création de la Matière Minérale et au Numérique : Une Exploration Profonde de la Créativité");
        $blog->setContent("Cette collection transporte le spectateur dans un monde où la pureté du blanc frais rafraîchit le désert brûlant, où la roche blanche immaculée se marie à la splendeur des saphirs bleus pour donner naissance à des bijoux d'une profondeur inégalée. Grâce à son expertise en design numérique, Fatouma confère à ses créations une réalisme saisissant, sans aucune limite imposée par la technologie. La perspective et les jeux d'ombre sont ses alliés pour créer des rendus finaux incroyablement captivants qui vous plongeront au cœur de ses œuvres uniques.");
        $blog->setImage('merdesertblanc.jpg');
       $blog->setCategory($category); 
        $manager->persist($blog);
      
       $blog = new Blog();
        $blog->setTitle("De l'Essence de l'Âme à la Création de la Matière Minérale et au Numérique : Une Exploration Profonde de la Créativité");
        $blog->setContent("Cette collection transporte le spectateur dans un monde où la pureté du blanc frais rafraîchit le désert brûlant, où la roche blanche immaculée se marie à la splendeur des saphirs bleus pour donner naissance à des bijoux d'une profondeur inégalée. Grâce à son expertise en design numérique, Fatouma confère à ses créations une réalisme saisissant, sans aucune limite imposée par la technologie. La perspective et les jeux d'ombre sont ses alliés pour créer des rendus finaux incroyablement captivants qui vous plongeront au cœur de ses œuvres uniques.");
        $blog->setImage('bijoux3desertblanc.jpg');
      $blog->setCategory($category); 
      $manager->persist($blog);
       
        $blog = new Blog();
        $blog->setTitle("De l'Essence de l'Âme à la Création de la Matière Minérale et au Numérique : Une Exploration Profonde de la Créativité");
        $blog->setContent("Cette collection transporte le spectateur dans un monde où la pureté du blanc frais rafraîchit le désert brûlant, où la roche blanche immaculée se marie à la splendeur des saphirs bleus pour donner naissance à des bijoux d'une profondeur inégalée. Grâce à son expertise en design numérique, Fatouma confère à ses créations une réalisme saisissant, sans aucune limite imposée par la technologie. La perspective et les jeux d'ombre sont ses alliés pour créer des rendus finaux incroyablement captivants qui vous plongeront au cœur de ses œuvres uniques.");
        $blog->setImage('touareg.jpg');
       $blog->setCategory($category); 
        $manager->persist($blog);

         $blog = new Blog();
        $blog->setTitle("De l'Essence de l'Âme à la Création de la Matière Minérale et au Numérique : Une Exploration Profonde de la Créativité");
        $blog->setContent("Cette collection transporte le spectateur dans un monde où la pureté du blanc frais rafraîchit le désert brûlant, où la roche blanche immaculée se marie à la splendeur des saphirs bleus pour donner naissance à des bijoux d'une profondeur inégalée. Grâce à son expertise en design numérique, Fatouma confère à ses créations une réalisme saisissant, sans aucune limite imposée par la technologie. La perspective et les jeux d'ombre sont ses alliés pour créer des rendus finaux incroyablement captivants qui vous plongeront au cœur de ses œuvres uniques.");
        $blog->setImage('bijoux4desertblanc.jpg');
        $blog->setCategory($category); 
        $manager->persist($blog);

        $blog = new Blog();
        $blog->setTitle("De l'Essence de l'Âme à la Création de la Matière Minérale et au Numérique : Une Exploration Profonde de la Créativité");
        $blog->setContent("Cette collection transporte le spectateur dans un monde où la pureté du blanc frais rafraîchit le désert brûlant, où la roche blanche immaculée se marie à la splendeur des saphirs bleus pour donner naissance à des bijoux d'une profondeur inégalée. Grâce à son expertise en design numérique, Fatouma confère à ses créations une réalisme saisissant, sans aucune limite imposée par la technologie. La perspective et les jeux d'ombre sont ses alliés pour créer des rendus finaux incroyablement captivants qui vous plongeront au cœur de ses œuvres uniques.");
        $blog->setImage('bouledesertblanc.jpg');
       $blog->setCategory($category); 
        $manager->persist($blog);

      $blog = new Blog();
      $blog->setTitle("Ce qui faut retenir");
      $blog->setContent("les pierres naturelles et la gemmologie sont des éléments essentiels dans l'art de la bijouterie,La maîtrise des minéraux de la Terre et de sa géomorphologie permet à des artistes comme Fatouma de créer des bijoux uniques, capturant la beauté naturelle des gemmes pour raconter l'histoire de notre planète à travers des pièces exceptionnelles.,Pour découvrir les œuvres de Fatouma et explorer sa galerie d'art, n'hésitez pas à la contacter à l'adresse e-mail : fatoumabousbih@yahoo.fr. Vous y trouverez des créations qui allient créativité, expertise en gemmologie et une profonde appréciation de la Terre et de ses trésors.,En explorant le monde fascinant de la bijouterie, nous réalisons que chaque pierre précieuse a une histoire à raconter, et chaque bijou est une œuvre d'art en soi. La passion et l'expertise de Fatouma, nourries par sa formation en géographie et sa connaissance des minéraux, transforment les simples gemmes en créations éblouissantes. En portant ces bijoux, nous devenons les gardiens de ces trésors de la Terre, portant sur nous la beauté de la nature. Alors, continuez à explorer, à créer et à apprécier ces merveilles scintillantes qui égayent notre monde.");
       $blog->setImage('pasimage.jpg');
       $blog->setCategory($category); 
       $manager->persist($blog);

         $blog = new Blog();
        $blog->setTitle("");
         $blog->setContent("Dans ce blog sur les bijoux du désert blanc, nous avons exploré l'incroyable richesse de l'artisanat traditionnel de Fatouma. Ces bijoux, façonnés avec amour et savoir-faire, racontent une histoire profonde, celle du désert blanc et de ses habitants. Ils sont le reflet de la beauté du Sahara, de la culture touarègue, et de l'âme créative de Fatouma.Les bijoux du désert blanc ne sont pas simplement des parures, ce sont des œuvres d'art chargées de symbolisme et d'histoire. Ils incarnent la résilience d'un peuple, la connexion à la terre, et l'expression de l'individualité à travers l'art. En portant ces bijoux, nous devenons les gardiens de cette histoire, les porteurs de ce précieux héritage.En soutenant les artisans comme Fatouma et en appréciant leur travail, nous contribuons à préserver non seulement une tradition séculaire, mais aussi à offrir une opportunité économique aux communautés du désert. Les bijoux du désert blanc sont bien plus que de simples accessoires de mode ; ce sont des liens entre les cultures, des ponts entre les temps anciens et modernes, et des témoins silencieux d'une histoire profonde et fascinante.Alors, que ce soit en portant ces bijoux avec fierté, en les offrant en cadeau, ou en partageant leur histoire, nous pouvons tous contribuer à perpétuer l'art et la culture des bijoux du désert blanc de Fatouma, pour les générations à venir.");
        $blog->setImage('');
        $blog->setCategory($category); 
       $manager->persist($blog);

         //blog Christelle

      $blog = new Blog();
      $blog->setTitle("Exploration Artistique : Les Bijoux Éthiques à l'Honneur des Civilisations Africaines par Christelle");
     $blog->setContent("Dans un monde où l'art rencontre l'éthique, Christelle s'inspire des richesses culturelles des civilisations africaines pour créer des bijoux d'une beauté authentique. Chaque pièce est le reflet d'un héritage riche et d'une vision artistique qui transcende les frontières. À travers son travail, elle nous emmène dans un voyage à travers le temps, capturant l'âme des traditions africaines et les réinventant avec un profond respect pour la nature et les communautés qui les ont inspirées. Chaque bijou devient ainsi une déclaration d'élégance et d'éthique, un témoignage de l'harmonie entre l'art et la culture.");
      $blog->setImage('ethic.jpg');
      $blog->setCategory($category); 
       $manager->persist($blog);
      
      $blog = new Blog();
       $blog->setTitle("Christelle : L'Artiste Qui Forge des Liens, Crée de la Beauté, et Change des Vies en Afrique");
      $blog->setContent("La richesse de l'art africain réside dans ses bijoux, qui servent de témoins d'une tradition artistique ancestrale. Les bijoux africains, imprégnés d'une diversité culturelle et de significations profondes, sont de véritables œuvres d'art. Chaque pièce est une manifestation de la créativité, de la spiritualité et de l'histoire de l'Afrique. Les artisans africains maîtrisent l'art de l'ornementation, utilisant une variété de matériaux, des perles aux métaux précieux, pour créer des bijoux uniques. Ces pièces ne sont pas seulement des objets décoratifs, mais elles portent en elles des symboles et des récits qui racontent l'identité, la croyance, et la beauté de chaque culture africaine. L'art africain dans les bijoux est une véritable célébration de la diversité et de la créativité humaine, qui perdure à travers les générations, tout en inspirant le monde entier.,Créations Éthiques de Bijoux Inspirées par les Civilisations Africaines par Christelle");
        $blog->setImage('tropbelle.jpg');
       $blog->setCategory($category); 
       $manager->persist($blog);

      
       $blog = new Blog();
       $blog->setTitle("Christelle : L'Artiste Qui Forge des Liens, Crée de la Beauté, et Change des Vies en Afrique");
      $blog->setContent("La richesse de l'art africain réside dans ses bijoux, qui servent de témoins d'une tradition artistique ancestrale. Les bijoux africains, imprégnés d'une diversité culturelle et de significations profondes, sont de véritables œuvres d'art. Chaque pièce est une manifestation de la créativité, de la spiritualité et de l'histoire de l'Afrique. Les artisans africains maîtrisent l'art de l'ornementation, utilisant une variété de matériaux, des perles aux métaux précieux, pour créer des bijoux uniques. Ces pièces ne sont pas seulement des objets décoratifs, mais elles portent en elles des symboles et des récits qui racontent l'identité, la croyance, et la beauté de chaque culture africaine. L'art africain dans les bijoux est une véritable célébration de la diversité et de la créativité humaine, qui perdure à travers les générations, tout en inspirant le monde entier.,Créations Éthiques de Bijoux Inspirées par les Civilisations Africaines par Christelle");
      $blog->setImage('filleprincessafrica.jpg');
      $blog->setCategory($category); 
       $manager->persist($blog);

     $blog = new Blog();
        $blog->setTitle("Christelle : L'Artiste Qui Forge des Liens, Crée de la Beauté, et Change des Vies en Afrique");
       $blog->setContent("La richesse de l'art africain réside dans ses bijoux, qui servent de témoins d'une tradition artistique ancestrale. Les bijoux africains, imprégnés d'une diversité culturelle et de significations profondes, sont de véritables œuvres d'art. Chaque pièce est une manifestation de la créativité, de la spiritualité et de l'histoire de l'Afrique. Les artisans africains maîtrisent l'art de l'ornementation, utilisant une variété de matériaux, des perles aux métaux précieux, pour créer des bijoux uniques. Ces pièces ne sont pas seulement des objets décoratifs, mais elles portent en elles des symboles et des récits qui racontent l'identité, la croyance, et la beauté de chaque culture africaine. L'art africain dans les bijoux est une véritable célébration de la diversité et de la créativité humaine, qui perdure à travers les générations, tout en inspirant le monde entier.,Créations Éthiques de Bijoux Inspirées par les Civilisations Africaines par Christelle");
      $blog->setImage('bella.jpg');
     $blog->setCategory($category); 
      $manager->persist($blog);
        
         $blog = new Blog();
       $blog->setTitle("Christelle : L'Artiste Qui Forge des Liens, Crée de la Beauté, et Change des Vies en Afrique");
       $blog->setContent("La richesse de l'art africain réside dans ses bijoux, qui servent de témoins d'une tradition artistique ancestrale. Les bijoux africains, imprégnés d'une diversité culturelle et de significations profondes, sont de véritables œuvres d'art. Chaque pièce est une manifestation de la créativité, de la spiritualité et de l'histoire de l'Afrique. Les artisans africains maîtrisent l'art de l'ornementation, utilisant une variété de matériaux, des perles aux métaux précieux, pour créer des bijoux uniques. Ces pièces ne sont pas seulement des objets décoratifs, mais elles portent en elles des symboles et des récits qui racontent l'identité, la croyance, et la beauté de chaque culture africaine. L'art africain dans les bijoux est une véritable célébration de la diversité et de la créativité humaine, qui perdure à travers les générations, tout en inspirant le monde entier.,Créations Éthiques de Bijoux Inspirées par les Civilisations Africaines par Christelle");
       $blog->setImage('mamafrica.jpg');
      $blog->setCategory($category); 
      $manager->persist($blog);

       $blog = new Blog();
       $blog->setTitle("Christelle : L'Artiste Qui Forge des Liens, Crée de la Beauté, et Change des Vies en Afrique");
     $blog->setContent("La richesse de l'art africain réside dans ses bijoux, qui servent de témoins d'une tradition artistique ancestrale. Les bijoux africains, imprégnés d'une diversité culturelle et de significations profondes, sont de véritables œuvres d'art. Chaque pièce est une manifestation de la créativité, de la spiritualité et de l'histoire de l'Afrique. Les artisans africains maîtrisent l'art de l'ornementation, utilisant une variété de matériaux, des perles aux métaux précieux, pour créer des bijoux uniques. Ces pièces ne sont pas seulement des objets décoratifs, mais elles portent en elles des symboles et des récits qui racontent l'identité, la croyance, et la beauté de chaque culture africaine. L'art africain dans les bijoux est une véritable célébration de la diversité et de la créativité humaine, qui perdure à travers les générations, tout en inspirant le monde entier.,Créations Éthiques de Bijoux Inspirées par les Civilisations Africaines par Christelle");
      $blog->setImage('ebene.jpg');
     $blog->setCategory($category); 
    $manager->persist($blog);
        
        $blog = new Blog();
       $blog->setTitle("Christelle : L'Artiste Qui Forge des Liens, Crée de la Beauté, et Change des Vies en Afrique");
      $blog->setContent("La richesse de l'art africain réside dans ses bijoux, qui servent de témoins d'une tradition artistique ancestrale. Les bijoux africains, imprégnés d'une diversité culturelle et de significations profondes, sont de véritables œuvres d'art. Chaque pièce est une manifestation de la créativité, de la spiritualité et de l'histoire de l'Afrique. Les artisans africains maîtrisent l'art de l'ornementation, utilisant une variété de matériaux, des perles aux métaux précieux, pour créer des bijoux uniques. Ces pièces ne sont pas seulement des objets décoratifs, mais elles portent en elles des symboles et des récits qui racontent l'identité, la croyance, et la beauté de chaque culture africaine. L'art africain dans les bijoux est une véritable célébration de la diversité et de la créativité humaine, qui perdure à travers les générations, tout en inspirant le monde entier.,Créations Éthiques de Bijoux Inspirées par les Civilisations Africaines par Christelle");
     $blog->setImage('masaijpg.jpg');
    $blog->setCategory($category); 
      $manager->persist($blog);
        
        $blog = new Blog();
     $blog->setTitle("Christelle : L'Artiste Qui Forge des Liens, Crée de la Beauté, et Change des Vies en Afrique");
      $blog->setContent("La richesse de l'art africain réside dans ses bijoux, qui servent de témoins d'une tradition artistique ancestrale. Les bijoux africains, imprégnés d'une diversité culturelle et de significations profondes, sont de véritables œuvres d'art. Chaque pièce est une manifestation de la créativité, de la spiritualité et de l'histoire de l'Afrique. Les artisans africains maîtrisent l'art de l'ornementation, utilisant une variété de matériaux, des perles aux métaux précieux, pour créer des bijoux uniques. Ces pièces ne sont pas seulement des objets décoratifs, mais elles portent en elles des symboles et des récits qui racontent l'identité, la croyance, et la beauté de chaque culture africaine. L'art africain dans les bijoux est une véritable célébration de la diversité et de la créativité humaine, qui perdure à travers les générations, tout en inspirant le monde entier.,Créations Éthiques de Bijoux Inspirées par les Civilisations Africaines par Christelle");
      $blog->setImage('adorable.jpg');
     $blog->setCategory($category); 
      $manager->persist($blog);

         $blog = new Blog();
       $blog->setTitle("Christelle : L'Artiste Qui Forge des Liens, Crée de la Beauté, et Change des Vies en Afrique");
       $blog->setContent("La richesse de l'art africain réside dans ses bijoux, qui servent de témoins d'une tradition artistique ancestrale. Les bijoux africains, imprégnés d'une diversité culturelle et de significations profondes, sont de véritables œuvres d'art. Chaque pièce est une manifestation de la créativité, de la spiritualité et de l'histoire de l'Afrique. Les artisans africains maîtrisent l'art de l'ornementation, utilisant une variété de matériaux, des perles aux métaux précieux, pour créer des bijoux uniques. Ces pièces ne sont pas seulement des objets décoratifs, mais elles portent en elles des symboles et des récits qui racontent l'identité, la croyance, et la beauté de chaque culture africaine. L'art africain dans les bijoux est une véritable célébration de la diversité et de la créativité humaine, qui perdure à travers les générations, tout en inspirant le monde entier.,Créations Éthiques de Bijoux Inspirées par les Civilisations Africaines par Christelle,la collection de bijoux de Christelle est bien plus qu'une simple exposition artistique. C'est un voyage inspirant à travers les traditions et la créativité des civilisations africaines. Les bijoux incarnent la fusion harmonieuse entre l'art, l'éthique et le respect des coutumes les plus anciennes de l'Afrique. En parallèle, le travail de Christelle transcende la bijouterie pour faire une différence significative dans la vie des familles en précarité en Afrique. Son engagement envers l'artisanat éthique et son soutien aux communautés locales sont des preuves tangibles de son impact positif. En portant un bijou de la collection de Christelle, on devient le gardien de cette tradition tout en contribuant à un avenir meilleur pour ceux qui en ont le plus besoin. C'est un héritage précieux et une vision lumineuse qui perdurent à travers chaque pièce, rappelant que l'art et la compassion peuvent réellement changer le monde.");
     $blog->setImage('tropmignon.jpg');
     $blog->setCategory($category); 
         $manager->persist($blog);

    $blog = new Blog();
   $blog->setTitle("Ce qui faut retenir");
   $blog->setContent("La collection de Christelle célèbre l'art et l'éthique dans les bijoux inspirés par l'Afrique.,Les bijoux incarnent une fusion harmonieuse entre l'art et les coutumes anciennes africainesLes créations de Christelle transcendent la simple bijouterie pour avoir un impact social positif.,L'art et la compassion peuvent réellement changer le monde");
   $blog->setImage('');
 $blog->setCategory($category); 
   $manager->persist($blog);

       $blog = new Blog();
      $blog->setTitle("");
      $blog->setContent("Le blog de Christelle est une immersion captivante dans l'univers de la bijouterie éthique inspirée par les civilisations africaines. Christelle, une artiste passionnée, transcende les frontières de la créativité en combinant son talent artistique avec un profond respect pour les coutumes ancestrales de l'Afrique. Sa collection de bijoux incarne l'harmonie entre l'art et l'éthique, célébrant la beauté et l'individualité tout en préservant la richesse culturelle de l'Afrique.Chaque pièce de sa collection est bien plus qu'un simple ornement. Elle raconte une histoire, reflétant l'âme des traditions africaines tout en s'inspirant des motifs et des matériaux locaux. L'art de Christelle sert également un noble objectif, car elle s'engage activement à soutenir des familles en précarité en Afrique à travers son travail d'artisanat éthique. Sa passion va au-delà de la création de bijoux ; elle crée des liens, change des vies et construit un avenir meilleur pour les communautés locales.Le blog de Christelle est une vitrine de son dévouement à l'art, à l'éthique et à l'humanité. Chaque article explore les influences culturelles, les techniques artisanales et les histoires derrière ses bijoux. Ses créations uniques sont le reflet de son engagement envers l'innovation, la préservation des traditions et la célébration de la diversité culturelle de l'Afrique. L'artiste a également à cœur de sensibiliser son public à l'importance de l'artisanat éthique et de l'impact positif qu'il peut avoir sur les communautés.En fin de compte, le blog de Christelle est une source d'inspiration, de beauté et d'espoir. Il nous rappelle que l'art peut transcender les frontières et changer des vies, tout en préservant l'authenticité et la richesse de la culture africaine. L'œuvre de Christelle est une preuve vivante que l'art et l'éthique peuvent converger pour créer un impact significatif, non seulement dans le monde de la bijouterie, mais aussi dans le monde qui nous entoure");
        $blog->setImage('');
     $blog->setCategory($category); 
      $manager->persist($blog);




        

         $manager->flush(); // Enregistrez les données dans la base de données


       
        
      
        
        
        
        
        
        
        
        
        


    }
     public function  getDependencies(){
       return [
         CategoryFixtures::class
       ];
     }

 }



        
        