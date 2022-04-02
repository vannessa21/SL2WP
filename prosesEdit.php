<?php
    session_start();
    include ("config.php");
    // print_r($_POST['submit']);
    $NamaDepan = $_POST ['NamaDepan'];
    $NamaTengah = $_POST ['NamaTengah'];
    $NamaBelakang = $_POST ['NamaBelakang'];
    $TempatLahir = $_POST ['TempatLahir'];
    $TglLahir = $_POST ['TglLahir'];
    $NIK = $_POST ['NIK'];
    $WargaNegara = $_POST ['WargaNegara'];
    $Email = $_POST ['Email'];
    $NoHP = $_POST ['NoHP'];
    $Alamat = $_POST ['Alamat'];
    $KodePos = $_POST ['KodePos'];
    $fileName = $_FILES ['berkas']['name'];
    $tempName = $_FILES ['berkas']['tmp_name'];
    $username = $_POST ['Username'];
    $password1 = $_POST['Password1'];
    $password2= $_POST['Password2'];

    if (isset($_POST['submit'])){

        $dirTujuan = "terupload/";
        $upload = move_uploaded_file ($tempName, $dirTujuan.$fileName);
        
        $FilePath = $dirTujuan.$fileName;
        $usernameOld=$_SESSION['usernameSession'];
        $stmt = $connection->prepare("update user set NamaDepan = ? , NamaTengah=?, NamaBelakang = ?, TempatLahir =?, TglLahir =?, NIK=?,WargaNegara=?,Email=?, NoHp=?, Alamat=?, KodePos=?, FilePath=?, username = ?, Password1 = ? where username=?");
        $stmt->bind_param("sssssssssssssss",$NamaDepan, $NamaTengah, $NamaBelakang, $TempatLahir, $TglLahir, $NIK,$WargaNegara,$Email, $NoHP, $Alamat, $KodePos, $FilePath, $username, base64_encode($password1), $usernameOld);

        $stmt->execute();
        
        if ($stmt){
            echo "<script>";
            echo "alert ('Edit berhasil')";
            echo "</script>";

            echo "<script>";
            echo "window.location='profile.php'";
            echo "</script>";
        }
        else {
            echo "<script>";
            echo "alert ('Edit gagal')";
            echo "</script>";

            echo "<script>";
            echo "window.location='profile.php'";
            echo "</script>";
         }
    }
    else {
        echo "Mohon isi semua data dengan benar!<br>";
        
        echo "<a href='register.php'>Kembali</a>";
    }
?>
