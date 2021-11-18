<?php
session_start();
session_unset();
session_destroy();

echo "<script> console.log('Session destroyed!')</script>";
header('location: index.php?status=loggedout');