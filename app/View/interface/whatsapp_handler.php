<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (Bagian yang sama seperti sebelumnya)    $nama = $_POST['nama'];
    $nama = $_POST['nama'];
    $noHp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kotKab = $_POST['kota_kabupaten'];
    $kodePos = $_POST['kode_pos'];
    $level = $_POST['level_design'];
    $revisi = $_POST['revisi'];
    $pengerjaan = $_POST['pengerjaan'];
    $deskripsi = $_POST['deskripsi'];

    // Mengambil nilai harga_produk dari database (asumsi tipe data di database adalah varchar)
    $harga_produk = $model['detail']['harga_produk'];
    // Menghilangkan karakter selain angka dari harga_produk
    $harga_produk_angka = (int)preg_replace('/[^0-9]/', '', $harga_produk);

    // Mengambil nilai dari lvl_design
    $lvl_design_value = $_POST['lvl_design'];
    // Menghilangkan karakter selain angka dari lvl_design_value
    $lvl_design_angka = (int)preg_replace('/[^0-9]/', '', $lvl_design_value);

    // Mengambil nilai dari pengerjaan
    $pengerjaan_value = $_POST['pengerjaan'];
    // Menghilangkan karakter selain angka dari pengerjaan_value
    $pengerjaan_angka = (int)preg_replace('/[^0-9]/', '', $pengerjaan_value);

    // Menjumlahkan ketiga nilai
    $total = $harga_produk_angka + $lvl_design_angka + $pengerjaan_angka;
    $total_formatted = number_format($total, 0, ',', '.');

    // ... (Bagian yang sama seperti sebelumnya)
    $space = "%20";
    $enter = "%0A";

    $url = "https://api.whatsapp.com/send?phone=6281359254021&text=";

    // Info-Salam
    $infoSalam = "Halo" . $enter . "*KAMI DIGITAL PRINTING SURABAYA*,";

    // Info-Produk
    $infoProduk = "==========" . $enter . "Saya ingin Memesan Produk Berikut : " . $enter . "Nama Produk : " . $title_produk . $enter . "Harga Produk : " . $harga_produk . $enter . "==========";

    // Info-Pemesan
    $infoPemesan = "==========" . $enter . "Nama Pemesan : " . $nama . $enter . "No Hp/WA : " . $noHp . $enter . "Alamat : " . $alamat . $enter . "Kelurahan : " . $kelurahan . $enter . "Kecamatan : " . $kecamatan . $enter . "Kota/Kab : " . $kotKab . $enter . "Kode Pos : " . $kodePos . $enter . "==========";

    // Info-Request
    $infoRequest = "==========" . $enter . "Request Produk :" . $enter . "Level Design : " . $level . $enter . "Pengerjaan : " . $pengerjaan . $enter . "Revisi : " . $revisi . $enter . "Deskripsi : " . $enter . $deskripsi . $enter . "==========";

    // Invoice
    $invoice = "==========" . $enter . "*INVOICE*" . $enter . "Total Pembayaran Rp "  . "*" . $total_formatted . "*,-" . $enter . $enter . "Mohon Untuk Segera Membayar" . $enter . "Via TF: 0882315205" . $enter . "A/N : Abdul Hafid" . $enter . "==========";;

    // InfoFoto
    $infoFoto = "Link Produk :" . $enter . BASE_URL . "/produk/pesan/" . $model['detail']['slug_produk'];


    $api_url = $url . $space . $infoSalam . $enter . $enter . $infoProduk . $enter . $enter . $infoPemesan . $enter . $enter . $infoRequest . $enter . $enter . $invoice . $enter . $enter . $infoFoto;

    // Redirect ke URL WhatsApp
    header("Location: $api_url");
    exit();
}
