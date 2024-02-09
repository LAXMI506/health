<?php
$username = filter_input(INPUT_POST, "username");
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");



if (!empty($username)) {
    if (!empty($password)){

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "batch4";

        $conn = new mysqli($host,$dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()) {
        echo "Connection Error";
        }

        else{

            $sql = "INSERT INTO web_register(username,email,password)
                    VALUES('$username','$email','$password')";

                if($conn->query($sql)){
                   
                    header("location:login1.php");
                    exit;
                }
            
            

        $conn->close();
        
        }
    }
    else{
        echo'<script> alert("Password must be required");</script>';
        die();
    }
}

echo'<script> alert("username must be required");</script>';
die();



?>