<?php
include_once "config/config.php";

$_SESSION['id_masyarakat'];
$_SESSION['nama'];

unset($_SESSION["id_masyarakat"]);
unset($_SESSION["nama"]);

session_unset();
session_destroy();

echo "<meta http-equiv='refresh' content='0; url=" . base_url('') . "'>";
