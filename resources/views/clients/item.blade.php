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
      <form class="item-form-update">
        {{ csrf_field() }}
        <input type="number" data-step="1" data-min="0" data-max="{{ $item->product->stock }}" value="{{ $item->quantity }}" name="quantity" class="input-text qty text" size="4">
        <input type="hidden" name="item_id" value="{{ $item->id }}" />
        <button type="submit"><i class="glyphicon glyphicon-floppy-disk"></i></button>
      </form>
    </div>
  </td>
  <td class="product-subtotal">
    <span class="amount">$ <span class="subTotal_{{ $item->id }}">{{ $item->subtotal() }}</span></span>
  </td>
  <td class="product-remove">
      <a class="remove item-delete" onclick="deleteItem({{ $item->id }})"><i class="glyphicon glyphicon-trash"></i></a>
  </td>
</tr>
