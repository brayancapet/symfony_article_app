<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    
    #[Route('/list', name: 'app_list')]
    public function index(): Response
    {
        $companies = [
            'Apple' => '$1.12 trillion USD',
            'Samsung' => '$2.25 trillion USD',
            'Microsoft' => '5.24 billion USD'
        ];
        return $this->render('list/index.html.twig', [
            'companies' => $companies,
        ]);
    }
}
