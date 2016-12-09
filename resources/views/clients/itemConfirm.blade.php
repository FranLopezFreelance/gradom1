<tr class="product list-item_{{ $item->id }}">
  <td>
    <img class="product-thumb" width="50px"
    @if($item->product->images()->count() > 0)
      src="/images/products/small/{{ $item->product->images()->first()->url }}"
    @else
      src="/images/products/small/default.jpg"
    @endif
      alt="">
    <div class="product-info">
      <h3 class="product-name"><a href="#">{{ $item->product->name }}</a></h3>
      <span class="product-price">$ {{ $item->product->price() }}</span>
    </div>
  </td>
  <td>
    <div class="quantity">
      {{ $item->quantity }}
    </div>
  </td>
  <td class="product-subtotal">
    <span class="amount">$ <span class="subTotal_{{ $item->id }}">{{ $item->subtotal() }}</span></span>
  </td>
</tr>
