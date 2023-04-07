<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\BlogUpdateType;

class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function index(): Response
    {
        return $this->render('form/index.html.twig', [
            'controller_name' => 'FormController',
        ]);
    }

    // #[Route('/form/edit/{id}', name: 'form_edit')]
    // public function edit(Article $article): Response
    // {
    //     return $this->render('form/edit.html.twig', [
    //         'article' => $article,
    //     ]);
    // }

    // #[Route('/form/update/{id}', name: 'form_update')]
    // public function update(Article $article): Response
    // {
    //     // $article = $this -> $articleRepository->findAll($article);
    //     // $form = $this->createForm();
    //     return $this->render('pages/index.html.twig', [
    //         'articles' => $articles,
    //     ]);
    // }
}