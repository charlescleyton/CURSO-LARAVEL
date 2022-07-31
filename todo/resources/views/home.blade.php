<x-layout page="Home">

    <x-slot:btn>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            Criar Tarefa
        </a>
    </x-slot:btn>
    <section class="graph">
        <div className="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" />
                13 de Dez
                <img src="/assets/images/icon-next.png" />

            </div>
        </div>
        <div class="graph_header-subtitle"> Tarefas: <b>3/6</b>
        </div>
        <div class="graph-placeholder">
        </div>
        <div class="tasks_left-footer">
            <img src="/assets/images/icon-info.png" />
            Restam 3 tarefas para serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select class="list_header-select">
                <option value="1">Todas as tarefas</option>

            </select>
        </div>
        <div class="task_list">
           @foreach ($tasks as $task)
               
           <x-task :data=$task />
           @endforeach

        </div>
    </section>
</x-layout>
