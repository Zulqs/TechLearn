<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $tag }} Quiz
        </h2>
    </x-slot>
    
    <form action="{{ route('quiz.submit') }}" method="POST">
        @csrf
        <input type="hidden" name="tag" value="{{ $tag }}">
        @foreach($questions as $question)
        <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
            <div class="flex flex-col p-6 px-14">
                    <div class="flex flex-col border-y py-4">
                        <p class="pb-4 text-2xl font-semibold">{{ $question->quest }}</p>
                        <div class="py-px">
                            <input class="mr-3" type="radio" name="answers[{{ $question->id }}]" value="A" required> {{ $question->qa }}
                        </div>
                        <div class="py-px">
                            <input class="mr-3" type="radio" name="answers[{{ $question->id }}]" value="B" required> {{ $question->qb }}
                        </div>
                        <div class="py-px">
                            <input class="mr-3" type="radio" name="answers[{{ $question->id }}]" value="C" required> {{ $question->qc }}
                        </div>
                        <div class="py-px">
                            <input class="mr-3" type="radio" name="answers[{{ $question->id }}]" value="D" required> {{ $question->qd }}
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
        <div class="container max-w-[1110px] my-8">
            <x-primary-button type="submit">Kirim Jawaban</x-primary-button>
        </div>
    </form>
</x-app-layout>