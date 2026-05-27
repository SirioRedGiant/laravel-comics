<?php

return [
    // array per i link della Navbar
    'header_links' => [
        'Characters' => '/characters',
        'Comics' => '/',
        'Movies' => '/movies',
        'TV' => '#',
        'Games' => '#',
        'Collectibles' => '#',
        'Videos' => '#',
        'Fans' => '#',
        'News' => '#',
        'Shop' => '#'
    ],

    // array per le icone della fascia blu del Footer
    'footer_blue' => [
        ['img' => 'buy-comics-digital-comics.png', 'text' => 'Digital Comics'],
        ['img' => 'buy-comics-merchandise.png', 'text' => 'DC Merchandise'],
        ['img' => 'buy-comics-subscriptions.png', 'text' => 'Subscription'],
        ['img' => 'buy-comics-shop-locator.png', 'text' => 'Comic Shop Locator'],
        ['img' => 'buy-comics-shop-locator.png', 'text' => 'DC POWER VISA'],
    ],

    // dati per le liste centrali del Footer ==> sezione Hero
    'footer_hero_lists' => [
        'dc_comics' => [
            'title' => 'DC Comics',
            'links' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News']
        ],
        'shop' => [
            'title' => 'SHOP',
            'links' => ['Shop DC', 'Shop DC Collectibles']
        ],
        'dc' => [
            'title' => 'DC',
            'links' => ['Terms Of Use (New)', 'Privacy Policy', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us']
        ],
        'sites' => [
            'title' => 'Sites',
            'links' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
        ]
    ]
];
