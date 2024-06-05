<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hasil Quiz {{ $tag }}
        </h2>
    </x-slot>
    
    <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
        <div class="flex flex-col p-6 px-14">
            
                <div class="flex flex-col py-4">
                    <p class="text-2xl font-semibold">Hasil quiz kamu:</p>
                </div>
                <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
                    <dl class="-my-3 divide-y divide-gray-100 text-sm">
                        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Course</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{$tag}}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Nama</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->name }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Skor</dt>
                            <dd class="text-gray-700 font-bold text-lg sm:col-span-2">{{ ($correctAnswers / $totalQuestions) * 100 }}%</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Durasi</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{$duration}}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Jawaban Benar</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{$correctAnswers}}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Jumlah Soal</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{$totalQuestions}}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Waktu</dt>
                            <ol>
                            <dd class="text-gray-700 sm:col-span-2">Mulai: {{$startTime}}</dd> 
                            <dd class="text-gray-700 sm:col-span-2">Selesai: {{$endTime}}</dd></ol>
                        </div>
                    </dl>
                </div>
                <p class="text-gray-600 text-xs italic my-2">Quiz diakses pada {{$startTime}}, simpan hasil quiz dengan menekan tombol download.</p>
                <div class="flex flex-row justify-evenly my-5">
                    <a href="{{ url('/course/' . $tag) }}">
                        <x-primary-button >Kembali ke course {{$tag}}</x-primary-button>
                    </a>
                    <a href="{{ route('quiz.pdf', $tag) }}">
                        <x-primary-button >Download Report {{$tag}}</x-primary-button>
                    </a>
                </div>
        </div>
    </div>
</x-app-layout>