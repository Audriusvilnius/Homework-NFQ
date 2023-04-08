<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class,[
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Title leave a here...',
                ),
                'label'=> false,
                'required' => false,
            ])

            ->add('text',TextareaType::class,[
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Enter description leave a here...',
                    'rows'=>'11',
                    'cols'=>'auto',
                ),
                'label'=> false,
                'required' => false,
            ])

            ->add('image',FileType::class,array(
                'mapped' =>false,
                'required' => false,
            ))

            ->add('updateAt', HiddenType::class,[
                'data' => time(),
            ])

            ->add('mins',HiddenType::class,[
                'data' => 0,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}