<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$value = '';

$_SESSION["newsession"]=$value;
?>