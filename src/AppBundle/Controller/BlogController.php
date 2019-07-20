<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function listAction()
    {
        return new Response(json_encode(['controller action'=> 'listAction']));
    }

    /**
     * Matches /blog/*
     * but not /blog/slug/extra-part
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction(string $slug): Response
    {
        return $this->render('show.html.twig',['slug' => $slug]);
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }
}
