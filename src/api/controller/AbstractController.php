<?php

namespace App\api\controller;

abstract class AbstractController
{
    private $path = __DIR__ . '/../../../template/';

    protected function render(array $data = [], int $statuscode = 200): void
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        http_response_code($statuscode);
        extract($data);
        echo json_encode([
            'data' => $data,
            'message' => 'ok',
            'status' => $statuscode,
        ]);
    }
}

?>