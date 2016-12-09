<tr>
  <td class="product">
    <img class="product-thumb" src="images/products/14.jpg" alt="">
    <div class="product-info">
      <h3 class="product-name">{{ $product->price }}</h3>
      <span class="product-price"></span>
    </div>
  </td
  <td>
    <div class="quantity">
      <input type="text" data-step="1" data-min="0" data-max="" value="1" title="Qty" class="input-text qty text" size="4">
    </div>
  </td>
  <td class="product-subtotal">
    <span class="amount">$ {{ number_format($item->subTotal(), 2, ',', '.') }}</span>
  </td>
  <td class="product-remove">
    <a class="remove" href="#"><i class="fa fa-close"></i></a>
  </td>
</tr>
