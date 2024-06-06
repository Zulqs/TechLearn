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

    <section class=" text-black bg-gray-100 mt-8">
        <div class="container max-w-[1110px] py-7">
            <div class="text-center my-6">
                <h2 class="font-bold text-2xl my-4">Tentang TechLearn</h2>
                <div>TechLearn kepanjangan dari Technology Learn yaitu web yang menyediakan platform belajar yang interaktif dan mudah diakses oleh pengguna yang ingin meningkatkan pengetahuan maupun keterampilan tentang Teknologi. Pengguna web ini cocok untuk semua kalangan, terutama untuk pelajar maupun mahasiswa yang ingin menambah pengetahuan maupun keterampilan tentang Teknologi</div>
            </div>
            <div class="flex flex-row flex-wrap">
                <a href="#">
                </a>
            </div>
        </div>
    </section>

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