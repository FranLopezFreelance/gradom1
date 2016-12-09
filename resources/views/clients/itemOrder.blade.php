<tr class="product">
  <td>
    <a href="/orderConfirm/showConfirm/{{ $order->id }}">{{ $order->id }}</a>
  </td>
  <td>
    {{ $order->updated_at }}
  </td>
  <td>
    {{ $order->products() }}
  </td>
  <td class="product-subtotal">
    <b>$ {{ $order->total() }}</b>
  </td>
</tr>
