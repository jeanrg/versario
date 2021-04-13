@extends('layouts.app')

@section('css')

    <!-- Styles -->
    <link href="{{ asset('calendario/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/sweetAlert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/animate.css/animate.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <!-- datatables -->
    <!-- datatables extension SELECT -->
    <link href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css" rel="stylesheet">

    <style>

        table.dataTable thead, table.dataTable tfoot{
            /* background: linear-gradient(to right, #3f5efb, #fc466b) !important; */
            background: linear-gradient(to left, #43cea2, #185a9d) !important;
            color: white;
        },

    </style>

@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-header text-muted font-weight-bold">
                {{ __('Tabla de versiculos') }}

            </div>

            <div class="card-body">
                <div class="card shadow p-4">

                    <table id="versiculos" class="table table-sm table-striped table-bordered display" width="100%" cellspacing="0" data-page-length="20">
                        <thead>
                          <tr>
                            <th class="text-center" scope="col">#</th>
                            <th scope="col">LIBRO</th>
                            <th scope="col">VERSICULO</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">FECHA</th>
                            <th scope="col">AÑO</th>
                            <th class="text-center" scope="col"><i class="fas fa-cog"></i> ACCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($versiculos as $versiculo)

                            @php
                                $dt=$versiculo->start;
                                $fechaEntera = strtotime($dt);
                                $anio = date("Y", $fechaEntera);

                                $firts = $versiculo->title;
                                $libro = Str::limit($firts, 6);

                            @endphp

                            <tr>
                                <th class="text-center" scope="row">{{$versiculo->id}}</th>
                                <td>{{$libro}}</td>
                                <td>{{$versiculo->title}}</td>
                                <td>{{$versiculo->descripcion}}</td>
                                <td>{{$dt}}</td>
                                <td>{{$anio}}</td>
                                <td>
                                    <div class="text-center">

                                        <a class="badge badge-success text-light" href="#"><span><i class="fab fa-whatsapp"></i></span></a>
                                        <a class="badge badge-warning text-secondary" href="#"><span><i class="far fa-edit"></i></span></a>
                                        <a class="badge badge-info text-light" href="#"><span><i class="fas fa-plus-circle"></i></span></a>
                                        <a class="badge badge-danger" href="#"><span><i class="far fa-trash-alt text-light"></i></span></a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="text-white">
                            <tr>
                                <th class="text-center" scope="col">#</th>
                                <th scope="col">LIBRO</th>
                                <th scope="col">VERSICULO</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">FECHA</th>
                                <th scope="col">AÑO</th>
                                <th class="text-center" scope="col"><i class="fas fa-cog"></i> ACCIONES</th>
                              </tr>
                        </tfoot>
                 </table>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection

@section('js')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('popper/popper.min.js')}}" ></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/1.2.1/js/searchPanes.bootstrap4.min.js"></script>
    <script src="{{ asset('plugins/sweetAlert2/sweetalert2.all.min.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- extension BOTONES -->



<script>
    $(document).ready(function() {



     var table = $('#versiculos').DataTable({
        // serverSide: true,

        // 'ajax' : '{{ route("datatables.versiculo") }}',
        // 'columns' : [
        //     { 'data' : 'id'},
        //     { data : "title"},
        //     { data : "descripcion"},
        //     { data : "start"},
        // ],

        searchPanes: {
            cascadePanes: true,
            viewTotal: true,
            dtOpts:{
                        dom:'tp',
                        pagingType:'simple',
                        searching:true,
                    }
        },
        deferRender: true,

        dom: "P<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'Bf>>" +
             "<'row'<'col-sm-12'rt>>" +
             "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
             responsive : true,
             autowidth: false,

       "lengthChange": false,

        buttons: {
            dom : {
                button:{
                     className : "btn"
                 }
            },

        "buttons":
        [
            {
                extend: "excel",
                text : '<i class="far fa-file-excel"></i> Exportar a excel',
                titleAttr : "Descargar a excel",
                className : " btn btn-sm btn-outline-success",
                excelStyles: {
                    template : "header_blue"
                }
            },
            {

                extend: 'pdf',
                text: '<i class="far fa-file-pdf"></i> Exportar a pdf',
                className : " btn btn-sm btn-outline-danger",
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
            }
            },
            {

                extend: 'print',
                text: '<i class="fas fa-print"></i> Imprimir',
                className : "btn btn-sm btn-outline-secondary",

            },

            {

                extend: 'colvis',
                text: 'Ocultar columnas',
                className : "btn btn-sm btn-outline-primary",

            },

        ]
        },

            "language": {
            "lengthMenu": "Mostrar " +
                            `<select class="custom-select custom-select-sm form-control form-control-sm">
                            <option value='10'>10</option>
                            <option value='25'>25</option>
                            <option value='50'>50</option>
                            <option value='100'>100</option>
                            <option value='-1'>All</option>
                            </select>` +
                            " - registros por pagina",
            "zeroRecords": "No se encontraron datos - sorry",
            "info": "Mostrando _END_ de _TOTAL_ registros",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado total de _MAX_ registros totales)",
            "paginate": {
                "first": "Primera pagina",
                "previous": "Atras",
                "next": "Siguiente",
                "last": "Última pagina"
                },
                "Processing" : "Procesando...",
            "search" : "Buscar:",
            searchPanes: {
                    count: '{total}',
                    countFiltered: '{shown} ({total})',
                    clearMessage : 'Resetear',
                    title: {
                    _: 'Filtros activos - %d',
                    0: '0 filtros activos',
                    1: 'Un filtro activo'
                }
                }
            },

            columnDefs: [
            {
                searchPanes: {
                    show: true
                },
                targets: [1]
            },
            {
                searchPanes: {
                    show: true
                },
                targets: [2]
            },
            {
                searchPanes: {
                    show: false
                },
                targets: [3]
            }
        ]

        });

        table.buttons().container()
        .appendTo( '#versiculos_wrapper .col-md-6:eq(0)' );

        $('#versiculos tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
        } );



});

</script>

@endsection
