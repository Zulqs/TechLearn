<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[1110px] mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        Selamat datang, {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

    @if (Auth::user()->role == 'admin')
    <div class="container max-w-[1110px] bg-white rounded-lg shadow-sm">
        <div class="flex flex-col p-6">
            <div class="flex flex-row justify-center">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <p class="py-4 font-bold text-xl text-center">Kategori Bank Soal</p>
                    <canvas id="tagChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    @else
    
    <div class="container max-w-[1110px] bg-white rounded-lg shadow-sm">
        <div class="flex flex-col p-6">
            <div class="flex flex-row">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect width="24" height="24" rx="4" fill="#F4F4F5"></rect> <path d="M4 17L8 13L12 16L20 8" stroke="#3F3F46" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </svg>
                <div class="px-3" >Aktivitas Mu</div>
            </div>

        </div>
    </div>
    @endif

    <script>
        var tagCounts = <?php echo json_encode($tagCounts); ?>;

        // Grafik Soal Berdasarkan Tag
        var tagCtx = document.getElementById('tagChart').getContext('2d');
        var tagChart = new Chart(tagCtx, {
            type: 'doughnut',
            data: {
                labels: Object.keys(tagCounts),
                datasets: [{
                    label: 'Jumlah soal',
                    data: Object.values(tagCounts),
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(201, 123, 207)',
                        'rgb(201, 734, 207)',
                    ],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    hoverOffset: 30
                }]
            },
            options: {
            }
        });
    </script>

</x-app-layout>
