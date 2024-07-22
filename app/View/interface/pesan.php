<?php if ($model['detail']) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="<?= BASE_URL ?>/assets/img/internal/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/img/internal/favicon.png" type="image/x-icon">
        <title><?= $model['detail']['title_produk'] ?> | KAMI Digital Printing</title>

        <!-- Tailwindcss CDN -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Flowbite CDN -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

        <meta property="og:title" content="<?= $model['detail']['title_produk'] ?> | <?= $model['detail']['kota_produk'] ?> | KAMI Digital Printing & Advertising">
        <meta property="og:description" content="KAMI Digital Printing & Advertising menawarkan layanan digital printing berkualitas tinggi di Surabaya. Hubungi kami untuk berbagai kebutuhan cetak Anda.">
        <meta property="og:image" content="<?= BASE_URL ?>/assets/img/eksternal/produk/<?= $model['detail']['photo_produk'] ?>">
        <meta property="og:url" content="<?= DOMAIN ?>">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="id_ID">

        <script>
            function checkScreenSize() {
                const mdBreakpoint = window.matchMedia('(min-width: 768px)');
                if (mdBreakpoint.matches) {
                    window.location.href = '<?= BASE_URL ?>/unable-device';
                }
            }
            window.onload = checkScreenSize;
            window.onresize = checkScreenSize;
        </script>

        <style>
            .ql-align-right {
                text-align: right;
            }

            .ql-align-justify {
                text-align: justify;
            }

            .ql-indent-1 {
                margin-left: 40px;
                list-style-type: circle;
            }

            .ql-indent-2 {
                margin-left: 60px;
                list-style-type: disc;
            }

            .ql-indent-3 {
                margin-left: 80px;
            }

            .ql-indent-4 {
                margin-left: 100px;
            }

            .ql-indent-5 {
                margin-left: 120px;
            }

            ul li {
                list-style-type: disc;
                margin-left: 20px;
            }

            ol li {
                list-style-type: decimal;
                margin-left: 20px;
            }

            #deskripsi h1 {
                font-size: 34px;
                font-weight: bold;
            }

            #deskripsi h2 {
                font-size: 30px;
                font-weight: bold;
            }

            #deskripsi h3 {
                font-size: 24px;
                font-weight: bold;
            }

            #deskripsi h4 {
                font-size: 20px;
                font-weight: bold;
            }

            #deskripsi h5 {
                font-size: 18px;
                font-weight: bold;
            }

            #deskripsi h6 {
                font-size: 16px;
                font-weight: bold;
            }

            #deskripsi a {
                color: #0044CC;
            }
        </style>
    </head>

    <body>
        <main class="px-2 mb-10">
            <div class="flex items-center py-4">
                <a href="<?= BASE_URL ?>/produk" class="ml-5">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                </a>
                <h1 class="absolute font-bold text-center w-[70%] left-1/2 transform -translate-x-1/2 line-clamp-2">
                    <?= $model['detail']['title_produk'] ?>
                </h1>
            </div>
            <hr class="w-[95%] mx-auto">

            <!-- Iklan UMKM -->
            <?php foreach ($model['ads_banner'] as $banner) : ?>
                <?php if ($banner['posisi_banner'] == 'Banner-13') : ?>
                    <div class="bg-gray-100 rounded-lg overflow-hidden text-center aspect-video mt-2">
                        <a target="_blank" href="<?= $banner['link_banner'] ?>">
                            <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" alt="<?= $banner['nama_banner'] ?>">
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

            <div class="w-full mt-6 pb-6 bg-white border border-gray-200 rounded-lg shadow">
                <div class="relative">
                    <?php if ($model['detail']['status_produk'] === 'unavailable') : ?>
                        <span class="text-sm bg-red-600 py-0.5 px-2 rounded-md text-white absolute right-2 top-2 z-10">
                            Stok Habis
                        </span>
                    <?php endif; ?>
                    <?php if ($model['detail']['status_produk'] === 'available') : ?>
                        <span class="text-sm bg-green-600 py-0.5 px-2 rounded-md text-white absolute right-2 top-2 z-10">
                            Ada Stok
                        </span>
                    <?php endif; ?>
                    <img class="rounded-t-lg" src="<?= BASE_URL ?>/assets/img/eksternal/produk/<?= $model['detail']['photo_produk'] ?>" alt="product image" />
                </div>
                <div class="px-2 mt-2 pb-2">
                    <h5 class="text-lg font-medium break-words line-clamp-2 leading-tight mb-1">
                        <?= $model['detail']['title_produk'] ?>
                    </h5>
                    <h6 class="text-2xl font-bold text-blue-600 mb-2">
                        <span class="text-lg">Rp</span> <?= $model['detail']['harga_produk'] ?>
                    </h6>
                    <div class="flex items-center justify-center text-sm">
                        <p class="inline-flex items-center bg-yellow-300/50 px-2 rounded-md border border-yellow-600">
                            <svg class="w-4 h-4 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>&nbsp;
                            <?= $model['detail']['rating_produk'] ?>
                        </p>
                        <hr class="rotate-90 border border-zinc-800/20 w-5">
                        <p class="inline-flex items-center bg-blue-300/50 px-2 rounded-md border border-blue-600">
                            <svg class="w-4 h-4 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd" />
                            </svg>&nbsp;
                            <?= $model['detail']['kota_produk'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <div id="accordion-collapse" data-accordion="collapse" class="my-4 border border-gray-200 rounded-lg shadow">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span class="">Deskripsi Produk</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div id="deskripsi" class="p-5 border border-b-0 border-gray-200">
                        <?= $model['detail']['deskripsi_produk'] ?>
                    </div>
                </div>
            </div>

            <div class="w-full bg-gray-100 rounded-lg p-6">
                <h3 class="text-xl font-bold mb-4">Order Form</h3>

                <form action="<?= BASE_URL ?>/produk/pesan" method="POST">
                    <input type="hidden" id="title" name="title" value="<?= $model['detail']['title_produk'] ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <input type="hidden" id="slug" name="slug" value="<?= $model['detail']['slug_produk'] ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <input type="hidden" id="harga" name="harga" value="<?= $model['detail']['harga_produk'] ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Pemesan</label>
                        <input type="text" id="nama" name="nama" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="no_hp" class="block text-sm font-medium text-gray-700">No. HP Pemesan</label>
                        <input type="text" id="no_hp" name="no_hp" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Pemesan</label>
                        <input type="text" id="alamat" name="alamat" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan</label>
                            <input type="text" id="kelurahan" name="kelurahan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div class="mb-4">
                            <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="kota_kab" class="block text-sm font-medium text-gray-700">Kota/Kabupaten</label>
                        <input type="text" id="kota_kab" name="kota_kab" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="kode_pos" class="block text-sm font-medium text-gray-700">Kode Pos</label>
                        <input type="text" id="kode_pos" name="kode_pos" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-md">
                        <p class="text-sm">
                            <strong>Perhatian:</strong><br>
                            - Jika tidak memiliki File Design (Ingin diDesignkan) maka isi Level Design.<br>
                            - Jika ingin point Pertama terlaksana berikan deskripsi secara rinci dan mudah dimengerti.<br>
                            - Jika memiliki file design mohon setelah mengirim form ini, kirim file tersebut melalui WhatsApp.
                        </p>
                    </div>
                    <div class="mb-4">
                        <label for="revisi" class="block text-sm font-medium text-gray-700">Jumlah Revisi</label>
                        <select id="revisi" name="revisi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="Tanpa Revisi">Tanpa Revisi Tambahan</option>
                            <option value="Revisi 1">Revisi 1x</option>
                            <option value="Revisi 2">Revisi 2x</option>
                            <option value="Revisi 3">Revisi 3x</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="level_design" class="block text-sm font-medium text-gray-700">Level Design</label>
                        <select id="level_design" name="level_design" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="Kirim File">Kirim File</option>
                            <option value="D-Biasa Rp 15.000">Design Biasa - Rp 15.000,-</option>
                            <option value="D-Sedang Rp 25.000">Design Sedang - Rp 25.000,-</option>
                            <option value="D-Bagus Rp 50.000">Design Bagus - Rp 50.000,-</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="pengerjaan" class="block text-sm font-medium text-gray-700">Pengerjaan</label>
                        <select id="pengerjaan" name="pengerjaan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="Standard - Rp 0,-">Standard - Rp 0,- ( Estimasi 1 hari)</option>
                            <option value="Express - Rp 20.000,-">Express - Rp 20.000,- ( Langsung Jadi)</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="3" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center">
                            <input id="persetujuan1" name="persetujuan1" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="persetujuan1" class="ml-2 block text-sm text-gray-900">Saya memahami bahwa setiap revisi tambahan mungkin dikenakan biaya tambahan</label>
                        </div>
                        <div class="flex items-center mt-2">
                            <input id="persetujuan2" name="persetujuan2" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="persetujuan2" class="ml-2 block text-sm text-gray-900">Saya memberikan izin untuk menggunakan desain ini untuk keperluan yang telah dijelaskan</label>
                        </div>
                        <div class="flex items-center mt-2">
                            <input id="persetujuan3" name="persetujuan3" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="persetujuan3" class="ml-2 block text-sm text-gray-900">Saya bertanggung jawab atas keakuratan informasi yang disediakan</label>
                        </div>
                        <div class="flex items-center mt-2">
                            <input id="persetujuan4" name="persetujuan4" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="persetujuan4" class="ml-2 block text-sm text-gray-900">Saya bersedia memesan produk ini</label>
                        </div>
                    </div>
                    <?php if ($model['detail']['status_produk'] === 'available') : ?>
                        <button type="submit" class="py-4 rounded-md font-bold text-white bg-green-600 hover:bg-green-700 w-full">
                            Pesan Sekarang
                        </button>
                    <?php else : ?>
                        <div class="py-4 rounded-md font-bold text-white bg-red-600 hover:bg-red-700 w-full text-center">
                            Produk Telah Habis
                        </div>
                    <?php endif; ?>
                </form>
            </div>

            <!-- Iklan UMKM -->
            <?php foreach ($model['ads_banner'] as $banner) : ?>
                <?php if ($banner['posisi_banner'] == 'Banner-14') : ?>
                    <div class="bg-gray-100 rounded-lg overflow-hidden text-center aspect-video mt-2">
                        <a target="_blank" href="<?= $banner['link_banner'] ?>">
                            <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" alt="<?= $banner['nama_banner'] ?>">
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- Space Iklan Google Adsense -->
            <div class="mt-2 p-8 bg-gray-100 rounded-lg text-center">
                <span class="text-gray-500">Your Google Adsense Ad Here</span>
                <!-- Contoh tag iklan Google Adsense -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </main>
        <?php
        require __DIR__ . '/partials/speed-dials.php';
        ?>
        <!-- Flowbite JS CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>

    </html>

<?php else : ?>
    <?php
    header('Location: ' . BASE_URL . '/404');
    exit();
    ?>
<?php endif; ?>