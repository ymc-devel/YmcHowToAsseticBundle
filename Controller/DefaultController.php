<?php

namespace Ymc\HowToAsseticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YmcHowToAsseticBundle:Default:index.html.twig');
    }
}
