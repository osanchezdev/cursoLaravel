@extends('layouts.plantilla')

    @section('titulo', 'Alta de una nueva Región')

    @section('h1', 'Alta de una nueva Región')

    @section('main')

        <div class="alert bg-light p-3">
            <form action="agregarRegion" method="post">
                Nombre de la región
                <br>
                <input type="text" name="regNombre" class="form-control" required>
                <br>
                <a href="/adminRegiones" class="btn btn-outline-secondary">
                    Volver
                </a>
                <button class="btn btn-dark">Agregar Región</button>
            </form>
        </div>

   @endsection

