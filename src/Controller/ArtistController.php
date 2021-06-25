<?php

namespace App\Controller;

use App\Repository\ArtistRepository;
use App\Service\CategoryHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistController extends AbstractController
{
    #[Route('/artist', name: 'artist_home')]
    public function index(CategoryHandler $categoryHandler, ArtistRepository $artistRepository): Response
    {
        $categories = $categoryHandler->handle();

        // dd($categories, $artistRepository->findAll());

        return $this->render('artist/index.html.twig', [
            'categories' => $categories,
            'artists' => $artistRepository->findAll()
        ]);
    }

    #[Route('/artist/{id<\d+>}', name: 'artist_show')]
    public function show(int $id): Response
    {
        return $this->render('artist/show.html.twig', [
            'id' => $id
        ]);
    }
}
