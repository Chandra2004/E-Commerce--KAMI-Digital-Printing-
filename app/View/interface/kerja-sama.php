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
                KERJA SAMA - KAMI Digital Printing
            </h1>
        </div>
    </header>
    <main class="container mx-auto px-4 py-10">
        <section class="mb-16">
            <div class="bg-white rounded-lg py-10 px-6 shadow-lg">
                <?php if (isset($_GET['status-kerja-sama'])): ?>
                    <div class="<?php echo $_GET['status-kerja-sama'] === 'success' ? 'bg-green-200' : 'bg-red-200'; ?> p-2 rounded-md mb-4 font-bold text-center">
                        <?php echo $_GET['status-kerja-sama'] === 'success' ? 'Sukses Mengirim email!' : 'Gagal Mengirim email.'; ?>
                    </div>
                <?php endif; ?>
                <h3 class="text-lg font-bold text-center mb-4">KERJA SAMA</h3>
                <form action="<?= BASE_URL ?>/send/kerja-sama" method="POST">
                    <div class="mb-4">
                        <input type="hidden" id="tipe-mail" name="tipe-mail" value="Kerja Sama" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="company-name" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                        <input type="text" id="company-name" name="company-name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="subject_join" class="block text-sm font-medium text-gray-700">Subjek</label>
                        <input type="subject_join" id="subject_join" name="subject_join" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                    </div>
                    <button type="submit" name="submit_kerjaSama" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Kirim</button>
                </form>
            </div>
        </section>

        <section class="mb-16">
            <div class="bg-white rounded-lg py-10 px-6 shadow-lg">
                <?php if (isset($_GET['status-karir'])): ?>
                    <div class="<?php echo $_GET['status-karir'] === 'success' ? 'bg-green-200' : 'bg-red-200'; ?> p-2 rounded-md mb-4 font-bold text-center">
                        <?php echo $_GET['status-karir'] === 'success' ? 'Sukses Mengirim email!' : 'Gagal Mengirim email.'; ?>
                    </div>
                <?php endif; ?>
                <h3 class="text-lg font-bold text-center mb-4">KARIR</h3>
                <form action="<?= BASE_URL ?>/send/karir" method="POST">
                    <div class="mb-4">
                        <input type="hidden" id="tipe-mail" name="tipe-mail" value="Karir" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="full-name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="full-name" name="full-name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="subject_career" class="block text-sm font-medium text-gray-700">Subjek</label>
                        <input type="subject_career" id="subject_career" name="subject_career" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="position" class="block text-sm font-medium text-gray-700">Posisi yang Dilamar</label>
                        <input type="text" id="position" name="position" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <button type="submit" name="submit_karir" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Kirim</button>
                </form>
            </div>
        </section>
    </main>
    
    <?php include 'partials/speed-dials.php' ?>
    <?php include 'partials/footer.php'?>
</body>
</html>
