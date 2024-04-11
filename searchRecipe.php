
<?php
    include('connection.php');
    $RecipeName=$_POST['RecipeName'];
    
    $sql = "SELECT * FROM addrecipe WHERE RecipeName='$RecipeName'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) 
                    {
    // output data of each row
        while($row = $result->fetch_assoc()) 
        {               
            echo "<html><body><table width=80% height=90%><tr><td>Chef Name:</td><td>". $row['chefname']. "</td></tr> ".
            "<tr><td>Category:</td><td> ". $row["category"]. "</td></tr> ".
            "<tr><td>Recipe Name:</td><td> ". $row["RecipeName"]. "</td></tr> ".
            "<tr><td>Ingredients:</td><td> ". $row["Ingredients"]. "</td></tr> ".
            "<tr><td>Directions:</td><td> ". $row["Directions"]. "</td></tr></table>";
        }
        echo "<h2><a href='home.html'>Click here to go back to home</a></h2>";
    }
    else 
    {
        echo "0 results";
        echo "<h2><a href='home.html'>Click here to go back to home</a></h2>";
    }
    $db->close();
?>