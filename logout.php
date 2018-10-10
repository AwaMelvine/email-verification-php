<?php
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['verify']);
header("location: login.php");
