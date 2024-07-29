$(document).ready(function () {

    console.log('hi');

    let options = {
        root: null, // Use the viewport as the container
        rootMargin: '0px',
        threshold: 1.0 // Trigger when 100% of the element is visible
    };
    
    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Call your function here with the specific element
                elementVisible(entry.target);
                // Unobserve the element after it has become visible
                observer.unobserve(entry.target);
            }
        });
    }, options);
    
    // Select all matching elements
    let targets = document.querySelectorAll('.skill-holder');
    targets.forEach(target => {
        observer.observe(target);
    });
    
    function elementVisible(target) {
        // Find the .bar-0 elements within the specific target
        target.querySelectorAll('.bar-0').forEach(element => {
            element.classList.remove('bar-0');
        });
    }

    //SWIPE SKILLS

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

            swiperWrapper.addEventListener('touchstart', function(e) {
                startX = e.touches[0].clientX;
            });

            swiperWrapper.addEventListener('touchend', function(e) {
                endX = e.changedTouches[0].clientX;
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
