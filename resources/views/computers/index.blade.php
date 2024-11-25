<x-app-layout>
    <h1>Lista de computadoras</h1>
    <h4><a href="/computers/create">Nueva computadora</a></h4>
    <ul>
    @foreach ($comps as $cmp)
        <li>
            <a href="/computers/{{ $cmp->id }}/edit">[E]</a>
            <a href="/computers/{{ $cmp->id }}">[D]</a>
            <a href="computers/{{$cmp->id}}">{{$cmp->model;}}</a>
        </li>
    @endforeach
    </ul>
</x-app-layout>