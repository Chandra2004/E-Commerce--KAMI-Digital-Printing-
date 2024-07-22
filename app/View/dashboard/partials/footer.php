<footer class="p-3">
        <div class="bg-zinc-700 text-white text-center py-3 px-5 rounded-md">
            <span>
                &copy;
                2023 KAMI DIGITAL PRINTING SURABAYA
                <a href="https://www.kamidigitalprinting.com" class="hover:underline" target="_blank">
                    PT. KARYA MERAPI INDONESIA
                </a>
                - Version 3.10
            </span>
        </div>
    </footer>

    <script>
        // Mengambil semua elemen <p> dengan class "status"
        const messages = document.querySelectorAll('#messages');

        // Loop melalui setiap elemen <p>
        messages.forEach(p => {
            // Mengambil teks dari setiap elemen <p>
            const text = p.textContent.toLowerCase();

            // Menambahkan kelas sesuai dengan teks yang ada
            if (text < '1') {
                p.classList.remove('inline-flex');
                p.classList.add('hidden');
            } else if (text > '0') {
                p.classList.remove('hidden');
                p.classList.add('inline-flex');
            }
        });
    </script>
    <!-- Flowbite JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>

<!-- bg-zinc-700 text-white text-center py-3 px-5 rounded-md -->