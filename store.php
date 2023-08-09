<?php
     $email = $_GET['email'];
     $password = $_GET['password'];
     
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname= "log";
     $con = mysqli_connect($servername,$username,$password,$dbname);
     if(!$con)
     {
        die("Error :".mysqli_connect_error());

     }
     if($password=$password2)
     {
        $sql = "INSERT INTO `login`(`email`, `password`) VALUES('$email','$password')";
        if(mysql_query($con,$sql))
        {
            echo "Login Successfully..";
        }
        else{
            echo "Somthing Went Wrong..";
        }
     } else
     {
        echo "Password Not Matched.....";
     }
     mysqli_close($con);
     
?>