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
        $srting = $article->getText('text');    
        $count=str_word_count($srting, 1);
        $qty=0;
        foreach ($count as $counts) {
            if(strlen($counts)>3) {
                $qty++;
            };
        }
        $mins=round(($qty/200),2);
        
        return $this->render('pages/view.html.twig', [
            'article' => $article,
            // 'stringCount'=>$count,
            'srting'=>$mins,

        ]);
    }
}