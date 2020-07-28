<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminCourseController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_home")
     */

    public function AdminHome()
    {
       return $this-> render('commons/home.html.twig');
    }


    /**
     * @Route("/admin/cours", name="admin_course")
     */

    public function admin_course()
    {

        return $this-> render('course/courseIndividual.html.twig');
    }
}
