<?php

function getConfig($key = '') {
    $config = [
        'name' => 'Creative Haven',
        'siteUrl' => 'https://peaceful-crag-29178-e57028cb57c2.herokuapp.com/',
        'navigationMenu' => [
            '' => 'Home',
            'about' => 'About',
            'products' => 'Products And Services',
            'news' => 'News',
            'contact' => 'Contacts',
        ],
    ];

    return isset($config[$key]) ? $config[$key] : null;
} 
