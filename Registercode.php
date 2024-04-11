<?php

include('connection.php');
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];

    if($password !== $confirmpassword)
    {
       echo "password and confirm password are not same";
    }
       
    else
    {   
        $sql = "INSERT INTO blogusers (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Registered Successfully";
            header("Location: login.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: register.html");
        }
    }
   
?>