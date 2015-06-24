<?php

require_once 'functions.php';

$website_settings = [
    'title' => 'fortaleza LLC',
    'page_title' => 'life is hapiness' ,
    'home' => 'fuerza',
    'page_description' => 'List of all my experiences',
    'copyright' => 'copyright &copy; fortaleza %s',
];

$portfolio_collection = [
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://lorempixel.com/g/750/450',
    ],
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://lorempixel.com/g/750/450',
    ],
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://lorempixel.com/g/750/450',
    ],
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://lorempixel.com/g/750/450',
    ],
];
$portfolio_collection = array_merge(
    $portfolio_collection,
    $portfolio_collection,
    $portfolio_collection
);