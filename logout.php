<?php
session_start();
session_destroy();
header('location:login.php');
?>
<script>
alert('Anda Berhasil Logout !');
windows.location.href='login.php';
</script>