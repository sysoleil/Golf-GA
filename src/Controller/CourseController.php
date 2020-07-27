<?php

//Encapsule les éléments
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/cours/", name="course")
     */
    public function courseHome ()
    {

    }

}