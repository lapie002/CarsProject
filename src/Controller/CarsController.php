<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// my entity 'controller_name' => 'CarsController',
use App\Entity\CarsCatalogue;

class CarsController extends Controller
{
    /**
     * @Route("/cars", name="cars")
     */
    public function index()
    {

      $entityManager = $this->getDoctrine()->getManager();
      $carsCatalogue = $entityManager->getRepository(CarsCatalogue::class)->findAll();


        return $this->render('cars/index.html.twig', [
            'cars' => $carsCatalogue,
        ]);
    }
}
