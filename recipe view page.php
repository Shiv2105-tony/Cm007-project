<!DOCTYPE html>
<html>
<head>
    <title>View Recipes</title>
    <link rel="stylesheet" type="text/css" href="recipeview.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1 style="text-align: center;">View All Recipes</h1>
    <div class="recipe-container">
        <?php
        include('connection.php');

        // Code to Fetch recipes from the database//
        $sql = "SELECT * FROM addrecipe";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row and choosing while loop to decide the selection//
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='recipe'>";
                echo "<h2>" . $row['RecipeName'] . "</h2>";
                echo "<p><strong>Chef:</strong> " . $row['chefname'] . "</p>";
                echo "<p><strong>Category:</strong> " . $row['category'] . "</p>";
                echo "<p><strong>Ingredients:</strong> " . $row['Ingredients'] . "</p>";
                echo "<p><strong>Directions:</strong> " . $row['Directions'] . "</p>";
                echo "<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' height='150' width='150' />";
                echo "</div>";
            }
        } else {
            echo "No recipes found";
        }

        mysqli_close($db);
        ?>
    </div>
</body>
</html>
