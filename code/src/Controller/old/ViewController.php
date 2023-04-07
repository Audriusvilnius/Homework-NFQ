<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    // #[Route('/article/{id}', name: 'article_view')]
    // public function view(Article $article): Response
    // {
    
    //     $strCounts=str_word_count($article->getText('text'), 1);
    //     $qty=0;
    //     foreach ($strCounts as $strCount) {
    //         if(strlen($strCount)>3) {
    //             $qty++;
    //         };
    //     }
    //     $mins=gmdate("H:i:s", ($qty/200)*60);

    //     return $this->render('pages/view.html.twig', [
    //         'article' => $article,
    //         'srtings'=>$mins,

    //     ]);
    // }
}