$(document).ready(function () {
    const colors = [
        'rgba(30, 144, 255, 1)',
        'rgba(255, 105, 180, 1)',
        'rgba(255, 69, 0, 1)',
        'rgba(148, 0, 211, 1)'
    ];

    // Ensure no element starts with the 'glow' class and set initial colors
    $('[data-text]').each(function () {
        const text = $(this).attr('data-text');
        const html = text.split('').map(char => {
            return `<span data-char="${char}">${char}</span>`;
        }).join('');
        $(this).html(html);
    });

    $(document).mousemove(function (e) {
        updateGlowEffect(e.pageX, e.pageY);
    });

    function updateGlowEffect(mouseX, mouseY) {
        const spans = $('.cutout-text span');
        const maxDist = 50;

        spans.each(function () {
            const rect = this.getBoundingClientRect();

            const scrollTop = $(window).scrollTop();
            const scrollLeft = $(window).scrollLeft();

            const distX = Math.abs(mouseX - (rect.left + rect.width / 2) - scrollLeft);
            const distY = Math.abs(mouseY - (rect.top + rect.height / 2) - scrollTop);
            let isGlowing = distX < maxDist && distY < maxDist;

            if (!isGlowing) {
                // Check for stars near the character
                $('.star').each(function () {
                    const starRect = this.getBoundingClientRect();
                    const starDistX = Math.abs((starRect.left + starRect.width / 2) - (rect.left + rect.width / 2));
                    const starDistY = Math.abs((starRect.top + starRect.height / 2) - (rect.top + rect.height / 2));

                    if (starDistX < maxDist && starDistY < maxDist) {
                        isGlowing = true;
                        return false; // Exit loop early if a star is near
                    }
                });
            }

            setGlowEffect($(this), isGlowing);
        });
    }

    function setGlowEffect(element, add) {
        const animationDelay = Math.random() * parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--glow-animation-speed'));
        const newColor = colors[Math.floor(Math.random() * colors.length)];
        element.css('--animation-delay', `-${animationDelay}s`);

        if (add) {
            if (!element.hasClass('glow')) {
                element.css('--initial-glow-color', newColor); // Set a new initial glow color
                element.removeClass('glow-out').addClass('glow');
            }
        } else {
            if (element.hasClass('glow')) {
                element.removeClass('glow').addClass('glow-out');
            }
        }
    }

    setInterval(function () {
        updateGlowEffect(-1, -1); // Update glow effect for stars without mouse movement
    }, 50); // Check for stars under text every 50ms
});
