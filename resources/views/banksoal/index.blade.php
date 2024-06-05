<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @if (Auth::user()->role == 'admin')
            {{ __('Bank Soal') }}
        @else
            {{ __('Akses tidak dikenali') }}
        @endif
        </h2>
    </x-slot>

    @if (Auth::user()->role == 'admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="min-w-full align-middle">
                        <!-- Form Create -->
                        <form id="questionForm" action="{{ route('banksoal.store') }}" method="POST" class="w-full ">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="quest">
                                        Pertanyaan
                                    </label>
                                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="quest" name="quest" placeholder="Pertanyaan" required>
                                    </textarea>
                                    <p class="text-gray-600 text-xs italic">Masukkan pertanyaan disini</p>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="qa">
                                        Jawaban A.
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="qa" name="qa" type="text" placeholder="Opsi A" required>
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="qb">
                                        Jawaban B.
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qb" name="qb" type="text" placeholder="Opsi B" required>

                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="qc">
                                        Jawaban C.
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="qc" name="qc" type="text" placeholder="Opsi C" required>
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="qd">
                                        Jawaban D.
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qd" name="qd" type="text" placeholder="Opsi D" required>
                                </div>
                                
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="qanswer">
                                        Jawaban Benar
                                    </label>
                                    <div class="relative">
                                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qanswer" name="qanswer" required>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tag">
                                        Tag
                                    </label>
                                    <div class="relative">
                                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="tag" name="tag" required>
                                            <option>html</option>
                                            <option>php</option>
                                            <option>elektro</option>
                                            <option>jaringan</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Simpan Soal
                                    </label>
                                    <button type="submit" id="submitBtn"  class="shadow block bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Bank Soal -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="min-w-full align-middle">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">id</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">tag</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">question</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">answer</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">option</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-red-600 uppercase tracking-wider">ACTION</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($questions as $question)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $question->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $question->tag }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $question->quest }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $question->qanswer }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <ol class="list-disc">
                                            <li>A. {{ $question->qa }}</li>
                                            <li>B. {{ $question->qb }}</li>
                                            <li>C. {{ $question->qc }}</li>
                                            <li>D. {{ $question->qd }}</li>
                                        </ol>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-left text-sm leading-5 font-medium">
                                        <a href="#" onclick="editQuestion([{{ $question->id }},
                                                                        `{{ $question->tag }}`,
                                                                        `{{ $question->quest }}`,
                                                                        `{{ $question->qanswer }}`,
                                                                        `{{ $question->qa }}`,
                                                                        `{{ $question->qb }}`,
                                                                        `{{ $question->qc }}`,
                                                                        `{{ $question->qd }}`,])" class="text-red-600 hover:text-red-900">Edit</a>
                                        <form action="{{ route('banksoal.destroy', $question->id) }}" onsubmit="return confirm('Yakin menghapus soal?')" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
    @endif

    <script>
    function editQuestion(id) {
        console.log(id)

        // Isi formulir create dengan data yang diambil
        document.getElementById('tag').value = id[1];
        document.getElementById('quest').value = id[2];
        document.getElementById('qanswer').value = id[3];
        document.getElementById('qa').value = id[4];
        document.getElementById('qb').value = id[5];
        document.getElementById('qc').value = id[6];
        document.getElementById('qd').value = id[7];

        // Ubah label tombol submit menjadi "Update"
        document.getElementById('submitBtn').innerText = 'Update';
        // Ubah action form menjadi update
        var form = document.getElementById('questionForm');
        form.action = '/banksoal/' + id[0];
        form.method = 'POST';

        // Tambahkan input hidden untuk method PUT
        var methodField = document.createElement('input');
        methodField.setAttribute('type', 'hidden');
        methodField.setAttribute('name', '_method');
        methodField.setAttribute('value', 'PUT');
        form.appendChild(methodField);
    }
    </script>


</x-app-layout>
