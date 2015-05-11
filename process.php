<?php
session_start();

unset($_SESSION['counter']);
header('Location: index.php');

?>