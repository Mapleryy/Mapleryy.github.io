<?php
// Initialize an empty array to store the values
$values = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the values from the form
    $values = $_POST['values'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPArrays</title>
</head>
<body>
    <h1>Fill In The Values</h1>
    <form action="ArrayManip.php" method="POST">
        <label for="value1">Value 1:</label>
        <input type="text" id="value1" name="values[]"><br><br>

        <label for="value2">Value 2:</label>
        <input type="text" id="value2" name="values[]"><br><br>

        <label for="value3">Value 3:</label>
        <input type="text" id="value3" name="values[]"><br><br>

        <label for="value4">Value 4:</label>
        <input type="text" id="value4" name="values[]"><br><br>

        <label for="value5">Value 5:</label>
        <input type="text" id="value5" name="values[]"><br><br>

        <label for="value6">Value 6:</label>
        <input type="text" id="value6" name="values[]"><br><br>

        <label for="value7">Value 7:</label>
        <input type="text" id="value7" name="values[]"><br><br>

        <label for="value8">Value 8:</label>
        <input type="text" id="value8" name="values[]"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the values from the form
    $values = $_POST['values'];

    //(without keys/indexes)
    echo "<p>Original Array without keys/indexes</p>";
    foreach ($values as $value) {
        echo $value . "\n ";
    }
    echo "<br><br>";

    //(with keys/indexes)
    echo "<p>Original Array with keys/indexes</p>";
    print_r($values);
    echo "<br><br>";

    // Delete two elements from the array
    unset($values[2], $values[4]);

    //Deleting elements (without keys/indexes)
    echo "<p>After deleting two elements without keys/indexes</p>";
    foreach ($values as $value) {
        echo $value . " ";
    }
    echo "<br><br>";

    //Deleting elements (with keys/indexes)
    echo "<p>After deleting two elements with keys/indexes</p>";
    print_r($values);
    echo "<br><br>";

    //Remove gaps
    $values = array_values($values);

    //Removed gaps (without keys/indexes)
    echo "<p>After removing gaps without keys/indexes</p>";
    foreach ($values as $value) {
        echo $value . " ";
    }
    echo "<br><br>";

    //Removed gaps (with keys/indexes)
    echo "<p>After removing gaps with keys/indexes</p>";
    print_r($values);
    echo "<br><br>";

    //Ascending order (without keys/indexes)
    sort($values);
    echo "<p>Sorted in ascending order without keys/indexes</p>";
    foreach ($values as $value) {
        echo $value . " ";
    }
    echo "<br><br>";

    //Descending order (without keys/indexes)
    rsort($values);
    echo "<p>Sorted in descending order without keys/indexes</p>";
    foreach ($values as $value) {
        echo $value . " ";
    }
    echo "<br><br>";

    //Ascending with the value (without keys/indexes)
    sort($values);
    echo "<p>Sorted in ascending order according to the value without keys/indexes</p>";
    foreach ($values as $value) {
        echo $value . " ";
    }
    echo "<br><br>";

    //Ascending with the key
    ksort($values);
    echo "<p>Sorted in ascending order according to keys with keys/indexes</p>";
    print_r($values);
    echo "<br><br>";
}
?>
