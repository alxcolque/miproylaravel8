@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="javascript:void(0)" class="nav-link" onclick="export2Pdf()">Download PDF</a>
                        <div class="image"></div>
                        <h1>Some Random Text Title Content</h1>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dicta dolorem, expedita
                                ipsum maiores quas sapiente vero. Beatae dolore dolores ducimus eos, iusto laborum possimus
                                quibusdam
                                reprehenderit
                                soluta vero voluptatibus?. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                                alias asperiores atque,
                                blanditiis consequuntur cupiditate, delectus ea facilis ipsam laborum magni maiores
                                molestiae natus porro quod
                                recusandae saepe sequi sint!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                                architecto esse facere
                                ipsum ratione. Adipisci animi cumque eligendi excepturi harum praesentium quia. Aperiam cum,
                                error molestiae quae
                                quaerat repudiandae unde?. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                consequatur culpa cum
                                debitis deserunt dolor, et expedita fugiat labore minus modi nam nostrum provident quam
                                quasi quo veniam voluptas
                                voluptates.
                            </p>
                        </div>
                        <table class="mytableclaim" id="mytableclaimId" style="width: 100%;">
                            <tr>
                                <td colspan="2" class="align-right" style=" font-weight: bold;">Formulario N: </td>
                                <td colspan="4" id="frmNo"></td>
                                <td class="align-right" style="font-weight: bold;">Fecha:</td>
                                <td colspan="2" id="frmDate"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="align-right" style="font-weight: bold;">Tipo:</td>
                                <td colspan="7" style=" text-align: center;">
                                    <span id="frmQj"></span>
                                    <span id="frmSg"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="9" style="font-weight: bold;">1. IDENTIFICACIÓN DEL CLIENTE</td>
                            </tr>

                            <tr id="trE1" style=" text-align: center;">
                                <td colspan="8" style="font-weight: bold;">Cliente externo</td>
                            </tr>
                            <tr id="trE2">
                                <td colspan="3" class="align-right" style="font-weight: bold;">Nombre y Apellido:
                                </td>
                                <td colspan="5" id="nameExt"></td>
                            </tr>
                            <tr id="trE3">
                                <td colspan="3" class="align-right" style="font-weight: bold;">Dirección:</td>
                                <td colspan="5" id="addressExt"></td>
                            </tr>
                            <tr id="trE4">
                                <td colspan="3" class="align-right" style="font-weight: bold;">Empresa/Entidad al
                                    cual representa:</td>
                                <td colspan="5" id="companyExt"></td>
                            </tr>
                            <tr id="trE5">
                                <td colspan="3" class="align-right" style="font-weight: bold;">Correo electrónico:
                                </td>
                                <td colspan="2" id="emailExt"></td>
                                <td class="align-right" style="font-weight: bold;">Teléfono/celular:</td>
                                <td colspan="3" id="phoneExt"></td>
                            </tr>
                            <tr id="trE6">
                                <td colspan="8" style="font-weight: bold;">Identificación del Área al cual va dirigida
                                    la queja o sugerencia:
                                </td>
                            </tr>
                            <tr id="trE7">
                                <td colspan="8" id="areaIdExt" style="padding: 20px;"></td>
                            </tr>

                            <tr id="trI1" style=" text-align: center;">
                                <td colspan="8" style="font-weight: bold;">Cliente interno</td>
                            </tr>
                            <tr id="trI2">
                                <td colspan="4" class="align-right" style="font-weight: bold;">Nombre y Apellido:
                                </td>
                                <td id="nameInt"></td>
                                <td class="align-right" style="font-weight: bold;">Area: </td>
                                <td colspan="2" id="areaInt"></td>
                            </tr>
                            <tr id="trI3">
                                <td colspan="8" style="font-weight: bold;">Identificación del Área al cual va dirigida
                                    la queja o sugerencia:</td>
                            </tr>
                            <tr id="trI4">
                                <td colspan="8" id="areaIdInt" style="padding: 10px;"></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="font-weight: bold;">2. DESCRIPCIÓN DE LA QUEJA / SUGERENCIA
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="padding: 50px;" id="description"></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="align-right" style="font-weight: bold;">Firma del cliente:
                                </td>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="font-weight: bold;">3. INVESTIGACIÓN
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="padding: 50px;"></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="font-weight: bold;">4. ACTIVIDADES DE SOLUCIÓN
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="font-weight: bold; width:10px">No.</td>
                                <td colspan="3" style="font-weight: bold;">ACCIÓN TOMADA</td>
                                <td style="font-weight: bold;">Responsable</td>
                                <td style="font-weight: bold;">Fecha inicio</td>
                                <td style="font-weight: bold;">Fecha final</td>
                                <td style="font-weight: bold;">Estado</td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="font-weight: bold; width:10px">1</td>
                                <td colspan="3" style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="font-weight: bold; width:10px">2</td>
                                <td colspan="3" style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="font-weight: bold; width:10px">3</td>
                                <td colspan="3" style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="font-weight: bold; width:10px">4</td>
                                <td colspan="3" style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                                <td style="font-weight: bold;"></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="font-weight: bold;">5. CONCLUSIÓN/SEGUIMIENTO
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="padding: 50px;"></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="font-weight: bold;">6. NOTIFICACIÓN AL CLIENTE (Fecha, nombre )
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="padding: 50px;"></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="font-weight: bold;">7. REFERENCIA A ACCIONES CORRECTIVAS
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="padding: 30px;"></td>
                            </tr>
                        </table>
                        <br>
                        <table class="mytableclaim" style="width: 80%; margin: 0 auto;">
                            <tr>
                                <td style="padding: 20px;"></td>
                                <td style="padding: 20px;"></td>
                            </tr>
                            <tr style="font-weight: bold;">
                                <td>RESPONSABLE DE ATENCION</td>
                                <td>ACEPTACION (Cliente)</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('css')
    <style>
        .mytableclaim td {
            border: 1px solid black;
        }

        td {
            padding: 8px;
        }

        .align-right {
            text-align: right;
        }

    </style>
    <style>
        body {
          margin: 0;
          padding: 0;
          font-size: 14px;
          background-image: linear-gradient(315deg, #9fa4c4 0%, #9e768f 74%);
          font-family: sans-serif;
          background-size: cover;
        }

        h1 {
          font-size: 22px;
        }

        /* .container {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 600px;
          padding: 30px;
          background: #fff;
          box-sizing: border-box;
          border-radius: 10px;
          box-shadow: 0 15px;
          50px rgba(0, 0, 0, .2)
        } */

        .image {
          width: 200px;
          height: 200px;
          background: url(authr.jpg);
          background-size: cover;
          float: left;
          margin: 30px 30px 30px 0;
        }
      </style>
@endsection
@section('js')
    <script>
        const export2Pdf = async () => {

            let printHideClass = document.querySelectorAll('.print-hide');
            printHideClass.forEach(item => item.style.display = 'none');
            await fetch("{{ route('export-pdf') }}", {
                method: 'GET'
            }).then(response => {
                if (response.ok) {
                    response.json().then(response => {
                        var link = document.createElement('a');
                        link.href = response;
                        link.click();
                        printHideClass.forEach(item => item.style.display = '');
                    });
                }
            }).catch(error => console.log(error));
        }
    </script>
@endsection
