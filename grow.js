let isExpanded = false;
let $originalDiv;
let $clone;

// Add event listener for resize event
window.addEventListener('resize', onResize);

function onResize() {
    if ($clone) {
        const newLefti = ($(window).width() - ($(window).width() * 0.9)) / 2;
        const newTopi = ($(window).height() - ($(window).height() * 0.9)) / 2;

        $clone.css({
            top: newTopi,
            left: newLefti,
            width: $(window).width() * 0.9,
            height: $(window).height() * 0.9,
        });
    }
}

function toggleDiv($div) {
    if (isExpanded) return; // Prevent multiple expansions

    const $body = $('body');
    $body.css('overflow', 'hidden');

    // Create the glassy mask
    const $mask = $('<div class="glassy-mask"></div>').appendTo($body);

    $originalDiv = $div;
    const originalRect = $div[0].getBoundingClientRect();

    $clone = $div.clone();
    $clone.css({
        position: 'fixed',
        top: originalRect.top,
        left: originalRect.left,
        width: originalRect.width,
        height: originalRect.height,
        margin: 0,
        zIndex: 9999,
        opacity: 0, // Start with 0 opacity for fade-in effect
    }).appendTo($body);

    $clone.find('.expand-exclude').each(function() {
        $(this).hide();
    });

    $('.content').css('opacity', '1');

    // Trigger staggered animation
    const sections = $clone.find('.fade-in');
    sections.each(function(index, section) {
        $(section).show();
        setTimeout(() => {
            $(section).addClass('visible');
        }, (index + 1) * 300);
    });

    // Add a close button to the clone
    $closeButton = $('<button class="close-expand" style="position: fixed; z-index:9999; top: 10px; right: 10px;padding: 15px; background: red; color: white; border: none; border-radius: 50%; width: 50px; height: 50px; cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" height="100%" width="100%" version="1.1" id="Capa_1" viewBox="0 0 460.775 460.775" xml:space="preserve"> <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55  c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55  c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505  c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55  l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719  c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/> </svg></button>').appendTo($body);


    $div.css('opacity', 0);

    setTimeout(() => {
        const windowWidth = $(window).width();
        const windowHeight = $(window).height();

        const newWidth = windowWidth * 0.9;
        const newHeight = windowHeight * 0.9;
        
        const newLeft = (windowWidth - newWidth) / 2;
        const newTop = (windowHeight - newHeight) / 2;

        $clone.css({
            top: newTop,
            left: newLeft,
            width: newWidth,
            height: newHeight,
            opacity: 1 // Fade-in effect
        });
        
        $clone.addClass('shadow');
        $mask.addClass('visible');
        $clone.addClass('expanded');
    }, 100); // Small delay to allow the clone to render before starting the transition

    // Attach photo click event listeners to the clone
    

    isExpanded = true;
}

function closeDiv() {
    if (!isExpanded) return; // Prevent closing when not expanded

    const currentRect = $originalDiv[0].getBoundingClientRect();
    $closeButton.remove();

    $('.glassy-mask').remove(); // Hide the glassy mask

    $clone.css({
        top: currentRect.top,
        left: currentRect.left,
        width: currentRect.width,
        height: currentRect.height,
        opacity: 0 // Fade-out effect
    });

    // Trigger staggered animation
    const sections = $clone.find('.fade-in');
    sections.each(function(index, section) {
        $(section).css('transition', 'all 0.1s ease');
        $(section).removeClass('visible');
    });

    $clone.removeClass('expanded');
    $clone.css('opacity', '1');

    setTimeout(() => {
        $originalDiv.css('opacity', 1);
        $clone.css('opacity', '0');
        setTimeout(() => {
            $clone.remove();
            $('body').css('overflow', 'visible');
            isExpanded = false;
        }, 500); // Wait for the opacity transition to complete

    }, 500); // Wait for the sections to fade out and size transition to complete
}

$('.expand-btn').on('click', function() {
    var parentExpandable = $(this).closest('.expandable');
    toggleDiv(parentExpandable);
});

$(document).on('click', '.close-expand', closeDiv);
