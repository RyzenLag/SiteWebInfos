(function($){

    $('.addPanier').click(function(event){
        event.preventDefault();
        $.get($(this).attr('href'),{},function(data){
            console.log(data);
        },'json')
        return false;
    });
})(jQuery);
