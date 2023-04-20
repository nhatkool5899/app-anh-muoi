// Custom select danhmuc sanpham

$('.custom-select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
        //if ($this.children('option').eq(i).is(':selected')){
        //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
        //}
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();

        
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $('#input-location').attr('value', ($(this).attr('rel')));
        $('.input-cat-id').attr('value', ($(this).attr('rel')));
        $list.hide();
        //console.log($this.val());
        var danhmuc_id = $('#danhmuc_id').val();
        if(danhmuc_id == 2){
            $('.hide-input').addClass('active');
            $('.style-label-btn').css('display', 'none');
        }else{
            $('.hide-input').removeClass('active');
            $('.style-label-btn').css('display', 'block');

        }
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });
});


// select edit sanpham
var check_danhmuc_id = $('.danhmuc_id').val();
if(check_danhmuc_id == 2){
    $('.style-label-btn').css('display', 'none');
    $('.hide-input').addClass('active');

}
$('.danhmuc_id').change(function (){
    
    if($(this).val() == 1){
        $('.style-label-btn').css('display', 'block');
    }else{
        $('.style-label-btn').css('display', 'none');
        $('.hide-input').addClass('active');
    }
})



// Preview images



$('.view-item-img').click(function(){
    var src_img = $(this).data('src_img');

    $('.show-img').attr('src', src_img);
    $('.modal-view-img').addClass('active');
})
$('.modal-view-img').click(function(e){
    if(e.target == e.currentTarget){
        $(this).removeClass('active');
    }
})


// Thêm sản phẩm
$('.style-label-btn').click(function (){
    $('.hide-desc').toggleClass('active');
})

// Thêm nội dung tin tức
$('.btn-add-ct').click(function(){
    $('.box-noidung-2').toggleClass('active');
})


const loader = document.getElementById("preloader");
const showLoader = ()=>{
    loader.style.display = "flex";
}
const hideLoader = ()=>{
    loader.style.display = "none";
}

