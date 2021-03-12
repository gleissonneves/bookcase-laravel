
<div class="pt-10 my-4 flex space-x-2">
    <div class="flex flex-col space-y-2">
        <div>
            <h1 class="m-1 text-indigo-600 text-3xl light font-extraligh">Gênero literarios</h1>
        </div>
        <div class="flex flex-wrap">
            @foreach ($generos as $generos)
                <div class="select-none m-1 py-1 px-3 border border-indigo-600 rounded-full text-indigo-600 text-lg light font-extralight">
                    {{$generos->nome}}
                </div>
            @endforeach
        </div>
    </div>
</div>

