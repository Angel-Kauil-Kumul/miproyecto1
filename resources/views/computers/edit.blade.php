<x-app-layout>
    <h1>Actualizar una computadora</h1>

    <form action="/computers/{{ $comp->id }}" method="POST">
        @csrf           //TOKEN DE FORMULARIO 
        @method('PUT')  //METODO PUT
        <label>
            Marca:
            <input type="text" name="mark" value="{{ $comp->mark }}" 
            placeholder="Ingrese la MARCA">
        </label><br><br>
        <label>
            Modelo:
            <input type="text" name="model" value="{{ $comp->model }}" 
            placeholder="Ingrese la MODELO">
        </label><br><br>
        <label>
            Tamaño
            <select name="size">
                <option value="11">11 pulgadas</option>
                <option value="14">14 pulgadas</option>
                <option value="15.6">15.6 pulgadas</option>
                <option value="17">17 pulgadas</option>
            </select>
        </label><br><br>
        <label>
            Fecha fabricación:
            <input type="text" name="published_at" 
            value="{{ $comp->published_at }}">
        </label><br><br>
        <label>
            Disponible:
            <select name="is_active">
                <option value="true">Si</option>
                <option value="false">No</option>
            </select>
        </label><br><br>
        <button type="submit">Actualizar</button>
    </form>

    <br>
    <br>
    <a href="/computers">Regresar</a>
    <br><br>
</x-app-layout>