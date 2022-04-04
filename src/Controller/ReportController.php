<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        $headline = [
            'name' => 'En Gyllene Vän'
        ];
        return $this->render('home.html.twig', [
            'headline' => $headline
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        $about = [
            'name' => 'Om kursen mvc'
        ];

        return $this->render('about.html.twig', [
            'headline' => $about
        ]);
    }

    /**
     * @Route("/report", name="report")
     */
    public function report(): Response
    {
        $report = [
            'name' => 'Redovisning av kursmoment '
        ];

        return $this->render('report.html.twig', [
            'headline' => $report
        ]);
    }
}
