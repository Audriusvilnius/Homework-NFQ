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

            $mins = $form->get('mins')->getData();


            $image = $form->get('image')->getData();
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
        $this->em->remove($article);
        $this->em->flush();

        return $this->redirectToRoute('home');
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
    
    #[Route('/article/edit/{id}', name: 'article_edit')]
    public function edit($id, Request $request): Response
    {
        $article = $this->articleRepository->find($id);
        $form = $this->createForm(ArticleFormType::class, $article);

        $form->handleRequest($request);
        $image = $form->get('image')->getData();
        
        if ($form->isSubmitted() && $form->isValid()){
            if ($image){
                if($article->getImage() !== null){
                    if(file_exists(
                    $this->getParameter('kernel.project_dir') . $article->getImage()
                    )){
                        $this->getParameter('kernel.project_dir') . $article->getImage();
                        $newImageName = uniqid().'.'.$image->guessExtension();

                        try{
                            $image->move(
                                $this->getParameter('kernel.project_dir').'/public/images/uploads',
                                $newImageName
                            );
                        } catch (FileException $e){
                            return new Response($e->getMessage());
                        }
                        
                        $article->setImage('/images/uploads' . $newImageName);
                        $this->em->flush();
                        return $this->redirectToRoute('home');
                    }
                }
            }else{
                $article->setTitle($form->get('title')->getData());
                $article->setText($form->get('text')->getData());
                $article->setUpdateAt($form->get('updateAt')->getData());
                $article->setMins($form->get('mins')->getData());

                $this->em->flush();
                return $this->redirectToRoute('home');
            }
        }

        return $this->render('pages/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/article/update/{id}', name: 'article_update')]
    public function update(Article $article): Response
    {

        return $this->render('pages/index.html.twig', [
            'articles' => $this->articleRepository->findBy([], ['updateAt' => 'DESC']),
        ]);
    }

}