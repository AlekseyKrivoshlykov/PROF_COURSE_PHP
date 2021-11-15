<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__).'/vendor/autoload.php';

$loader = new FilesystemLoader('../templates');

$twig = new Environment($loader, [
    'cache' => dirname(__DIR__) . '/cache',
]);

$templateArr = [
    ['id' => 1,
    'href' => '/images/1.jpg'
    ],
    ['id' => 2, 
    'href' => '/images/2.jpg'
    ],
    ['id' => 3,
    'href' => '/images/3.jpg'
    ]
];

try {
    echo $twig->render('home/base.html.twig', [
        'templateArr' => $templateArr]);
}
catch (Exception $exception){
    var_dump($exception);
}