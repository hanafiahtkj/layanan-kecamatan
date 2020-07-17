<?php

include_once "config.php";

$sktu_baru             = $koneksi->query("SELECT COUNT(*) AS jml FROM sktu_baru")->fetch_array();

$sktu_p                = $koneksi->query("SELECT COUNT(*) AS jml FROM sktu_perpanjangan")->fetch_array();

$iumk                  = $koneksi->query("SELECT COUNT(*) AS jml FROM iumk")->fetch_array();

$ahli_waris            = $koneksi->query("SELECT COUNT(*) AS jml FROM ahli_waris")->fetch_array();

$pendirian_paud        = $koneksi->query("SELECT COUNT(*) AS jml FROM rekomendasi_pendirian_paud")->fetch_array();

$legalisasi_imb        = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_imb")->fetch_array();

$legalisasi_proposal   = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_proposal")->fetch_array();

$legalisasi_izin_tower = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_izin_tower")->fetch_array();
