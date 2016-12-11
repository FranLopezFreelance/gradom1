@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                  <h4>Editar Producto <b>{{ $product->name }} ({{ $product->id }})</b></h4>
                  <hr />
                    <div class="col-md-7">
                      <h4>Datos Generales</h4>
                      <p><b>Sección:</b> {{ $product->section->name }}</p>
                      <p><b>Descripción:</b> {{ $product->description }}</p>
                      
                      @if($product->color)
                        <p><b>Color:</b> {{ $product->color->name }}</p>
                      @else
                        <p><b>Color:</b> Ninguno</p>
                      @endif

                      @if($product->increase)
                        <p><b>Aumento:</b> {{ $product->increase->name }}</p>
                      @else
                        <p><b>Aumento:</b> Ninguno</p>
                      @endif

                      <p><b>Precio:</b> $ {{ $product->price() }}</p>
                      <p><b>Stock:</b> {{ $product->stock }}</p>
                      <p><b>Cód. Barra:</b> {{ $product->barra }}</p>
                      <p><b>Cód. Facturación:</b> {{ $product->fact }}</p>
                      @if($product->group)
                        <p><b>Sub Grupo:</b> {{ $product->group->name }}</p>
                      @else
                        <p><b>Sub Grupo:</b> Ninguno</p>
                      @endif

                    </div>
                    <div class="col-md-5">
                      <h4>Imágenes ({{ $product->images->count() }})</h4>
                        @forelse($product->images as $image)
                          <img width="170px" height="170px" src="/images/products/medium/{{ $image->url }}" alt="">
                        @empty
                          <img width="170px" height="170px" src="/images/products/medium/default.jpg" alt="">
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
