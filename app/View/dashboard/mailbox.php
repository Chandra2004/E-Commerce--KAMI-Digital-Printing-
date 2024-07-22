<?php include 'partials/header.php' ?>

    <!-- Main Content -->
    <main class="p-3">
        <!-- Section One -->
        <section>
            <div class="mb-4">
                <span class="text-white font-semibold text-lg">Mailbox</span>
                <div class="flex items-center">
                    <span class="text-zinc-400 text-sm uppercase"><a href="<?= BASE_URL?>/dashboard" class="text-blue-600">Dashboard</a></span>
                    <span class="text-zinc-400 text-sm mx-2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                        </svg>
                    </span>
                    <span class="text-zinc-400 text-sm uppercase">Mailbox</span>
                </div>
            </div>
        </section>
        <!-- End Section One -->
        
        <?php if (isset($_GET['status-karir'])): ?>
                    <div class="<?php echo $_GET['status-karir'] === 'success' ? 'bg-green-200' : 'bg-red-200'; ?> p-2 rounded-md mb-4 font-bold text-center">
                        <?php echo $_GET['status-karir'] === 'success' ? 'Sukses Mengirim email!' : 'Gagal Mengirim email.'; ?>
                    </div>
                <?php endif; ?>

        <section>
            <?php if (isset($_GET['status-delete'])): ?>
                <div id="alert-1" class="flex items-center p-4 mb-4 rounded-lg text-white <?php echo $_GET['status-delete'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?>" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-base pr-2">
                        <p class="font-bold">
                            <?php echo $_GET['status-delete'] === 'success' ? 'Sukses Mendelete email!' : 'Gagal Mendelete email.'; ?>
                        </p>
                    </div>
                    <button type="button" class="<?php echo $_GET['status-delete'] === 'success' ? 'text-green-500' : 'text-red-500'; ?> bg-white hover:bg-white/60 hover:text-white ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2  p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-1" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            <?php endif; ?>
        </section>
        <!-- Section Two -->
        <section class="pb-6">
            <div class="lg:w-1/2 mx-auto overflow-x-auto rounded-md">
                <table class="w-full">
                    <thead class="uppercase text-white bg-zinc-700">
                        <tr>
                            <th class="py-2 px-4 border-r border-zinc-600">status</th>
                            <th class="py-2 px-4 border-r border-zinc-600">action</th>
                            <th class="py-2 px-4 border-r border-zinc-600">Email</th>
                            <th class="py-2 px-4">Subject</th>
                        </tr>
                    </thead>
                    <tbody class="bg-zinc-500 text-white">
                        <?php foreach ($model['totalMailbox'] as $mail) : ?>
                            <tr class="border-b border-zinc-700">
                                <td class="bg-white py-2 px-4 text-center lowercase font-extrabold  border-r border-zinc-700">
                                    <span id="status" class=""><?= $mail["status_mail"]; ?></span>
                                </td>
                                <td class="border-r border-zinc-700">
                                    <div class="flex justify-center items-center gap-2">
                                        <?php if ($_SESSION['role'] == 'admin') : ?>
                                            <form id="deleteForm" action="<?= BASE_URL ?>/dashboard/mailbox/delete" method="POST" style="display: inline;">
                                                <input type="hidden" name="id" value="<?= $mail["id_mail"]; ?>">
                                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus email ini?')" class="flex justify-center items-center bg-red-500 p-2 rounded-md">
                                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                        <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                        <span class="flex justify-center items-center cursor-pointer" data-modal-target="large-modal<?= $mail['id_mail']; ?>" data-modal-toggle="large-modal<?= $mail['id_mail']; ?>">
                                            <span class="bg-blue-500 p-2 rounded-md">
                                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                    <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td class="py-2 px-4 text-center border-r border-zinc-700"><?= $mail["email_mail"]; ?></td>
                                <td class="py-2 px-4 text-center border-r border-zinc-700"><?= $mail["subjek_mail"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <?php foreach ($model['totalMailbox'] as $mail) : ?>
                <?php
                    $timestamp = $mail["timestamp"];
                    $dateObj = date_create($timestamp);
                    $date = date_format($dateObj, "d F Y");
                    $date = ucfirst($date);
                    $time = date_format($dateObj, "H:i");
                ?>
                <div id="large-modal<?= $mail['id_mail']; ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-4xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-5 border-b rounded-t border-gray-600">
                                <span class="">
                                    <span class="text-white text-lg font-bold uppercase">
                                        <?= $mail["subjek_mail"]; ?>
                                    </span><br>
                                    <span class="text-gray-400 text-base font-normal lowercase">
                                        <?= $mail["email_mail"]; ?>
                                    </span>
                                </span>
                                <?php if ($mail['status_mail'] == 'unread') : ?>
                                    <form action="<?= BASE_URL ?>/dashboard/mailbox/status" method="POST" class="inline">
                                        <input type="hidden" name="id" value="<?= $mail['id_mail']; ?>">
                                        <button type="submit" class="bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center text-white" data-modal-hide="large-modal<?= $mail['id_mail']; ?>">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </form>
                                <?php endif; ?>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <?php if ($mail['status_mail'] === 'unread') : ?>
                                    <div class="flex items-center p-4 mb-4 text-sm  rounded-lg  bg-gray-800 text-blue-400" role="alert">
                                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div>
                                            <span class="font-medium">Info</span> Tutup dengan menekan tombol silang
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <p class="text-base leading-relaxed text-gray-400">
                                    <?php if ($mail['tipe_mail'] == 'Karir') : ?>
                                        Tipe Mail : <span class="text-white font-semibold"><?= $mail["tipe_mail"]; ?></span> <br>
                                        Subject : <span class="text-white font-semibold"><?= $mail["subjek_mail"]; ?></span> <br>
                                        Email : <span class="text-white lowercase"><?= $mail["email_mail"]; ?></span> <br>
                                        Nama : <span class="text-white"><?= $mail["nama_mail"]; ?></span> <br>
                                        Nomor : <span class="text-white"><?= $mail["nomor_mail"]; ?></span> <br>
                                        Posisi : <span class="text-white"><?= $mail["posisi_mail"]; ?></span> <br>
                                        <br><br>
                                        Tanggal : <span class="text-white lowercase"><?= $date ?></span> <br>
                                        Waktu : <span class="text-white lowercase"><?= $time ?></span> <br>
                                    <?php elseif ($mail['tipe_mail'] == 'Kerja Sama') : ?>
                                        Tipe Mail : <span class="text-white font-semibold"><?= $mail["tipe_mail"]; ?></span> <br>
                                        Subject : <span class="text-white font-semibold"><?= $mail["subjek_mail"]; ?></span> <br>
                                        Email : <span class="text-white lowercase"><?= $mail["email_mail"]; ?></span> <br>
                                        Nama : <span class="text-white"><?= $mail["nama_mail"]; ?></span> <br>
                                        Nomor : <span class="text-white"><?= $mail["nomor_mail"]; ?></span> <br>
                                        Pesan : <br>
                                        <span class="text-white">
                                            <?= $mail["pesan_mail"]; ?>
                                        </span>
                                        <br><br>
                                        Tanggal : <span class="text-white lowercase"><?= $date ?></span> <br>
                                        Waktu : <span class="text-white lowercase"><?= $time ?></span> <br>
                                        <br><br>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
        <!-- End Section Two -->
    </main>
    <!-- End Main Content -->

    <script>
        // Mengambil semua elemen <p> dengan class "status"
        const paragraphs = document.querySelectorAll('#status');

        // Loop melalui setiap elemen <p>
        paragraphs.forEach(p => {
            // Mengambil teks dari setiap elemen <p>
            const text = p.textContent.toLowerCase();

            // Menambahkan kelas sesuai dengan teks yang ada
            if (text === 'unread') {
                p.classList.add('text-red-600');
            } else if (text === 'read') {
                p.classList.add('text-green-600');
            }
        });
    </script>


<?php include 'partials/footer.php' ?>