@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Producto</div>

                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" id="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="provider_name">Nombre del proveedor</label>
                                <input type="text" name="provider_name" id="provider_name" class="form-control" value="{{ $product->provider_name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
                            </div>

                            <div class="form-group">
                                <label for="is_active">Activo</label>
                                <select name="is_active" id="is_active" class="form-control" required>
                                    <option value="1" {{ $product->is_active ? 'selected' : '' }}>Sí</option>
                                    <option value="0" {{ !$product->is_active ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="quantity_available">Cantidad disponible</label>
                                <input type="number" name="quantity_available" id="quantity_available" class="form-control" value="{{ $product->quantity_available }}" required>
                            </div>

                            <div class="form-group">
                                <label for="user_id">ID del usuario</label>
                                <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $product->user_id }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
