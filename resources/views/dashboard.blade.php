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

</x-app-layout>
