<?php
// src/Controller/BlogController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */

    public function index()
{
    return $this->render('default.html.twig', [
        'accueil' => 'Bienvenue sur mon blog'
    ]);
}
}