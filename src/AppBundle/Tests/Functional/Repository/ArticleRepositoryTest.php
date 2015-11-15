<?php

namespace AppBundle\Tests\Functional\Repository;

use Doctrine\ORM\EntityRepository;
use DoctrineFixturesTest\FixtureTestCase;


class ArticleRepositoryTest extends FixtureTestCase
{
    /** @var EntityRepository */
    private $articleRepository;

    public function setUp()
    {
        parent::setUp();

        $doctrine = $this->client->getContainer()->get('doctrine');

        $this->articleRepository = $doctrine->getRepository('AppBundle:Article');
    }

    public function testFindAll()
    {
        $articles = $this->articleRepository->findAll();

        $this->assertEquals('My first article', $articles[0]->getTitle());
    }
}