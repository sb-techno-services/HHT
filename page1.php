<?php
// page1.php

session_start();

echo 'Welcome to page #1';
  setcookie('language', 'english');
  echo $_COOKIE['language'];

$_SESSION['favcolor'] = 'green';
echo $_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

// Works if session cookie was accepted


?>
<script>
window.location.href = "page2.php";

</script>