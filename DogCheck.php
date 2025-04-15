<?php
if (isset($_GET['dogbreed'])) 
{
    $inputBreed = trim($_GET['dogbreed']);
    
    $dogBreeds = array("Labrador", "Beagle", "German Shepherd", "Bulldog", "Poodle", "Chihuahua");
    
    $inputLower = strtolower($inputBreed);
    
    $matches = array();
    
    foreach ($dogBreeds as $breed) 
    {
        if (stripos($breed, $inputLower) === 0) {
            $matches[] = $breed;
        }
    }
    
    if (count($matches) > 0) 
    {
        echo implode(', ', $matches);
    } else {
        echo "No match found for: " . htmlspecialchars($inputBreed);
    }
}
?>
