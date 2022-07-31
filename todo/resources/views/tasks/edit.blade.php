<x-layout page="Editar Tarefa" >

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
       
    </x-slot:btn>
    Tela de Editar Tarefa
    <a href="{{ route('home') }}" class="btn btn-primary">
    Voltar para pagina inicial
    </a>
</x-layout>