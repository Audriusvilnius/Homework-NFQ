<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\Criteria;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function list(ArticleRepository $articleRepository): Response
    {
        //1680712726
        $ss=$articleRepository->findAll();

    
        return $this->render('pages/index.html.twig', [
            'articles' => $ss,
        ]);
    }
}