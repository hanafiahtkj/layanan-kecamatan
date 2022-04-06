<?php

include_once '../config/config.php';


$id_sso = $_POST['id_sso'];
$email  = $_POST['email'];
$token  = $_POST['token'];
// cek apakah id sso sudah sudah login / valid
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://bapintar.banjarmasinkota.go.id/api/sso/is-valid',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('id_sso' => $id_sso),
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$token,
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$result = json_decode($response, true);
$result = ($result) ? $result : [];
if (array_key_exists('status', $result)) {
    $isValid = $result['status'];
}
else {
    $isValid = false;
}

if ($isValid)
{
    $user = $koneksi->query("SELECT * FROM masyarakat WHERE id_sso = ".$id_sso)->fetch_array();

    if(!$user)
    {
        $user = $koneksi->query("SELECT * FROM masyarakat WHERE email = '$email'")->fetch_array();
        
        if($user) 
        {
            $userrr = $koneksi->query("UPDATE masyarakat SET id_sso = '$id_sso' where id_masyarakat ='$user[id_masyarakat]'");
        }
    }

    // PROSES LOGIN
    //$query = $koneksi->query("SELECT * FROM masyarakat WHERE nik = '$user[nik]'")->fetch_array();
    $_SESSION['id_masyarakat'] = $user['id_masyarakat'];
    $_SESSION['nama']          = $user['nama'];

    // log
    $ket  = "Registrasi Masyarakat -> NIK = " . $user['nik'];
    $koneksi->query("INSERT INTO log VALUES(null, '$ket', CURRENT_TIME(), '$user[nama]', null, null)");
    // --Log

    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    echo json_encode(array('status' => true)); die();
}

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
echo json_encode(array('status' => false)); die();
