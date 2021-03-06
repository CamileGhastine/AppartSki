<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }

    #[Route('/show', name: 'show')]
    public function show(): Response
    {
        return $this->render('front/show.html.twig');
    }
}
