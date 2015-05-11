<?php
  session_start();
  require_once('connection.php');
?>
<h1>WELCOME <?= $_SESSION['name']?></h1>

