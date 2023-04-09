<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\Criteria;

class ArticleController extends AbstractController
{
    private $em;
    private $articleRepository;
    
    public function __construct(ArticleRepository $articleRepository, EntityManagerInterface $em)
    {
       $this->articleRepository = $articleRepository;
       $this->em = $em;
    }

    #[Route('/' , name: 'home')]
    public function list(): Response
    {
        return $this->render('pages/index.html.twig', [
            'articles' => $this->articleRepository->findBy([], ['updateAt' => 'DESC']),
        ]);
    }
    #[Route('/article/create', name: 'article_create')]
    public function create(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleFormType::class, $article);

        $form -> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newArticle = $form->getData();
            $text = $form->get('text')->getData();

            $strCounts=str_word_count($text, 1);
            $qty=0;
            foreach ($strCounts as $strCount) {
                if(strlen($strCount)>3) {
                    $qty++;
                };
            }
        if($qty < 3600){
            $mins=gmdate("i:s", ($qty/200)*60);
        }else{
            $mins=gmdate("H:i:s", ($qty/200)*60);
        }

            $image = $form->get('image')->getData();
            if( $form->get('image')->getData() == null){
                // reik sutvarkyt tuscia forma
            }

            if($image){
                $newImageName = uniqid().'.'.$image->guessExtension();
                try{
                    $image->move(
                        $this->getParameter('kernel.project_dir').'/public/images/uploads',
                        $newImageName
                    );
                } catch (FileException $e){
                    return new Response($e->getMessage());
                }

                $newArticle->setImage('/images/uploads/'.$newImageName);
                
            }
            $this->em->persist($newArticle);
            $this->em->flush();
            $article->setMins($mins);
            $this->em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('pages/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/article/delete/{id}',methods:['GET', 'DELETE'], name: 'article_delete')]
    public function delete($id): Response
    {
        $article = $this->articleRepository->find($id);

        $delFile=$article->getImage('image');
        if(is_file($this->getParameter('kernel.project_dir').'/public'.$delFile)){
            unlink($this->getParameter('kernel.project_dir').'/public'.$delFile);
        };

        $this->em->remove($article);
        $this->em->flush();

        return $this->redirectToRoute('home');
    }

    #[Route('/article/{id}',methods:['GET'], name: 'article_view')]
    public function view($id): Response
    {   
        return $this->render('pages/view.html.twig', [
            'article' => $this->articleRepository->find($id),
        ]);
    }
    
    #[Route('/article/edit/{id}', name: 'article_edit')]
    public function edit($id, Request $request): Response
    {
        $article = $this->articleRepository->find($id);
        $form = $this->createForm(ArticleFormType::class, $article);
        $form->handleRequest($request);

        $image = $form->get('image')->getData();
        $text = $form->get('text')->getData();
        $strCounts=str_word_count($text, 1);
        $qty=0;
        foreach ($strCounts as $strCount) {
            if(strlen($strCount)>3) {
                $qty++;
            };
        }

        if($qty < 12000){
            $mins=gmdate("i:s", ($qty/200)*60);
        }else{
            $mins=gmdate("H:i:s", ($qty/200)*60);
        }

        if ($form->isSubmitted() && $form->isValid()){
            if ($image){
                if($article->getImage() !== null){
                    $delFile=$article->getImage('image');
                    if(is_file($this->getParameter('kernel.project_dir').'/public'.$delFile)){
                        unlink($this->getParameter('kernel.project_dir').'/public'.$delFile);
                    };

                    $this->GetParameter('kernel.project_dir') . $article->getImage();
                    $newFileName = uniqid().'.'.$image->guessExtension();
                    try{
                        $image->move(
                            $this->getParameter('kernel.project_dir') . '/public/images/uploads/',$newFileName);
                        } catch (FileException $e){
                            return new Response($e->getMessage());
                        }
                        $article->setImage('/images/uploads/'.$newFileName);
                        
                        $this->em->flush();
                        return $this->redirectToRoute('home');
                }
            }else{
                $article->setTitle($form->get('title')->getData());
                $article->setText($form->get('text')->getData());
                $article->setUpdateAt($form->get('updateAt')->getData());
                $article->setMins($mins);

                $this->em->flush();
                return $this->redirectToRoute('home');
            }
        }

        return $this->render('pages/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }
}