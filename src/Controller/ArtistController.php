<?php

namespace App\Controller;

use App\Repository\ArtistRepository;
use App\Service\CategoryHandler;
use App\Entity\Artist;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistController extends AbstractController
{
    private array $categories;

    public function __construct(CategoryRepository $categoryRepository, CategoryHandler $categoryHandler)
    {
        $this->categories = $categoryHandler->handle($categoryRepository->findAll());
    }

    #[Route('/artist', name: 'artist_home')]
    public function index(ArtistRepository $artistRepository): Response
    {
        return $this->render('artist/index.html.twig', [
            'categories' => $this->categories,
            'artists' => $artistRepository->findAll()
        ]);
    }

    #[Route('/artist/{id<\d+>}', name: 'artist_show')]
    public function show(ArtistRepository $artistRepository, Artist $artist): Response
    {
        return $this->render('artist/show.html.twig', [
            'artist' => $artistRepository->find($artist)
        ]);
    }
}
