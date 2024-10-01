<?php
if (isset($_POST['submit'])){
 
    // memulai session untuk mengirim pesan eror pada session
    session_start();
 
    // menyimpan nilai dari request POST
    $nama = $_POST['nama'];
    $email = $_POST['email'];
 
    // menampung nilai eror pada validasi sebagai status eror
    $eror = false;
 
    // cek variabel $nama bernilai kosong ("") atau tidak
    if ($nama == ""){
        // membuat session namaPesan untuk memberi pesan eror pada kolom nama yang diterima index.php
        $_SESSION['namaPesan'] = "Kolom nama harus diisi";
 
        // mengubah nilai $eror menjadi true
        $eror = true;
    }
 
    // cek variabel $email bernilai kosong ("") atau tidak
    if ($email == ""){
        // membuat session emailPesan untuk memberi pesan eror pada kolom email yang diterima index.php
        $_SESSION['emailPesan'] = "Kolom email harus diisi";
 
        // mengubah nilai $eror menjadi true
        $eror = true;
    } 
 
        // cek apakah email yang diinput valid atau tidak
    if ($email != "" && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        // membuat session emailPesan untuk memberi pesan eror pada kolom email yang diterima index.php
        $_SESSION['emailPesan'] = "Email yang anda masukan tidak valid";
 
        // mengubah nilai $eror menjadi true
        $eror = true;
    }
     
 
    // cek nilai akhir variabel $eror, jika bernilai true maka akan redirect ke halaman index.php jika bernilai false akan membuat echo
    if ($eror == true){
        header('location: index.php');
    } else {
        echo "Data berhasil diinput";
    }
}
?>