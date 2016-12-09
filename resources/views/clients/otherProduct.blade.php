<div class="col-md-3">
  @if($product->images->count())
    <img src="/images/products/{{ $product->images->first()->url }}" alt="">
  @else
    <img src="/images/products/default.jpg" alt="">
  @endif
  <p>{{ $otherProduct->name }}</p>
</div>
