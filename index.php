<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;
use Extrategy\Lab\Post;

$response =  new Response(200);
$post =  new Post();

$response->setContent("composer Daje e Daje! ".$post->getContent());

return $response->send();