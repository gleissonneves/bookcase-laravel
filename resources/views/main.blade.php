@extends('template.template')

@section('template-content-main')
    <div class="rounded-lg w-full bg-white" style="height:50px;">
        <div class="flex py-3 px-2">
            <ul class="my-auto text-base w-full text-right">
                <li class="inline-block">
                    <a href="/livro/cadastro" class="text-indigo-600 border border-indigo-600 py-1 px-3 md:mr-1 rounded-lg">Adicionar novo livro</a>
                </li>
            </ul>
        </div>
    </div>

    <livewire:livro.book-list-card />

    <div class="rounded-lg w-full mt-16" style="height:50px;">
        <div class="w-full text-center p-2 text-gray-500">
            <p>© 2021 Test Crud</p>
        </div>
    </div>
@endsection