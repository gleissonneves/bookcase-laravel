<div class="w-full bg-white rounded py-2.5 px-2" style="height:50px;">
    <a class="py-1 px-5 border border-indigo-600 text-indigo-600 cursor-pointer rounded" href="/" rel="">
        Início
    </a>
</div>

<div class="flex items-center justify-center h-screen">

    <div class="bg-white shadown-2 rounded-lg border shadow-lg p-10">
        <a class="py-2 px-3 border border-indigo-600 text-indigo-600 cursor-pointer rounded-full" href="/" rel="">
            &#5176;
        </a>
        
        <h1 class="block w-full text-2xl font-light text-grey-darkest text-center mb-8">Você deseja excluir permanentemente este livro?</h1>

        <a href="/" class="bg-indigo-500 text-white rounded px-4 py-1">Voltar para início</a>
        <button class="bg-red-500 text-white rounded px-4 py-1" wire:click="destroy()">Excluir definitivamente</button>
    </div>

</div>
