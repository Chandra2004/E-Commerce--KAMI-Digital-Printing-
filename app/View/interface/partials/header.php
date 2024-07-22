<?php
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="<?= BASE_URL ?>/assets/img/internal/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/img/internal/favicon.png" type="image/x-icon">
    <title><?= $model['title'] ?></title>

    <!-- Tailwindcss CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

    <meta property="og:title" content="KAMI Digital Printing & Advertising | Surabaya">
    <meta property="og:description" content="KAMI Digital Printing & Advertising menawarkan layanan digital printing berkualitas tinggi di Surabaya. Hubungi kami untuk berbagai kebutuhan cetak Anda.">
    <meta property="og:image" content="<?= BASE_URL ?>/assets/img/internal/logo.png">
    <meta property="og:url" content="<?= DOMAIN ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">

    <script>
        function checkScreenSize() {
            const mdBreakpoint = window.matchMedia('(min-width: 768px)');
            if (mdBreakpoint.matches) {
                window.location.href = '<?= BASE_URL?>/unable-device';
            }
        }
        window.onload = checkScreenSize;
        window.onresize = checkScreenSize;
    </script>
</head>

<body>
    <!-- Header -->
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="<?= BASE_URL ?>/">
            <img src="<?= BASE_URL ?>/assets/img/internal/logo.png" class="h-8" alt="Logo Kami Digital Printing" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="<?= BASE_URL ?>/kerja-sama" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center ">Join Us</a>
            <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
            <li>
                <a href="<?= BASE_URL ?>/" class="block py-2 px-3 p-0 text-gray-900 rounded hover:bg-blue-700 hover:text-white text-center">Home</a>
            </li>
            <li>
                <a href="<?= BASE_URL ?>/produk" class="block py-2 px-3 p-0 text-gray-900 rounded hover:bg-blue-700 hover:text-white text-center">Produk</a>
            </li>
            <li>
                <a href="<?= BASE_URL ?>/tentang" class="block py-2 px-3 p-0 text-gray-900 rounded hover:bg-blue-700 hover:text-white text-center">Tentang</a>
            </li>
            <li>
                <a href="<?= BASE_URL ?>/kontak" class="block py-2 px-3 p-0 text-gray-900 rounded hover:bg-blue-700 hover:text-white text-center">Kontak</a>
            </li>
            <li>
                <a href="<?= BASE_URL ?>/kerja-sama" class="block py-2 px-3 p-0 text-gray-900 rounded hover:bg-blue-700 hover:text-white text-center">Kerja Sama</a>
            </li>
            <li>
                <a href="<?= BASE_URL ?>/karir" class="block py-2 px-3 p-0 text-gray-900 rounded hover:bg-blue-700 hover:text-white text-center">Karir</a>
            </li>
        </ul>
        </div>
        </div>
    </nav>