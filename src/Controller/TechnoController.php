<?php

namespace App\Controller;

use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TechnoController extends AbstractController
{
    #[Route('/', name: 'techno_home')]
    public function index(): Response
    {
        return $this->render('techno/home.html.twig', [
            'controller_name' => 'technoController',
        ]);
    }

    #[Route('/agenda', name: 'agenda_home')]
    public function agenda(ArtistRepository $artistRepository): Response
    {
        $days = ["20/08/2021", "21/08/2021", "22/08/2021"];
        $hours= ["16h-18h", "18h-20h", "21h-23h"];

        return $this->render('techno/agenda.html.twig', [
            'days' => $days,
            'hours' => $hours,
            'artists' => $artistRepository->findByConcert()
        ]);
    }
}
