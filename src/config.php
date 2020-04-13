<?php

$dotenv = new \Symfony\Component\Dotenv\Dotenv();
$dotenv->load('.env');

return [
    'auth_url' => $_ENV['AUTH_URL'],
    'api_url' => $_ENV['API_URL'],
    'auth' => ['usr' => $_ENV['USR'], 'pwd' => $_ENV['PASSWORD']],
    'cookie_file' => 'cookie.txt',
    'curl_timeout' => 30,
    'basic_auth' => [],
];