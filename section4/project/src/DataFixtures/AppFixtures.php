<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;



class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      $blogPost = new BlogPost();
      $blogPost->setTitle('A second post!');
      $blogPost->setPublished(new \DateTime('2020-07-01 12:00:00'));
      $blogPost->setContent('Post text!');
      $blogPost->setAuthor('Pavel Rogozhin');
      $blogPost->setSlug('a-second-post');

      $manager->persist($blogPost);

      $blogPost = new BlogPost();
      $blogPost->setTitle('A third post!');
      $blogPost->setPublished(new \DateTime('2020-07-02 12:00:00'));
      $blogPost->setContent('Post text!');
      $blogPost->setAuthor('Pavel Rogozhin');
      $blogPost->setSlug('a-third-post');

      $manager->persist($blogPost);

      $manager->flush();
    }
}
