<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistController extends AbstractController
{
    #[Route('/artist', name: 'artist_home')]
    public function index(): Response
    {
        $border_color = ["secondary", "danger", "info", "warning", "light", "success"];
        $bg_color = ["secondary", "danger", "info", "warning"];
        $categories = [
            "Mélodique" => "danger",
            "Industrielle" => "info",
            "Groovy" => "secondary",
            "Deep" => "warning",
            "Détroit" => "success"
        ];

        return $this->render('artist/index.html.twig', [
            'controller_name' => 'ArtistController',
            'border_colors' => $border_color,
            'bg_colors' => $bg_color,
            'categories' => $categories
        ]);
    }

    #[Route('/artist/{id<\d+>}', name: 'artist_show')]
    public function show(int $id): Response
    {
        return $this->render('artist/show.html.twig', [
            'controller_name' => 'ArtistController',
            'id' => $id
        ]);
    }
}
