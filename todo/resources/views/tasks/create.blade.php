<x-layout page="Criar Tarefa">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>

    </x-slot:btn>
    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST" action="{{route('tasks.create_action')}}">
            @csrf

            <x-form.text_input name="title" label="Titulo da Tarefa" placeholder="Digite o titulo da sua Task" />
            <x-form.text_input type="date" name="due_date" label="Data da Realização" />
            <x-form.select_input name="category_id" label="Categoria" placeholder="Selecione uma Categoria">
                @foreach ($categories as $category)

                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>
            <x-form.textarea_input name="description" label="Descrição da Tarefa" placeholder="Digite uma Descrição para sua Tarefa" />

            <x-form.button type="reset">Resetar</x-form.button>
            <x-form.button type="submit">Enviar Tarefa</x-form.button>

        </form>
    </section>
</x-layout>
