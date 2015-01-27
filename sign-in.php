<?php

session_start();
session_destroy();
session_start();

header("location: http://screenie.com/sign-in.php");
exit;
?>
