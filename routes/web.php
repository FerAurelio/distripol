<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('/', function () {
    return view('/layouts/master');
});

Route::get('/home', 'HomeController@directory')->name('home');


Route::get('/',  'IndexController@index')->name('inicio');

Route::get('/productos', 'ProductoController@busqueda')->name('busqueda');
Route::post('/productos', 'ProductoController@busqueda')->name('busquedaP');

Route::get("/productos/{id}", "ProductoController@show");

//construccion
Route::get('/construccion/corte', 'ConstruccionController@listadoCorte')->name('seccionConstCorte');
Route::get('/construccion/corte2', 'ConstruccionController@listadoCorte2')->name('seccionConstCorte2');
Route::get('/construccion/perforado', 'ConstruccionController@listadoPerforado')->name('seccionConstPerforado');
Route::get('/construccion/perforado2', 'ConstruccionController@listadoPerforado2')->name('seccionConstPerforado2');
Route::get('/construccion/demolicion', 'ConstruccionController@listadoDemolicion')->name('seccionConstDemolicion');

//marmoleria
Route::get('/marmoleria/corte', 'MarmoleriaController@listadoCorte')->name('seccionMarmCorte');
Route::get('/marmoleria/corte2', 'MarmoleriaController@listadoCorte2')->name('seccionMarmCorte2');
Route::get('/marmoleria/corte3', 'MarmoleriaController@listadoCorte3')->name('seccionMarmCorte3');
Route::get('/marmoleria/perforado', 'MarmoleriaController@listadoPerforado')->name('seccionMarmPerforado');
Route::get('/marmoleria/perforado2', 'MarmoleriaController@listadoPerforado2')->name('seccionMarmPerforado');
Route::get('/marmoleria/desbaste', 'MarmoleriaController@listadoDesbaste')->name('seccionMarmDesbaste');
Route::get('/marmoleria/desbaste2', 'MarmoleriaController@listadoDesbaste2')->name('seccionMarmDesbaste2');
Route::get('/marmoleria/desbaste3', 'MarmoleriaController@listadoDesbaste3')->name('seccionMarmDesbaste3');
Route::get('/marmoleria/desbaste4', 'MarmoleriaController@listadoDesbaste4')->name('seccionMarmDesbaste4');
Route::get('/marmoleria/desbaste5', 'MarmoleriaController@listadoDesbaste5')->name('seccionMarmDesbaste5');
Route::get('/marmoleria/desbaste6', 'MarmoleriaController@listadoDesbaste6')->name('seccionMarmDesbaste6');
Route::get('/marmoleria/desbaste7', 'MarmoleriaController@listadoDesbaste7')->name('seccionMarmDesbaste7');
Route::get('/marmoleria/desbaste8', 'MarmoleriaController@listadoDesbaste8')->name('seccionMarmDesbaste8');
Route::get('/marmoleria/desbaste9', 'MarmoleriaController@listadoDesbaste9')->name('seccionMarmDesbaste9');
Route::get('/marmoleria/adhesivos', 'MarmoleriaController@listadoAdhesivos')->name('seccionMarmAdhesivos');
Route::get('/marmoleria/adhesivos2', 'MarmoleriaController@listadoAdhesivos2')->name('seccionMarmAdhesivos2');
Route::get('/marmoleria/equipos', 'MarmoleriaController@listadoEquipos')->name('seccionMarmEquipos');
Route::get('/marmoleria/accesorios', 'MarmoleriaController@listadoAccesorios')->name('seccionMarmAccesorios');

//Pisos Industriales
Route::get('/pisosIndustriales/corte', 'PisosIndustrialesController@listadoCorte')->name('seccionIndCorte');
Route::get('/pisosIndustriales/perforado', 'PisosIndustrialesController@listadoPerforado')->name('seccionIndPerforado');
Route::get('/pisosIndustriales/pulido', 'PisosIndustrialesController@listadoPulido')->name('seccionIndPulido');
Route::get('/pisosIndustriales/pulido2', 'PisosIndustrialesController@listadoPulido2')->name('seccionIndPulido2');
Route::get('/pisosIndustriales/pulido3', 'PisosIndustrialesController@listadoPulido3')->name('seccionIndPulido3');
Route::get('/pisosIndustriales/pulido4', 'PisosIndustrialesController@listadoPulido4')->name('seccionIndPulido4');
Route::get('/pisosIndustriales/adhesivos', 'PisosIndustrialesController@listadoAdhesivos')->name('seccionIndAdhesivos');
Route::get('/pisosIndustriales/adhesivos2', 'PisosIndustrialesController@listadoAdhesivos2')->name('seccionIndAdhesivos2');

//gress
Route::get('/gress/corte', 'GressController@listadoCorte')->name('seccionGressCorte');
Route::get('/gress/corte2', 'GressController@listadoCorte2')->name('seccionGressCorte2');

//mosaicos
Route::get('/mosaicos/corte', 'MosaicosController@listadoCorte')->name('seccionMosaicosCorte');

//herramientas
Route::get('/herramientas/amoladoras', 'HerramientasController@listadoAmoladoras')->name('seccionHerramientasAmoladoras');
Route::get('/herramientas/aserradoras', 'HerramientasController@listadoAserradoras')->name('seccionHerramientasAserradoras');
Route::get('/herramientas/pulidoras', 'HerramientasController@listadoPulidoras')->name('seccionHerramientasPulidoras');
Route::get('/herramientas/martillos-electro-neumaticos', 'HerramientasController@listadoMartillos')->name('seccionHerramientasMartillos');
Route::get('/herramientas/taladros-electricos-bateria', 'HerramientasController@listadoTaladrosEB')->name('seccionHerramientasTaladrosEB');
Route::get('/herramientas/taladros-coronas', 'HerramientasController@listadoTaladrosC')->name('seccionHerramientasTaladrosC');

//seguridad
Route::get('/seguridad/guantes', 'SeguridadController@listadoGuantes')->name('seccionSeguridadGuantes');
Route::get('/seguridad/respiratoria', 'SeguridadController@listadoRespiratoria')->name('seccionSeguridadRespiratoria');
Route::get('/seguridad/auditiva', 'SeguridadController@listadoAuditiva')->name('seccionSeguridadAuditiva');
Route::get('/seguridad/facial', 'SeguridadController@listadoFacial')->name('seccionSeguridadFacial');
Route::get('/seguridad/fajas', 'SeguridadController@listadoFajas')->name('seccionSeguridadFajas');




Route::get('/servicios',  'ServiciosController@directory')->name('servicios');

Route::get('/contacto',  'ContactoController@directory')->name('contacto');
Route::post('/contacto/enviado',  'ContactoController@enviar2')->name('contactof');

Route::get('/cotizar',  'CotizarController@directory')->name('cotizar');