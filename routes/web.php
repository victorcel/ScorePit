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
    return view('reportes.reporte');
});

/*Route::get('zeus', function () {
    //dd(DB::connection('sqlsrv')->select("SELECT TOP 1000 *  FROM [Nomina_9.01.00].[dbo].[Alertas]"));
    $users = DB::connection('sqlsrv')->select("exec sp_executesql N'Set NoCount On
    Execute spMensajes @Op = ''URpt'' ,@IdDestino = ''1'',@IdDiscoDuro = ''844466948'',@IPLocal = ''10.43.29.21'',@Port = ''1000'',@Aplicacion = ''NOMINA''
Exec SpRpt_NmReciboPago
@Key = @P1,
@Iden_tipoNomina = @P2,
@Periodo = @P3,
@FechaInicial = @P4,
@FechaFinal = @P5,
@ContratoInicial = @P6,
@ContratoFinal = @P7,
@EmpleadoInicial = @P8,
@EmpleadoFinal = @P9,
@CentroCostoInicial = @P10,
@CentroCostoFinal = @P11,
@CargoInicial = @P12,
@CargoFinal = @P13,
@BUInicial = @P14,
@BUFinal = @P15,
@Detallado = @P16,
@SaldoPagina = @P17,
@ExcluirPagosEspeciales = @P18,
@PagoEspecial = @P19,
@Prestamos = @P20,
@Orden = @P21,
@Orden2 = @P22,
@Orden3 = @P23,
@Mostrar = @P24,
@FormaPago = @P25,
@IndNota = @P26,
@NivelI = @P27,
@NivelF = @P28,
@CLasificacionI = @P29,
@CLasificacionF = @P30,
@TiempoReloj = @P31,
@IndEmail = @P32
',N'@P1 varchar(1),@P2 int,@P3 int,@P4 varchar(8),@P5 varchar(8),@P6 varchar(1),@P7 varchar(25),@P8 varchar(10),@P9 varchar(10),@P10 varchar(1),@P11 varchar(16),@P12 varchar(1),@P13 varchar(16),@P14 varchar(1),@P15 varchar(25),@P16 varchar(1),@P17 varchar(1),@P18 varchar(1),@P19 text,@P20 int,@P21 varchar(1),@P22 varchar(1),@P23 varchar(1),@P24 varchar(1),@P25 int,@P26 int,@P27 varchar(1),@P28 varchar(25),@P29 varchar(1),@P30 varchar(25),@P31 int,@P32 int',' ',4,105
,'20180316','20180316',' ','ZZZZZZZZZZZZZZZZZZZZZZZZZ','33104706','33104706',' ','ZZZZZZZZZZZZZZZZ',' ','ZZZZZZZZZZZZZZZZ',' ','ZZZZZZZZZZZZZZZZZZZZZZZZZ','N','N','T','',0,'C','N','I','T',999,0,' ','ZZZZZZZZZZZZZZZZZZZZZZZZZ',' ','ZZZZZZZZZZZZZZZZZZZZZZZZZ',0,0");
    dd($users);
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
