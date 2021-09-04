$('.item').click(function(){
   id = $(this).attr('class');
   id =id.replace(/[^0-9]/g, '');
   text = $(this).text().trim();
   size_flag = $(this).parent().parent().attr('class') == 'size';
   if(size_flag){
       $('form>.size_id').attr('value',id);
   }else{
       $('form>.color_id').attr('value',id);
   }
   $(this).parent().siblings('.value_box').text(text);
   
   console.log(size_flag);
}),
$('.js-submit-target').click(function(){
    form_value =  $('form [name=fruits_name]').val();
    value_box = $('.size>.value_box').text();
    color_value_box = $('.js-color-value-box').text();
    if(form_value && value_box && color_value_box){
        $('form').submit();
    }else{
       $('.notification').toggleClass('is-hidden');
       window.setTimeout(function(){
        $('.notification').toggleClass('is-hidden');
    }, 1000);
    }
    
}),
$('.ab').click(function(){
    $(this).toggleClass('is-hidden');
    $(this).siblings('.edit_form').toggleClass('is-hidden');
    
}),
$('.edit_close').click(function(){
    console.log('hoge');
    $(this).parent().toggleClass('is-hidden');
    $(this).parent().siblings('.ab').toggleClass('is-hidden');
}),
$('.edit_delete').click(function(){
    confirm = window.confirm("本当に削除しますか？");
    if(confirm){
        id=$(this).parent().attr('class').replace(/[^0-9]/g, '');
        $('form [class=edit_delete]').val(id);
        $('form').submit();
    }
   
    
})