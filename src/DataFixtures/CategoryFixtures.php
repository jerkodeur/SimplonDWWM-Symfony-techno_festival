<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    private array $categories = [
        "Mélodique" => "success",
        "Industrielle" => "light",
        "Groovy" => "warning",
        "Deep" => "danger",
        "Détroit" => "secondary",
    ];

    public function load(ObjectManager $manager)
    {
        foreach($this->categories as $label => $color) {
            $category = new Category();
            $category->setLabel($label);
            $category->setColor($color);
            $manager->persist($category);
        }

        $manager->flush();
    }

}