<li class="box_{{ $product->id }} product-item col-md-3 col-sm-6 col-xs-12
  @if($productAdded = $order->items()->where('product_id', $product->id)->first())
    product-added
  @endif
  ">
  <div class="product-inner">
    <div class="thumb has-second-image">
      <a href="#">
        <?php $i = 0; ?>
        @forelse($product->images as $image)
          @if($i == 0)
            <img src="/images/products/medium/{{ $image->url }}" alt="">
          @else
            <img class="second-image" src="/images/products/medium/{{ $image->url }}" alt="">
          @endif
          <?php $i++; ?>
        @empty
          <img src="/images/products/medium/default.jpg" alt="">
        @endforelse
      </a>
      <div class="group-button">
        <!-- <a class="wishlist" href="#">Wishlist</a> -->
        <!-- <a class="button add_to_cart_button" href="#">Agregar</a> -->
        <!-- <a class="compare button" href="#">Compare</a> -->
      </div>
      <a href="#" title="Vista rápida" data-toggle="modal" data-target="#productModal_{{ $product->id }}" class="button quick-view">Ver</a>
    </div>
    <div class="/info">
      <h3 class="product-name short"><a href="#">{{ $product->name }}</a></h3>
      <span class="price">$ {{ $product->price() }} /
        @if($productAdded)
          $ <span class="subTotal_{{ $product->id }}">{{ $product->subTotal($productAdded->quantity) }}</span>
        @else
          $ <span class="subTotal_{{ $product->id }}">0.00</span>
        @endif
      </span>

      <form class="product-form">

        {{ csrf_field() }}

        @if($productAdded)
          <input class="order-quantity quantity_{{ $product->id }}" name="quantity" type="number" min="0" value="{{ $productAdded->quantity }}" />
        @else
          <input class="order-quantity quantity_{{ $product->id }}" name="quantity" type="number" min="0" />
        @endif

        <input type="hidden" name="order_id" value="{{ $order->id }}" />
        <input type="hidden" name="product_id" value="{{ $product->id }}" />
        <input class="submit_{{ $product->id }}" type="submit" value="+" />
        <span class="delete-inProduct_{{ $product->id }}"></span>
        @if($productAdded)
          <a class="remove item-delete_{{ $product->id }}" onclick="deleteItemOrder({{ $productAdded->id }})"><i class="glyphicon glyphicon-trash"></i></a>
        @endif
      </form>

      <!-- <form class="product-form-delete">

        {{ csrf_field() }}

        @if($productAdded)
          <input type="hidden" name="item_id" value="{{ $productAdded->id }}" />
          <input type="submit" value="-" />
        @endif

      </form> -->
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="productModal_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="col-md-6">
              <div class="thumb has-second-image">
                  @if($product->images->count())
                    <div class="kt-easyzoom easyzoom easyzoom--with-thumbnails">
    									<a href="/images/products/{{ $product->images->first()->url }}">
    										<img src="/images/products/medium/{{ $product->images->first()->url }}" alt="">
    									</a>
    								</div>
                  @else
                    <img src="/images/products/medium/default.jpg" alt="">
                  @endif
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <h4>{{ $product->name }}</h4>
              <ul class="description">
                @foreach($product->description() as $line)
                  <li>{{ $line }}</li>
                @endforeach
              </ul>
              <h4 class="priceQV">$ {{ $product->price() }}</h4>
              @if($product->stock > 0)
                <h6><b>Stock:</b> Si</h6>
              @else
                <h6><b>Stock: </b> No</h6>
              @endif

              @if($product->color)
                <h6><b>Color:</b> {{ $product->color->name }}</h6>
              @else
                <h6><b>Color:</b> Ninguno</h6>
              @endif

              @if($product->increase)
                <h6><b>Aumento:</b> {{ $product->increase->name }}</h6>
              @else
                <h6><b>Aumento:</b> Ninguno</h6>
              @endif
              <hr />
              <h6><b>Cód. Barra:</b> {{ $product->barra }}</h6>
              <h6><b>Cód. Facturación:</b> {{ $product->fact }}</h6>
              @if($product->group)
                <h6><b>Sub Grupo:</b> {{ $product->group->name }}</h6>
              @else
                <h6><b>Sub Grupo:</b> Ninguno</h6>
              @endif
              <!-- <h5>Otras Imágenes del Producto</h5>
              <ul class="kt-zoom-thumbnails imgAltUl" data-loop="true" data-nav="true" data-dots="false" data-margin="10" data-responsive='{"0":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"}}'>
                @forelse($product->images as $image)
                  <li class="imgAltLi">
                    <a href="/images/products/{{ $image->url }}" data-standard="/images/products/{{ $image->url }}">
                      <img class="imgAlt" src="/images/products/{{ $image->url }}" alt="" />
                    </a>
                  </li>
                @empty
                <li>
                  <a href="/images/products/default.jpg" data-standard="/images/products/default.jpg">
                    <img class="imgAlt" src="/images/products/default.jpg" alt="" />
                  </a>
                </li>
                @endforelse
              </ul> -->
            </div>
          </div>
        </div>
        <!-- <div class="row otherProducts">
          <h5>Productos Relacionados</h5>
            @if($product->group)
              @foreach($product->group->products as $otherProduct)
                @if($otherProduct->id != $product->id)
                  @include('clients.otherProduct')
                @endif
              @endforeach
            @else
              <h4>No hay otros productos relacionados</h4>
            @endif
        </div> -->
      </div>
    </div>
  </div>
</li>
