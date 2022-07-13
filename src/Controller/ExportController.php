<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Export;

/**
 * @Route("/api", name="api_")
 */

class ExportController extends AbstractController
{
    /**
     * @Route("/export", name="export_index", methods={"GET"})
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $exports = $doctrine
            ->getRepository(Export::class)
            ->findAll();

        $data = [];

        foreach ($exports as $export) {
            $data[] = [
                'id' => $export->getId(),
                'name' => $export->getName(),
                'date' => $export->getDate(),
                'time' => $export->getTime(),
                'username' => $export->getUsername(),
                'local' => $export->getLocal(),
            ];
        }


        return $this->json($data);
    }
}
