
<?php
    session_start();
    include ("config.php");
    if(!empty($_POST['username'])){
        $username = $_POST['username'];
        $stmt = $connection->prepare("select Password1 from user where Username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $found = $stmt->get_result();
        $result = $found->fetch_assoc();
        // print_r ($result);
        if (base64_encode($_POST['password'])==$result["Password1"]){
            echo "<script>";
            echo "alert ('Login berhasil')";
            echo "</script>";

            $_SESSION ['usernameSession']=$username;
            echo "<script>";
            echo "window.location='home.php'";
            echo "</script>";
           
        }
        else {
            echo "<script>";
            echo "alert ('Login gagal')";
            echo "</script>";

            echo "<script>";
            echo "window.location='login.php'";
            echo "</script>";
        }
    }
    else {
        echo "Maaf, silahkan isi username <br>";
        echo "<a href = 'login.php'> Login </a> <br/>";
        echo "<a href = 'register.php'> Register</a>";
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color : #ace6fd;
    }
</style>
<body>
    
</body>
</html>