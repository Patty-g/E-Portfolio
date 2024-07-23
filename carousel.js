let currentIndex = 0;

function createCarousel($div) {
    const $content = $div.find('.content');
    $content.html(`
        <button class="close-btn" onclick="closeDiv()"><i class="fas fa-times"></i></button>
        <div class="carousel">
            <div class="carousel-item">
                <!-- Your carousel content here -->
            </div>
            <div class="carousel-item">
                <h3>Project 2</h3>
                <p>Description of Project 2. It includes details about the work done, technologies used, and the impact it had.</p>
            </div>
            <div class="carousel-item">
                <h3>Project 3</h3>
                <p>Description of Project 3. It includes details about the work done, technologies used, and the impact it had.</p>
            </div>
        </div>
        <button class="arrow left" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></button>
        <button class="arrow right" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></button>
    `);

    const $carouselItems = $content.find('.carousel-item');
    $carouselItems.css({
        width: '100%',
        height: '100%',
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center'
    });

    const $sections = $content.find('section.fade-in');
    $sections.each((index, section) => {
        setTimeout(() => {
            $(section).addClass('visible');
        }, index * 300);
    });
}

function prevSlide() {
    currentIndex = (currentIndex === 0) ? 2 : currentIndex - 1;
    updateCarousel();
}

function nextSlide() {
    currentIndex = (currentIndex === 2) ? 0 : currentIndex + 1;
    updateCarousel();
}

function updateCarousel() {
    const $carousel = $('.carousel');
    $carousel.css({
        transition: 'transform 0.4s ease-in-out',
        transform: `translateX(-${currentIndex * 100}%)`
    });

    setTimeout(() => {
        $carousel.css({
            transition: 'transform 0.1s ease-in-out',
            transform: `translateX(calc(-${currentIndex * 100}% - 10px))`
        });

        setTimeout(() => {
            $carousel.css({
                transition: 'transform 0.2s ease-out',
                transform: `translateX(-${currentIndex * 100}%)`
            });
        }, 100);
    }, 400);
}
