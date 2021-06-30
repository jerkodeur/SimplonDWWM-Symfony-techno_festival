<?php

namespace App\Service;

class CategoryHandler
{

    public function setColors(array $categories): array
    {
        $colors = [
            "Mélodique" => "danger",
            "Industrielle" => "info",
            "Groovy" => "secondary",
            "Deep" => "warning",
            "Détroit" => "success"
        ];

        foreach($categories as $category) {
            $category->setColor($colors[$category->getLabel()]);
        }

        return $categories;
    }

}