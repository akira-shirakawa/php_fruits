$('.item').click(function(){
   id = $(this).attr('class');
   id =id.slice(0,1);
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
    
})