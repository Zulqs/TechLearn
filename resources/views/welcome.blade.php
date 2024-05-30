<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLearn</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="">
        <div class="container flex flex-row justify-between max-w-[1110px] py-3">
            <a href="#"
            class="text-3xl text-bgl font-bold my-auto w-full">TechLearn</a>
            <div class="flex flex-row justify-end w-full">
                <a href="#"
                class="my-auto font-medium">Job Connect</a>
                <a href="#"
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
                    <a href="#"
                    class="font-bold text-btr border-2 border-btr px-16 py-4 rounded-xl text-center">Konsultasi</a>
                </div>
            </div>
            <div class="w-full">
                <img class="mx-auto" 
                src="assets/images/person_image.webp" alt="person_image" 
                width="440px">
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
            <a href="#"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">Front End Engineering</h2>
                    <img class="rounded-md" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At velit illum provident a, ipsa maiores deleniti consectetur nobis et eaqure.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">34 Jam</span>
                        </div>
                    </div>
                    <div class="line-through text-gray-500">Rp45.000/3 Bulan</div>
                    <div class="text-xl font-bold text-btr">Pelajari</div>
                </div>
            </a>

            <!-- Module Course 2 -->
            <a href="#"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">Back End Engineering</h2>
                    <img class="rounded-md" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At velit illum provident a, ipsa maiores deleniti consectetur nobis et eaqure.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">34 Jam</span>
                        </div>
                    </div>
                    <div class="line-through text-gray-500">Rp45.000/3 Bulan</div>
                    <div class="text-xl font-bold text-btr">Pelajari</div>
                </div>
            </a>

            <!-- Module Course 3 -->
            <a href="#"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">Full-stack Web Development</h2>
                    <img class="rounded-md" src="https://plus.unsplash.com/premium_photo-1685086785223-485f800ce410?q=80&w=2532&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At velit illum provident a, ipsa maiores deleniti consectetur nobis et eaqure.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Intensif</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">3 Bulan</span>
                        </div>
                    </div>
                    <div class="line-through text-gray-500">Rp6.000.000</div>
                    <div class="text-xl font-bold text-btr">Rp2.500.000</div>
                </div>
            </a>
            
            <!-- Module Course 4 -->
            <a href="#"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">UI/UX Research & Design</h2>
                    <img class="rounded-md" src="https://plus.unsplash.com/premium_photo-1685086785223-485f800ce410?q=80&w=2532&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At velit illum provident a, ipsa maiores deleniti consectetur nobis et eaqure.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Intensif</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">3 Bulan</span>
                        </div>
                    </div>
                    <div class="line-through text-gray-500">Rp6.000.000</div>
                    <div class="text-xl font-bold text-btr">Rp2.500.000</div>
                </div>
            </a>

            <!-- Module Course 5 -->
            <a href="#"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">UI/UX Module Learning</h2>
                    <img class="rounded-md" src="https://plus.unsplash.com/premium_photo-1685086785223-485f800ce410?q=80&w=2532&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At velit illum provident a, ipsa maiores deleniti consectetur nobis et eaqure.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Self Learning</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">32 Jam</span>
                        </div>
                    </div>
                    <div class="line-through text-gray-500">Rp45.000/3 Bulan</div>
                    <div class="text-xl font-bold text-btr">Rp16.000/3 Bulan</div>
                </div>
            </a>

            <!-- Module Course 6 -->
            <a href="#"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">IoT Engineering: Smart System</h2>
                    <img class="rounded-md" src="https://plus.unsplash.com/premium_photo-1685086785223-485f800ce410?q=80&w=2532&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At velit illum provident a, ipsa maiores deleniti consectetur nobis et eaqure.</p>
                    <div class="flex flex-row my-4">
                        <div class="flex flex-col">
                            <span>Pembelajaran</span>
                            <span class="font-medium">Intensif</span>
                        </div>
                        <div class="flex flex-col ml-6">
                            <span>Waktu Tempuh</span>
                            <span class="font-semibold">3 Bulan</span>
                        </div>
                    </div>
                    <div class="line-through text-gray-500">Rp6.000.000</div>
                    <div class="text-xl font-bold text-btr">Rp2.500.000</div>
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