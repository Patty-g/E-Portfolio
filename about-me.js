
<script>
    $(document).ready(function () {
        console.log('hi');

        // Intersection Observer
        let options = {
            root: null, // Use the viewport as the container
            rootMargin: '0px',
            threshold: 1.0 // Trigger when 100% of the element is visible
        };

        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    elementVisible(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        let targets = document.querySelectorAll('.skill-holder');
        targets.forEach(target => {
            observer.observe(target);
        });

        function elementVisible(target) {
            target.querySelectorAll('.bar-0').forEach(element => {
                element.classList.remove('bar-0');
            });
        }

        // Swipe Skills
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
            bullet.addEventListener('click', function () {
                const index = parseInt(this.getAttribute('data-index'));
                updateSwiper(index);
            });
        });

        // Swipe handling
        let startX = 0;
        let endX = 0;

        swiperWrapper.addEventListener('touchstart', function (e) {
            startX = e.touches[0].clientX;
        });

        swiperWrapper.addEventListener('touchmove', function (e) {
            endX = e.touches[0].clientX;
        });

        swiperWrapper.addEventListener('touchend', function (e) {
            if (startX > endX + 50) {
                if (currentIndex < bullets.length - 1) {
                    updateSwiper(currentIndex + 1);
                }
            } else if (startX < endX - 50) {
                if (currentIndex > 0) {
                    updateSwiper(currentIndex - 1);
                }
            }
        });

        updateSwiper(currentIndex);
    });
</script>
