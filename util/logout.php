<?php
session_start();
session_destroy();
header('Location: ../account/Login.php');
exit;
?>
