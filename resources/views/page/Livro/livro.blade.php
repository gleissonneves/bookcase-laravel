@extends('template.template')
@section('template-content-main')
    <div class="w-full bg-white rounded py-2.5 px-2" style="height:50px;">
        <a class="py-1 px-5 border border-indigo-600 text-indigo-600 cursor-pointer rounded" href="/" rel="">
            Início
        </a>
    </div>

    <div class="flex items-center justify-center h-screen">
        <div class="flex flex-col m-1 py-2 px-3 border rounded bg-white shadow-md text-center justify-center"
            style="width: 275px; height:150px;">
            <div class="mb-4">
                <h1 class="text-indigo-600 text-xl">
                    Adicione novos livros <br />
                    a sua lista de leitura
                </h1>
            </div>
            <div>
                <a class="py-1 px-5 bg-indigo-600 text-white cursor-pointer rounded" 
                   href="/livro/cadastro" 
                   rel="">
                    ir a adicionar
                </a>
            </div>
        </div>

        <div class="flex flex-col m-1 py-2 px-3 border rounded bg-white shadow-md text-center justify-center"
            style="width: 275px; height:150px;">
            <div class="mb-4">
                <h1 class="text-indigo-600 text-xl">
                    Faça auterações na lista <br/>
                    de Livros 
                </h1>
            </div>
            <div>
                <a class="py-1 px-5 bg-indigo-600 text-white cursor-pointer rounded" 
                   href="/livro/cadastro" 
                   rel="">
                    ir a Lista
                </a>
            </div>
        </div>
    </div>

@endsection
