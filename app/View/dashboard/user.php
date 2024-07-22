<?php include 'partials/header.php' ?>

<!-- Main Content -->
<main class="p-3">
    <!-- Section One -->
    <section>
        <div class="mb-4">
            <span class="text-white font-semibold text-lg">User Data</span>
            <div class="flex items-center">
                <span class="text-zinc-400 text-sm uppercase"><a href="<?= BASE_URL ?>/dashboard" class="text-blue-600">Dashboard</a></span>
                <span class="text-zinc-400 text-sm mx-2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                    </svg>
                </span>
                <span class="text-zinc-400 text-sm uppercase">User Data</span>
            </div>
        </div>
    </section>
    <!-- End Section One -->
    
    <?php if ($_SESSION['role'] == 'admin') : ?>
    <!-- Section Two -->
        <section class="pb-6">
            <div class="mx-auto overflow-x-auto">
                <div class="flex items-center justify-end">
                    <span class="flex items-center p-3 rounded-md bg-green-500 text-white font-medium cursor-pointer" data-modal-target="addUser-modal" data-modal-toggle="addUser-modal">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                        </svg>&nbsp;
                        Add New User
                    </span>
                </div>
            </div>
            <div id="addUser-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative rounded-lg shadow bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="addUser-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-white">Add New User</h3>
                            <form class="space-y-6" action="<?= BASE_URL ?>/dashboard/user/register" method="POST">
                                <div>
                                    <label for="username" class="block mb-2 text-sm font-medium text-white">Username</label>
                                    <input type="text" id="username" name="username" maxlength="8" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                                </div>
                                <div>
                                    <label for="role" class="block mb-2 text-sm font-medium text-white">Role</label>
                                    <select name="role" id="role" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                                        <option value="staff">staff</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                    <input type="email" id="email" name="email" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                                    <input type="password" id="password" name="password" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="">
                                </div>
                                <div>
                                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-white">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="">
                                </div>

                                <button type="submit" name="register" class="w-full text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Add User Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Section Two -->

    <!-- Section Three -->
    <section class="pb-6">
        <div class="lg:w-1/2 mx-auto overflow-x-auto rounded-md">
            <?php if (isset($_GET['status-created'])): ?>
                <div class="text-white <?php echo $_GET['status-created'] === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> p-2 rounded-md mb-4 font-bold text-center">
                    <?php echo $_GET['status-created'] === 'success' ? 'Sukses Membuat User Baru' : 'Gagal Membuat User Baru'; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['status-username'])): ?>
                <div class="text-white <?php echo $_GET['status-username'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center">
                    <?php echo $_GET['status-username'] === 'failed' ? 'Username Sudah Terpakai' : 'Username Mantap'; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['status-email'])): ?>
                <div class="text-white <?php echo $_GET['status-email'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center">
                    <?php echo $_GET['status-email'] === 'failed' ? 'Email Sudah Terpakai' : 'Email Mantap'; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['status-password'])): ?>
                <div class="text-white <?php echo $_GET['status-password'] === 'failed' ? 'bg-red-500' : 'bg-green-500'; ?> p-2 rounded-md mb-4 font-bold text-center">
                    <?php echo $_GET['status-password'] === 'failed' ? 'Password Tidak Sama Mohon Masukkan Lagi Yang Benar' : 'Password Mantap'; ?>
                </div>
            <?php endif; ?>
            <table class="w-full">
                <thead class="uppercase text-white bg-zinc-700">
                    <tr>
                        <th class="py-2 px-4 border-r border-zinc-600">Role</th>
                        <th class="py-2 px-4 border-r border-zinc-600">Username</th>
                        <th class="py-2 px-4">Email</th>
                    </tr>
                </thead>
                <tbody class="bg-zinc-500 text-white">
                    <?php foreach ($model['totalUser'] as $user) : ?>
                        <tr class="border-b border-zinc-700">
                            <td class="py-2 px-4 text-center font-bold border-r border-zinc-700"><?= $user['role_user'] ?></td>
                            <td class="py-2 px-4 text-center font-bold border-r border-zinc-700"><?= $user['username_user'] ?></td>
                            <td class="py-2 px-4 text-center font-bold lowercase"><?= $user['email_user'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- End Section Three -->
    <?php endif; ?>
</main>
<!-- End Main Content -->

<?php include 'partials/footer.php' ?>