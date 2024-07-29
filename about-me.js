$(document).ready(function () {
    console.log('hi');

    // Manual visibility check function
    function checkVisibility() {
        $('.skill-holder').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                elementVisible(this);
            }
        });
    }

    function elementVisible(target) {
        // Find the .bar-0 elements within the specific target
        $(target).find('.bar-0').each(function() {
            $(this).removeClass('bar-0');
        });
    }

    // Initial check and set up scroll event listener
    checkVisibility();
    $(window).on('scroll resize', checkVisibility);

    // SWIPE SKILLS

    const swiperWrapper = document.querySelector('.swiper-wrapper');
    const bullets = document.querySelectorAll('.swiper-pagination-bullet');

    let currentIndex = 0;

    function updateSwiper(index) {
        swiperWrapper.style.transform = `translateX(-${index * 100}%)`;
        bullets.forEach(bullet => bullet.classList.remove('swiper-pagination-bullet-active'));
        bullets[index].classList.add('swiper-pagination-bullet-active');
        currentIndex = index;
    }

    bullets.forEach(bullet => {
        bullet.addEventListener('click', function() {
            const index = parseInt(this.getAttribute('data-index'));
            updateSwiper(index);
        });
    });

    // Swipe handling
    let startX = 0;
    let endX = 0;
    let isSwiping = false;

    swiperWrapper.addEventListener('touchstart', function(e) {
        startX = e.touches[0].clientX;
        isSwiping = true;
    });

    swiperWrapper.addEventListener('touchmove', function(e) {
        if (!isSwiping) return;
        endX = e.touches[0].clientX;
    });

    swiperWrapper.addEventListener('touchend', function(e) {
        if (!isSwiping) return;
        isSwiping = false;

        if (startX > endX + 50) {
            // Swipe left
            if (currentIndex < bullets.length - 1) {
                updateSwiper(currentIndex + 1);
            }
        } else if (startX < endX - 50) {
            // Swipe right
            if (currentIndex > 0) {
                updateSwiper(currentIndex - 1);
            }
        }
    });

    // Initialize
    updateSwiper(currentIndex);
});
