<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditController extends AbstractController
{
    #[Route('/article/edit/{id}', name: 'article_edit')]
    public function edit(Article $article): Response
    {
        // $article = $this -> $articleRepository->findAll($article);
        // $form = $this->createForm();
        return $this->render('pages/edit.html.twig', [
            'article' => $article,
        ]);
    }
}