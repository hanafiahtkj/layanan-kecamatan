<?php
if (!isset($_SESSION['id_masyarakat'])) {
    echo "<script>alert('Silahkan Login Terlebih Dahulu !')</script>";
    echo "<script>window.location.replace('" . base_url('login') . "')</script>";

}
