<?php
session_start();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json");

// Function to calculate and return remaining cooldown time
function getCooldownTime($username) {
    $cooldownDuration = 300; // 5 minutes in seconds
    $lastAttemptTime = isset($_SESSION['last_attempt_time'][$username]) ? $_SESSION['last_attempt_time'][$username] : 0;
    $currentTime = time();
    $elapsedTime = $currentTime - $lastAttemptTime;
    $remainingTime = $cooldownDuration - $elapsedTime;
    return max(0, $remainingTime); // Ensure remaining time is not negative
}

if (!isset($_GET['username'])) {
    http_response_code(400); // Bad request
    echo json_encode(array("error" => "Username not provided"));
    exit();
}

$username = $_GET['username'];
$cooldownTime = getCooldownTime($username);

echo json_encode(array("cooldownTime" => $cooldownTime));
?>
