<div class="pt-16 w-full">
    <div class="flex flex-col space-y-2">
        <div>
            <h1 class="m-1 text-indigo-600 text-3xl light font-extraligh">Autores</h1>
        </div>
    </div>
</div>

<div class="space-x-2 w-full">
    <div class="flex w-full flex-row relative h-full items-center justify-items-center">
        {{-- container grup card --}}
        <div class="slick-scroll w-full h-full">
            @foreach ($autors as $autor)
            <div class="flex items-center flex-col m-1">
                <div class="flex bg-white shadow-md p-4 rounded-md">
                    <div class="mr-2 h-20 w-20 rounded-full overflow-hidden relative bg-gray-200">
                        <img src="{{ url('asset/img/user.svg') }}" alt="autor">
                    </div>
                    <div class="flex flex-col justify-between">
                        <div class="mb-2 h-5 w-40 overflow-hidden relative text-bold">
                            <p>{{$autor->nome}}</p>
                            <a href="#">ver livros desse autor</a>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach
        </div>
        {{-- end container grup card --}}
    </div>
</div>