<?php
if (isset($_GET['dogbreed'])) {
    $inputBreed = trim($_GET['dogbreed']);
    
    // Array of dog breeds
    $dogBreeds = array(
        "Labrador Retriever",
        "German Shepherd",
        "Golden Retriever",
        "Bulldog",
        "Beagle",
        "Poodle"
    );
    
    // For a case-insensitive comparison
    $inputBreedLower = strtolower($inputBreed);
    $dogBreedsLower  = array_map('strtolower', $dogBreeds);
    
    if (in_array($inputBreedLower, $dogBreedsLower)) {
        // If the breed is found, return the breed as it appears in the array
        // so we preserve original casing/spelling.
        // e.g. “Labrador Retriever”
        // (Optionally, you can find exactly which array item matched.)
        
        // Find the matching item in the original array to preserve the exact wording
        $index = array_search($inputBreedLower, $dogBreedsLower);
        echo htmlspecialchars($dogBreeds[$index]);
        
    } else {
        // If not found, just say so
        // e.g. “No match found for: Labs”
        echo "No match found for: " . htmlspecialchars($inputBreed);
    }
}
?>
