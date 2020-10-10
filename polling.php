<?php
include_once "config/config.php";

if (isset($_POST['vote'])) {
    $polling = $_POST['polling'];

    if ($polling == "1") {
        $koneksi->query("UPDATE polling SET sangatbaik = sangatbaik + 1");
    } elseif ($polling == "2") {
        $koneksi->query("UPDATE polling SET baik = baik + 1");
    } elseif ($polling == "3") {
        $koneksi->query("UPDATE polling SET cukup = cukup + 1");
    } elseif ($polling == "4") {
        $koneksi->query("UPDATE polling SET kurang = kurang + 1");
    }

    setcookie('polling', 'display: none;', time() + 31556926, '/');
    setcookie('notif', 'Terimakasih atas masukan anda', time() + 31556926, '/');

    echo "<meta http-equiv='refresh' content='0; url=" . base_url('') . "'>";
}
