@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Usuario: {{$usuario->name}}</h3>
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
    {!! Form::model($usuario,['method'=>'PATCH', 'route'=>['usuario.update',$usuario->id], 'files'=>true]) !!}
    {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{$usuario->name}}" placeholder="Nombre">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{$usuario->email}}" placeholder="Email">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{$usuario->phone}}" placeholder="Phone">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" name="image" class="form-control">
                @if(($usuario->image)!="")
                    <img src="{{asset('imagenes/usuarios/'.$usuario->image)}}" hight="100px" width="100px"
                         class="img img-thumbnail">
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
    {!! Form::close()!!}
@endsection