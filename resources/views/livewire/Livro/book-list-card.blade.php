<div class="pt-16 w-full">
    <div class="flex flex-col space-y-2">
        <div>
            <h1 class="m-1 text-indigo-600 text-3xl light font-extraligh">Livros</h1>
        </div>
    </div>
</div>

<div class="space-x-2 w-full">
    <div class="flex w-full flex-col relative h-full">
        {{-- container grup card --}}        
            @foreach ($books as $book)
            <div class="w-full bg-white m-3 rounded shadow-md" style="height:400px;">
                <div class="flex flex-row">
                    <div class="flex justify-center items-center px-3" style="weight:200px; height:400px;">
                        <img src="{{$book->img_capa}}" alt="capa do livro" class="w-96" style="weight:200px; height:350px;">
                    </div>

                    <div class="px-3 py-2 h-full" style="weight:200px; height:400px;">
                        <div class="text-indigo-600 text-base mb-2 break-normal">
                            <h1 class="text-xl light font-extraligh">{{$book->nome}}</h1>
                        </div>

                        <div class="text-gray-500 text-base font-light overflow-auto">
                            <p class="mb-5">{{$book->descricao}}</p>
                            <a href="/livro/edite/{{$book->id}}" class="bg-blue-500 text-white py-1 px-5 rounded-lg float-right">Editar</a>
                            <a href="livro/excluir/{{$book->id}}" class="bg-red-400 text-white py-1 px-5 rounded-lg float-right mr-3">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach        
        {{-- end container grup card --}}
    </div>
</div>
