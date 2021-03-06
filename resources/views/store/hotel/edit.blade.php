@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Hotel: {{$hotel->nombre}}</h3>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    {!! Form::model($hotel,['method'=>'PATCH', 'route'=>['hotel.update',$hotel->id_hot], 'files'=>true]) !!}
    {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$hotel->nombre}}">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" value="{{$hotel->ubicacion}}">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="ubicacion">Descripcion</label>
                <textarea name="descripcion" class="form-control">{{$hotel->descripcion}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" name="image" class="form-control">
                @if(($hotel->fotos)!="")
                    <img src="{{asset('imagenes/hoteles/'.$hotel->fotos)}}" hight="100px" width="100px"
                         class="img img-thumbnail">
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Guardar</button>
                <a href="/store/hotel" class="btn btn-warning"> Cancelar</a>
            </div>
        </div>
    </div>
    {!! Form::close()!!}
@endsection