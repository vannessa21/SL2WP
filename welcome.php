
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<style>
    p{
        text-align: center;
    }

    main{
        text-align : center;
        font-size: 15pt;
      
    }
    div{
        
        text-align : center;
        /* margin-right : 20px; */
        flex-direction: row;
        display : flex;
        justify-content: center;
        align-items : center;
    }
    a:first-child{
        width : 50px;
        text-decoration: none;
        color: black;
        padding: 15px;
        background-color:#99d6ed ;
        margin-right : 100px;
    }

    a:last-child{
        width : 50px;
        text-decoration: none;
        color: black;
        padding: 15px;
        background-color:#c6ed99 ;
       /* margin : 200px; */
    }

    body{
        display : flex;
        flex-direction : column;
        align-items : center;
        justify-content : center;
        background-color : #e4ecec;
    }
</style>
<body>
    <p>
        Aplikasi Pengelolaan Keuangan <br>
    </p>
    <br>
    <br>
    <main>
        Selamat Datang di Aplikasi Pengelolaan Keuangan
    </main>
    <br>
    <br>
    <br>
    <div>
        <a href = 'login.php'> Login </a> 
        <a href = 'register.php'> Register</a>
    </div>
    
</body>
</html>