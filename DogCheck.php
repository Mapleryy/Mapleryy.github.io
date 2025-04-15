<?php
if (isset($_GET['dogbreed'])) {
    $inputBreed = trim($_GET['dogbreed']);
    
    // Array containing 6 dog breeds.
    $dogBreeds = array("Labrador", "Beagle", "German Shepherd", "Bulldog", "Poodle", "Chihuahua");
    
    // Lowercase the input for a case-insensitive comparison.
    $inputLower = strtolower($inputBreed);
    
    // Use an array to collect matching breeds.
    $matches = array();
    
    // Check if each breed starts with the typed string.
    foreach ($dogBreeds as $breed) {
        // stripos returns 0 if the typed string is at the start (ignoring case)
        if (stripos($breed, $inputLower) === 0) {
            $matches[] = $breed;
        }
    }
    
    // If any matches are found, return them joined with a comma.
    if (count($matches) > 0) {
        echo implode(', ', $matches);
    } else {
        echo "No match found for: " . htmlspecialchars($inputBreed);
    }
}
?>
