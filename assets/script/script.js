var bpAnimHeight = [];

$(document).ready(function () {

$(window).scroll(function () {
    const scrollPosition = $(window).scrollTop();
    const windowHeight = $(window).height();

    if(scrollPosition > windowHeight) {
        $('#btnGoTop').removeClass('d-none');
    } else {
        $('#btnGoTop').addClass('d-none');
    }

    bpAnimHeight.forEach(function (item) {
        if (item.offsetTop >= scrollPosition && item.offsetTop <= scrollPosition + windowHeight) {
            if ($(item.elem)) {
                const classAnim = $(item.elem).attr('aria-anim');
                if (!$(item.elem).hasClass(classAnim)) { 
                    $(item.elem).addClass(classAnim);
                }
            }
        } else {
            if ($(item.elem)) {
                const classAnim = $(item.elem).attr('aria-anim');
                $(item.elem).removeClass(classAnim);
            }
        }
    });
});

$('.custom-anim').each(function () {
    const offset = $(this).offset();
    bpAnimHeight.push({ offsetTop: offset.top, elem: this });
}); 

});
