<?php

namespace App\Service;

use App\Repository\CategoryRepository;

class CategoryHandler
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function handle(): array
    {
        $colors = [
            "Mélodique" => "danger",
            "Industrielle" => "info",
            "Groovy" => "secondary",
            "Deep" => "warning",
            "Détroit" => "success"
        ];

        $categories = $this->categoryRepository->findAll();

        foreach($categories as $category) {
            $category->setColor($colors[$category->getLabel()]);
        }

        return $categories;
    }

}