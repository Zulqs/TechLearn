<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLearn</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center:true
                },
                extend: {
                colors: {
                    'black': '#212427',
                    'bgl': '#060644',
                    'btr': '#2E2768',
                    }
                }
            }
        }
    </script>
</head>
<body>
    <nav class="">
        <div class="container flex flex-row justify-between max-w-[1110px] py-3">
            <a href="{{url('/')}}"
            class="text-3xl text-bgl font-bold my-auto w-full">TechLearn</a>
            <div class="flex flex-row justify-end w-full">

                <a href="{{url('/tentang')}}"
                class="mx-8 my-auto font-medium">Tentang TechLearn</a>
                @if (Route::has('login'))
                    @auth
                    <a href="{{url('/dashboard')}}"
                        class="font-bold text-cente border-2 border-btr px-8 py-2 rounded-xl text-white bg-btr">Dashboard
                    </a>
                    @else
                    <a href="{{ route('register') }}"
                        class="font-bold text-cente border-2 border-btr px-8 py-2 rounded-xl text-white bg-btr">Take Action
                    </a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container max-w-[1110px] text-black pt-24">
        <div class="flex flex-row">
            <div class="flex flex-col w-full my-7">
                <h1 class="text-7xl font-bold">Solusi belajar sat-set di layarmu!</h1>
                <p class="my-11">Terbangkan karirmu, Mudahkan belajarmu, Penuhi rasa keingintahuan. <a class="font-bold">Dipercaya oleh 100.000+ Pelajar seluruh Indonesia</a></p>
                <div>
                    @if (Route::has('login'))
                        @auth
                        <a href="{{url('/dashboard')}}"
                            class="font-bold text-cente border-2 border-btr px-16 py-4 mr-3 rounded-xl text-white bg-btr">Dashboard</a>
                        @else
                        <a href="{{url('register')}}"
                            class="font-bold text-cente border-2 border-btr px-16 py-4 mr-3 rounded-xl text-white bg-btr">Take Action</a>
                        @endauth
                    @endif
                </div>
            </div>
            <div class="w-full">
                <img class="mx-auto" 
                src="https://i.ibb.co.com/nj3c9dV/Desain-tanpa-judul-4-removebg-preview.png" alt="person_image" 
                width="700px">
            </div>
        </div>
    </section>

    <section class=" text-black bg-gray-100 mt-8">
        <div class="container max-w-[1110px] py-7">
            <div class="text-center my-6">
                <h2 class="font-bold text-2xl my-4">Solusi untuk Karir dan Bisnismu</h2>
                <div>Ragam solusi untuk temukan karir dan bisnis terbaikmu</div>
            </div>
            <div class="flex flex-row flex-wrap">
                <a href="#">
                </a>
            </div>
        </div>
    </section>

    <section class="container max-w-[1110px] text-black py-14">
        <div class="text-center my-6">
            <h2 class="font-bold text-4xl my-4">Jelajahi Course</h2>
            <div>Ragam course yang sudah terverifikasi membantu lulusan kami.</div>
        </div>
        <div class="flex flex-row flex-wrap justify-between">

            <!-- Module Course Card -->
            <a href="{{ route('quiz.show', 'html') }}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal HTML</h2>
                    <img class="rounded-md" src="https://th.bing.com/th/id/OIP.1ixR62jPxrVMJAO8XwfSwAHaEK?w=265&h=180&c=7&r=0&o=5&pid=1.7" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">HTML adalah sebuah markup languange standard untuk halaman website. Dengan HTML kamu bisa membuat website kamu sendiri.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">1 Jam</span>
                        </div>
                    </div>
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
                </div>
            </a>

            <!-- Module Course 2 -->
            <a href="{{ route('quiz.show', 'php') }}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal PHP</h2>
                    <img class="rounded-md" src="https://th.bing.com/th/id/OIP.JqDGE7w9t-dGwVXaXCjhUwHaEz?w=256&h=180&c=7&r=0&o=5&pid=1.7" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">PHP adalah bahasa skrip server, dan alat yang ampuh untuk membuat halaman Web yang dinamis dan interaktif. Dengan PHP kamu bisa membuat websitemu lebih keren.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">1 Jam</span>
                        </div>
                    </div>
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
                </div>
            </a>

            <!-- Module Course 3 -->
            <a href="{{ route('quiz.show', 'kapasitor') }}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal Kapasitor</h2>
                    <img class="rounded-md" src="https://cerdika.com/wp-content/uploads/2020/01/Jenis-Kapasitor-760x570.jpg" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Kapasitor merupakan komponen elektronik yang berfungsi untuk menyimpan muatan listrik. Dengan kapasitor muatan listrik akan aman.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">1 Jam</span>
                        </div>
                    </div>
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
                </div>
            </a>
            
            <!-- Module Course 4 -->
            <a href="{{ route('quiz.show', 'resistor') }}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal Switch</h2>
                    <img class="rounded-md" src="https://kliniktekno.com/wp-content/uploads/adtran_netvanta.jpg" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Switch adalah perangkat dalam jaringan komputer yang digunakan untuk menghubungkan beberapa perangkat. Dengan switch perangkatmu akan selalu terhubung. </p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">1 Jam</span>
                        </div>
                    </div>
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
                </div>
            </a>


            <!-- Module Course 5 -->
            <a href="{{ route('quiz.show', 'Router') }}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal Router</h2>
                    <img class="rounded-md" src="https://th.bing.com/th/id/OIP.u_wqKiDVbUlnSdIHfO-AqwHaDb?w=335&h=180&c=7&r=0&o=5&pid=1.7" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Router adalah perangkat untuk mentransmisikan paket data dari jaringan internet ke perangkat lain melalui proses routing.Dengan Router transmisi jaringan akan aman. </p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">1 Jam</span>
                        </div>
                    </div>
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
                </div>
            </a>

            <!-- Module Course 6 -->
            <a href="{{ route('quiz.show', 'resistor') }}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal Resistor</h2><img class="rounded-md" src="https://th.bing.com/th/id/OIP.NSQ1rH_jWePU7gP9Zj3NsgHaFL?w=316&h=180&c=7&r=0&o=5&pid=1.7" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Resistor adalah komponen pasif dalam sirkuit elektronik yang mengatur aliran arus listrik. Resistor memiliki resistansi loh. </p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">1 Jam</span>
                        </div>
                    </div>
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
                </div>
            </a>
        </div>
    </section>
    <!-- End Course -->

    <footer class="bg-gray-200">
        <div class="container max-w-[1110px] text-black">
            <div class="flex flex-row py-6 border-t-2">
                <a href="#"
                class="text-3xl text-bgl font-bold my-auto">TechLearn</a>
            </div>
            <div class="flex flex-row py-6 border-t-2 border-gray-500">
                <div class="w-full">&#169;2024, TechLearn Team TEKOM SV IPB</div>
                <div class="w-full flex-row-reverse"></div>
            </div>
        </div>
    </footer>
</body>
</html>