<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('peticion', 'proceso');
Route::get('/hola', function(){
    $nombre = 'Astrid';
    $alumnos = [
        'Solange', 'Bridgitte', 'shessica',
        'Carmella', 'Sheila', 'Wagner'
        ];
    return view('saludo',
                            [
                                'nombre' => $nombre,
                                'alumnos' => $alumnos
                            ]);
});

Route::get('/test', function (){
    return view('prueba');
});
Route::view('/prueba1', 'pruaba1');
/*Route::get('/prueba1', function(){
    return view('prueba1');
});*/

Route::get('/inicio', function(){
    return view('inicio');
});

//////
Route::view('/formulario', 'formulario');
Route::post('/procesa', function(){
   $nombre = $_POST['nombre'];
   return view('procesa', [ 'nombre'=>$nombre ]);
});

############################
### RAW SQL  ###############
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/listaRegiones', function(){
    $regiones = DB::select(
            'SELECT regID, regNombre
                        FROM regiones'
            );

    return view('listarRegiones', [
                    'regiones'=>$regiones
    ]           );
});

Route::get('/listaDestinos', function(){
    $destinos = DB::select(
            'SELECT destNombre, r.regNombre, destPrecio
                        FROM regiones r, destinos d
                        WHERE r.regID=d.regID'
            );

    return view('listarDestinos', [
                    'destinos'=>$destinos
    ]           );
});

Route::get('/adminRegiones', function(){
    $regiones = DB::table('regiones')
                        ->select('regID', 'regNombre')
                        ->get();
    return view('adminRegiones',
            ['regiones'=>$regiones]
    );
});

Route::view('/agregarRegion', 'formAgregarRegion');

Route::post('/agregarRegion', function(Request $request){
    //$regNombre = $_POST['regNombre'];
    $regNombre = $request->input('regNombre');
    DB::table('regiones')
            ->insert([
                'regNombre'=>$regNombre
            ]);
    return redirect('/adminRegiones')
                ->with('mensaje', 'Region: '.$regNombre.' agregada correctamente');
});










