<div class="pt-16 w-full">
    <div class="flex flex-col space-y-2">
        <div>
            <h1 class="m-1 text-indigo-600 text-3xl light font-extraligh">Livros</h1>
        </div>
    </div>
</div>

<div class="space-x-2 w-full">
    <div class="flex w-full flex-row relative h-full items-center justify-items-center">
        {{-- container grup card --}}
        <div class="slick-scroll w-full h-full">
            @foreach ($books as $book)
            <div class="cursor-pointer flex flex-col m-1 py-1 px-3 border rounded bg-white shadow-md"
                style="width: 275px; height:400px;">
                <div class="" style="height: 310px;">
                    <div class="w-full text-center text-indigo-600 text-2xl">
                        <h1 class="text-base light font-extraligh">{{$book->nome}}</h1>
                    </div>

                    <img src="" alt="capa do livro">
                </div>
                {{-- footer card --}}
                <div class="flex items-center flex-col" style="height: 80px;">
                    <div class="flex bg-white">
                        <div class="mr-2 h-20 w-20 rounded-full overflow-hidden relative bg-gray-200">
                            <img src="{{ url('asset/img/user.svg') }}" alt="autor">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div class="mb-2 h-5 w-40 overflow-hidden relative text-bold">
                                <p>Nome</p>
                            </div>
                            <div class="w-40 overflow-hidden relative">
                                Escrevinhei mais de dez livros
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            @endforeach
        </div>
        {{-- end container grup card --}}
    </div>
</div>
