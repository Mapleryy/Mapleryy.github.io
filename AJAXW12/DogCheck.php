<?php
// Check if the 'dogbreed' parameter is present in the URL.
if (isset($_GET['dogbreed'])) {
    // Get and trim the input
    $inputBreed = trim($_GET['dogbreed']);
    
    // Define an array containing 6 dog breeds.
    $dogBreeds = array("Labrador", "Beagle", "German Shepherd", "Bulldog", "Poodle", "Chihuahua");
    
    // Convert both the input and the array elements to lowercase for a case-insensitive comparison.
    $inputBreedLower = strtolower($inputBreed);
    $dogBreedsLower = array_map('strtolower', $dogBreeds);
    
    // Check if the input matches any of the dog breeds.
    if (in_array($inputBreedLower, $dogBreedsLower)) {
        echo "Dog breed found: " . htmlspecialchars($inputBreed);
    } else {
        echo "Dog breed '" . htmlspecialchars($inputBreed) . "' cannot be found.";
    }
}
?>
