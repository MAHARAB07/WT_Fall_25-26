<?php
session_start();

/* সব session data remove */
session_unset();

/* session destroy */
session_destroy();

/* login page এ redirect */
header("Location: ../html/login.php");
exit();
