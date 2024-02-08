<?php

namespace App\Controller;

use App\Entity\Parks;
use App\Repository\ParksRepository;
use App\Services\GenerateData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class ParksController extends AbstractController
{
    public function __construct(private GenerateData $parks)
    {
    }

    #[Route('/jsonParks')]
    public function getParks(): Response
    {
        return $this->json($this->parks->getArray());
    }

    #[Route('/', name: 'homepage')]
    public function homepage(ParksRepository $parksRepository): Response
    {
        return $this->render('parks/homepage.html.twig', [
            "title" => 'National Parks',
            'parks' => $parksRepository->findAll()
        ]);
    }


    #[Route('/showInfo/{slug<^[a-zA-Zñü-]+$>}', name: 'app_info', methods: ['GET'])]
    public function showInfo(string $slug = null): Response
    {

        $actualPark = $slug ? str_replace('-', ' ', $slug) : null;
        if ($actualPark === 'Islas Atlanticas de Galicia') {
            $actualPark = 'Islas Atlánticas de Galicia';
        }

        if ($actualPark == null) {
            return $this->render('parks/showInfo.html.twig', [
                "actual" => 'ShowInfo',
                'name' => 'No park selected',
                'parks' => null
            ]);
        } else {
            return $this->render('parks/showInfo.html.twig', [
                "actual" => $actualPark,
                "name" => $actualPark,
                'parks' => $this->parks->getArray()
            ]);
        }
    }

    #[Route('/parks/new')]
    public function newPark(EntityManagerInterface $entityManager): Response
    {
        
        $array = $this->parks->getArray();
        foreach ($array as $key) {
            $park = new Parks();
            $park->setNombre($key['nombre']);
            $park->setProvincia($key['provincia']);
            $park->setEcosistema($key['ecosistema']);
            $park->setFicheiro($key['fichero']);            
            $entityManager->persist($park);                
        }
            $entityManager->flush();
        return new Response('Datos engadidos');
    }
}
