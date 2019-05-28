<?php


namespace App\Controller;




use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CategoryController extends AbstractController

{
/**
 * @Route ("/blog/addCategory", name="addCategory")
 * @return Response
 */
    public function add(Request $request): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $this->getDoctrine()->getManager();
            $data->persist($category);
            $data->flush();

            // $data contient les données du $_POST
        // Faire une recherche dans la BDD avec les infos de $data...
   }

        return $this->render('/blog/addCategory.html.twig',
            ['form' =>$form->createView()]);
    }

}