@extends('layouts.master')
@section('content')
<H1>Crear pelicula</H1>
<form action="{{url('catalog/postCreate')}}" method="POST">
    {{method_field('PUT')}}
    {{ csrf_field() }}
    <div>
    <label>Titulo</label>
    <input type="text" name="title">
    </div>
    <div>
    <label>Año</label>
    <input type="text" name="year">
    </div>
    <div>
    <label>Director</label>
    <input type="text" name="director">
    </div>
    <div>
    <label>Poster</label>
    <input type="text" name="poster">
    </div>
    <div>
    <label>Resumen</label>
    <input type="textarea" name="synopsis">
    </div>
    <input type="submit" value="Añadir pelicula" class="btn btn-primary">
 </form>
@stop