<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/rss/{id}', 'RssController@index');
