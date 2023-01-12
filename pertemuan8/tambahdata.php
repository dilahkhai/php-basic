<?php
require 'functions.php';

// cek apakah data terisi atau tidak
if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "data gagal ditambahkan";
    }
}

//cek apakah tombol submit ditekan atu belum
// if(isset($_POST["submit"])){
//     // ambil data dari elemen form
//     $nama = $_POST["nama"]; 
//     $nis = $_POST["nis"]; 
//     $email = $_POST["email"]; 
//     $jurusan = $_POST["jurusan"]; 
//     $gambar = $_POST["gambar"];  
    
//     var_dump($_POST["submit"]);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa/i</h1>

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    Nama : <input type="text" name="nama">
    <br><br>
    NIS : <input type="text" name="nis">
    <br><br>
    Email : <input type="text" name="email">
    <br><br>
    Jurusan : <input type="text" name="jurusan">
    <br><br>
    Gambar : <input type="text" name="gambar">
    <br><br>
    <button type="submit" name="submit">Tambah Data!!</button>
    <br><br>
</form>
</body>
</html>