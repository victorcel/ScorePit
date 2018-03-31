<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="{{ asset('css/base.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fancy.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    <script src="{{ asset('js/compatibility.min.js') }}"></script>
    <script src="{{ asset('js/theViewer.min.js') }}"></script>
    <script>
        try {
            theViewer.defaultViewer = new theViewer.Viewer({});
        } catch (e) {
        }
    </script>
    <title></title>
</head>
<body>
<div id="sidebar">
    <div id="outline">
    </div>
</div>
<div id="page-container">
    <div id="pf1" class="pf w0 h0" data-page-no="1">
        <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="bg1.png"/>
            <div class="c x0 y1 w2 h2">
                <div class="t m0 x1 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">SUN CASINOS COLOMBIA S.A.S</div>
            </div>
            <div class="c x0 y3 w2 h4">
                <div class="t m0 x2 h5 y4 ff1 fs1 fc0 sc0 ls1 ws0">Recibo de Pago No. 1</div>
            </div>
            <div class="c x3 y5 w3 h6">
                <div class="t m0 x4 h7 y6 ff2 fs2 fc0 sc0 ls1 ws0">Fecha: {{ Carbon\Carbon::parse($quotes->created_at)->format('d/m/Y') }}</div>
                <div class="t m0 x4 h7 y7 ff2 fs2 fc0 sc0 ls1 ws0">Hora: {{date('d-m-Y', strtotime($user->from_date))}}</div>
            </div>
            <div class="c x0 y8 w2 h4">
                <div class="t m0 x5 h8 y9 ff1 fs3 fc0 sc0 ls0 ws0">NIT 900675316</div>
            </div>
            <div class="c x6 ya w4 h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">Local</div>
            </div>
            <div class="c x7 yc w5 h9">
                <div class="t m0 x4 ha yd ff2 fs3 fc0 sc0 ls1 ws0">33104706-1</div>
            </div>
            <div class="c x0 yc w6 h9">
                <div class="t m0 x4 h8 ye ff1 fs3 fc0 sc0 ls1 ws0">Contrato:</div>
            </div>
            <div class="c x0 yf w6 h9">
                <div class="t m0 x4 h8 ye ff1 fs3 fc0 sc0 ls1 ws0">Empleado:</div>
            </div>
            <div class="c x0 y10 w6 h9">
                <div class="t m0 x4 h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Dirección:</div>
            </div>
            <div class="c x0 ya w7 h9">
                <div class="t m0 x4 h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Centro Costo:</div>
            </div>
            <div class="c x7 yf w8 h9">
                <div class="t m0 x4 ha yd ff2 fs3 fc0 sc0 ls1 ws0">33104706 CASTRO CASTILLO SUGEY</div>
            </div>
            <div class="c x7 y10 w9 h9">
                <div class="t m0 x4 ha y11 ff2 fs3 fc0 sc0 ls1 ws0">VILLA FANI MZ A LT 14A</div>
            </div>
            <div class="c x7 ya wa h9">
                <div class="t m0 x4 ha y11 ff2 fs3 fc0 sc0 ls1 ws0">0800 CASHIERING</div>
            </div>
            <div class="c x8 yc wb h9">
                <div class="t m0 x4 h8 ye ff1 fs3 fc0 sc0 ls1 ws0">Periodo:</div>
            </div>
            <div class="c x9 yc wc h9">
                <div class="t m0 x4 ha yd ff2 fs3 fc0 sc0 ls1 ws0">2018/03/01 a 2018/03/15</div>
            </div>
            <div class="c x8 yf wb h9">
                <div class="t m0 x4 h8 ye ff1 fs3 fc0 sc0 ls1 ws0">Basico Neto:</div>
            </div>
            <div class="c x8 y10 wb h9">
                <div class="t m0 x4 h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Telefono(s):</div>
            </div>
            <div class="c x8 ya wb h9">
                <div class="t m0 x4 h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Cargo:</div>
            </div>
            <div class="c x9 yf wc h9">
                <div class="t m0 x4 ha yd ff2 fs3 fc0 sc0 ls1 ws0">850,000.00</div>
            </div>
            <div class="c x9 y10 wc h9">
                <div class="t m0 x4 ha y11 ff2 fs3 fc0 sc0 ls1 ws0"> 3215805526</div>
            </div>
            <div class="c x9 ya wc h9">
                <div class="t m0 x4 ha y11 ff2 fs3 fc0 sc0 ls1 ws0">18 CAJERO</div>
            </div>
            <div class="c x6 y10 wd h9">
                <div class="t m0 x4 ha y11 ff2 fs3 fc0 sc0 ls1 ws0">CARTAGENA</div>
                <div class="t m0 x4 ha y12 ff2 fs3 fc0 sc0 ls1 ws0"></div>
            </div>
            <div class="c x0 y13 we h9">
                <div class="t m0 x4 h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Codigo</div>
            </div>
            <div class="c x7 y13 wf h9">
                <div class="t m0 x4 h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Descripción del Concepto</div>
            </div>
            <div class="c xa y13 we h9">
                <div class="t m0 xb h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Cantidad</div>
            </div>
            <div class="c xc y13 w10 h9">
                <div class="t m0 xd h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Vr Devengos</div>
            </div>
            <div class="c xe y13 w11 h9">
                <div class="t m0 xf h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Vr Descuentos</div>
            </div>
            <div class="c x10 y13 w12 h9">
                <div class="t m0 xf h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Acumulado</div>
            </div>
            <div class="c x11 y13 w13 h9">
                <div class="t m0 x12 h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Saldo</div>
            </div>
            <div class="c x0 y14 we h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">DV01</div>
            </div>
            <div class="c xa y14 we h9">
                <div class="t m0 x13 ha yb ff2 fs3 fc0 sc0 ls1 ws0">15.00</div>
            </div>
            <div class="c xc y14 w10 h9">
                <div class="t m0 x14 ha yb ff2 fs3 fc0 sc0 ls1 ws0">425,000.00</div>
            </div>
            <div class="c xe y14 w11 h9">
                <div class="t m0 x15 ha yb ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c x7 y14 w14 h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">SUELDO BASICO</div>
            </div>
            <div class="c x14 y15 we h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">DV03</div>
            </div>
            <div class="c xa y15 we h9">
                <div class="t m0 x13 ha yb ff2 fs3 fc0 sc0 ls1 ws0">15.00</div>
            </div>
            <div class="c xc y15 w10 h9">
                <div class="t m0 x12 ha yb ff2 fs3 fc0 sc0 ls1 ws0">44,106.00</div>
            </div>
            <div class="c xe y15 w11 h9">
                <div class="t m0 x15 ha yb ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c x7 y15 w14 h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">SUBSIDIO DE TRANSPORTE</div>
            </div>
            <div class="c x14 y16 we h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">DV05</div>
            </div>
            <div class="c xa y16 we h9">
                <div class="t m0 x16 ha yb ff2 fs3 fc0 sc0 ls1 ws0">60 : 00</div>
            </div>
            <div class="c xc y16 w10 h9">
                <div class="t m0 x12 ha yb ff2 fs3 fc0 sc0 ls1 ws0">74,375.00</div>
            </div>
            <div class="c xe y16 w11 h9">
                <div class="t m0 x15 ha yb ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c x7 y16 w14 h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">HORAS RECARGO NOCTURNO</div>
            </div>
            <div class="c x14 y17 we h9">
                <div class="t m0 x4 ha ye ff2 fs3 fc0 sc0 ls1 ws0">DV09</div>
            </div>
            <div class="c xa y17 we h9">
                <div class="t m0 x16 ha ye ff2 fs3 fc0 sc0 ls1 ws0">12 : 30</div>
            </div>
            <div class="c xc y17 w10 h9">
                <div class="t m0 x12 ha ye ff2 fs3 fc0 sc0 ls1 ws0">77,474.00</div>
            </div>
            <div class="c xe y17 w11 h9">
                <div class="t m0 x15 ha ye ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c x7 y17 w14 h9">
                <div class="t m0 x4 ha ye ff2 fs3 fc0 sc0 ls1 ws0">HORAS EXTRAS NOCTURNAS</div>
            </div>
            <div class="c x14 y18 we h9">
                <div class="t m0 x4 ha ye ff2 fs3 fc0 sc0 ls1 ws0">DV13</div>
            </div>
            <div class="c xa y18 we h9">
                <div class="t m0 x13 ha ye ff2 fs3 fc0 sc0 ls1 ws0">6 : 00</div>
            </div>
            <div class="c xc y18 w10 h9">
                <div class="t m0 x12 ha ye ff2 fs3 fc0 sc0 ls1 ws0">23,375.00</div>
            </div>
            <div class="c xe y18 w11 h9">
                <div class="t m0 x15 ha ye ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c x7 y18 w14 h9">
                <div class="t m0 x4 ha ye ff2 fs3 fc0 sc0 ls1 ws0">RECARGO NOCTURNO DOMINICAL COMPENSADO</div>
            </div>
            <div class="c x14 y19 we h9">
                <div class="t m0 x4 ha ye ff2 fs3 fc0 sc0 ls1 ws0">DV16</div>
            </div>
            <div class="c xa y19 we h9">
                <div class="t m0 x16 ha ye ff2 fs3 fc0 sc0 ls1 ws0">10 : 00</div>
            </div>
            <div class="c xc y19 w10 h9">
                <div class="t m0 x12 ha ye ff2 fs3 fc0 sc0 ls1 ws0">26,563.00</div>
            </div>
            <div class="c xe y19 w11 h9">
                <div class="t m0 x15 ha ye ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c x7 y19 w14 h9">
                <div class="t m0 x4 ha ye ff2 fs3 fc0 sc0 ls1 ws0">RECARGO DOMINICAL COMPESADA 0.75</div>
            </div>
            <div class="c x14 y1a we h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">DX02</div>
            </div>
            <div class="c xa y1a we h9">
                <div class="t m0 x17 ha yb ff2 fs3 fc0 sc0 ls1 ws0"></div>
            </div>
            <div class="c xc y1a w10 h9">
                <div class="t m0 x18 ha yb ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c xe y1a w11 h9">
                <div class="t m0 x0 ha yb ff2 fs3 fc0 sc0 ls1 ws0">25,100.00</div>
            </div>
            <div class="c x7 y1a w14 h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">SALUD - 06 - CAFESALUD</div>
            </div>
            <div class="c x14 y1b we h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">DX03</div>
            </div>
            <div class="c xa y1b we h9">
                <div class="t m0 x17 ha yb ff2 fs3 fc0 sc0 ls1 ws0"></div>
            </div>
            <div class="c xc y1b w10 h9">
                <div class="t m0 x18 ha yb ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c xe y1b w11 h9">
                <div class="t m0 x0 ha yb ff2 fs3 fc0 sc0 ls1 ws0">25,100.00</div>
            </div>
            <div class="c x7 y1b w14 h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">PENSION - 03 - COLFONDOS</div>
            </div>
            <div class="c x14 y1c we h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">DX40</div>
            </div>
            <div class="c xa y1c we h9">
                <div class="t m0 x17 ha yb ff2 fs3 fc0 sc0 ls1 ws0"></div>
            </div>
            <div class="c xc y1c w10 h9">
                <div class="t m0 x18 ha yb ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c xe y1c w11 h9">
                <div class="t m0 x0 ha yb ff2 fs3 fc0 sc0 ls1 ws0">50,000.00</div>
            </div>
            <div class="c x7 y1c w14 h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">FALTANTES EN CAJA</div>
            </div>
            <div class="c x14 y1d we h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">DX65</div>
            </div>
            <div class="c xa y1d we h9">
                <div class="t m0 x17 ha yb ff2 fs3 fc0 sc0 ls1 ws0"></div>
            </div>
            <div class="c xc y1d w10 h9">
                <div class="t m0 x18 ha yb ff2 fs3 fc0 sc0 ls1 ws0">0.00</div>
            </div>
            <div class="c xe y1d w11 h9">
                <div class="t m0 x0 ha yb ff2 fs3 fc0 sc0 ls1 ws0">26,667.00</div>
            </div>
            <div class="c x7 y1d w14 h9">
                <div class="t m0 x4 ha yb ff2 fs3 fc0 sc0 ls1 ws0">DESCUENTO MACONDO 4US</div>
            </div>
            <div class="c x14 y1e w6 h9">
                <div class="t m0 x4 h8 yb ff1 fs3 fc0 sc0 ls1 ws0">Totales</div>
            </div>
            <div class="c x19 y1f w7 h4">
                <div class="t m0 xb h8 y20 ff1 fs3 fc0 sc0 ls1 ws0">670,893.00</div>
            </div>
            <div class="c x1a y1f w10 h4">
                <div class="t m0 x1b h8 y20 ff1 fs3 fc0 sc0 ls1 ws0">126,867.00</div>
            </div>
            <div class="c x14 y21 w15 h9">
                <div class="t m0 x4 h8 ye ff1 fs3 fc0 sc0 ls1 ws0">Neto a Pagar en Transferencia: 544,026.00</div>
            </div>
            <div class="c x14 y22 w16 h4">
                <div class="t m0 x4 h8 y9 ff1 fs3 fc0 sc0 ls1 ws0">SON: QUINIENTOS CUARENTA Y CUATRO MIL VEINTISEIS PESOS CON 0/100
                </div>
            </div>
            <div class="c x1c y23 w17 h4">
                <div class="t m0 x1d h8 y9 ff1 fs3 fc0 sc0 ls1 ws0">Firma del Empleado</div>
            </div>
        </div>
        <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
    </div>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
