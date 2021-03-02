{{-- form --}}
<div class="flex items-center justify-center h-screen">
    <div class="w-full bg-white rounded shadow-lg p-8 m-3 md:max-w-sm md:mx-auto">
        <h1 class="block w-full text-lg font-semibold text-center text-grey-darkest mb-6">Registre o autor do livro</h1>
        <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="/" method="post">
            
            <div class="flex flex-col mb-4 md:w-full">
                <label class="mb-2 font-light tracking-wide text-lg text-grey-darkest" for="">Livro</label>
                <input class="border focus:outline-none py-2 px-3 text-grey-darkest md:mr-2" type="text" name="" id="">
            </div>

            <div class="flex flex-col mb-4 md:w-full">
                <label class="mb-2 font-light tracking-wide text-lg text-grey-darkest" for="">Data de publicação</label>
                <input class="border focus:outline-none py-2 px-3 text-grey-darkest md:mr-2" type="date" name="" id="">
                <div>

                </div>
            </div>
            
            <div class="flex flex-col mb-4 md:w-full">
                <label class="mb-2 font-light text-lg text-grey-darkest" for="email">Descrição</label>
                <textarea class="border focus:outline-none py-2 px-3 text-grey-darkest" type="email" name="email" id="email"></textarea>
            </div>

            <button class="block bg-purple-700 hover:bg-purple-800 text-white mx-auto p-4 rounded md:w-full" type="submit">Cadastra livro</button>
        </form>
        <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker" href="/login">Already have an account?</a>
    </div>
</div>
{{-- end form --}}