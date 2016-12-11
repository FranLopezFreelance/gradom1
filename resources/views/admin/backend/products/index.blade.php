@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-3">
                  <h4>Secciones</h4>
                  <ul class="product-categories">
                    @forelse($sections as $navSection)
        							@include('admin.backend.products.section')
                    @empty
                      <h4>No hay secciones en la base</h4>
                    @endforelse
        					</ul>
                </div>
                <div class="col-md-9">
                  <h4>Productos / {{ $section->name }}</h4>
                  @forelse($section->products as $product)
                      @include('admin.backend.products.product-item')
                  @empty
                      <h5>No hay productos en esta sección</h5>
                  @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
