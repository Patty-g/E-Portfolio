$(document).ready(function() {
    const container = $('.scroll-container');
    const itemWidth = $('.scroll-item').outerWidth(true);

    container.on('scroll', function() {
        handleScroll();
    });

    function handleScroll() {
        const scrollLeft = container.scrollLeft();
        const scrollWidth = container[0].scrollWidth;
        const clientWidth = container[0].clientWidth;

        if (scrollLeft <= 50) { 
            $('.swipe-left').css('opacity', '0');
            $('.swipe-right').css('opacity','1');
            $('.arrow-cont.left-0').css('opacity', '0');
            $('.arrow-cont.right-0').css('opacity','1');
        } else if (scrollLeft + clientWidth >= scrollWidth) {
            $('.swipe-left').css('opacity','1');
            $('.swipe-right').css('opacity', '0');
            $('.arrow-cont.left-0').css('opacity','1');
            $('.arrow-cont.right-0').css('opacity', '0');
        } else {
            $('.swipe-left').css('opacity','1');
            $('.swipe-right').css('opacity','1');
            $('.arrow-cont.left-0').css('opacity','1');
            $('.arrow-cont.right-0').css('opacity','1');
        }
    }

    $('#next').click(function() {
        container[0].scrollBy({ left: itemWidth, behavior: 'smooth' });
    });

    $('#prev').click(function() {
        container[0].scrollBy({ left: -itemWidth, behavior: 'smooth' });
    });

    $('.lottie-swipe').each(function(index, e){

        lottie.loadAnimation({
        container: e, // the DOM element to render the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: './content/animations/swipe.json' // the path to the animation JSON

        });

        lottie.setSpeed(0.5);

    })
    

    handleScroll()

    
});