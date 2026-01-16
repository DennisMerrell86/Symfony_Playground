<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Controller used to handle entering the matrix.
 */
class MatrixController extends AbstractController
{
    #[Route('/matrix', name: 'matrix_homepage', methods: ['GET'])]
    public function index(Request $request): Response
    {
        return $this->redirectToRoute('homepage');
    }

    #[Route('/matrix/animation', name: 'matrix_animation', methods: ['GET'])]
    public function animation(Request $request): Response
    {
        return $this->render('matrix/animation.html.twig', [
        ]);
    }
}
