<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/img/internal/favicon.png" type="image/x-icon">
    <title><?= $model['title'] ?></title>
    <!-- Tailwindcss CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

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
<body class="bg-gray-50 text-gray-800">
    <header class="bg-white shadow-sm py-4">
        <div class="flex items-center py-4">
            <a href="<?= BASE_URL ?>/" class="ml-5">
                <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <h1 class="absolute text-2xl font-bold text-center w-[70%] left-1/2 transform -translate-x-1/2 line-clamp-2">
                KONTAK - KAMI Digital Printing
            </h1>
        </div>
    </header>
    <main class="px-2 mb-10 mt-10">
        <div class="bg-white rounded-lg py-5 px-5 shadow-2xl mb-16">
            <!-- Google Maps Embed -->
            <div class="rounded-lg mb-5 overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.700369772007!2d112.7245609!3d-7.2777614!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbe4c69501f7%3A0x7ea35e8d7af55dac!2sKami%20Digital%20Printing%20%26%20advertising!5e0!3m2!1sid!2sid!4v1719405752844!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-4">KAMI DIGITAL PRINTING</h3>
            <p class="mb-4 indent-5 text-gray-600">Salam perkenalan dari PT. Karya Merapi Indonesia, kami adalah perusahaan yang bergerak dibidang jasa penyediaan tenaga kerja kantor,kontruksi,advertising,promosi (outsourching ),penyediaan jasa pelaksanaan promosi( Trade & Consumer promo) & juga event organizer. kami adalah salah satu perusahaan yang berkomitmen dan berkompeten di bidangya.</p>
            <p class="mb-4 indent-5 text-gray-600">PT. Karya Merapi Indonesia berdiri pada tahun 2017 yang sebelumya adalah CV. Merapi Production didirikan pada tahun 2013 oleh para profesional yang mempunyai kompetensi dibidangnya.mengikuti perkembangan waktu serta dari pengalaman yang ada kami berusaha memberikan service yang terbaik dalam bidan advertising maupun di bidang event organizer.</p>
            <p class="mb-4 indent-5 text-gray-600">Perusahaan Kami berkomitmen selalu memberikan yang terbaik bagi klien sesuai dengan motto yang kami miliki“we make you to be best “ Harapan kami agar klien mempunyai Brand Experience yang baik saat mendapatkan layanan produk/jasa dari kami.</p>
            <div class="text-gray-600 mt-6">
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd"/>
                    </svg>
                    <p class="ml-2">Kontak: 0813-5925-4021</p>
                </div>
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"/>
                    </svg>
                    <p class="ml-2">Email: info@kamidigital.com</p>
                </div>
                <div class="flex items-center">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                        <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                    </svg>
                    <p class="ml-2">WhatsApp: 0813-5925-4021</p>
                </div>
            </div>
        </div>
    </main>

    <?php include 'partials/speed-dials.php' ?>                    
    <?php include 'partials/footer.php'?>
</body>
</html>
