<?php
// keyauth.php

// Path to your license file (adjust as needed)
$licenseFile = 'licenses.txt';

// Check if file exists
if (!file_exists($licenseFile)) {
    http_response_code(500);
    echo "License file not found.";
    exit;
}

// Read the file contents and output it
header("Content-Type: text/plain");
echo file_get_contents($licenseFile);
?>
