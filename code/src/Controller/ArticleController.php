<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\Criteria;

class ArticleController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function list(ArticleRepository $articleRepository): Response
    {
        $articles=$articleRepository->findBy([], ['updateAt' => 'DESC']);
        return $this->render('pages/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        $strCounts=str_word_count($article->getText('text'), 1);
        $qty=0;
        foreach ($strCounts as $strCount) {
            if(strlen($strCount)>3) {
                $qty++;
            };
        }
        $mins=gmdate("H:i:s", ($qty/200)*60);

        return $this->render('pages/view.html.twig', [
            'article' => $article,
            'srtings'=>$mins,
        ]);
    }
    
    #[Route('/article/edit/{id}', name: 'article_edit')]
    public function edit(Article $article): Response
    {
        return $this->render('pages/edit.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/article/update/{id}', name: 'article_update')]
    public function update(Article $article): Response
    {
        // $article = $this -> $articleRepository->findAll($article);
        // $form = $this->createForm();
        return $this->render('pages/index.html.twig', [
            'articles' => $articles,
        ]);
    }








}