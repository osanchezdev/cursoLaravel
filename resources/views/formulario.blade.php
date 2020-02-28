@extends('layouts.plantilla')

    @section('titulo', 'Formulario de envío')
    @section('h1', 'Formulario de envío')

    @section('main')

        <div class="alert bg-light p4">
        <form action="/procesa" method="post">
            @csrf
            Nombre:
            <br>
            <input type="text" name="nombre" class="form-control">
            <br>
            <button class="btn btn-warning">enviar</button>

        </form>
        </div>
    @endsection
