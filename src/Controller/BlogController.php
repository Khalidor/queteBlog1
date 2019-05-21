<?php
// src/Controller/BlogController.php
namespace App\Controller;


use App\Entity\Article;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     *  Show all row from article's entity
     *
     * @Route("/blog/index", name="index")
     * @return Response A response instance
     *
     */
    public function index(): Response
    {

        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('blog/index.html.twig',
            [
                'articles' => $articles,
                'hello' => "Welcome, stranger !"
            ]
        );
    }

    /**
     * @Route("/blog/show/{slug}", name="show",
     *     defaults={"slug"="Article Sans Titre"},
     *     requirements={"slug"="[a-z0-9-]+"})
     */

    public function show($slug)
    {
        $slug = str_replace("-", " ", $slug);
        $slug = ucwords($slug);
        return $this->render('blog/show.html.twig', ['slug' => $slug]);
    }

    /**
     * @Route("blog/category/{categoryName}", name="show_category")
     */
    public function showByCategory (string $categoryName)
    {

        $category=$this->getDoctrine()->getRepository(Category::class)->findOneBy(['name' => $categoryName]);
        $categoryArticles = $this->getDoctrine()->getRepository(Article::class)->findBy(['Category' => $category
            ], ['id' => 'DESC'], 3);
        return $this->render('blog/category.html.twig', ['categoryArticles' => $categoryArticles]);

    }
}
