<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}
require_once 'Router.php';
$router = new Router();

$router->get('/routerphp/page1', function () {
    require "page1.php";
});
$router->get('/routerphp/page2', function () {
    echo "Welcome to page 2";
});

$router->get('/routerphp/page3', function () {
    function calculateComplexFormula($a, $b, $c, $d) {
        $step1 = $a + $b;
        $step2 = $step1 * $c;
        $step3 = pow($step2, 2); 
        $step4 = sqrt($step3); 
        $step5 = $step4 / $d;
        $step6 = $step5 + ($a * $c) - ($b / $d);
        $step7 = $step6 * (sin($a) + cos($b)) - tan($c / $d);
        $step8 = $step7 * log($step6 + 1); 
        $step9 = abs($step8 - ($a * $b * $c * $d)); 
        
        return $step9; 
    }
    

    $a = 5;
    $b = 10;
    $c = 3;
    $d = 2;
  
    $result = calculateComplexFormula($a, $b, $c, $d);
    
    echo "ผลลัพธ์ของสูตรคำนวณที่ซับซ้อนคือ: " . $result;
});

$router->get('/routerphp/page4', function () {
$apiUrl = "http://localhost/routerphp/page1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    $data = json_decode($response, true);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
curl_close($ch);

    
});

// การสร้างAPI ที่ให้เรียกใช้ในหน้าอื่น

$router->post('/routerphp/page1', function () {
header('Content-Type: application/json');
$data = [
    "status" => "success",
    "message" => "ตัวอย่างข้อมูล",
    "data" => [
        [
            "id" => 1,
            "name" => "John Doe",
            "email" => "john.doe@example.com",
            "age" => 25
        ],
        [
            "id" => 2,
            "name" => "Jane Smith",
            "email" => "jane.smith@example.com",
            "age" => 30
        ]
    ]
];
echo json_encode($data);
});



$router->get('/logout', function () {
    session_destroy();
    header("Location: /");
});
$router->post('/register', function () {
    include '../post/register.php';
});
$router->post('/login', function () {
    include '../post/login.php';
});
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
