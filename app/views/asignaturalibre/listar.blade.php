@extends('_layouts.app')
@section('titulo')
    @lang('sistema.asignaturas')
@stop
@section('titulo_cabecera')
    @lang('Listar Asignaturas Libres')<small>@lang('sistema.listar_asignaturas_libres')</small>
@stop
@section('ruta_navegacion')
    <li><a href="#"><i class="fa fa-list"></i> @lang('Asignaturas libres')</a></li>
    <li class="active">@lang('Asignaturas')s</li>
@stop

@section('contenido')
    <!-- Main row -->
    <div class="row" >
        <!-- INICIO: BOX PANEL -->
        <div class="col-md-12 col-sm-8">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Listado de Asignaturas Libres</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th >Codigo</th>
                            <th >Nombre Asignatura</th>
                            <th >Horas Totales </th>
                        </tr>


                        @foreach($asignaturalibre as $asig)
                            <tr>
                                <td>{{ $asig->idasignatura_cl }}</td>
                                <td>{{ $asig->nombre_asig_cl }}</td>
                                <td>{{ $asig->horas_totales }}</td>
                                <td>
                                    <a href="/sis_academico/public/asignaturalibre/{{ $asig->idasignatura_cl}}/edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix text-center">
                    <ul class="pagination pagination-sm no-margin">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div><!-- /.box -->
        </div>
        <!-- INICIO: BOX PANEL -->
    </div><!-- /.box -->
@endsection
