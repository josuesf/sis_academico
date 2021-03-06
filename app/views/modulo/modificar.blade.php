@extends('_layouts.app')
@section('titulo')
    @lang('Modificar Modulo')
@stop
@section ('estilos')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pru.css')}}">
@stop
@section('titulo_cabecera')
    @lang('Modulo')<small>@lang('')</small>
@stop
@section('ruta_navegacion')
    <li><a href="#"><i class="fa fa-list"></i> @lang('sistema.modulo')</a></li>
    <li class="active">@lang('sistema.modificar_modulo')es</li>
@stop

@section('contenido')
    <!-- Main row -->
    <div class="row">
        <!-- INICIO: BOX PANEL -->
        <div class="col-md-12 col-sm-8">
            {{ Form::open(array('url' => '/'.$moduloeditar[0]->idmodulo,'autocomplete' => 'off','class' => 'form-horizontal', 'role' => 'form')) }}
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">modificar modulo</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <ul class="error_list">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        {{ Form::label('idmodulo', Lang::get('idmodulo'),array('class'=>'col-sm-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('idmodulo',Lang::get(''.$moduloeditar[0]->idmodulo),array('class'=>'form-control','id'=>'idmodulo','placeholder'=>Lang::get('Idmodulo'))) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('nombre_modulo', Lang::get('nombre_modulo'),array('class'=>'col-sm-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('nombre_modulo',Lang::get(''.$moduloeditar[0]->dni),array('class'=>'form-control','id'=>'dni','placeholder'=>Lang::get('nombre_modulo'))) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('idcarrera', Lang::get('idcarrera'),array('class'=>'col-sm-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('idcarrera',Lang::get(''.$moduloeditar[0]->nombres),array('class'=>'form-control','id'=>'idcarrera','placeholder'=>Lang::get('idcarrera'))) }}
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                <!-- 
                -->
                    {{ Form::submit(Lang::get('Guardar cambios'), array('class' => 'btn btn-info pull-right')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
        <!-- INICIO: BOX PANEL -->
    </div><!-- /.box -->
    @section ('scrips_n')
        <script src="{{asset('/js/ja.js')}}" type="text/javascript"></script>
    @stop
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
@endsection