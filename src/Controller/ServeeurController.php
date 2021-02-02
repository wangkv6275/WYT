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
	/**
     * @Route("/form", name="form")
     */
    public function form(): Response
    {
        return $this->render('serveeur/index.html.twig', [
            'controller_name' => 'ServeeurController',
        ]);
    }
	    /**
     * @Route("/reset", name="reset")
     */
    public function resete(EntityManagerInterface $manager): Response
    {
		$manager -> getRepository(Acces::class)->vider();
		$manager -> getRepository(Acces::class)->vider();
		$manager -> getRepository(Acces::class)->vider();
		$manager -> getRepository(Acces::class)->vider();
        return $this->render('serveeur/index.html.twig', [
            'controller_name' => 'ServeeurController',
        ]);
    }    
	/**
     * @Route("/creerUtilisateur", name="creerUtilisateur")
     */
    public function creerUtilisateur(): Response
    {
        return $this->render('serveeur/index.html.twig', [
            'controller_name' => 'ServeeurController',
        ]);
    }
}
