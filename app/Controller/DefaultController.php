<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AppController
{
    public function index(Request $request, Response $response, array $args)
    {
        $response->setContent($this->plates->render('index'));
        return $response;
    }
}
