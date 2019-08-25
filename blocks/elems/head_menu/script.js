$(document).ready(function() {

    menu('.menu_item', 'mouseleave',true);
    menu('.menu_item', 'mouseenter',true);
    menu('.menu_item ul', 'mouseleave', false);
    menu('.menu_item ul', 'mouseenter', false);

    function menu(name, event, child) {
        let timeDelaySlide = 500;
        if(child){
            $(name).on(event, function () {
                if (event === 'mouseleave')
                    $(this).children('ul').stop(true, true).slideUp(timeDelaySlide);
                if (event === 'mouseenter')
                    $(this).children('ul').stop(true, true).slideDown(timeDelaySlide);
            });
        }else{
            $(name).on(event, function () {
                if (event === 'mouseleave')
                    $(this).stop(true, true).slideUp(timeDelaySlide);
                if (event === 'mouseenter')
                    $(this).stop(true, true).slideDown(timeDelaySlide);
            });
        }

    }

    let menuItem, width, widthParent, result;
    menuItem = $('.menu_item ul');
    $(menuItem).each(function () {
        width = $(this).innerWidth();
        widthParent = $(this).parent().innerWidth();
        result = '-' + Math.abs(width - widthParent)/2 + 'px';
        $(this).css('left',result);
    });
});