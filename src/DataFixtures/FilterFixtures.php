<?php

namespace App\DataFixtures;

use App\Entity\Filter;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class FilterFixtures extends Fixture
{
    public const MUSSEE = 'musee';
    public const ECOLEART  = 'ecole art';

    public function load(ObjectManager $manager): void
    {
        $filter = new Filter();
        $filter->setFilterTitle('Musee');
        $filter->setFilterSlug('ecole art');
        $manager->persist($filter);
        $this->addReference(self::MUSSEE, $filter);

        $filter->setFilterTitle('ecole art');
        $filter->setFilterSlug('ecole art');
        $manager->persist($filter);
        $this->addReference(self::ECOLEART, $filter);

        $manager->flush();
    }
}