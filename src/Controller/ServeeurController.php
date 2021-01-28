<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServeeurController extends AbstractController
{
    /**
     * @Route("/serveeur", name="serveeur")
     */
    public function index(): Response
    {
        return $this->render('serveeur/index.html.twig', [
            'controller_name' => 'ServeeurController',
        ]);
    }
}
