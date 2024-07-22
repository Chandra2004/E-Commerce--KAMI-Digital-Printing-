<?php include 'partials/header.php' ?>

    <!-- Main Content -->
    <main class="p-3">
        <!-- Section One -->
        <section>
            <div class="mb-4">
                <span class="text-white font-semibold text-lg">Milestones</span>
                <div class="flex items-center">
                    <span class="text-zinc-400 text-sm uppercase"><a href="<?= BASE_URL ?>/dashboard" class="text-blue-600">Dashboard</a></span>
                    <span class="text-zinc-400 text-sm mx-2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                        </svg>
                    </span>
                    <span class="text-zinc-400 text-sm uppercase">Milestones</span>
                </div>
            </div>
        </section>
        <!-- End Section One -->

        <!-- Section Two -->
        <?php if (isset($_GET['status-created'])): ?>
            <div class="<?php echo $_GET['status-created'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                <?php echo $_GET['status-created'] === 'success' ? 'Sukses Membuat Milestone' : 'Gagal Membuat Milestone.'; ?>
            </div>
        <?php endif; ?>
        <section class="pb-6">
            <form method="POST" action="<?= BASE_URL ?>/dashboard/milestone/create">
                <div class="md:w-1/2 mx-auto">
                    <div class="bg-zinc-700 py-5 px-5 rounded-md">
                        <span class="text-white font-semibold text-lg">Milestones</span>
                        <div class="mt-3">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="name_milestone" id="nama_milestone" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                                <label for="nama_milestone" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Pencapaian</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="date" name="date_milestone" id="tanggal_milestone" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                                <label for="tanggal_milestone" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Pencapaian</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="description_milestone" id="deskripsi_milestone" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                                <label for="deskripsi_milestone" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi Pencapaian</label>
                            </div>
                            <div class="flex justify-center">
                                <button type="submit" name="newMilestone" class="bg-green-600 hover:bg-green-700 w-full mt-2 py-3 rounded-md text-white font-bold hover:text-gray-300">
                                    Submit New Milestones
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
                <?php if (isset($_GET['status-update'])): ?>
                    <div class="<?php echo $_GET['status-update'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                        <?php echo $_GET['status-update'] === 'success' ? 'Sukses Update Milestone' : 'Gagal Update Milestone.'; ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['status-delete'])): ?>
                    <div class="<?php echo $_GET['status-delete'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center text-white">
                        <?php echo $_GET['status-delete'] === 'success' ? 'Sukses Menghapus Milestone' : 'Gagal Menghapus Milestone.'; ?>
                    </div>
                <?php endif; ?>
                <table class="w-full">
                    <thead class="uppercase text-white bg-zinc-700">
                        <tr>
                            <th class="py-2 px-4 border-r border-zinc-600">action</th>
                            <th class="py-2 px-4 border-r border-zinc-600">milestones</th>
                            <th class="py-2 px-4">overall</th>
                        </tr>
                    </thead>
                    <tbody class="bg-zinc-500 text-white">
                        <?php foreach ($model['totalMilestone'] as $rowMilestone) : ?>
                            <tr class="border-b border-zinc-700">
                                <td class="flex justify-center items-center pt-1 gap-1">
                                    <form id="deleteForm" action="<?= BASE_URL ?>/dashboard/milestone/delete" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $rowMilestone["id"]; ?>">
                                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus Milestone ini?')" class="flex justify-center items-center bg-red-500 p-2 rounded-md">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                            </svg>
                                        </button>
                                    </form>
                                    <span class="flex justify-center items-center cursor-pointer" data-modal-target="update-modal<?= $rowMilestone['id'] ?>" data-modal-toggle="update-modal<?= $rowMilestone['id'] ?>">
                                        <span class="bg-green-500 p-2 rounded-md">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                                            </svg>
                                        </span>
                                    </span>
                                </td>
                                <td class="py-2 px-4 text-center"><?= $rowMilestone['name_milestone'] ?></td>
                                <td>
                                    <span class="flex justify-center items-center cursor-pointer" data-modal-target="large-modal<?= $rowMilestone['id'] ?>" data-modal-toggle="large-modal<?= $rowMilestone['id'] ?>">
                                        <span class="bg-blue-500 p-2 rounded-md">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                            </svg>
                                        </span>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?php foreach ($model['totalMilestone'] as $rowMilestone) : ?>
                <?php
                $timestamp = $rowMilestone["date_milestone"];
                //list($date, $time) = explode(" ", $timestamp);
                $dateObj = date_create($timestamp);
                $date = date_format($dateObj, "d F Y");
                $date = ucfirst($date);
                ?>
                <div id="large-modal<?= $rowMilestone['id'] ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-4xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-5 border-b rounded-t border-gray-600">
                                <span>
                                    <span class="text-white text-lg font-bold uppercase">
                                        <?= $rowMilestone['name_milestone'] ?>
                                    </span><br>
                                    <span class="text-gray-400 text-base font-normal lowercase">
                                    <?= $date ?>
                                    </span>
                                </span>
                                <button type="button" class="bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center text-white" data-modal-hide="large-modal<?= $rowMilestone['id'] ?>">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-gray-400">
                                    Milestone : <span class="text-white font-semibold"><?= $rowMilestone['name_milestone'] ?></span> <br>
                                    Tanggal Bergabung : <span class="text-white"><?= $date ?></span>
                                    <br><br>
                                    Deskripsi : <br>
                                    <span class="text-white">
                                        <?= $rowMilestone['description_milestone'] ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


            <!-- update Milestone -->
            <?php foreach ($model['totalMilestone'] as $rowMilestone) : ?>
                <div id="update-modal<?= $rowMilestone['id'] ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="update-modal<?= $rowMilestone['id'] ?>">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-white">Update Your Milestone</h3>
                                <form class="space-y-6" action="<?= BASE_URL ?>/dashboard/milestone/update" method="POST">
                                    <div>
                                        <input type="hidden" name="id_upmilestone" id="nama_milestone" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?= $rowMilestone['id'] ?>">
                                    </div>
                                    <div>
                                        <label for="nama_milestone" class="block mb-2 text-sm font-medium text-white">Nama Pencapaian</label>
                                        <input type="text" name="name_upmilestone" id="nama_milestone" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?= $rowMilestone['name_milestone'] ?>">
                                    </div>
                                    <div>
                                        <label for="tanggal_milestone" class="block mb-2 text-sm font-medium text-white">Tanggal Pencapaian</label>
                                        <input type="date" name="date_upmilestone" id="tanggal_milestone" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?= $rowMilestone['date_milestone'] ?>">
                                    </div>
                                    <div>
                                        <label for="deskripsi_milestone" class="block mb-2 text-sm font-medium text-white">Deskripsi Pencapaian</label>
                                        <input type="text" name="description_upmilestone" id="deskripsi_milestone" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?= $rowMilestone['description_milestone'] ?>">
                                    </div>
                                    <button type="submit" name="update_milestone" class="w-full text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Update Milestone</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
        <!-- End Section Three -->
    </main>
    <!-- End Main Content -->

<?php include 'partials/footer.php' ?>