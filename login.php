<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<style>
    body{
        display : flex;
        flex-direction : column;
        justify-content : center;
        align-items : center;
        background-color :  #fbfdac;
    }
    p{
         width : 100vw;
         display : flex;
         justify-content : center;
         text-align : center;
         font-size : 20pt;
     }
    .tombol{
         width : 250px;
         font-size : 10pt;
         font-family: sans-serif;
         display : flex;
         flex-direction : row;
         justify-content : space-between;
         align-items : center;
         /* margin-right : 320px;
         margin-top : 30px; */
     }
     .tombol a, .tombol input{
        /* border-radius : 5px; */
        border : 0;
        margin-top : 20px;
        /* margin-right : 40px; */
        /* margin-left : 20px; */
        text-align : center;
        text-decoration : none;
        width : 100px;
        padding-top : 5px;
        padding-bottom : 5px;
        background-color : #ffd4ac;
        color : black;
     }
     .tombol input{
        background-color : #b0f49c;
     }
     
     form{
         padding : 20px;
         /* width : 100vw; */
         background-color : #ace6fd;
         display : flex;
         align-items : center;
         flex-direction : column;
         justify-content : center;
     }
     
     td{
         /* padding-top : 15px;
         padding-left : 5px;
         padding-right : 5px; */
         font-size : 15pt;
         width : 150px;
        /* text-align : left; */
     }

     
     input {
         /* width : 10vw; */
         font-size : 10pt;
         width : 200px;
     }
     
</style>
<body>
<p>Login</p>

<form action="loginProses.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>

        <div class = "tombol">
            <input type="submit" name="submit" value = "Login">
            <a href="welcome.php">Kembali</a>
        </div>
    </form>

    

</body>
</html>