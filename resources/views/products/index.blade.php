@extends('layouts.app')

@section('content')
    <div class="row mb-4">
        <div class="col">
            <h1>Listado de Productos</h1>
        </div>
        <div class="col text-end">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Crear Nuevo Producto</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Activo</th>
                <th>Cantidad Disponible</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->is_active ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $product->quantity_available }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
