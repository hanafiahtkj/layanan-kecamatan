<?php
include_once '../config/config.php';

$id = $_POST['id_sso'];
$query = $koneksi->query("SELECT * FROM masyarakat WHERE id_sso = '$id'")->fetch_array();

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
echo json_encode(array('status' => ($query != null) ? true : false));
