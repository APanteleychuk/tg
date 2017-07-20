<?php

namespace TgBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TgBlogBundle:Default:index.html.twig');
    }
}
