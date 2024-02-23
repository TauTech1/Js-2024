<?php
// Check if the "x" parameter is present in the URL
if (isset($_GET['x'])) {
    // Retrieve the JSON data from the URL parameter
    $jsonString = $_GET['x'];

    // Decode the JSON string to obtain a PHP associative array
    $dataArray = json_decode($jsonString, true);

    // Check if JSON decoding was successful
    if ($dataArray !== null) {
        // Access the data from the associative array
        $name = $dataArray['name'];
        $age = $dataArray['age'];
        $city = $dataArray['city'];

        // Process or use the data as needed
        echo "Name: $name, Age: $age, City: $city";
    } else {
        // Handle JSON decoding error
        echo "Error decoding JSON data";
    }
} else {
    // Handle the case when "x" parameter is not present
    echo "Missing 'x' parameter in the URL";
}
?>
