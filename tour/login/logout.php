<?php

session_start();


session_destroy();
header("Location:../index.php?msg=successfully_logged_out");

?>