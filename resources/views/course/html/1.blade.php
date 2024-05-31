<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HTML Introduction') }}
        </h2>
    </x-slot>
    
    <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
        <div class="flex flex-col p-6">
            <div class="flex flex-row border-y py-4">
                <div class="px-3" >HTML adalah markup languange standard untuk membuat halaman Web.</div>
            </div>
            <div class="py-4 border-b">
                <div class="px-3 font-bold text-3xl" >Apa itu HTML?</div>
                <ul style="list-style-type:circle;" class="px-8 py-5">
                    <li>HTML adalah singkatan dari Hyper Text Markup Language</li>
                    <li>HTML adalah markup languange standard untuk membuat halaman Web.</li>
                    <li>HTML mengartikan sebuah struktur dari halaman Web</li>
                    <li>HTML terdiri dari serangkaian elemen</li>
                    <li>Elemen HTML memberi informasi kepada browser bagaimana content harus ditampilkan</li>
                    <li>Elemen HTML melabeli potongan konten seperti "ini adalah judul", "ini adalah paragraf", "ini adalah tautan", dll.</li>
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
