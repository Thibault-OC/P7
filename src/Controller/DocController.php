<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/api/doc")
 */
class DocController extends AbstractController
{
    /**
     * @Route("/", name="doc_api", methods={"GET"})
     */
    public function index()
    {

        return $this->render('doc/doc.html.twig');

    }

}