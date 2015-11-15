<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Article;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadArticleData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $article = new Article();
        $article->setTitle('My first article');
        $article->setContent('This is my super article');

        $manager->persist($article);
        $manager->flush();
    }
}
