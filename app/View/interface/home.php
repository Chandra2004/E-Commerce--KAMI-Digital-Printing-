<?php
require __DIR__ . '/partials/header.php';
?>

<main class="px-2 mb-10">
    <!-- Banner Iklan Internal -->
    <div class="grid grid-cols-2 gap-2 mt-2">
        <div id="custom-controls-gallery" class="relative" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div id="square" class="relative aspect-auto h-full overflow-hidden rounded-lg">
                <?php foreach ($model['ads_banner'] as $banner) : ?>
                    <?php if ($banner['posisi_banner'] == 'Banner-1') : ?>
                        <!-- Item 1 -->
                        <a href="<?= $banner['link_banner'] ?>" target="_blank">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" class="h-full aspect-square" alt="<?= $banner['nama_banner'] ?>">
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php foreach ($model['ads_banner'] as $banner) : ?>
                    <?php if ($banner['posisi_banner'] == 'Banner-2') : ?>
                        <!-- Item 1 -->
                        <a href="<?= $banner['link_banner'] ?>" target="_blank">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" class="h-full aspect-square" alt="<?= $banner['nama_banner'] ?>">
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php foreach ($model['ads_banner'] as $banner) : ?>
                    <?php if ($banner['posisi_banner'] == 'Banner-3') : ?>
                        <!-- Item 1 -->
                        <a href="<?= $banner['link_banner'] ?>" target="_blank">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" class="h-full aspect-square" alt="<?= $banner['nama_banner'] ?>">
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php foreach ($model['ads_banner'] as $banner) : ?>
                    <?php if ($banner['posisi_banner'] == 'Banner-4') : ?>
                        <!-- Item 1 -->
                        <a href="<?= $banner['link_banner'] ?>" target="_blank">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" class="h-full aspect-square" alt="<?= $banner['nama_banner'] ?>">
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php foreach ($model['ads_banner'] as $banner) : ?>
                    <?php if ($banner['posisi_banner'] == 'Banner-5') : ?>
                        <!-- Item 1 -->
                        <a href="<?= $banner['link_banner'] ?>" target="_blank">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" class="h-full aspect-square" alt="<?= $banner['nama_banner'] ?>">
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php foreach ($model['ads_banner'] as $banner) : ?>
                    <?php if ($banner['posisi_banner'] == 'Banner-6') : ?>
                        <!-- Item 1 -->
                        <a href="<?= $banner['link_banner'] ?>" target="_blank">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" class="h-full aspect-square" alt="<?= $banner['nama_banner'] ?>">
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="flex flex-col gap-y-2">
            <div id="split" class="h-1/2 overflow-hidden rounded-lg">
                <?php foreach ($model['ads_banner'] as $banner) : ?>
                    <?php if ($banner['posisi_banner'] == 'Banner-7') : ?>
                        <a href="<?= $banner['link_banner'] ?>" target="_blank">
                            <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" alt="<?= $banner['nama_banner'] ?>">
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div id="split" class="h-1/2 overflow-hidden rounded-lg">
                <?php foreach ($model['ads_banner'] as $banner) : ?>
                    <?php if ($banner['posisi_banner'] == 'Banner-8') : ?>
                        <a href="<?= $banner['link_banner'] ?>" target="_blank">
                            <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" alt="<?= $banner['nama_banner'] ?>">
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Space Iklan Google Adsense -->
    <div class="mt-2 p-8 bg-gray-100 rounded-lg text-center">
        <span class="text-gray-500">Your Google Adsense Ad Here</span>
        <!-- Contoh tag iklan Google Adsense -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <!-- Iklan UMKM -->
    <?php foreach ($model['ads_banner'] as $banner) : ?>
        <?php if ($banner['posisi_banner'] == 'Banner-9') : ?>
            <div class="bg-gray-100 rounded-lg overflow-hidden text-center aspect-video mt-2">
                <a target="_blank" href="<?= $banner['link_banner'] ?>">
                    <img src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $banner['image_banner'] ?>" alt="<?= $banner['nama_banner'] ?>">
                </a>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Product -->
    <div class="mt-6 mb-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="font-medium text-xl">Rekomendasi</h2>
            <a href="<?= BASE_URL ?>/produk" class="flex ">
                Lihat lebih
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 gap-2">
            <?php
            $counter = 0;
            $limit = 4;

            foreach ($model['produk'] as $produk) :
            ?>
                <?php
                if ($counter >= $limit) {
                    break;
                }
                ?>
                <?php if ($produk['status_produk'] === 'unavailable') : ?>
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <div class="relative">
                            <?php if ($produk['status_produk'] === 'unavailable') : ?>
                                <span class="text-sm bg-red-600 py-0.5 px-2 rounded-md text-white absolute right-2 top-2 z-10">
                                    Stok Habis
                                </span>
                            <?php endif; ?>
                            <img class="rounded-t-lg" src="<?= BASE_URL ?>/assets/img/eksternal/produk/<?= $produk['photo_produk']; ?>" alt="<?= $produk['title_produk']; ?>" />
                        </div>
                        <div class="px-2 mt-2 pb-2">
                            <h5 class="text-lg font-medium break-words line-clamp-2 leading-tight mb-1"><?= $produk['title_produk']; ?></h5>
                            <h6 class="text-2xl font-bold text-blue-600 mb-2 flex items-center"><span class="text-lg">Rp</span> <?= $produk['harga_produk']; ?></h6>
                            <div class="flex items-center justify-center text-sm">
                                <p class="inline-flex items-center bg-yellow-300/50 px-2 rounded-md border border-yellow-600 text-[10px] font-bold">
                                    <svg class="w-4 h-4 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                    </svg>&nbsp;
                                    <?= $produk['rating_produk']; ?>
                                </p>
                                <hr class="rotate-90 border border-zinc-800/20 w-5">
                                <p class="inline-flex items-center bg-blue-300/50 px-2 rounded-md border border-blue-600 text-[10px] font-bold">
                                    <svg class="w-4 h-4 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd" />
                                    </svg>&nbsp;
                                    <?= $produk['kota_produk']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <a href="<?= BASE_URL ?>/produk/pesan/<?= $produk['slug_produk']; ?>">
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <div class="relative">
                                <span class="text-sm bg-green-600 py-0.5 px-2 rounded-md text-white absolute right-2 top-2 z-10">
                                    Ada Stok
                                </span>
                                <img class="rounded-t-lg" src="<?= BASE_URL ?>/assets/img/eksternal/produk/<?= $produk['photo_produk']; ?>" alt="<?= $produk['title_produk']; ?>" />
                            </div>
                            <div class="px-2 mt-2 pb-2">
                                <h5 class="text-lg font-medium break-words line-clamp-2 leading-tight mb-1"><?= $produk['title_produk']; ?></h5>
                                <h6 class="text-2xl font-bold text-blue-600 mb-2 flex items-center"><span class="text-lg">Rp</span> <?= $produk['harga_produk']; ?></h6>
                                <div class="flex items-center justify-center text-sm">
                                    <p class="inline-flex items-center bg-yellow-300/50 px-2 rounded-md border border-yellow-600 text-[10px] font-bold">
                                        <svg class="w-4 h-4 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>&nbsp;
                                        <?= $produk['rating_produk']; ?>
                                    </p>
                                    <hr class="rotate-90 border border-zinc-800/20 w-5">
                                    <p class="inline-flex items-center bg-blue-300/50 px-2 rounded-md border border-blue-600 text-[10px] font-bold">
                                        <svg class="w-4 h-4 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd" />
                                        </svg>&nbsp;
                                        <?= $produk['kota_produk']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
                <?php
                $counter++
                ?>
            <?php
            endforeach;
            ?>
        </div>

        <div class="text-center mt-6">
            <a href="<?= BASE_URL ?>/produk">
                <span class="font-semibold">Lihat Produk Lainnya</span>
                <svg class="w-10 h-10 mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 7 4 4 4-4m-8 6 4 4 4-4" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Iklan UMKM -->
    <?php foreach ($model['ads_banner'] as $banner) : ?>
        <?php if ($banner['posisi_banner'] == 'Banner-10') : ?>
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
require __DIR__ . '/partials/footer.php';
?>