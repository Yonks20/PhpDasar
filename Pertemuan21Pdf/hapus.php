<?php

// Logicnya jika tidak ada session login, maka tendang atau tidak login, jadi terbatas jika mau ke index.php maka harus melewati login.php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}


require 'functions.php';

$id = $_GET["id"];
if(hapus($id)>0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php'
    </script>";
}
else{
    "
    <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php'
    </script>";
}
?>