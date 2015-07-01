<?php
$website_settings = [
    'title' => 'Fortaleza, LLC',
    'home' => 'Fortaleza Life',
    'page_title' => 'Happiness',
    'page_description' => 'List of all my experiences',
    'copyright' => 'Copyright &copy; Fortaleza Life %s',
];
$portfolio_collection = [
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://localhost/mdcs50.dev/web/images/1375396411705.jpg',
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
$carousels = [
    '/about.php' => [
        [
            'img_url' => 'http://10.10.10.100/images/ptah.jpg',
            'caption' => '',
        ],
    ],
    '/index.php' => [
        [
            'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
            'caption' => 'Home Caption 1',
        ],
        [
            'img_url' => 'http://placehold.it/1900x1080&text=Slide Two',
            'caption' => 'Home Caption 2',
        ],
        [
            'img_url' => 'http://placehold.it/1900x1080&text=Slide Three',
            'caption' => 'Home Caption 3',
        ],
    ],
];