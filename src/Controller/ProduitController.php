<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="app_produit_index", methods="GET")
     */
    public function index(ProduitRepository $repository): Response
    {
        $produits = $repository->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}
