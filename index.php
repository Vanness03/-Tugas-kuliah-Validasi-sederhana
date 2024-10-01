<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validasi |</title>
<?php
    // Memberi nilai awal kosong pada variabel
    $namaPesan = $emailPesan = "";
 
    session_start();
 
    // Memberi nilai baru pada variabel $namaPesan jika ada $_Session "namaPesan"
    if (isset($_SESSION['namaPesan'])){
        $namaPesan = $_SESSION['namaPesan'];
    }
 
    // Memberi nilai baru pada variabel $emailPesan jika ada $_Session "namaPesan"
    if (isset($_SESSION['emailPesan'])){
        $emailPesan = $_SESSION['emailPesan'];
    }
    session_unset();
    session_destroy();
?>
</head>
<body>
    <h1>Form Validasi | uas keamanan web</h1>
     
    <!-- validasi akan di lakukan pada file cek-validasi.php -->
    <form action="cek-validasi.php" method="post">
        <table>
            <tr>
                <td>Nama : </td>
                <td>
                    <input type="text" name="nama" id="id">
 
                    <!-- berfungsi menampilkan pesan eror berdasar kan nilai dari $namaPesan -->
                    <span style="color:red;">* <?= $namaPesan ?></span>
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>
                    <input type="text" name="email" id="email">
 
                    <!-- berfungsi menampilkan pesan eror berdasar kan nilai dari $emailPesan -->
                    <span style="color:red;">* <?= $emailPesan ?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>