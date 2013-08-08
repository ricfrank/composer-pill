<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$response =  new Response(200);
$response->setContent("composer Daje e Daje!");

return $response->send();