<?php
    session_start();
    include ("config.php");
    $username = $_SESSION['usernameSession'];
    $stmt = $connection->prepare("select*from user where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $found = $stmt->get_result();
    $result = $found->fetch_assoc();
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
     caption{
         width : 90vw;
         display : flex;
         justify-content : center;
         text-align : center;
         font-size : 15pt;
     }
     td{
         padding-top : 15px;
         padding-left : 5px;
         padding-right : 5px;
         font-size : 10pt;
         width : 100px;
        /* text-align : left; */
     }
     td:nth-child(odd){
        width : 100px;
     }
     input {
         width : 10vw;
         font-size : 10pt;
     }
     body{
         background-color : #c2f0f7;
         width : 100vw;
     }
     table{
         /* width : 100vw; */
         display : flex;
         align-items : center;
         flex-direction : column;
         justify-content : center;
     }
     .tombol{
         
         display : flex;
         flex-direction : row;
         justify-content : flex-end;
         margin-right : 320px;
         margin-top : 30px;
     }
     .tombol a, .tombol input{
        border-radius : 5px;
        border : solid 2px black;
        margin-right : 40px;
        text-align : center;
        text-decoration : none;
        width : 150px;
        padding-top : 5px;
        padding-bottom : 5px;
        background-color : #ffd4ac;
        color : black;
     }
     .tombol input{
        background-color : #b0f49c;
     }

     
 </style>
<body>
    
<form action="prosesEdit.php" method="post" enctype = "multipart/form-data">
        <table>
            <caption>Edit Profile</caption>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name = "NamaDepan" value="<?php echo $result['NamaDepan']?>"></td>

                    <td>Nama Tengah</td>
                    <td><input type="text" name = "NamaTengah" value="<?php echo $result['NamaTengah']?>"></td>

                    <td>Nama Belakang</td>
                    <td><input type="text" name = "NamaBelakang" value="<?php echo $result['NamaBelakang']?>"></td>
                </tr>
                
                
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name = "TempatLahir" value="<?php echo $result['TempatLahir']?>"></td>
                
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="TglLahir" value="<?php echo $result['TglLahir']?>"></td>

                    <td>NIK</td>
                    <td><input type="text" name="NIK" value="<?php echo $result['NIK']?>"></td>
                </tr>
            
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name = "WargaNegara" value="<?php echo $result['WargaNegara']?>"></td>
                
                    <td>Email</td>
                    <td><input type="email" name="Email" value="<?php echo $result['Email']?>"></td>

                    <td>No HP</td>
                    <td><input type="text" name="NoHP" value="<?php echo $result['NoHp']?>"></td>
                </tr>   

                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name = "Alamat" value="<?php echo $result['Alamat']?>"></td>
                
                    <td>Kode Pos</td>
                    <td><input type="number" name="KodePos" value="<?php echo $result['KodePos']?>"></td>

                    <td>Foto Profil</td>

                    <td><input type="file" name="berkas" ></td> 
                                
                </tr>

                <tr>
                    <td>Username</td>
                    <td><input type="text" name = "Username" value="<?php echo $result['Username']?>"></td>
                
                    <td>Password 1</td>
                    <td><input type="password" name="Password1" value="<?php echo $result['Password1']?>"></td>
                    
                    <td>Password 2</td>
                    <td><input type="password" name="Password2" value="<?php echo $result['Password1']?>"></td>
                </tr> 
        </table>

        <div class = "tombol">
            <a href="welcome.php">Kembali</a>
            <input type="submit" name="submit" value = "Simpan">
        </div>
    </form>
</body>
</html>