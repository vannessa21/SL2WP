
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register</title>
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
    
    <form action="registerProses.php" method="post" enctype = "multipart/form-data">
        <table>
            <caption>Register</caption>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name = "NamaDepan"></td>

                    <td>Nama Tengah</td>
                    <td><input type="text" name = "NamaTengah"></td>

                    <td>Nama Belakang</td>
                    <td><input type="text" name = "NamaBelakang"></td>
                </tr>
                
                
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name = "TempatLahir"></td>
                
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="TglLahir"></td>

                    <td>NIK</td>
                    <td><input type="text" name="NIK"></td>
                </tr>
            
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name = "WargaNegara"></td>
                
                    <td>Email</td>
                    <td><input type="email" name="Email"></td>

                    <td>No HP</td>
                    <td><input type="text" name="NoHP"></td>
                </tr>   

                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name = "Alamat"></td>
                
                    <td>Kode Pos</td>
                    <td><input type="number" name="KodePos"></td>

                    <td>Foto Profil</td>

                    <td><input type="file" name="berkas" value = "Silahkan Pilih Foto"></td> 
                                
                </tr>

                <tr>
                    <td>Username</td>
                    <td><input type="text" name = "Username"></td>
                
                    <td>Password 1</td>
                    <td><input type="password" name="Password1"></td>
                    
                    <td>Password 2</td>
                    <td><input type="password" name="Password2"></td>
                </tr> 
        </table>

        <div class = "tombol">
            <a href="welcome.php">Kembali</a>
            <input type="submit" name="submit" value = "Register">
        </div>
    </form>
    
     
 </body>
 </html>