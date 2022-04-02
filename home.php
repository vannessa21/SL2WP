
<?php
session_start();
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    nav{
        padding-inline : 15px;
        background-color : #f9ffca;
        display : flex;
        flex-direction : row;
        justify-content : space-between;
    }
    .tombol{
        
        width : 10%;
        align-items : center;
        /* background-color : black; */
        display : flex;
        flex-direction : row;
        justify-content : space-between;
    }

    .tombol a{

        text-decoration : none;
        color : black;
    }
    .tombol a:first-child{
        text-decoration:underline;
    }
    .logout{
        align-items : center;
        display : flex;
        flex-direction : row;
        justify-content : flex-end;
    }

    .logout a{
        text-decoration : none;
        color : black;
    }
    body{
        margin : 0;
        background-color : #cad1ff;
    }
    span{
        font-weight: bold;
    }
    main{
        text-align : center;
        margin-top : 20%;
        
    }
</style>
<body>
    <nav>
        <p>Aplikasi Pengelolaan Keuangan</p>
        <div class ="tombol">
            <a href = 'home.php'> Home </a> 
            <a href = 'profile.php'> Profile</a>
        </div>
            
        <div class = "logout">
            <a href = 'welcome.php'> Logout </a> 
        </div>
    </nav>
    <main>
        <?php
            $username = $_SESSION['usernameSession'];
            $stmt = $connection->prepare("select*from user where username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $found = $stmt->get_result();
            $result = $found->fetch_assoc();
        ?>
   
        <p>Halo <span><?php echo $result['NamaDepan'].' '.$result['NamaTengah'].' '. $result['NamaBelakang']?></span>, Selamat datang di Aplikasi Pengelolaan Keuangan</p>
    </main>
   

</body>
</html>