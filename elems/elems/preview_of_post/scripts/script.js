function slider(images,delay){
    let k = 1;

    $('.preview .radio input').on('click', function () {
        k = $(this).val();
        changeImage($(this).val());
    });
    $('#preview0').trigger('click');

    setInterval(function () {
        count = images.length;
        k++;
        if (k === (count)) {
            k = 0;
        }
        $('#preview' + k).trigger('click');
    }, delay);
    function changeImage(value) {
        $('.preview').animate({'opacity':'0'},300,function(){
            $(this).css('background-image', images[value]);
            $(this).animate({'opacity':'1'},300);
        });
    }
}
