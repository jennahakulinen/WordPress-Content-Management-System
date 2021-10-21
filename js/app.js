jQuery(function (){
    let menuLink = jQuery('.menu-item').first();

    menuLink.click(function (){
        jQuery('.menu-item:not(:first)').slideToggle(400);
    });
});