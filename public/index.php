<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);

$author = 'Oscar Wilder';

echo $twig->render('index.html.twig', ['author' => $author]);
