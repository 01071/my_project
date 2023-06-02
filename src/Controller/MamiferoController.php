<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\s;

class MamiferoController                        extends AbstractController
{
    /**
     * @Route("/")
     */
public function homepage()
{
    return new Response('Zoólogico');
}

    /**
     * @Route("/mamifero/{slug}")
     */
public function show($slug)
{
    $respostas = [

        "Esta é a primeira resposta",
        "Esta é a segunda resposta",
        "Esta é a terceira resposta",
        "Esta é a quarta resposta",
        "Esta é a quinta resposta",
    ];

        return $this->render("mamiferos/show.html.twig",[
            'animal' => ucwords(str_replace('-', ' ', $slug)),
        'respostas' => $respostas
        ]);

}
}