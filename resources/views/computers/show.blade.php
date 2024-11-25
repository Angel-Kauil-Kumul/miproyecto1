<x-app-layout>
    <h1>Computadora seleccionada {{ $comp->id }}</h1>
    <h3><b>Marca: </b>{{ $comp->mark }}</h3>
    <h3><b>Modelo: </b>{{ $comp->model }}</h3>
    <br>
    <br>
    <a href="/computers/{{ $comp->id }}/edit">Editar</a>
    <br>
    <form action="/computers/{{ $comp->id }}" method="POST">
        @csrf  
        @method('DELETE') 
        <button type="submit">Eliminar</button>
    </form>
    <br>
    <a href="/computers">Regresar</a>
    <br><br>
</x-app-layout>