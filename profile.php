
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
    .tombol a:last-child{
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
    td{
        width : 100px;
        padding: 20px;
    }
    td:nth-child(even){
        font-weight : bold;
    }
    caption{
        padding-top : 20px;
        font-weight : bold;
    }
    .edit{
        display:flex;
        justify-content : flex-end;
        padding-top : 50px;
        padding-right : 200px;
    }
    .edit a{
        text-align : center;
        /* text-decoration : none; */
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
    <table>
        <?php
            $username = $_SESSION['usernameSession'];
            $stmt = $connection->prepare("select*from user where username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $found = $stmt->get_result();
            $result = $found->fetch_assoc();
        ?>
            <caption>Profil Pribadi</caption>
                <tr>
                    <td>Nama Depan</td>
                    <?php
                        echo "<td>".$result['NamaDepan']."</td>";
                    ?>
                    

                    <td>Nama Tengah</td>
                    <?php
                        echo "<td>".$result['NamaTengah']."</td>";
                    ?>

                    <td>Nama Belakang</td>
                    <?php
                        echo "<td>".$result['NamaBelakang']."</td>";
                    ?>
                </tr>
                
                
                <tr>
                    <td>Tempat Lahir</td>
                    <?php
                        echo "<td>".$result['TempatLahir']."</td>";
                    ?>
                
                    <td>Tgl Lahir</td>
                    <?php
                        echo "<td>".$result['TglLahir']."</td>";
                    ?>

                    <td>NIK</td>
                    <?php
                        echo "<td>".$result['NIK']."</td>";
                    ?>
                </tr>
            
                <tr>
                    <td>Warga Negara</td>
                    <?php
                        echo "<td>".$result['WargaNegara']."</td>";
                    ?>
                
                    <td>Email</td>
                    <?php
                        echo "<td>".$result['Email']."</td>";
                    ?>
                    <td>No HP</td>
                    <?php
                        echo "<td>".$result['NoHp']."</td>";
                    ?>
                </tr>   

                <tr>
                    <td>Alamat</td>
                    <?php
                        echo "<td>".$result['Alamat']."</td>";
                    ?>
                
                    <td>Kode Pos</td>
                    <?php
                        echo "<td>".$result['KodePos']."</td>";
                    ?>

                    <td>Foto Profil</td>

                   <td>
                       <img src="<?php echo $result['FilePath'];?>" alt="" srcset="" width = "50px" height = "50px">
                   </td>
                                
                </tr>

                

        </table>
        <tr>
            <div class = "edit">
                <a href ='edit.php'>Edit</a>
            </div>
            
        </tr>
    </main>
   

</body>
</html>