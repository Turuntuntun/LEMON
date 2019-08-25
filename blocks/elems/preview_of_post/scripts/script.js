function slider(images, delay   ) {

    let context = this;
    this.current = 0;
    this.radio = '.' + images['NAME_BLOCK'] + ' .radio input';
    this.images = images;
    this.delay = delay;
    this.count = images['ITEMS'].length;
    this.event = 'click';
    this.block = '.' + images['NAME_BLOCK'];
    this.radioName = '#' + images['NAME_BLOCK'];
    this.type = 'opacity';
    this.nameRadio = '.' + images['NAME_BLOCK'] + ' .radio';

    this.main = function() {
        addRadio();
        checkRadio();
        $(context.radioName + '0').trigger(context.event);

        if(context.count > 1){
            context.timer = new Timer(function() {
                getCurrentRadio();
            }, context.delay);
        }else{
            changeImage(0);
        }
    };
    //Получение текущего k и вызов тригера радиокнопки(по времени)
    function getCurrentRadio() {
        context.current++;
        if (context.current === (context.count)) {
            context.current = 0;
        }
        $( context.radioName + context.current).trigger(context.event);
    }
    //Проверка радио кнопок
    function checkRadio(){
        $(context.radio).on(context.event, function () {
            context.current = $(this).val();
            changeImage($(this).val());
        });
    }
    //Смена баннера
    function changeImage(value) {
        $(context.block).animate({'opacity' : '0'}, 500, function () {
            $(this).find('.img').attr('src', context.images['ITEMS'][value]['path']);
            $(this).find('a').attr('href', context.images['ITEMS'][value]['href']);
            $(this).find('a').text( context.images['ITEMS'][value]['title']);
            $(this).find('.text').text(context.images['ITEMS'][value]['prewiew_text']);
            $(this).animate({'opacity': '1'}, 500);
            if(context.count > 1) context.timer.resume();
        });
    }
    //Добавление радио кнопок
    function addRadio() {
        result = '';
        for(i = 0; i < context.count; i++){
            result += '<input  type = "radio" name = "slide" id = "preview' + i + '" value = ' + i + '>';
            result += '<label for = "preview' + i + '"><div></div></label>';
        }
        $(context.nameRadio).html(result);

    }
    //Таймер вызова слайдера
    function Timer(callback, delay) {
        var timerId, start, remaining = delay;

        this.pause = function() {
            window.clearTimeout(timerId);
            remaining -= Date.now() - start;
        };

        this.resume = function() {
            start = Date.now();
            window.clearTimeout(timerId);
            timerId = window.setTimeout(callback, remaining);
        };

        this.resume();
    }
}


