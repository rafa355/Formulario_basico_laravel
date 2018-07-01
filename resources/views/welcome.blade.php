@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario de Prueba</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('guardar_revista') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre de revista</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comprador') ? ' has-error' : '' }}">
                            <label for="comprador" class="col-md-4 control-label">comprador</label>

                            <div class="col-md-6">
                                <input id="comprador" type="text" class="form-control" name="comprador" required>

                                @if ($errors->has('comprador'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comprador') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('contenido') ? ' has-error' : '' }}">
                            <label for="contenido" class="col-md-4 control-label">Contenido de revista</label>

                            <div class="col-md-6">
                                <textarea class="form-control"name="contenido" id="" cols="30" rows="10"></textarea>
                                @if ($errors->has('contenido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contenido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    guardar
                                </button>

                            </div>
                        </div>
                        @if(!empty($exito))
                        <div class="form-group{{ $errors->has('contenido') ? ' has-error' : '' }}">
                            <label for="contenido" class="col-md-4 control-label">Se guardo fino</label>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection