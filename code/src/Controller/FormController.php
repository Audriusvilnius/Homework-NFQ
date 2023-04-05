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
}