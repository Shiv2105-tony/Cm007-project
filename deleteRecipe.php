
        <?php
            include('connection.php');

            $RecipeName=$_POST['RecipeName'];
           
            $sql = "DELETE FROM addrecipe WHERE RecipeName='$RecipeName'" ;
            $result = $db->query($sql);
            header("Location: home.html");
            $db->close();
        ?>
