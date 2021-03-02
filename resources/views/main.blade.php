@extends('template.template')

@section('template-content-main')

    <div class="rounded-lg w-full mb-6 bg-white" style="height:50px;">
        <div class="flex text-center p-2">
            <ul class="my-auto text-base w-full">
                <li class="inline-block">
                    <a href="/autor" class="text-indigo-600  md:mr-1">Autores</a>
                </li>
                <li class="inline-block">
                    <a href="/livro" class="text-indigo-600 md:mr-1">Livros</a>
                </li>
                <li class="inline-block">
                    <a href="/genero" class="text-indigo-600">Gêneros</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="rounded-lg w-full bg-white mb-1" style="height:400px;">
    </div>

    <livewire:genero.genero-list-badge />
    <livewire:livro.book-list-card />
    <livewire:autor.autor-list-card />

    <div class="rounded-lg w-full mt-16" style="height:50px;">
        <div class="w-full text-center p-2 text-gray-500">
            <p>© 2021 Test Crud</p>
        </div>
    </div>
@endsection