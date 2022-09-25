$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })


    // new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    // blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })


    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });

       // click on qty down button
       $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 10){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });

    $('#search-btn-armaf').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/armaf_search/'+search_str;
        }
    });

    $('#search-btn-montblanc').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/montblanc_search/'+search_str;
        }
    });

    $('#search-btn-acqua').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/acqua_search/'+search_str;
        }
    });

    $('#search-btn-jimmychoo').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/jimmychoo_search/'+search_str;
        }
    });

    $('#search-btn-montblanc').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/montblanc_search/'+search_str;
        }
    });

    $('#search-btn-emper').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/emper_search/'+search_str;
        }
    });

    $('#search-btn-versace').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/versace_search/'+search_str;
        }
    });

    $('#search-btn-ysl').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/ysl_search/'+search_str;
        }
    });

    $('#search-btn-nina').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/nina_search/'+search_str;
        }
    });

    $('#search-btn-afnan').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/afnan_search/'+search_str;
        }
    });

    $('#search-btn-arden').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/arden_search/'+search_str;
        }
    });

    $('#search-btn-juicy').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/juicy_search/'+search_str;
        }
    });

    $('#search-btn-montale').click(function(){
        var search_str= $('#search_str').val();
        if(search_str!=''){
            window.location.href='/montale_search/'+search_str;
        }
    });
    
    $.ajax({
        
    })

});