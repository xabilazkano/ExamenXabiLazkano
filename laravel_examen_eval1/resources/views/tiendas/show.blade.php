@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

  <h2>Has introducido la siguiente tienda</h2>
@foreach ($tiendas as $tienda)
  <h3>Id:{{$tienda->id}}</h3>
  <h3>Nombre:{{$tienda->name}} </h3>
  <h3>Descripcion:{{$tienda->description}} </h3>
  <h3>Password:{{$tienda->password}} </h3>
  <h3>Email:{{$tienda->email}} </h3>
  <h3>Likes:{{$tienda->likes}} </h3>
@endforeach
@endsection