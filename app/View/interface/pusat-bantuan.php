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
                PUSAT BANTUAN - KAMI Digital Printing
            </h1>
        </div>
    </header>
    <main class="container mx-auto px-4 py-10">
        <div class="rounded-lg p-10 shadow-2xl mb-16 bg-white">
            <h3 class="text-lg font-bold text-center mb-4">PUSAT BANTUAN</h3>
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-gray-900" data-inactive-classes="text-gray-500">
                <h2 id="accordion-flush-heading-1">
                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>Apa itu KAMI Digital Printing and Advertising?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                  <div class="py-5 border-b border-gray-200">
                    <p class="mb-2 text-gray-500">KAMI Digital Printing and Advertising adalah perusahaan yang berbasis di Surabaya, Sawahan. Kami menawarkan berbagai layanan digital printing dan periklanan untuk membantu bisnis Anda dalam mencetak dan mempromosikan produk dengan hasil yang berkualitas tinggi.</p>
                  </div>
                </div>
                <h2 id="accordion-flush-heading-2">
                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                    <span>Jenis layanan apa saja yang ditawarkan?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                  <div class="py-5 border-b border-gray-200">
                    <p class="mb-2 text-gray-500">Kami menyediakan berbagai layanan termasuk cetak brosur, spanduk, banner, poster, kartu nama, dan produk periklanan lainnya. Kami juga menawarkan layanan desain grafis untuk membantu Anda membuat materi pemasaran yang menarik.</p>
                  </div>
                </div>
                <h2 id="accordion-flush-heading-3">
                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                    <span>Bagaimana cara melakukan pemesanan?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                  <div class="py-5 border-b border-gray-200">
                    <p class="mb-2 text-gray-500">Untuk melakukan pemesanan, Anda dapat mengunjungi kantor kami di Surabaya, Sawahan, atau menghubungi kami melalui telepon dan email. Kami juga menyediakan formulir pemesanan di situs web kami untuk kenyamanan Anda. Tim kami akan membantu Anda dari tahap perencanaan hingga penyelesaian proyek.</p>
                  </div>
                </div>
                <h2 id="accordion-flush-heading-4">
                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                    <span>Apa saja yang perlu disiapkan sebelum melakukan pemesanan?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                  <div class="py-5 border-b border-gray-200">
                    <p class="mb-2 text-gray-500">Sebelum melakukan pemesanan, pastikan Anda memiliki desain yang siap untuk dicetak atau siap untuk didesain. Jika Anda tidak memiliki desain, tim desain kami dapat membantu Anda membuat desain yang sesuai dengan kebutuhan Anda. Selain itu, pastikan untuk menentukan jumlah, ukuran, dan jenis produk yang diinginkan.</p>
                  </div>
                </div>
                <h2 id="accordion-flush-heading-5">
                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
                    <span>Berapa lama waktu proses produksi?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                  <div class="py-5 border-b border-gray-200">
                    <p class="mb-2 text-gray-500">Waktu proses produksi bervariasi tergantung pada jenis dan kompleksitas produk yang dipesan. Secara umum, produk standar dapat diselesaikan dalam 3-7 hari kerja. Untuk pesanan khusus atau jumlah besar, waktu produksi bisa lebih lama. Kami akan memberikan estimasi waktu penyelesaian setelah menerima detail pemesanan Anda.</p>
                  </div>
                </div>
            </div>
              
        </div>
    </main>
    
    <?php include 'partials/speed-dials.php' ?>
    <?php include 'partials/footer.php'?>
</body>
</html>
