@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ver Producto</div>

                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $product[0]->name }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" id="description" class="form-control" rows="3" disabled
                                value="{{ $product[0]->description }}">{{ $product[0]->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="provider_name">Nombre del proveedor</label>
                            <input type="text" name="provider_name" id="provider_name" disabled
                                class="form-control"value="{{ $product[0]->provider_name }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" name="price" id="price" class="form-control" disabled
                                step="0.01"value="{{ $product[0]->price }}">
                        </div>

                        <div class="form-group">
                            <label for="is_active">Activo</label>
                            <input disabled value="{{ $product[0]->is_active ? 'Activo' : 'Inactivo' }}"></input>
                        </div>

                        <div class="form-group">
                            <label for="quantity_available">Cantidad disponible</label>
                            <input type="number" name="quantity_available" id="quantity_available" disabled
                                class="form-control"value="{{ $product[0]->quantity_available }}">
                        </div>

                        <div class="form-group">
                            <label for="user_id">Nombre del usuario</label>
                            <input value="{{ $user->name }}" disabled></input>

                        </div>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
