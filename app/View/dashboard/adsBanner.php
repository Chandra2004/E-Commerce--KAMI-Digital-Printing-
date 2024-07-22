<?php include 'partials/header.php' ?>
<?php if ($_SESSION['role'] == 'admin') : ?>

    <!-- Main Content -->
    <main class="p-3">
        <!-- Section One -->
        <section>
            <div class="mb-4">
                <span class="text-white font-semibold text-lg">Ads Banner</span>
                <div class="flex items-center">
                    <span class="text-zinc-400 text-sm uppercase"><a href="<?= BASE_URL ?>/dashboard" class="text-blue-600">Dashboard</a></span>
                    <span class="text-zinc-400 text-sm mx-2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                        </svg>
                    </span>
                    <span class="text-zinc-400 text-sm uppercase">Ads Banner</span>
                </div>
            </div>
        </section>
        <!-- End Section One -->

        <!-- Section Two -->
        <section class="pb-6">
            <form action="<?= BASE_URL ?>/dashboard/ads-banner/upload" method="POST" enctype="multipart/form-data">
                <div class="md:w-1/2 mx-auto">
                    <?php if (isset($_GET['status-created'])): ?>
                        <div class="<?php echo $_GET['status-created'] === 'position-taken' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                            <?php echo $_GET['status-created'] === 'position-taken' ? 'Posisi Banner Sudah Terisi' : 'Posisi Banner Berhasil Terisi'; ?>                    
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_GET['status-banner'])): ?>
                        <div class="<?php echo $_GET['status-banner'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                            <?php echo $_GET['status-banner'] === 'success' ? 'Banner Berhasil Terisi' : 'Banner Gagal Terisi'; ?>                    
                        </div>
                    <?php endif; ?>
                    <div class="bg-zinc-700 py-5 px-5 rounded-md">
                        <span class="text-white font-semibold text-lg">Ads Banner</span>
                        <div class="mt-3">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="file" name="image_banner" id="image_banner" required>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="nama_banner" id="nama_banner" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                                <label for="nama_banner" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Banner</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="link_banner" id="link_banner" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                                <label for="link_banner" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Link Banner</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <select name="posisi_banner" id="posisi_banner" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer">
                                    <option value="Banner-1">1</option>
                                    <option value="Banner-2">2</option>
                                    <option value="Banner-3">3</option>
                                    <option value="Banner-4">4</option>
                                    <option value="Banner-5">5</option>
                                    <option value="Banner-6">6</option>
                                    <option value="Banner-7">7</option>
                                    <option value="Banner-8">8</option>
                                    <option value="Banner-9">9</option>
                                    <option value="Banner-10">10</option>
                                    <option value="Banner-11">11</option>
                                    <option value="Banner-12">12</option>
                                    <option value="Banner-13">13</option>
                                    <option value="Banner-14">14</option>
                                </select>
                                <label for="posisi_banner" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Posisi Banner</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="datetime-local" name="expired_banner" id="expired_banner" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                                <label for="expired_banner" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Expired Banner</label>
                            </div>
                            <div class="flex justify-center">
                                <button type="submit" name="upload_banner" class="bg-green-600 hover:bg-green-700 w-full mt-2 py-3 rounded-md text-white font-bold hover:text-gray-300">
                                    Upload Banner
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- End Section Two -->

        <!-- Section Three -->
        <section class="pb-6">
            <div class="md:w-1/2 mx-auto overflow-x-auto rounded-md">
                <?php if (isset($_GET['status-updated'])): ?>
                    <div class="<?php echo $_GET['status-updated'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                        <?php echo $_GET['status-updated'] === 'success' ? 'Banner Sudah Update' : 'Banner Gagal Update'; ?>                    
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['status-deleted'])): ?>
                    <div class="<?php echo $_GET['status-deleted'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                        <?php echo $_GET['status-deleted'] === 'success' ? 'Sukses Menghapus Banner' : 'Gagal Menghapus Banner.'; ?>
                    </div>
                <?php endif; ?>
                <table class="w-full">
                    <thead class="uppercase text-white bg-zinc-700">
                        <tr>
                            <th class="py-2 px-4 border-r border-zinc-600">action</th>
                            <th class="py-2 px-4 border-r border-zinc-600">Nama</th>
                            <th class="py-2 px-4 border-r border-zinc-600">Posisi</th>
                            <th class="py-2 px-4">Expired</th>
                        </tr>
                    </thead>
                    <tbody class="bg-zinc-500 text-white">
                        <?php foreach ($model['totalBanner'] as $ads) : ?>
                            <?php
                                $timestamp = $ads["expired_banner"];
                                $dateObj = date_create($timestamp);
                                $date = date_format($dateObj, "d F Y");
                                $date = ucfirst($date);
                                $time = date_format($dateObj, "H:i");
                            ?>
                            <tr class="border-b border-zinc-700">
                                <td class="flex justify-center items-center pt-1 gap-1">
                                    <form id="deleteForm" action="<?= BASE_URL ?>/dashboard/ads-banner/delete" method="POST" style="display: inline;">
                                        <input type="hidden" name="id" value="<?= $ads["id_banner"]; ?>">
                                        <button type="submit" name="delete_banner" onclick="return confirm('Apakah Anda yakin ingin menghapus Banner ini?')" class="flex justify-center items-center bg-red-500 p-2 rounded-md">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                            </svg>
                                        </button>
                                    </form>
                                    <span class="flex justify-center items-center cursor-pointer" data-modal-target="update-modal<?= $ads["id_banner"]; ?>" data-modal-toggle="update-modal<?= $ads["id_banner"]; ?>">
                                        <span class="bg-green-500 p-2 rounded-md">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="flex justify-center items-center cursor-pointer" data-modal-target="info-modal<?= $ads["id_banner"]; ?>" data-modal-toggle="info-modal<?= $ads["id_banner"]; ?>">
                                        <span class="bg-blue-500 p-2 rounded-md">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </span>
                                </td>
                                <td class="py-2 px-4 text-center"><?= $ads['nama_banner'] ?></td>
                                <td class="py-2 px-4 text-center"><?= $ads['posisi_banner'] ?></td>
                                <td class="py-2 px-4 text-center"><?= $date . ' ' . $time ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- update Ads Banner -->
            <?php foreach ($model['totalBanner'] as $ads) : ?>
                <div id="update-modal<?= $ads["id_banner"]; ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="update-modal<?= $ads["id_banner"]; ?>">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-white">Update Banner</h3>
                                <form class="space-y-6" action="<?= BASE_URL ?>/dashboard/ads-banner/update" method="POST" enctype="multipart/form-data">
                                    <div>
                                        <input type="text" name="id_UpBanner" id="id_UpBanner" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?= $ads["id_banner"]; ?>">
                                    </div>
                                    <div>
                                        <label for="image_upBanner" class="block mb-2 text-sm font-medium text-white">Update Photo</label>
                                        <input type="file" name="image_upBanner" id="image_upBanner" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                                    </div>
                                    <div>
                                        <label for="name_upBanner" class="block mb-2 text-sm font-medium text-white">Nama Banner</label>
                                        <input type="text" name="name_upBanner" id="name_upBanner" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?= $ads['nama_banner'] ?>">
                                    </div>
                                    <div>
                                        <label for="link_upBanner" class="block mb-2 text-sm font-medium text-white">Link Banner</label>
                                        <input type="text" name="link_upBanner" id="link_upBanner" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?= $ads['link_banner'] ?>">
                                    </div>
                                    <div>
                                        <label for="expired_upBanner" class="block mb-2 text-sm font-medium text-white">Tanggal Expired</label>
                                        <input type="datetime-local" name="expired_upBanner" id="expired_upBanner" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                                    </div>
                                    <button type="submit" name="update_banner" class="w-full text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Update Milestone</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Info Banner -->
            <?php foreach ($model['totalBanner'] as $ads) : ?>
                <div id="info-modal<?= $ads["id_banner"]; ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="info-modal<?= $ads["id_banner"]; ?>">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8 text-center">
                                <h3 class="mb-4 text-xl font-medium text-white">Info Banner</h3>
                                <img class="mb-4" src="<?= BASE_URL ?>/assets/img/eksternal/banner-ads/<?= $ads['image_banner'] ?>" alt="<?= $ads["nama_banner"]; ?>">
                                <div class=" p-4 bg-white block rounded-md">
                                    <a target="_blank" class="text-blue-500 underline italic" href="<?= $ads["link_banner"]; ?>"><?= $ads["link_banner"]; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
        <!-- End Section Three -->
    </main>
    <!-- End Main Content -->
    
    <?php endif; ?>
<?php include 'partials/footer.php' ?>
