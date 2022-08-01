<x-layout page="Editar Tarefa" >

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
       
    </x-slot:btn>
    <section id="task_section">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="{{route('tasks.edit_action')}}">
            @csrf
            <input type="hidden" name="id" value="{{ $task->id }}" />

 <x-form.checkbox_input
                name="is_done"
                label="A tarefa foi concluída?"
                checked="{{ $task->is_done }}"
            />

            <x-form.text_input 
            name="title" 
            label="Titulo da Tarefa" 
            placeholder="Digite o titulo da sua Task"
            value="{{ $task->title }}"
            />

            <x-form.text_input 
            type="datetime-local" 
            name="due_date" 
            label="Data da Realização"
            value="{{ $task->due_date }}"
            />

            <x-form.select_input 
            name="category_id" 
            label="Categoria" 
            placeholder="Selecione uma Categoria">
                @foreach ($categories as $category)

                <option value="{{ $category->id }}"
                    @if($category->id == $category->id)
                        selected
                    @endif
                    >{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input 
            name="description" 
            label="Descrição da Tarefa" 
            placeholder="Digite uma Descrição para sua Tarefa" 
            value="{{ $task->description }}"
            />
            
           

            <x-form.button 
            type="reset">Resetar
        </x-form.button>
            <x-form.button 
            type="submit">Atualizar Tarefa
        </x-form.button>

        </form>
    </section>


</x-layout>