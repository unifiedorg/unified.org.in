<?php namespace App\Controllers\Api;

class BlogController {
    public function get($id) {
        header("Content-Type: application/json");
        if (!file_exists(dirname(__DIR__, 3) . "/blog/app/assets/json/$id.json")) {
            header('HTTP/1.0 404 Not Found');
            echo "{\"code\":\"404\",\"message\":\"No blog with the ID provided exists\"}";
            die();
        }
        echo file_get_contents(dirname(__DIR__, 3) . "/blog/app/assets/json/$id.json");
    }
}
