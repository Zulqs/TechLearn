<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course yang bisa kamu pilih') }}
        </h2>
    </x-slot>

    <section class="container max-w-[1110px] text-black py-14">
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
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
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

</x-app-layout>
