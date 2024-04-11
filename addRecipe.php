<?php

include('connection.php');

$chefname = $_POST['chefname'];
$category = $_POST['category'];
$RecipeName = $_POST['RecipeName'];
$Ingredients = $_POST['Ingredients'];
$Directions = $_POST['Directions'];

// Retrieve the temporary file name of the uploaded image
$image = $_FILES['image']['tmp_name'];

// Read the content of the image file and escape it for database insertion
$imgContent = addslashes(file_get_contents($image));

// Insert the data into the database
$sql = "INSERT INTO addrecipe (chefname, category, RecipeName, Ingredients, Directions, image) 
        VALUES ('$chefname', '$category', '$RecipeName', '$Ingredients', '$Directions', '$imgContent')";

$result = mysqli_query($db, $sql);

// Check if the query was successful
if ($result) {
    echo "Successfully";
    header("Location: home.html");
} else {
    echo "Something Went Wrong!";
    header("Location: addRecipe.html");
}

?>
