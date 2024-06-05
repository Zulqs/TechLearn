<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course yang bisa kamu pilih') }}
        </h2>
    </x-slot>

    <section class="container max-w-[1110px] text-black py-14">
        <div class="flex flex-row flex-wrap justify-between">

            <!-- Module Course Card -->
            <a href="{{url('/course/html')}}"
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
                            <span class="font-semibold">34 Jam</span>
                        </div>
                    </div>
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
                </div>
            </a>

            <!-- Module Course Card -->
            <a href="{{url('/course/php')}}"
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
                            <span class="font-semibold">34 Jam</span>
                        </div>
                    </div>
                    <div class="text-xl font-bold text-btr py-3">Pelajari</div>
                </div>
            </a>

            <!-- Module Course Card -->
            <a href="{{url('/course/kapasitor')}}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal Kapasitor</h2>
                    <img class="rounded-md" src="https://cerdika.com/wp-content/uploads/2020/01/Jenis-Kapasitor-760x570.jpg" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">ROM merupakan salah satu dari hadware penyimpanan. Pasti perangkat kamu akan selalu membutuhkan RM. Dengan ROM penyimpanan akan aman.  </p>
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
            
            <!-- Module Course Card -->
            <a href="{{url('/course/switch')}}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal Switch</h2>
                    <img class="rounded-md" src="https://kliniktekno.com/wp-content/uploads/adtran_netvanta.jpg" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">ROM merupakan salah satu dari hadware penyimpanan. Pasti perangkat kamu akan selalu membutuhkan ROM. Dengan ROM penyimpanan akan aman.  </p>
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
            
                                   <!-- Module Course Card -->
            <a href="{{url('/course/router')}}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal Router</h2>
                    <img class="rounded-md" src="https://th.bing.com/th/id/OIP.u_wqKiDVbUlnSdIHfO-AqwHaDb?w=335&h=180&c=7&r=0&o=5&pid=1.7" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">ROM merupakan salah satu dari hadware penyimpanan. Pasti perangkat kamu akan selalu membutuhkan ROM. Dengan ROM penyimpanan akan aman.  </p>
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

            <a href="{{url('/course/resistor')}}"
            class="flex flex-col w-[350px] border-2 rounded-lg hover:shadow-lg shadow-bgl my-5">
                <div class="flex flex-row justify-between rounded-t-lg bg-btr p-4">
                    <h2 class="my-auto mr-4 font-bold text-2xl text-white">Mengenal Resistor</h2>
                    <img class="rounded-md" src="https://th.bing.com/th/id/OIP.NSQ1rH_jWePU7gP9Zj3NsgHaFL?w=316&h=180&c=7&r=0&o=5&pid=1.7" alt="course_img" width="70px">
                </div>
                <div class="p-4">
                    <p class="my-4">ROM merupakan salah satu dari hadware penyimpanan. Pasti perangkat kamu akan selalu membutuhkan ROM. Dengan ROM penyimpanan akan aman.  </p>
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
        </div>
    </section>
    <!-- End Course -->

</x-app-layout>
