<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\s;

class MamiferoController
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
    return new Response(
        sprintf(

        'essa é pagagina detalhada do mamifero "%s" ',
          str_replace('-', ' ', $slug)));
}
}