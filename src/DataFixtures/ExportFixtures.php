<?php

namespace App\DataFixtures;

use App\Entity\Export;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ExportFixtures extends Fixture
{
    /**
     * @throws \Exception
     */
    public function load(ObjectManager $manager): void
    {
        // let's create 5 exports
        for ($i = 1; $i <= 5; $i++) {
            $export = new Export();
            $export->setName('Export '.$i);
            $export->setDate(date_create()->setTimestamp(time()));
            $export->setTime(date_create()->setTimestamp(time()));
            $export->setUsername('User '.$i);
            $export->setLocal('Local '.$i);
            $manager->persist($export);
        }

        $manager->flush();
    }
}
