<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$author = 'Oscar Wilder';

echo $twig->render('page1.html.twig', ['author' => $author]);

$author = 'Oscar Wilder';

echo $twig->render('page2.html.twig', ['author' => $author]);