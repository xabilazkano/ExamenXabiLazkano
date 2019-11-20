@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('tiendas.store')}}" method="post">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    @if ($errors->has('nombre'))
    	<b>{{$errors->first('nombre')}}</b>
    @endif
    <br><br>
    Descripción:<br>
    <input type="text" name="descripcion">
    @if ($errors->has('descripcion'))
    	<b>{{$errors->first('descripcion')}}</b>
    @endif
    <br><br>
     Password:<br>
    <input type="text" name="password">
    @if ($errors->has('password'))
    	<b>{{$errors->first('password')}}</b>
    @endif
    <br><br>
     Email:<br>
    <input type="text" name="email">
    @if ($errors->has('email'))
    	<b>{{$errors->first('email')}}</b>
    @endif
    <br><br>
     Likes:<br>
    <input type="number" name="likes">
    @if ($errors->has('likes'))
    	<b>{{$errors->first('likes')}}</b>
    @endif
    <br><br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
