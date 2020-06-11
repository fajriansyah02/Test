<?php session_start();
session_destroy();
echo"<script>window.alert('berhasil keluar');
window.location=('index.php')</script>"
?>