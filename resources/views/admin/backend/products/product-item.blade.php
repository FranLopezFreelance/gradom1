<div class="col-md-3 product-backend">
  @if($product->images->count())
    <a href="/backend/products/edit/{{ $product->id }}"><img width="170px" height="170px" src="/images/products/medium/{{ $product->images->first()->url }}" alt=""></a>
  @else
    <a href="/backend/products/edit/{{ $product->id }}"><img width="170px" height="170px" src="/images/products/medium/default.jpg" alt=""></a>
  @endif
  <h5><a href="/backend/products/edit/{{ $product->id }}">{{ $product->name }}</a></h5>
</div>
