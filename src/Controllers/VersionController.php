<?php
namespace Src\Controllers;
use Src\Helpers\Response;

class VersionController {
    private $config;
    public function __construct($config) {
        $this->config = $config;
    }
    public function show() {
        $data = [
            'version' => '1.0.0',
            'name' => 'API PHP Native',
            'author' => 'Chrismastian Lolo Allo',
            'time' => date('Y-m-d H:i:s')
        ];
        Response::json($data, 200);
    }
}