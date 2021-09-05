$('.color-item').click(function(){
    id = $(this).attr('class').replace(/[^0-9]/g, '');
    color = $(this).find('.top').attr('style').slice(-7);
    text = $(this).text().trim();
    $('.modal-color').toggleClass('is-active');
    $('form [name=color_name]').val(text);
    $('form [name=color_key]').val(color);
    $('form [name=color_id]').val(id);   
    console.log(text);

}),
$('.size-item').click(function(){
    $('.modal-size').toggleClass('is-active');
    id = $(this).attr('class').replace(/[^0-9]/g, '');
    text = $(this).text().trim();
    $('form [name=size_id]').val(id);
    $('form [name=size_name]').val(text);
    console.log(text);
}),
$('.modal-background').click(function(){
    $('.modal-color').removeClass('is-active');
    $('.modal-size').removeClass('is-active');

}),
$('.color-delete').click(function(){
    
    if(window.confirm("本当に削除しますか？")){
        $('#color-delete').submit();
    }
    
}),
$('.size-delete').click(function(){
   
    if(window.confirm("本当に削除しますか？")){
        $('#size-delete').submit();
    }
    
})
