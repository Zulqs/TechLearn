<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hasil Quiz {{ $tag }}
        </h2>
    </x-slot>
    
    <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
        <div class="flex flex-col p-6 px-14">
                <div class="flex flex-col border-y py-4">
                    <p class="pb-4 text-2xl font-semibold">{{ Auth::user()->name }}, kamu mendapatkan hasil:</p>
                    <div>Jawaban Benar: {{ $correctAnswers }}</div>
                    <div>Total Soal: {{ $totalQuestions }}</div>
                    <div>Skor: {{ ($correctAnswers / $totalQuestions) * 100 }}%</div>
                </div>
                <a class="mt-5" href="{{ url('/course/' . $tag) }}">
                    <x-primary-button >Kembali ke course {{$tag}}</x-primary-button>
                </a>
        </div>
    </div>
</x-app-layout>