<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UploadController extends AbstractController
{
    /**
     *@Route("/fileupload", name="fileupload")
     */
    public function index() {
        $args = array();
        return $this->render('fileupload.html.twig', [ 'args' => $args, ]);
    }
   /**
    *@Route("/readme", name="readme")
   */
   public function readme() {
      $args = array();
      return $this->render('instructions.html.twig',['args' => $args, ]);
   }
}
