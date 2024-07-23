$(document).ready(function() {
    const sparklerContainer = $('#sparkler-container');
    const colors = [
        getComputedStyle(document.documentElement).getPropertyValue('--glow-color-1').trim(),
        getComputedStyle(document.documentElement).getPropertyValue('--glow-color-2').trim(),
        getComputedStyle(document.documentElement).getPropertyValue('--glow-color-3').trim(),
        getComputedStyle(document.documentElement).getPropertyValue('--glow-color-4').trim()
    ];

    function createSpark(x, y) {
        const spark = $('<div class="spark"></div>');
        const color = colors[Math.floor(Math.random() * colors.length)];
        const size = `${Math.floor(Math.random() * (parseInt(getComputedStyle(document.documentElement).getPropertyValue('--spark-size-max')) - parseInt(getComputedStyle(document.documentElement).getPropertyValue('--spark-size-min'))) + parseInt(getComputedStyle(document.documentElement).getPropertyValue('--spark-size-min')))}px`;
        spark.css({
            '--x': Math.random(),
            '--y': Math.random(),
            '--spark-color': `rgb(${color})`,
            '--spark-size': size,
            left: x,
            top: y
        });
        sparklerContainer.append(spark);
        setTimeout(() => {
            spark.remove();
        }, 500); // Match the duration of the animation
    }

    $(document).mousemove(function(e) {
        createSpark(e.pageX, e.pageY);
    });
});
