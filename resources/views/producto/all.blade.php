@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio por Unidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>S./ {{ $producto->precioUnidad }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>    
</div>
@endsection