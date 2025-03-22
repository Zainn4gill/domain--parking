<?php
header("Content-Type: text/plain"); // Ensure text response

// Check if the file exists
$licenseFile = "licenses.txt";
if (file_exists($licenseFile)) {
    echo file_get_contents($licenseFile); // Read and output the file contents
} else {
    echo "Error: License file not found!";
}
?>
