@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Producto</div>

                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST" novalidate>
                            @csrf

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                                @error('description')
                                {{ $message }}
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="provider_name">Nombre del proveedor</label>
                                <input type="text" name="provider_name" id="provider_name" class="form-control" required>
                                  @error('provider_name')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="number" name="price" id="price" class="form-control" step="0.01" required>
                                  @error('price')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="is_active">Activo</label>
                                <select name="is_active" id="is_active" class="form-control" required>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                                  @error('is_active')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="quantity_available">Cantidad disponible</label>
                                <input type="number" name="quantity_available" id="quantity_available" class="form-control" required>
                                  @error('quantity_available')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="user_id">ID del usuario</label>
                                {{-- <input type="text" name="user_id" id="user_id" class="form-control" required> --}}
                                <select name="user_id" id="user_id">
                                    <option value="Selecione un usuario">Selecione un usuario</option>
                                    @foreach ($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                  @error('user_id')
                                    {{ $message }}
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
