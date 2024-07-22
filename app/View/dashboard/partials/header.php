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

    <!-- CSS Scrollbar -->
    <link rel="stylesheet" href="assets/css/scrollbar.css">
</head>

<body class="bg-zinc-800">
    <!-- Navbar -->
    <nav class="bg-zinc-900  md:px-10">
        <div class="flex flex-wrap items-center justify-between mx-auto p-2 gap-2">
            <div class="flex gap-2">
                <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h14M1 6h14M1 11h7" />
                    </svg>
                </button>
                <a href="<?= BASE_URL ?>/dashboard" class="flex items-center">
                    <img class="w-28 md:w-30" src="<?= BASE_URL ?>/assets/img/internal/logo.png" alt="Kami Logo" />
                </a>
            </div>
            <div>
                <div class="flex items-center md:order-2">
                    <button type="button" class="flex mr-3 text-sm bg-zinc-900 rounded-full md:mr-0" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <!-- <img class="w-10 h-10 rounded-full" src="assets/upload/photo-user/" onerror="this.src='assets/upload/photo-user/error-user/errorAvatar.svg';" alt=""> -->
                    </button>
                </div>
            </div>
        </div>
        <div class="z-50 hidden my-4 text-base list-none bg-zinc-900 divide-y px-1 divide-zinc-500 rounded-lg shadow" id="user-dropdown">
            <div class="px-4 py-3 flex items-center justify-center gap-2">
            <!-- <img class="w-10 h-10 rounded-full" src="assets/upload/photo-user/" onerror="this.src='assets/upload/photo-user/error-user/errorAvatar.svg';" alt=""> -->
                <span class="text-left">
                    <span class="block text-base text-white"></span>
                    <span class="block text-sm truncate text-gray-400"></span>
                </span>
            </div>
            <ul class="py-2 text-center" aria-labelledby="user-menu-button">
                <li>
                    <a href="?page=dashboard/profile" class="block px-4 py-2 text-sm hover:bg-white text-gray-200 hover:text-zinc-900 hover:rounded-lg">Profile</a>
                </li>
                <li>
                    <a href="?page=dashboard/repassword" class="block px-4 py-2 text-sm hover:bg-white text-gray-200 hover:text-zinc-900 hover:rounded-lg">Ganti Kata sandi</a>
                </li>
                <li>
                    <a href="?page=dashboard/settings" class="block px-4 py-2 text-sm hover:bg-white text-gray-200 hover:text-zinc-900 hover:rounded-lg">Pengaturan</a>
                </li>
                <li>
                    <form action="" method="post">
                        <button type="submit" name="endsession" class="w-full block px-4 py-2 text-sm hover:bg-white text-gray-200 hover:text-zinc-900 hover:rounded-lg">
                            Log Out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-zinc-900">
                <div>
                    <a href="?page=dashboard" class="flex items-center pl-2.5 mb-5">
                        <img class="w-28 md:w-30 mx-auto" src="<?= BASE_URL ?>/assets/img/internal/logo.png" alt="Kami Logo" />
                    </a>
                </div>
                <ul class="space-y-1 font-medium">
                    <li>
                        <a href="<?= BASE_URL ?>/dashboard" class="flex items-center p-2 text-white rounded-md hover:bg-white group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-zinc-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="text-gray-400 flex-1 ml-3 whitespace-nowrap group-hover:text-zinc-900">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>/dashboard/ads-banner" class="flex items-center p-2 text-white rounded-md hover:bg-white group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-zinc-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z" clip-rule="evenodd"/>
                            </svg>

                            <span class="text-gray-400 flex-1 ml-3 whitespace-nowrap group-hover:text-zinc-900">Banner Ads</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>/dashboard/mailbox" class="flex items-center p-2 text-white rounded-md hover:bg-white group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-zinc-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="text-gray-400 flex-1 ml-3 whitespace-nowrap group-hover:text-zinc-900">Mailbox</span>
                            <span id="messages" class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-white bg-red-600 rounded-full"><?= $model['statusMailbox']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>/dashboard/milestone" class="flex items-center p-2 text-white rounded-md hover:bg-white group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-zinc-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z" />
                            </svg>
                            <span class="text-gray-400 flex-1 ml-3 whitespace-nowrap group-hover:text-zinc-900">Milestones</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>/dashboard/produk" class="flex items-center p-2 text-white rounded-md hover:bg-white group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-zinc-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                            </svg>
                            <span class="text-gray-400 flex-1 ml-3 whitespace-nowrap group-hover:text-zinc-900">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>/dashboard/user" class="flex items-center p-2 text-white rounded-md hover:bg-white group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-zinc-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                            <span class="text-gray-400 flex-1 ml-3 whitespace-nowrap group-hover:text-zinc-900">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>/logout" class="flex items-center p-2 text-white rounded-md hover:bg-white group">
                            <svg class="rotate-180 flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-zinc-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="text-gray-400 flex-1 ml-3 whitespace-nowrap group-hover:text-zinc-900">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </nav>
    <!-- End Navbar -->