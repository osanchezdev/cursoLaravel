@extends('layouts.plantilla')

    @section('titulo', 'Panel de administración de regiones')

    @section('h1', 'Panel de administración de regiones')

    @section('main')

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Región</th>
                <th colspan="2">
                    <a href="" class="btn btn-dark">
                        agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>id</td>
                <td>Región</td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        modificar
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        modificar 
                    </a>
                </td>
            </tr>
            </tbody>
        </table>

   @endsection

