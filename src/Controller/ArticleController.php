<?php
/**
 * Created by PhpStorm.
 * User: reese
 * Date: 9/19/19
 * Time: 2:55 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello World');
    }


    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(
          sprintf('Future page to show the article: "%s"', $slug)
        );
    }
}