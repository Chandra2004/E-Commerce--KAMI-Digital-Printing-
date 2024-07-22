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
                SYARAT DAN KETENTUAN - KAMI Digital Printing
            </h1>
        </div>
    </header>
    <main class="container mx-auto px-4 py-10">
        <div class="rounded-lg p-10 shadow-2xl mb-16 bg-white">
            <h3 class="text-lg font-bold text-center mb-4">SYARAT DAN KETENTUAN</h3>
            <div class="p-10 mb-16">
                <!-- Isi dengan Syarat dan ketentuan Perusahaan Digital Printing Surabaya "KAMI" -->
                <p class="mb-4 text-gray-700">Selamat datang di KAMI Digital Printing. Dengan menggunakan layanan kami, Anda setuju untuk mematuhi syarat dan ketentuan yang ditetapkan di bawah ini.</p>
                
                <h3 class="font-semibold mb-2">1. Umum</h3>
                <p class="mb-4 text-gray-700 ml-4">KAMI Digital Printing berhak untuk mengubah syarat dan ketentuan ini kapan saja. Perubahan akan berlaku segera setelah diperbarui di situs web kami.</p>
                
                <h3 class="font-semibold mb-2">2. Layanan</h3>
                <p class="mb-4 text-gray-700 ml-4">Kami menyediakan berbagai layanan cetak digital. Detail layanan dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya.</p>
                
                <h3 class="font-semibold mb-2">3. Pembayaran</h3>
                <p class="mb-4 text-gray-700 ml-4">Pembayaran harus dilakukan sesuai dengan metode yang ditentukan. Kami berhak menahan atau membatalkan layanan jika pembayaran belum diterima.</p>
                
                <h3 class="font-semibold mb-2">4. Pengiriman</h3>
                <p class="mb-4 text-gray-700 ml-4">Waktu pengiriman yang tertera adalah perkiraan dan dapat berubah tergantung kondisi tertentu. Kami tidak bertanggung jawab atas keterlambatan yang disebabkan oleh pihak ketiga.</p>
                
                <h3 class="font-semibold mb-2">5. Kebijakan Pengembalian</h3>
                <p class="mb-4 text-gray-700 ml-4">Pengembalian hanya diterima jika terdapat cacat produksi. Klaim pengembalian harus diajukan maksimal 1 hari setelah barang diterima. Harap sertakan video yang menunjukkan cacat pada barang dan kirimkan melalui WhatsApp. (0813-5925-4021)</p>
                
                <h3 class="font-semibold mb-2">6. Privasi</h3>
                <p class="mb-4 text-gray-700 ml-4">Kami menghargai privasi Anda. Informasi pribadi Anda akan dijaga kerahasiaannya dan tidak akan dibagikan kepada pihak ketiga tanpa izin Anda.</p>
                
                <h3 class="font-semibold mb-2">7. Kontak</h3>
                <p class="mb-4 text-gray-700 ml-4">Jika Anda memiliki pertanyaan tentang syarat dan ketentuan ini, silakan hubungi kami melalui WhatsApp di nomor 0813-5925-4021.</p>
                </div>     
        </div>
    </main>
    
    <?php include 'partials/speed-dials.php' ?>
    <?php include 'partials/footer.php'?>
</body>
</html>
