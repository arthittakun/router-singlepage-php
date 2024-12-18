<?php
class Router {
    private $getRoutes = [];
    private $postRoutes = [];

    // กำหนดเส้นทางสำหรับ GET
    public function get($path, $callback) {
        $this->getRoutes[$path] = $callback;
    }

    // กำหนดเส้นทางสำหรับ POST
    public function post($path, $callback) {
        $this->postRoutes[$path] = $callback;
    }

    public function dispatch($uri, $method) {
        $uri = parse_url($uri, PHP_URL_PATH); 
        
        // ตรวจสอบและเรียกใช้ route ที่ตรงกับ method GET หรือ POST
        if ($method === 'GET' && array_key_exists($uri, $this->getRoutes)) {
            call_user_func($this->getRoutes[$uri]);
        } elseif ($method === 'POST' && array_key_exists($uri, $this->postRoutes)) {
            call_user_func($this->postRoutes[$uri]);
        } else {
            include 'page404.php';
        }
    }
}
?>
