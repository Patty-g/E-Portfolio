document.addEventListener('DOMNodeInserted', function(event) {
    //console.log('eyyo');
    const photos = $('#photo-bar img');
    const overlay = $('.enlarge-overlay');
    const enlargedPhoto = $('.enlarge-overlay #enlargedPhoto');

    photos.each(function() {
        $(this).on('click', function() {
            //console.log($(this).attr('src'));
            enlargedPhoto.attr('src', $(this).attr('src'));
            overlay.addClass('visible');
            //console.log('show img');
        });
    });

    overlay.on('click', function() {
        overlay.removeClass('visible');
    });

    // Animation for list points
    $('.list-point').each(function(index, e) {
        setTimeout(() => {
            $(e).addClass('point-slide-in');
        }, (index + 1) * 50);

        $(e).css('animation-delay', index / 15 + 's');
    });
})