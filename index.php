<?php

$data = [
    [
        "name" => "tokopedia",
        "contact" => "+6281288677543"
    ],
    [
        "name" => "bukalapak",
        "contact" => "+6281233677500"
    ],
    [
        "name" => "shopee",
        "contact" => "+6281288547576"
    ],
    [
        "name" => "blibli",
        "contact" => "+6281245665543"
    ]
];


// For get URL PATH
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    
    case '/daftar-vendor' :
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        break;
    case '/' :
        echo "hello world";
        break;
    default:
        http_response_code(404);
        echo "404";
        break;
}

