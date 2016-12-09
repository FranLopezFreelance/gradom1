  $('.product-form').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting

        var url = "/order/addItem";
        var data = $(this).serialize();

        $.ajax({
          type: "POST",
          url: url,
          data: data, // serializes the form's elements.
          success: function(data)
          {
              var id = data.product_id;
              var price = data.price;
              var q = data.quantity;
              var total = price * q;
              var order_id = data.order_id;
              var totalOrder = data.totalOrder;
              var section_id = data.section_id;
              var deleteSection = data.deleteSection;
              var item_id = data.item_id;

              if(q > 0){
                var box = $('.box_' + id);
                  box.addClass('product-added');
              }else{
                var box = $('.box_' + id);
                  box.removeClass('product-added');
              }

              var newElement = '<a class="remove item-delete_' + id + '" onclick="deleteItemOrder(' + item_id + ')"><i class="glyphicon glyphicon-trash"></i></a>';

              $('.delete-inProduct_' + id).append(newElement);

              if(section_id){
                var boxSection = $('.boxSection_' + section_id);
                var text = boxSection.text();

                if(deleteSection){
                  boxSection.text(parseInt(text)-1);
                }else{
                  boxSection.text(parseInt(text)+1);
                  console.log(boxSection);
                }

              }

              var boxSubTotal = $('.subTotal_' + id);
                boxSubTotal.text(formatNum(total));

              var boxTotalOrderNav = $('.totalOrderNav_' + order_id);
                boxTotalOrderNav.text(totalOrder);
          }
        });

    });

    $('.product-form-delete').on('submit', function(e) { //use on if jQuery 1.7+
            e.preventDefault();  //prevent form from submitting
            var url = "/order/deleteItem";
            var data = $(this).serialize();

            $.ajax({
              type: "DELETE",
              url: url,
              data: data, // serializes the form's elements.
              success: function(data)
              {
                  var id = data.product_id;

                  var box = $('.box_' + id);
                    box.removeClass('product-added');
                  var quantity = $('quantity_' + id);
                    quantity.val(' ');
                  var subTotal = $('.subTotal_' + id);
                    subTotal.text('0,00');
              }
            });
        });


  $('.item-form-update').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting

        var url = "/order/updateItem";
        var data = $(this).serialize();

        $.ajax({
          type: "POST",
          url: url,
          data: data, // serializes the form's elements.
          success: function(data)
          {
              var id = data.item_id;
              var price = data.price;
              var q = data.quantity;
              var total = price * q
              var totalOrder = data.totalOrder;
              var order_id = data.order_id;

              if(total){
                  var boxSubTotal = $('.subTotal_' + id);
                  boxSubTotal.text(formatNum(total));
              }

              var boxTotalOrder = $('.totalOrder_' + order_id);
                boxTotalOrder.text(formatNum(totalOrder));
              var boxTotalOrderNav = $('.totalOrderNav_' + order_id);
                boxTotalOrderNav.text(totalOrder);
          }
        });
    });

    var deleteItem = function(id){

        var url = "/order/deleteItem/" + id;

        console.log('aqui entró ');

        if(confirm('¿Seguro que quieres quitar este producto del pedido?')){
          $.ajax({
            type: "GET",
            url: url,
            success: function(data)
            {
                var item_id = data.item_id;
                var idP = data.product_id;
                var order_id = data.order_id;
                var totalOrder = data.totalOrder;
                var section_id = data.section_id;

                var box = $('.box_' + idP);
                  box.removeClass('product-added');

                var listItem = $('.list-item_' + item_id);
                  listItem.remove();
                var boxTotalOrder = $('.totalOrder_' + order_id);
                  boxTotalOrder.text(formatNum(totalOrder));
                var boxTotalOrderNav = $('.totalOrderNav_' + order_id);
                  boxTotalOrderNav.text(totalOrder);
            }
          });
        }
    };

    var deleteItemOrder = function(id){

        var url = "/order/deleteItem/" + id;

        console.log('aqui entró ');

        if(confirm('¿Seguro que quieres quitar este producto del pedido?')){
          $.ajax({
            type: "GET",
            url: url,
            success: function(data)
            {
                var item_id = data.item_id;
                var idP = data.product_id;
                var order_id = data.order_id;
                var totalOrder = data.totalOrder;
                var section_id = data.section_id;

                var box = $('.box_' + idP);
                  box.removeClass('product-added');

                if(section_id){
                  var boxSection = $('.boxSection_' + section_id);
                  var text = boxSection.text();

                  if(deleteSection){
                    boxSection.text(parseInt(text)-1);
                  }else{
                    boxSection.text(parseInt(text)+1);
                    console.log(boxSection);
                  }
                }

                var buttonDelete = $('.item-delete_' + idP);
                  buttonDelete.remove();

                var listItem = $('.list-item_' + item_id);
                  listItem.remove();
                var boxTotalOrder = $('.totalOrder_' + order_id);
                  boxTotalOrder.text(formatNum(totalOrder));
                var boxTotalOrderNav = $('.totalOrderNav_' + order_id);
                  boxTotalOrderNav.text(totalOrder);
            }
          });
        }
    };

    var deliverOrder = function(id){

        var url = "/orderConfirm/deliverOrder/" + id;

        if(confirm('¿Seguro que quieres dar por entregado el pedido?')){
          $.ajax({
            type: "GET",
            url: url,
            success: function(data)
            {
                var order_id = data.order_id;
                console.log(order_id);
                var boxOrder = $('.boxOrder_' + order_id);
                  boxOrder.remove();
            }
          });
        }
    };

    var deleteOrder = function(id){

        var url = "/orderConfirm/deleteOrder/" + id;

        if(confirm('¿Seguro que quieres eliminar el pedido?')){
          $.ajax({
            type: "GET",
            url: url,
            success: function(data)
            {
                var order_id = data.order_id;
                console.log(order_id);
                var boxOrder = $('.boxOrder_' + order_id);
                  boxOrder.remove();
            }
          });
        }
    };

    var formatNum = function(num){
      num = num.toString();
      var div = num.split('.');
      if(div[1] && div[1].length == 1){
        num = num + '0';
        num.replace(/\./g,',');
        return num;
      }
      if(!div[1]){
        num = num + ',00';
        return num;
      }
    }
