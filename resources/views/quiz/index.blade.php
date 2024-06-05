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
                        <!-- <div class="py-px">
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
                        </div> -->
                        <div class="my-1">
                            <label
                            for="anwa{{ $question->id }}"
                            class="flex cursor-pointer items-center gap-4 rounded-lg border border-gray-100 bg-white p-4 text-sm font-medium shadow-sm hover:border-gray-200 has-[:checked]:border-blue-500 has-[:checked]:ring-1 has-[:checked]:ring-blue-500"
                            >
                            <p class="text-gray-700">A.</p>
                            <p class="text-gray-900">{{ $question->qa }}</p>
                            <input
                                type="radio"
                                name="answers[{{ $question->id }}]"
                                value="A"
                                id="anwa{{ $question->id }}"
                                class="sr-only"
                                checked
                            />
                            </label>
                        </div>

                        <div class="my-1">
                            <label
                            for="anwb{{ $question->id }}"
                            class="flex cursor-pointer items-center gap-4 rounded-lg border border-gray-100 bg-white p-4 text-sm font-medium shadow-sm hover:border-gray-200 has-[:checked]:border-blue-500 has-[:checked]:ring-1 has-[:checked]:ring-blue-500"
                            >
                            <p class="text-gray-700">B.</p>
                            <p class="text-gray-900">{{ $question->qb }}</p>
                            <input
                                type="radio"
                                name="answers[{{ $question->id }}]"
                                value="B"
                                id="anwb{{ $question->id }}"
                                class="sr-only"
                            />
                            </label>
                        </div>

                        <div class="my-1">
                            <label
                            for="anwc{{ $question->id }}"
                            class="flex cursor-pointer items-center gap-4 rounded-lg border border-gray-100 bg-white p-4 text-sm font-medium shadow-sm hover:border-gray-200 has-[:checked]:border-blue-500 has-[:checked]:ring-1 has-[:checked]:ring-blue-500"
                            >
                            <p class="text-gray-700">C.</p>
                            <p class="text-gray-900">{{ $question->qc }}</p>
                            <input
                                type="radio"
                                name="answers[{{ $question->id }}]"
                                value="C"
                                id="anwc{{ $question->id }}"
                                class="sr-only"
                            />
                            </label>
                        </div>

                        <div class="my-1">
                            <label
                            for="anwd{{ $question->id }}"
                            class="flex cursor-pointer items-center gap-4 rounded-lg border border-gray-100 bg-white p-4 text-sm font-medium shadow-sm hover:border-gray-200 has-[:checked]:border-blue-500 has-[:checked]:ring-1 has-[:checked]:ring-blue-500"
                            >
                            <p class="text-gray-700">C.</p>
                            <p class="text-gray-900">{{ $question->qd }}</p>
                            <input
                                type="radio"
                                name="answers[{{ $question->id }}]"
                                value="D"
                                id="anwd{{ $question->id }}"
                                class="sr-only"
                            />
                            </label>
                        </div>

                    </div>
            </div>
        </div>
        @endforeach
        <div class="container max-w-[1110px] my-8">
            <x-primary-button class="py-3 px-6" type="submit">Kirim Jawaban</x-primary-button>
        </div>
    </form>
</x-app-layout>