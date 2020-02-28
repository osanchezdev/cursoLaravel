<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-

</head>
<body>
    <main class="container">
        <h1>Hola mundo</h1>

        <div class="alert alert-success">
            vista saludo generada: {{ date('d/m/Y') }}
        </div>

        <div class="alert alert-primary">
        @if( $nombre == 'Astrid' )
            Bienvenida/o {{$nombre}}
            @else
            jklkljy
        @endif
        </div>

        @foreach( $alumnos as $alumno )
        <div class="alert alert-dark">
            {{$alumno}}
        </div>
        @endforeach

    </main>

</body>
</html>
