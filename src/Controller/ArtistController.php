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
        return $this->render('artist/index.html.twig', [
            'controller_name' => 'ArtistController',
        ]);
    }

    #[Route('/artist/{id<\d+>}', name: 'artist_show')]
    public function show(): Response
    {
        return $this->render('artist/show.html.twig', [
            'controller_name' => 'ArtistController',
        ]);
    }
}
