<?php
if (!isset($_SESSION['id_user'])) {
    echo "<script>alert('Silahkan Login Terlebih Dahulu !')</script>";
    echo "<script>window.location.replace('" . base_url('log-admin') . "')</script>";
} elseif ($_SESSION['role'] != "Camat") {
    echo "<script>alert('Anda Tidak Diizinkan Mengakses Halaman ini !')</script>";
    echo "<script>window.history.back()</script>";
}
