const progress = document.querySelectorAll('.progress-done');
const progress_2 = document.querySelectorAll('.progress-done-2');
const progress_3 = document.querySelectorAll('.progress-done-3');
const number = 100;
const numberProgress = 70;

function changeWidth(){
    for (let i = 0; i < progress.length; i++) {
        progress[i].style.width = `${(75 / number) * 100}%`;
        progress[i].innerText = `còn lại ${Math.ceil(numberProgress)} phần`;
    }
}

function changeWidth_2(){
    for (let i = 0; i < progress_2.length; i++) {
        progress_2[i].style.width = `${(86 / number) * 100}%`;
        progress_2[i].innerText = `còn lại ${Math.ceil(numberProgress - 50)} phần`;
    }
}


function changeWidth_3(){
    for (let i = 0; i < progress_3.length; i++) {
        progress_3[i].style.width = `${(94 / number) * 100}%`;
        progress_3[i].innerText = `còn lại 8 phần`;
    }
}

changeWidth();
changeWidth_2();
changeWidth_3();


// ******Add-to-cart************
$('.add__to-cart').click(function(){
    
    var id = $(this).data('id_product');
    var product_id = $('.product_id_' +  id).val();
    var product_name = $('.product_name_' +  id).val();
    var product_price = $('.product_price_' +  id).val();
    var product_category= $('.product_category_' +  id).val();
    var product_image= $('.product_image_' +  id).val();
    var product_quantity = $('.product_quantity_' +  id).val();
    var _token = $('input[name="_token"]').val();

    $.ajax({
        url: '/add-product-cart',
        method: 'POST',
        data:{product_id:product_id,product_name:product_name,product_price:product_price,product_category:product_category,product_image:product_image,product_quantity:product_quantity,_token:_token},
        success:function(data){
            
            $('.number__item-cart').text(data)
            swal({
                    title: "Đã thêm sản phẩm vào giỏ hàng",
                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                    showCancelButton: true,
                    cancelButtonText: "Xem tiếp",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Đi đến giỏ hàng",
                    closeOnConfirm: false
                },
                function() {
                    window.location.href = "/gio-hang";
                });

        }
    });

});

// ******End Add-to-cart************


// Change product quantity

$('.btn-back-quantity').click(function(){
    var item_stt = $(this).data('item_stt');

    var price = $('.pd_price_'+ item_stt).val();
    var pd_quantity = $('.pd_quantity_'+ item_stt).val();
    var qty = parseInt(pd_quantity) - 1;

    if(pd_quantity > 1){
        $('.pd_quantity_'+ item_stt).attr('value', qty);
        var total = parseInt(price) * parseInt(qty);

        var convertTotal = new Intl.NumberFormat().format(total);

        $('.into_money_'+ item_stt).text(convertTotal);

        orderTotal();
        updateQuantity(item_stt);
    }  

});

$('.btn-forward-quantity').click(function(){
    var item_stt = $(this).data('item_stt');

    var price = $('.pd_price_'+ item_stt).val();
    var pd_quantity = $('.pd_quantity_'+ item_stt).val();
    var qty = parseInt(pd_quantity) + 1;

    $('.pd_quantity_'+ item_stt).attr('value', qty);
    var total = parseInt(price) * parseInt(qty);

    var convertTotal = new Intl.NumberFormat().format(total);

    $('.into_money_'+ item_stt).text(convertTotal);

    orderTotal();
    updateQuantity(item_stt); 

});

$('.delete_item').click(function(){
    var item_stt = $(this).data('item_stt');
    deleteItemCart(item_stt);
})

function orderTotal() {

    var number_item = $('.number__item').val();
    var orderTotal = 0;
    
    for (let i = 1; i <= number_item; i++) {
        var priceStr = $('.into_money_'+ i).text();
    
        priceStr = priceStr.split('.').join('');
        
        if(priceStr != '' && priceStr){

            orderTotal = orderTotal + parseInt(priceStr);

        }

        var convertOrderTotal = new Intl.NumberFormat().format(orderTotal);
        $('.order_total').text(convertOrderTotal);
    }
}

function updateQuantity(number) { 
    var product_name = $('.pd_name_'+ number).val()
    var product_quantity = $('.pd_quantity_'+ number).val();
    var _token = $('input[name="_token"]').val();

    $.ajax({
        url: '/update-item-quantity',
        method: 'POST',
        data:{product_name:product_name, product_quantity:product_quantity, _token:_token},
        success:function(){
            console.log('Update success');
        }
    });
}


function deleteItemCart(number){
    var product_name = $('.pd_name_'+ number).val();
    var _token = $('input[name="_token"]').val();

    $.ajax({
        url: '/delete-item-cart',
        method: 'POST',
        data:{product_name:product_name, _token:_token},
        success:function(){
            location.reload();
        }
    });
}



$('.btn-order-now').click(function(){
    $('.order').addClass('show');
})
$('.close-order').click(function(){
    $('.order').removeClass('show');
})

$('.confirm-order').click(function(){
    var customer_name = $('.customer_name').val();
    var customer_phone = $('.customer_phone').val();
    var customer_address = $('.customer_address').val();
    var customer_total = $('.order_total').text();
    var _token = $('input[name="_token"]').val();


    if(customer_name == "" || customer_phone == "" || customer_address == ""){
        swal("Các trường không thể trống", "Vui lòng kiểm tra lại thông tin đã nhập", "error")
    }else{
        $.ajax({
            url: "/customer-order",
            method: "POST",
            data:{customer_name: customer_name, customer_phone:customer_phone, customer_address:customer_address, customer_total:customer_total, _token:_token},
            success:function(data){
                if(data == "success"){
                    swal({
                        title: "Đặt hàng thành công",
                        text: "Chúng tôi sẽ liện hệ lại để xác nhận đơn hàng trong ít phút tới",
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "OK",
                        closeOnConfirm: false
                    },
                    function() {
                        window.location.href = "/trang-chu";
                    });
                }else{
                    swal("Lỗi không xác định", "Vui lòng thử lại", "error")
                }
            }
        })
    }

});

