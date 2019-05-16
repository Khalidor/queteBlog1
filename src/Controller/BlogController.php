<?php
// src/Controller/BlogController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
    * @Route("/blog/show/{slug}",
     *     requirements = {"slug"= "[a-z0-9-]+"},
     *     defaults={"slug"="Article Sans Titre"},
     *      name="show_slug")
    */

    public function show($slug)
    {$slug = str_replace("-", " ",$slug);
        $slug = ucwords ($slug);
        return $this->render('blog/index.html.twig', [
            'slug' => $slug ]);
    }
}
