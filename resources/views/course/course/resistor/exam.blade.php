<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Resistor') }}
        </h2>
    </x-slot>
    
    <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
        <div class="flex flex-col p-6">
            <div class="flex flex-row border-y py-4">
                <div class="px-3" >Untuk mengetahui seberapa jauh pengetahuanmu tentang Resistor</div>
            </div>
            <div class="py-4 border-b">
                <button type="button" class="btn btn-warning mt-3" onclick="alert('Are you ready?')">Start to Quiz</button>
                
            </div>
        </div>
    </div>

    

</x-app-layout>
