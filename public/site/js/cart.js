var csrftLarVe = $('meta[name="csrf-token"]').attr("content"),
    proimg = $('meta[name="proimg"]').attr("content"),
    prourl = $('meta[name="prourl"]').attr("content"),
    cart = $('meta[name="cart"]').attr("content"),
    cartsaddd = $('meta[name="cartsaddd"]').attr("content"),
    cartshort = $('meta[name="cartshort"]').attr("content"),
    cartremove = $('meta[name="cartremove"]').attr("content");
function loadCart(cart)
{
    let product_image = proimg;
    let product_url = prourl;
    var html_cart = '';
    let subtotal = 0;
    let totalcart = 0;
    let item_cont = 0;
    $.each(cart,function(n,k){
        console.log(n,k);

        html_cart += '<li>';
        html_cart += '  <div class="shoping-cart-image">';
        html_cart += '      <a href="#">';
        html_cart += '          <img src="'+product_image+'/'+k.photo+'" width="60" alt="">';
        html_cart += '          <span class="product-quantity">'+k.quantity+'</span>';
        html_cart += '      </a>';
        html_cart += '  </div>';
        html_cart += '  <div class="shoping-product-details">';
        html_cart += '      <h3><a href="'+product_url+'/'+k.product_id+'/'+k.name+'">'+k.name+'</a></h3>';
        html_cart += '      <div class="price-box">';
        html_cart += '          <span>৳'+k.price+'</span>';
        html_cart += '      </div>';
        html_cart += '      <div class="remove">';
        html_cart += '          <button data-id="'+k.product_id+'" class="remove-from-cart" title="Remove"><i class="ion-android-delete"></i></button>';
        html_cart += '      </div>';
        html_cart += '   </div>';
        html_cart += '</li>';

        subtotal = (subtotal - 0)+(k.price-0);
        totalcart = (totalcart - 0)+(k.price-0);
        item_cont = (item_cont - 0)+(1-0);

    });

    if(html_cart == "")
    {
        html_cart += '<li class="shoping-cart-btn"><code>No product in cart</code></li>';
    }
    else
    {
        //alert(1);
        let cart_link = cart;

        html_cart += '<li>';
        html_cart += '     <div class="cart-subtotals">';
        html_cart += '          <h5>Subtotal<span class="float-right">৳<span id="subtotal">'+subtotal+'</span></span></h5>';
        html_cart += '          <h5> Total<span class="float-right">৳<span id="totalcart">'+totalcart+'</span></span></h5>';
        html_cart += '     </div>';
        html_cart += '</li>';
                            
        html_cart += '<li class="shoping-cart-btn">';
        html_cart += '     <a class="checkout-btn" href="'+cart_link+'">checkout</a>';
        html_cart += '</li>';
    }

    $(".shopping-cart-wrapper").html(html_cart);
    $(".item-cont").html(item_cont);
    $("#cart_summary_total").html(totalcart);


    return false;
}
$(document).ready(function(){
    let csrftLarVe = $('meta[name="csrf-token"]').attr("content")
    $(document).on('click','.add-cart > .add-to-cart-short',function (e) {
        let pid = $(this).attr('data-id');
        //alert(pid);
        Swal.showLoading();
        let add_to_cart_url = cartshort;
        $.ajax({
                async: true,
                type: "POST",
                global: true,
                dataType: "json",
                url: add_to_cart_url,
                data: {
                    _token: csrftLarVe,
                    product_id: pid,
                },
                success: function (res) {
                    Swal.hideLoading();
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank You',
                        text: 'Product added to your cart.',
                        timer:10000
                    });
                    console.log('Success',res);
                    loadCart(res);

                },
                error: function (reject) {
                    console.log('Error',reject.status);
                }
        });

    });

    $(document).on('click','#add_to_cart',function (e) {

        var product_id = $('#product_id').val();
        var product_quantity = $('#product_quantity').val();
        //$("input[name='chkcolor']:checked").val() 
        var product_color = '';
        if($("input[name='chkcolor']"))
        {
            var product_color = $("input[name='chkcolor']:checked").val(); 
            if (typeof product_color === "undefined")
            {
                alert('Color selection required?');
                return false;
            }
        }
        
        var product_size = $('#size').val();
        //alert(color); return false;
        e.preventDefault();
        Swal.showLoading();
        $.ajax({
            method:"POST",
            url: cartsaddd,
            data:{
                _token: csrftLarVe,
                product_id:product_id,
                product_color:product_color,
                product_quantity:product_quantity,
                product_size:product_size},
                cache: false,
                success: function(res)
                {
                    Swal.hideLoading();
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank You',
                        text: 'Product added to your cart.',
                        timer:10000
                    });
                    console.log('Success',res);
                    loadCart(res);
                },
                error: function (reject) {
                    console.log('Error',reject.status);
                } 
        });
        
    });

    //remove

    $(document).on('click','.remove-from-cart',function (e) {
        e.preventDefault();
        Swal.showLoading();
        var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: cartremove,
                    method: "DELETE",
                    data: {
                        _token: csrftLarVe,
                        id: ele.attr("data-id")
                    },
                    success: function (res) {
                        Swal.hideLoading();
                        Swal.fire({
                            icon: 'success',
                            title: 'Thank You',
                            text: 'Product remove to your cart.',
                            timer:10000,
                        });
                        console.log('Success',res);
                        loadCart(res);
                    },
                    error: function (reject) {
                        console.log('Error',reject.status);
                    } 
                });
            }
        
    });


});