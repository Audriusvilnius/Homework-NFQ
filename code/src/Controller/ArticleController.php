<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\Criteria;

class ArticleController extends AbstractController
{
    private $articleRepository;
    
    public function __construct(ArticleRepository $articleRepository)
    {
       $this->articleRepository = $articleRepository;
    }

    #[Route('/', name: 'home')]
    public function list(): Response
    {
        return $this->render('pages/index.html.twig', [
            'articles' => $this->articleRepository->findBy([], ['updateAt' => 'DESC']),
        ]);
    }
    #[Route('/article/create', name: 'article_create')]
    public function create(): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleFormType::class, $article);

        return $this->render('pages/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/article/{id}',methods:['GET'], name: 'article_view')]
    public function view($id): Response
    {   
        $article = $this->articleRepository->find($id);
        $strCounts=str_word_count($this->articleRepository->find($id)->getText('text'), 1);
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
    
    #[Route('/article/edit/{id}',methods:['GET'], name: 'article_edit')]
    public function edit($id): Response
    {
        return $this->render('pages/edit.html.twig', [
            'article' => $this->articleRepository->find($id),
        ]);
    }

    #[Route('/article/update/{id}', name: 'article_update')]
    public function update(Article $article): Response
    {
        // $article = $this -> $articleRepository->findAll($article);
        // $form = $this->createForm();
        return $this->render('pages/index.html.twig', [
            'articles' => $this->articleRepository->findBy([], ['updateAt' => 'DESC']),
        ]);
    }








}