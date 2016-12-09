<tr class="product boxOrder_{{ $order->id }}">
  <td>
    <a href="/orderConfirm/showConfirm/{{ $order->id }}">{{ $order->id }}</a>
  </td>
  <td>
    {{ $order->user->name }}
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
  <td>
    <a class="remove item-delete" onclick="deleteOrder({{ $order->id }})"><i class="glyphicon glyphicon-trash"></i></a>
  </td>
</tr>
