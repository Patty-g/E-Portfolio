$(document).ready(function() {
    // Initialize Lottie animation
    lottie.loadAnimation({
        container: document.getElementById('lottie-scroll'), // the DOM element to render the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: './content/animations/scrollDown.json' // the path to the animation JSON
    });

    const cards = document.querySelectorAll(".card");

    cards.forEach((card) => {
        card.addEventListener("click", function () {
            if (card.classList.contains("expanded")) {
                card.classList.remove("expanded");
                document.body.style.overflow = "auto"; // Re-enable scrolling
            } else {
                // Collapse any expanded cards
                document.querySelectorAll(".card.expanded").forEach((expandedCard) => {
                    expandedCard.classList.remove("expanded");
                });

                card.classList.add("expanded");
                document.body.style.overflow = "hidden"; // Disable scrolling
            }
        });
    });

    // Adjust hero section height
    function adjustHeroHeight() {
        const heroSection = document.getElementById('hero-section');
        console.log('Adjusting hero height'); // Debugging line
        heroSection.style.height = `${window.innerHeight}px`;
    }

    // Adjust hero section height on load and resize
    adjustHeroHeight();
    window.addEventListener('resize', adjustHeroHeight);

    // Other scripts...
});
