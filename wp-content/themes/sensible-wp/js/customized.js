jQuery(document).ready(function(){
    jQuery('.service').click(function(element){
        element.preventDefault();
        var target = jQuery(element.target).find('i').attr('target');
        console.log(target);

        jQuery('div[target="'+target+'"]').slideToggle();
        console.log('div[target=""+targer+""]');
    });
});
