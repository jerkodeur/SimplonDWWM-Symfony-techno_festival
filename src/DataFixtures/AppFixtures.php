<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
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
        $category = new Category();
        foreach($this->getCategories() as $label => $color) {
            $category->setLabel($label);
            $category->setColor($color);
        }

        $manager->persist($category);
        $manager->flush();
    }


    /**
     * Get the value of categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
