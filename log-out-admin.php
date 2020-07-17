<?php
include_once "config/config.php";

$_SESSION['id_user'];
$_SESSION['nama_user'];
$_SESSION['role'];

unset($_SESSION["id_user"]);
unset($_SESSION["nama_user"]);
unset($_SESSION["role"]);

session_unset();
session_destroy();

echo "<meta http-equiv='refresh' content='0; url=" . base_url('log-admin') . "'>";
