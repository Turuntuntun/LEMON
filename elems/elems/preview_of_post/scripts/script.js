function slider(images, delay) {

    context = this;
    this.k = 0;
    this.radio = '.preview .radio input';
    this.images = images;
    this.delay = delay;
    this.count = images.length;
    this.event = 'click';
    this.block = '.preview';

    this.main = function() {
        addRadio();
        checkRadio();
        console.log(context.k);
        $('#preview0').trigger(context.event);

        if(context.count > 1){
            context.timeid = setTimeout(function run() {
                gettingK();
                setTimeout(run, delay);
            }, delay);
        }else{
            changeImage(0);
        }
    };

    function gettingK() {
        context.k++;
        if (context.k === (context.count)) {
            context.k = 0;
        }

        $('#preview' + context.k).trigger(context.event);
    }

    function checkRadio(){
        $(context.radio).on(context.event, function () {
            context.k = $(this).val();
            changeImage($(this).val());
            clearTimeout(context.timeid);
        });
    }

    function changeImage(value) {
        $('.preview').animate({'opacity': '0'}, 500, function () {
            $(this).find('.img').attr('src', context.images[value]['path']);
            $(this).find('a').text( context.images[value]['title']);
            $(this).find('.text').text(context.images[value]['prewiew_text']);
            $(this).animate({'opacity': '1'}, 500);
        });
    }
    function addRadio() {
        result = '';
        for(i = 0; i < context.count; i++){
            result += '<input  type = "radio" name = "slide" id = "preview' + i + '" value = ' + i + '>';
            result += '<label for = "preview' + i + '"><div></div></label>';
        }
        $('.preview .radio').html(result);

    }
}

