<?php include 'partials/header.php' ?>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
    <!-- Main Content -->
    <main class="p-3">
        <!-- Section One -->
            <section>
                <div class="mb-4">
                    <span class="text-white font-semibold text-lg">Products</span>
                    <div class="flex items-center">
                        <span class="text-zinc-400 text-sm uppercase"><a href="<?= BASE_URL?>/dashboard" class="text-blue-600">Dashboard</a></span>
                        <span class="text-zinc-400 text-sm mx-2">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                            </svg>
                        </span>
                        <span class="text-zinc-400 text-sm uppercase">Products</span>
                    </div>
                </div>
            </section>
        <!-- End Section One -->

        <!-- Section Two -->
            <section>
                <div class="mx-auto">
                    <div class="bg-zinc-700 py-5 px-5 rounded-md mt-3">
                        <span class="text-white font-semibold text-lg">Create New Produk</span>
                        <div class="mt-3">
                            <form action="<?= BASE_URL ?>/dashboard/produk/create" method="POST" enctype="multipart/form-data" id="addProduct">
                                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                                    <div>
                                        <?php if (isset($_GET['required-photo'])): ?>
                                            <div class="<?php echo $_GET['required-photo'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                                <?php echo $_GET['required-photo'] === 'failed' ? 'Harus Mengirim Foto PNG atau JPG' : 'berhasil'; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (isset($_GET['name-found'])): ?>
                                            <div class="<?php echo $_GET['name-found'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                                <?php echo $_GET['name-found'] === 'failed' ? 'Nama sudah terpakai, tolong cari yang baru' : 'Nama Berhasil'; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (isset($_GET['status-addproduk'])): ?>
                                            <div class="<?php echo $_GET['status-addproduk'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                                <?php echo $_GET['status-addproduk'] === 'success' ? 'Produk Berhasil Ditambahkan' : 'Produk Gagal Ditambahkan'; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (isset($_GET['upload-photo'])): ?>
                                            <div class="<?php echo $_GET['upload-photo'] === 'failed' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                                <?php echo $_GET['upload-photo'] === 'failed' ? 'Maaf, terjadi kesalahan saat upload file' : 'Berhasil Upload Foto'; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (isset($_GET['size-file'])): ?>
                                            <div class="<?php echo $_GET['size-file'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                                <?php echo $_GET['size-file'] === 'failed' ? 'Maaf File Anda Harus Dibawah 1MB' : 'Size Berhasil'; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="flex justify-center items-center font-medium h-20 mb-2 text-sm rounded-lg text-zinc-800 bg-yellow-300">
                                            <ul class="">
                                                <li>Maks. Ukuran gambar 1MB</li>
                                                <li>Gambar Harus 1:1 (Persegi)</li>
                                            </ul>
                                        </div>
                                        <div class="w-full mb-3">
                                            <input id="" type="file" name="photo_produk" class="border border-gray-500 text-white w-full rounded-lg" placeholder="">
                                        </div>
                                        <div class="w-full mb-3">
                                            <input type="text" id="newtitle_produk" name="title_produk" oninput="newJudulSlug()" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Nama Produk">
                                        </div>
                                        <div class="w-full mb-3">
                                            <select id="rating" name="rating_produk" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                                <option value="No-Rated">No-Rated</option>
                                                <option value="1">1</option>
                                                <option value="1.2">1.2</option>
                                                <option value="1.3">1.3</option>
                                                <option value="1.4">1.4</option>
                                                <option value="1.5">1.5</option>
                                                <option value="2">2</option>
                                                <option value="2.2">2.2</option>
                                                <option value="2.3">2.3</option>
                                                <option value="2.4">2.4</option>
                                                <option value="2.5">2.5</option>
                                                <option value="3">3</option>
                                                <option value="3.2">3.2</option>
                                                <option value="3.3">3.3</option>
                                                <option value="3.4">3.4</option>
                                                <option value="3.5">3.5</option>
                                                <option value="4">4</option>
                                                <option value="4.2">4.2</option>
                                                <option value="4.3">4.3</option>
                                                <option value="4.4">4.4</option>
                                                <option value="4.5">4.5</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="w-full mb-3">
                                            <select id="cities" name="kota_produk" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                                <option value="No Cities">No Cities</option>
                                                <option value="Ambon">Ambon</option>
                                                <option value="Balikpapan">Balikpapan</option>
                                                <option value="Bandar Lampung">Bandar Lampung</option>
                                                <option value="Bandung">Bandung</option>
                                                <option value="Banjarmasin">Banjarmasin</option>
                                                <option value="Bekasi">Bekasi</option>
                                                <option value="Bogor">Bogor</option>
                                                <option value="Cirebon">Cirebon</option>
                                                <option value="Depok">Depok</option>
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Makassar">Makassar</option>
                                                <option value="Malang">Malang</option>
                                                <option value="Medan">Medan</option>
                                                <option value="Padang">Padang</option>
                                                <option value="Palembang">Palembang</option>
                                                <option value="Pekanbaru">Pekanbaru</option>
                                                <option value="Semarang">Semarang</option>
                                                <option value="Surabaya">Surabaya</option>
                                                <option value="Tangerang">Tangerang</option>
                                                <option value="Yogyakarta">Yogyakarta</option>
                                            </select>
                                        </div>
                                        <div class="w-full mb-3">
                                            <input type="text" id="" name="harga_produk" oninput="formatHarga(this)" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Harga">
                                            <script>
                                                function formatHarga(input) {
                                                    // Menghapus semua karakter selain angka
                                                    let harga = input.value.replace(/\D/g, '');

                                                    // Menambahkan titik setiap 3 digit dari belakang
                                                    harga = harga.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

                                                    // Memasukkan kembali hasil format ke dalam input
                                                    input.value = harga;
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="w-full mb-3">
                                            <input type="text" id="newslug_produk" name="slug_produk" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white/40 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Slug Nama Produk" readonly>
                                            <script>
                                                function newJudulSlug() {
                                                    // Mengambil nilai dari Input 1 (Judul Biasa)
                                                    var judulBiasa = document.getElementById('newtitle_produk').value;

                                                    // Mengubah tulisan menjadi lowercase
                                                    var judulLowerCase = judulBiasa.toLowerCase();

                                                    // Mengganti spasi dengan underscore (_) dan mengisi nilai ke Input 2 (Judul Slug)
                                                    var judulSlug = judulLowerCase.replace(/\s+/g, '-');
                                                    document.getElementById('newslug_produk').value = judulSlug;
                                                }
                                            </script>
                                        </div>
                                        <div class="w-full mb-3">
                                            <div class="p-2 bg-white rounded-md h-full">
                                                <div id="editor-container" class="shadow-sm border text-sm rounded-md h-96"></div>
                                                <input type="hidden" name="deskripsi_produk" id="content_description">
                                            </div>

                                            <!-- Include Quill library -->
                                            <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
                                            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                                            <script>
                                                var toolbarOptions = [
                                                    ['bold', 'italic', 'underline', 'strike'],
                                                    [{ 'header': 1 }, { 'header': 2 }],
                                                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                                    [{ 'indent': '-1'}, { 'indent': '+1' }],
                                                    [{ 'size': ['small', false, 'large', 'huge'] }],
                                                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                                                    [{ 'align': [] }],
                                                    ['link']
                                                ];

                                                var quill = new Quill('#editor-container', {
                                                    modules: {
                                                        toolbar: toolbarOptions
                                                    },
                                                    placeholder: 'Berikan Deskripsi Yang Jelas...',
                                                    theme: 'snow'
                                                });

                                                document.querySelector('#addProduct').onsubmit = function() {
                                                    var content = document.querySelector('#content_description');
                                                    content.value = quill.root.innerHTML.trim();
                                                };
                                            </script>
                                        </div>
                                        <div class="w-full mb-3">
                                            <select id="status" name="status_produk" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                                <option value="available">available</option>
                                                <option value="unavailable">unavailable</option>
                                            </select>
                                        </div>
                                        <div class="w-full mb-3">
                                            <button type="submit" name="addProduk" class="font-bold text-sm rounded-lg block w-full p-2.5 bg-green-600 text-white">Kirim Produk Baru</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        <!-- End Section Two -->

        <!-- Section Three -->
            <section>
                <div class="mx-auto">
                    <div class="bg-zinc-700 py-5 px-5 rounded-md mt-3">
                        <span class="text-white font-semibold text-lg mb-3">List Produk</span>
                        <?php if (isset($_GET['status-deleted'])): ?>
                            <div class="<?php echo $_GET['status-deleted'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                <?php echo $_GET['status-deleted'] === 'success' ? 'Produk Berhasil Dihapus' : 'Produk Gagal Dihapus'; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($_GET['status-update'])): ?>
                            <div class="<?php echo $_GET['status-update'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                <?php echo $_GET['status-update'] === 'success' ? 'Produk Berhasil Update' : 'Produk Gagal Update'; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($_GET['status-update-photo'])): ?>
                            <div class="<?php echo $_GET['status-update-photo'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                <?php echo $_GET['status-update-photo'] === 'failed' ? 'Update Foto Gagal' : 'Update Foto Berhasil'; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($_GET['status-update-photo-size'])): ?>
                            <div class="<?php echo $_GET['status-update-photo-size'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                <?php echo $_GET['status-update-photo-size'] === 'failed' ? 'Foto Melebihi Batas Ukuran' : 'Foto sukses'; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($_GET['status-update-photo-extension'])): ?>
                            <div class="<?php echo $_GET['status-update-photo-extension'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                <?php echo $_GET['status-update-photo-extension'] === 'failed' ? 'Foto Harus JPG atau PNG' : 'Foto sukses'; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($_GET['status-update-name'])): ?>
                            <div class="<?php echo $_GET['status-update-name'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                                <?php echo $_GET['status-update-name'] === 'failed' ? 'Nama Sudah Terdaftar' : 'Nama Sukses'; ?>
                            </div>
                        <?php endif; ?>
                        <div class="w-full bg-white/10 h-[250px] mt-3 rounded-lg overflow-auto">
                            <table class="w-full">
                                <thead class="uppercase text-zinc-700 bg-white">
                                    <tr>
                                        <th class="py-2 px-4 border-r-2 border-zinc-700 w-[15%]">action</th>
                                        <th class="py-2 px-4 border-r-2 border-zinc-700 w-[20%]">photo</th>
                                        <th class="py-2 px-4 border-r-2 border-zinc-700 w-[50%]">title</th>
                                        <th class="py-2 px-4 w-[10%]">info</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-zinc-500 text-white">
                                    <?php foreach ($model['totalProduk'] as $key) : ?>
                                        <tr class="border-b-2 border-zinc-700">
                                            <td class="p-2 border-r-2 border-zinc-700 text-center font-medium">
                                                <div class="flex items-center justify-center gap-2">
                                                    <form id="deleteForm" action="<?= BASE_URL ?>/dashboard/produk/delete" method="POST" style="display: inline;">
                                                        <input type="hidden" name="id" value="<?= $key["id_produk"]; ?>">
                                                        <button type="submit" name="deleteProduk" onclick="return confirm('Apakah Anda yakin ingin menghapus Produk ini?')" class="flex justify-center items-center bg-red-500 p-2 rounded-md">
                                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                                <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                    <span class="flex justify-center items-center cursor-pointer" data-modal-target="edit-modal<?= $key['id_produk'] ?>" data-modal-toggle="edit-modal<?= $key['id_produk'] ?>">
                                                        <span class="bg-green-500 p-2 rounded-md">
                                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="p-2 border-r-2 border-zinc-700 text-center font-medium">
                                                <span data-modal-target="photo-modal<?= $key['id_produk']; ?>" data-modal-toggle="photo-modal<?= $key['id_produk']; ?>" class="flex justify-center items-center cursor-pointer">
                                                    <span class="bg-blue-500 p-2 rounded-md">
                                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                            <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="p-2 border-r-2 border-zinc-700 text-center font-medium">
                                                <?= $key['title_produk'] ?>
                                            </td>
                                            <td class="p-2 text-center font-medium">
                                                <span data-modal-target="info-modal<?= $key['id_produk'] ?>" data-modal-toggle="info-modal<?= $key['id_produk'] ?>" class="flex justify-center items-center cursor-pointer" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button">
                                                    <span class="bg-orange-500 p-2 rounded-md">
                                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                        </svg>
                                                    </span>    
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Info Modal -->
            <?php foreach ($model['totalProduk'] as $key) : ?>
                <div id="info-modal<?= $key['id_produk'] ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-zinc-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-white">
                                    Info : <?= $key['title_produk'] ?>
                                </h3>
                                <button type="button" class="end-2.5 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center text-white" data-modal-hide="info-modal<?= $key['id_produk'] ?>">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <div class="w-full aspect-square rounded-md overflow-auto bg-white">
                                            <img src="<?= BASE_URL ?>/assets/img/eksternal/produk/<?= $key['photo_produk'] ?>" onerror="this.src='<?= BASE_URL ?>/assets/img/eksternal/produk/err/errorBanner.png';" alt="<?= $key['title_produk'] ?>">
                                        </div>
                                    </div>
                                    <div class="w-full p-2 aspect-square border border-zinc-600 rounded-md overflow-auto">
                                        <span class="text-white text-lg">Title : <span class="font-semibold"><?= $key['title_produk'] ?></span></span><br>
                                        <span class="text-white text-lg">Slug Title : <span class="font-semibold"><?= $key['slug_produk'] ?></span></span><br>
                                        <span class="text-white text-lg">Rating : <span class="font-semibold"><?= $key['rating_produk'] ?></span></span><br>
                                        <span class="text-white text-lg">Kota : <span class="font-semibold"><?= $key['kota_produk'] ?></span></span><br>
                                        <span class="text-white text-lg">Harga : <span class="font-semibold"><?= $key['harga_produk'] ?></span></span><br>
                                        <div>
                                            <span class="text-white text-lg">Deskripsi :</span><br>
                                            <div class="rounded-md w-full bg-zinc-900 p-2">
                                                <span class="font-semibold text-white text-lg"><?= $key['deskripsi_produk'] ?></span><br>
                                            </div>
                                        </div>
                                        <span class="text-white text-lg">Status Produk : <span class="font-semibold"><?= $key['status_produk'] ?></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- End Info Modal -->

            <!-- Photo Modal -->
            <?php foreach ($model['totalProduk'] as $key) : ?>
                <div id="photo-modal<?= $key['id_produk']; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-zinc-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-white">
                                    Photo : <?= $key['title_produk']; ?>
                                </h3>
                                <button type="button" class="end-2.5 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center text-white" data-modal-hide="photo-modal<?= $key['id_produk']; ?>">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <div class="w-full aspect-square bg-white rounded-md overflow-auto">
                                    <img src="<?= BASE_URL ?>/assets/img/eksternal/produk/<?= $key['photo_produk']; ?>" onerror="this.src='<?= BASE_URL ?>/assets/img/eksternal/produk/err/error-produk/errorBanner.png';" alt="<?= $key['title_produk']; ?>">
                                </div>
                                <div class=" p-4 bg-white block rounded-md mt-4 text-center">
                                    <a target="_blank" class="text-blue-500 underline italic" href="<?= BASE_URL ?>/produk/pesan/<?= $key['slug_produk']; ?>"><?= $key['slug_produk']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- End Photo Modal -->

            <!-- Edit Modal -->
            <?php foreach ($model['totalProduk'] as $key) : ?>
                <div id="edit-modal<?= $key['id_produk']; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-zinc-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-white">
                                    Edit : <?= $key['title_produk']; ?>
                                </h3>
                                <button type="button" class="end-2.5 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center text-white" data-modal-hide="edit-modal<?= $key['id_produk']; ?>">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <form action="<?= BASE_URL ?>/dashboard/produk/update" method="POST" id="updateProduct<?= $key['id_produk']; ?>" enctype="multipart/form-data">
                                    <div class="w-full flex justify-center items-center font-medium h-20 mb-3 text-sm rounded-lg text-zinc-800 bg-yellow-300">
                                        <ul class="">
                                            <li>Maks. Ukuran gambar 1MB</li>
                                            <li>Gambar Harus 1:1 (Persegi)</li>
                                        </ul>
                                    </div>
                                    <div class="w-full mb-3">
                                        <input id="" type="file" name="photo_produk" class="border border-gray-500 text-white w-full rounded-lg" placeholder="">
                                    </div>
                                    <div class="w-full mb-3">
                                        <input value="<?= $key['id_produk']; ?>" type="hidden" id="id" name="id_produk" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" readonly>
                                    </div>
                                    <div class="w-full mb-3">
                                        <input value="<?= $key['title_produk']; ?>" type="text" id="title_produk_<?= $key['id_produk']?>" name="title_produk" oninput="updateJudulSlug<?= $key['id_produk']?>()" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Nama Produk">
                                    </div>
                                    <div class="w-full mb-3">
                                        <input value="<?= $key['slug_produk']; ?>" type="text" id="slug_produk_<?= $key['id_produk']?>" name="slug_produk" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white/40 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Slug Nama Produk" readonly>
                                        <script>
                                            function updateJudulSlug<?= $key['id_produk']?>() {
                                                // Mengambil nilai dari Input 1 (Judul Biasa)
                                                var judulBiasa<?= $key['id_produk']?> = document.getElementById('title_produk_<?= $key['id_produk']?>').value;

                                                var judulLowerCase<?= $key['id_produk']?> = judulBiasa<?= $key['id_produk']?>.toLowerCase();

                                                // Mengganti spasi dengan underscore (_) dan mengisi nilai ke Input 2 (Judul Slug)
                                                var judulSlug<?= $key['id_produk']?> = judulLowerCase<?= $key['id_produk']?>.replace(/\s+/g, '-');
                                                document.getElementById('slug_produk_<?= $key['id_produk']?>').value = judulSlug<?= $key['id_produk']?>;
                                            }
                                        </script>
                                    </div>
                                    <div class="w-full mb-3">
                                        <select id="rating" name="rating_produk" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                            <option value="No-Rated">No-Rated</option>
                                            <option value="1">1</option>
                                            <option value="1.2">1.2</option>
                                            <option value="1.3">1.3</option>
                                            <option value="1.4">1.4</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2">2</option>
                                            <option value="2.2">2.2</option>
                                            <option value="2.3">2.3</option>
                                            <option value="2.4">2.4</option>
                                            <option value="2.5">2.5</option>
                                            <option value="3">3</option>
                                            <option value="3.2">3.2</option>
                                            <option value="3.3">3.3</option>
                                            <option value="3.4">3.4</option>
                                            <option value="3.5">3.5</option>
                                            <option value="4">4</option>
                                            <option value="4.2">4.2</option>
                                            <option value="4.3">4.3</option>
                                            <option value="4.4">4.4</option>
                                            <option value="4.5">4.5</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="w-full mb-3">
                                        <select id="cities" name="kota_produk" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                            <option value="No Cities">No Cities</option>
                                            <option value="Ambon">Ambon</option>
                                            <option value="Balikpapan">Balikpapan</option>
                                            <option value="Bandar Lampung">Bandar Lampung</option>
                                            <option value="Bandung">Bandung</option>
                                            <option value="Banjarmasin">Banjarmasin</option>
                                            <option value="Bekasi">Bekasi</option>
                                            <option value="Bogor">Bogor</option>
                                            <option value="Cirebon">Cirebon</option>
                                            <option value="Depok">Depok</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Makassar">Makassar</option>
                                            <option value="Malang">Malang</option>
                                            <option value="Medan">Medan</option>
                                            <option value="Padang">Padang</option>
                                            <option value="Palembang">Palembang</option>
                                            <option value="Pekanbaru">Pekanbaru</option>
                                            <option value="Semarang">Semarang</option>
                                            <option value="Surabaya">Surabaya</option>
                                            <option value="Tangerang">Tangerang</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                        </select>
                                    </div>
                                    <div class="w-full mb-3">
                                        <input value="<?= $key['harga_produk']; ?>" type="text" id="" name="harga_produk" oninput="formatHarga(this)" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Harga">
                                        <script>
                                            function formatHarga(input) {
                                                // Menghapus semua karakter selain angka
                                                let harga = input.value.replace(/\D/g, '');

                                                // Menambahkan titik setiap 3 digit dari belakang
                                                harga = harga.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

                                                // Memasukkan kembali hasil format ke dalam input
                                                input.value = harga;
                                            }
                                        </script>
                                    </div>
                                    <div class="w-full mb-3">
                                        <!-- <textarea name="deskripsi_produk" id="" placeholder="Masukkan Deskripsi Produk" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"><?= $key['deskripsi_produk']; ?></textarea> -->
                                        <div class="p-2 bg-white rounded-md">
                                            <div id="editor-container-update<?= $key['id_produk']; ?>" class="shadow-sm border text-sm rounded-md h-[500px]"></div>
                                            <input type="hidden" name="deskripsi_produk" id="content_description_update<?= $key['id_produk']; ?>">
                                        </div>
                                        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                                        <script>
                                            var toolbarOptions<?= $key['id_produk']; ?> = [
                                                ['bold', 'italic', 'underline', 'strike'],
                                                [{ 'header': 1 }, { 'header': 2 }],
                                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                                [{ 'indent': '-1'}, { 'indent': '+1' }],
                                                [{ 'size': ['small', false, 'large', 'huge'] }],
                                                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                                                [{ 'align': [] }],
                                                ['link']
                                            ];
                                        
                                            var quill<?= $key['id_produk']; ?> = new Quill('#editor-container-update<?= $key['id_produk']; ?>', {
                                                modules: {
                                                    toolbar: toolbarOptions<?= $key['id_produk']; ?>
                                                },
                                                placeholder: 'Berikan Deskripsi Yang Jelas...',
                                                theme: 'snow'
                                            });

                                            // Set editor content to the existing content from the database
                                            var existingContent<?= $key['id_produk']; ?> = <?= json_encode($key['deskripsi_produk']); ?>;
                                            if (existingContent<?= $key['id_produk']; ?>) {
                                                quill<?= $key['id_produk']; ?>.root.innerHTML = existingContent<?= $key['id_produk']; ?>;
                                            }
                                        
                                            document.querySelector('#updateProduct<?= $key['id_produk']; ?>').onsubmit = function() {
                                                var content<?= $key['id_produk']; ?> = document.querySelector('#content_description_update<?= $key['id_produk']; ?>');
                                                content<?= $key['id_produk']; ?>.value = quill<?= $key['id_produk']; ?>.root.innerHTML.trim();
                                            };
                                        </script>
                                    </div>
                                    <div class="w-full mb-3">
                                        <select id="status" name="status_produk" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                            <option value="available">available</option>
                                            <option value="unavailable">unavailable</option>
                                        </select>
                                    </div>
                                    <div class="w-full mb-3">
                                        <button type="submit" name="submit_upProduk" class="font-bold text-sm rounded-lg block w-full p-2.5 bg-green-600 text-white">Update Produk Ini</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- End Edit Modal -->
        <!-- End Section Three -->
    </main>
    <!-- End Main Content -->

<?php include 'partials/footer.php' ?>