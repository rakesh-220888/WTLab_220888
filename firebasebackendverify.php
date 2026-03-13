<?php

$data = json_decode(file_get_contents("php://input"), true);
$token = $data['token'];

$apiKey = "my api key"; 

$url = "https://identitytoolkit.googleapis.com/v1/accounts:lookup?key=" . $apiKey;

$options = [
    "http" => [
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => json_encode(["idToken" => $token])
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}
?>
