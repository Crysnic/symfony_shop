<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('main/homepage.html.twig', [
            'items' => [1, 2, 3, 4, 5, 6]
        ]);
    }

    /**
     * @Route("/item/{itemId}", name="show_item", requirements={"itemId"="\d+"})
     *
     * @param int $itemId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showItem(int $itemId)
    {
        return $this->render('main/item.html.twig', [
            'item_id' => $itemId
        ]);
    }
}
