<?php

$client_id = "my client id";
$redirect_uri = "http://localhost/PROJECT/lab/google.php";
$scope = "email profile";

$auth_url = "https://accounts.google.com/o/oauth2/auth" .

            "response_type=code" .
            "&client_id=" . $client_id .
            "&redirect_uri=" . urlencode($redirect_uri) .
            "&scope=" . urlencode($scope) .
            "&access_type=online";

header("Location: " . $auth_url);
exit();
?>
