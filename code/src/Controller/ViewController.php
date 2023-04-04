<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        return $this->render('pages/view.html.twig', [
            'article' => $article,
        ]);
    }
}
