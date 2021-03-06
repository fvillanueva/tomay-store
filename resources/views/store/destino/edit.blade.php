@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Hotel: {{$destino->lugar}}</h3>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::model($destino,['method'=>'PATCH', 'route'=>['destino.update',$destino->id_dis], 'files'=>true]) !!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Lugar</label>
                <input type="text" name="lugar" class="form-control" value="{{$destino->lugar}}">
            </div>
            <div class="form-group">
                <label for="ubicacion">Descripcion</label>
                <textarea name="descripcion" class="form-control">{{$destino->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" name="image" class="form-control">
                @if(($destino->fotos)!="")
                    <img src="{{asset('imagenes/destinos/'.$destino->fotos)}}" hight="100px" width="100px"
                         class="img img-thumbnail">
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
            {!! Form::close()!!}
        </div>
    </div>
@endsection