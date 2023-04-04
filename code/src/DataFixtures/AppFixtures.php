<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach ($this->getArticleData() as $articleData) {
            $article = new Article();

            $article->setTitle($articleData['name']);
            $article->setImage($articleData['img']);
            $article->setText($articleData['text']);

            $manager->persist($article);
        }

        $manager->flush();
    }

    /**
     * @return iterable<array>
     */
    protected function getArticleData(): iterable
    {
        yield [
            'name' => 'AI Transforms Recycling Industry',
            'img' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b',
            'text' => file_get_contents(__DIR__ . '/Articles/article_1.txt'),
            ];

        yield [
            'name' => 'Teleportation Breakthrough',
            'img' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb',
            'text' => file_get_contents(__DIR__ . '/Articles/article_2.txt'),
        ];

        yield [
            'name' => 'Urban Farming Skyrockets',
            'img' => 'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8',
            'text' => file_get_contents(__DIR__ . '/Articles/article_3.txt'),
        ];

        yield [
            'name' => "World's First Holographic Smartphone",
            'img' => 'https://images.unsplash.com/photo-1570101945621-945409a6370f',
            'text' => file_get_contents(__DIR__ . '/Articles/article_4.txt'),
        ];

        yield [
            'name' => 'Self-Driving Cars Reduce Traffic Fatalities',
            'img' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2',
            'text' => file_get_contents(__DIR__ . '/Articles/article_5.txt'),
        ];
    }
}
