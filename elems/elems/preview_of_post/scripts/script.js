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
            $(this).find('.img').attr('src',images[value]['path']);
            $(this).find('a').text(images[value]['title']);
            $(this).find('.text').text(images[value]['prewiew_text']);
            $(this).animate({'opacity':'1'},300);
        });
    }
}
