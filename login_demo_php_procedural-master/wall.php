<?php
  session_start();
  require_once('./include/connection.php');
?>
<h1>WELCOME <?= $_SESSION['name']?></h1>

