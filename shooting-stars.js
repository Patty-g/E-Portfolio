$(document).ready(function () {
    let containerHeight = $('.star-container').height();
    let containerWidth = $('.star-container').width();
    const stars = [];
    const maxStars = 10; // Maximum number of stars
    let spawnRate = 100; // Spawn rate in milliseconds
    const minSize = 1; // Minimum star size
    const maxSize = 30; // Maximum star size
    let minVelocity, maxVelocity;

    const flashBaseSize = 1; // Base size for the flash effect
    const flashSizeMultiplier = 3; // Multiplier for the combined size of the colliding stars
    const flashColor = 'rgba(255, 255, 255, 1)'; // Color of the flash
    const flashSpread = 5; // Spread of the flash
    const flashBlur = 10; // Blur radius of the flash
    const flashDuration = 0.5; // Duration of the flash in seconds

    const gridSize = 50;
    let grid = [];

    // Create and append the custom cursor
    const $cursor = $('<div class="cursor"></div>');
    $('.star-container').append($cursor);

    let isMousePressed = false;
    let lastMousePosition = { clientX: 0, clientY: 0 };

    // Mouse Events
    $('.star-container').mousedown(function (e) {
        e.preventDefault();
        isMousePressed = true;
        $cursor.show();
        updateCursor(e); // Update cursor position immediately
    });

    $('.star-container').mouseup(function (e) {
        isMousePressed = false;
        //$cursor.hide();
    });

    $('.star-container').mousemove(function (e) {
        lastMousePosition = { clientX: e.clientX, clientY: e.clientY };
        updateCursor(e);
    });

    // Touch Events
    $('.star-container').on('touchstart', function (e) {
        isMousePressed = true;
        $cursor.show();
        updateCursor(e.touches[0]); // Update cursor position immediately
    });

    $('.star-container').on('touchend', function (e) {
        isMousePressed = false;
        $cursor.hide();
    });

    $('.star-container').on('touchmove', function (e) {
        if (isMousePressed) {
            lastMousePosition = { clientX: e.touches[0].clientX, clientY: e.touches[0].clientY };
            updateCursor(e.touches[0]);
        }
    });

    // Update Cursor Position Function
    function updateCursor(position) {
        const scrollTop = $(window).scrollTop();
        const scrollLeft = $(window).scrollLeft();
        $cursor.css({
            top: `${position.clientY + scrollTop - $cursor.height() / 2}px`,
            left: `${position.clientX + scrollLeft - $cursor.width() / 2}px`
        });
    }

    $(window).scroll(function () {
        updateCursor(lastMousePosition);
    });

    // Set different spawn rates and velocity ranges based on screen size
    function setSpawnRateAndVelocity() {
        const screenWidth = $(window).width();

        if (screenWidth < 600) {
            spawnRate = 2000; // Slow spawn rate for small screens
            minVelocity = 1;
            maxVelocity = 5;
        } else if (screenWidth >= 600 && screenWidth < 1200) {
            spawnRate = 1000; // Medium spawn rate for medium screens
            minVelocity = 3;
            maxVelocity = 7;
        } else {
            spawnRate = 500; // Fast spawn rate for large screens
            minVelocity = 5;
            maxVelocity = 10;
        }
    }

    setSpawnRateAndVelocity(); // Set spawn rate on initial load

    $(window).resize(function () {
        containerHeight = $('.star-container').height();
        containerWidth = $('.star-container').width();
        setSpawnRateAndVelocity(); // Update spawn rate and velocity on window resize
    });

    function getRandomColorChangeAnimation() {
        const animations = ['colorChange1', 'colorChange2', 'colorChange3', 'colorChange4', 'colorChange5', 'colorChange6', 'colorChange7', 'colorChange8'];
        return animations[Math.floor(Math.random() * animations.length)];
    }

    function createShootingStar() {
        if (stars.length >= maxStars) {
            return;
        }

        const size = Math.random() * (maxSize - minSize) + minSize;
        const velocity = Math.random() * (maxVelocity - minVelocity) + minVelocity;
        const edge = Math.floor(Math.random() * 4); // 0: top, 1: right, 2: bottom, 3: left
        let topPosition, leftPosition, deltaX, deltaY;

        switch (edge) {
            case 0: // top
                topPosition = 0;
                leftPosition = Math.random() * containerWidth;
                deltaX = Math.random() * 2 - 1; // Random x direction
                deltaY = 1; // Downward
                break;
            case 1: // right
                topPosition = Math.random() * containerHeight;
                leftPosition = containerWidth;
                deltaX = -1; // Leftward
                deltaY = Math.random() * 2 - 1; // Random y direction
                break;
            case 2: // bottom
                topPosition = containerHeight;
                leftPosition = Math.random() * containerWidth;
                deltaX = Math.random() * 2 - 1; // Random x direction
                deltaY = -1; // Upward
                break;
            case 3: // left
                topPosition = Math.random() * containerHeight;
                leftPosition = 0;
                deltaX = 1; // Rightward
                deltaY = Math.random() * 2 - 1; // Random y direction
                break;
        }

        const $star = $('<div class="star"></div>').css({
            width: `${size}px`,
            height: `${size}px`,
            top: `${topPosition}px`,
            left: `${leftPosition}px`
        });

        $('.star-container').append($star);

        const starObject = {
            element: $star,
            size: size,
            deltaX: deltaX,
            deltaY: deltaY,
            velocity: velocity,
        };

        stars.push(starObject);
    }

    function moveStars() {
        applyGravityToStars(); // Apply gravity effect if mouse button is pressed

        const padding = 50; // Padding to ensure stars are fully out of view
        for (let i = stars.length - 1; i >= 0; i--) {
            const star = stars[i];
            const currentTop = parseFloat(star.element.css('top'));
            const currentLeft = parseFloat(star.element.css('left'));

            const newTop = currentTop + star.deltaY * star.velocity;
            const newLeft = currentLeft + star.deltaX * star.velocity;

            star.element.css({
                top: `${newTop}px`,
                left: `${newLeft}px`
            });

            // Remove star if it goes out of bounds with padding
            if (
                newTop < -padding || newTop > containerHeight + padding ||
                newLeft < -padding || newLeft > containerWidth + padding
            ) {
                star.element.remove();
                stars.splice(i, 1);
            }
        }
    }

    function isColliding($star1, $star2) {
        const rect1 = $star1[0].getBoundingClientRect();
        const rect2 = $star2[0].getBoundingClientRect();

        return !(
            rect1.top > rect2.bottom ||
            rect1.bottom < rect2.top ||
            rect1.left > rect2.right ||
            rect1.right < rect2.left
        );
    }

    function createFlashEffect(x, y, combinedSize) {
        const flashSize = flashBaseSize; // Use base size for the flash effect
        const flashSpreadValue = flashSpread + combinedSize * flashSizeMultiplier; // Adjust spread based on size multiplier
        const flashBlurValue = flashBlur + combinedSize * flashSizeMultiplier; // Adjust blur based on size multiplier
        const flash = document.createElement('div');
        flash.className = 'flash';
        flash.style.width = `1`;
        flash.style.height = `1`;
        flash.style.top = `${y - flashSize / 2}px`;
        flash.style.left = `${x - flashSize / 2}px`;
        flash.style.setProperty('--flashColor', flashColor);
        flash.style.setProperty('--flashSpread', `${flashSpreadValue}px`);
        flash.style.setProperty('--flashBlur', `${flashBlurValue}px`);
        flash.style.setProperty('--flashDuration', `${flashDuration * combinedSize / 10}s`);

        $('.star-container').append(flash);

        setTimeout(() => {
            flash.remove();
        }, flashDuration * 1000); // Remove the flash after the animation
    }

    function spawnFragments(star1, star2) {
        const fragmentCount = Math.ceil((star1.size + star2.size) / 2);
        const collisionPoint = {
            top: (parseFloat(star1.element.css('top')) + parseFloat(star2.element.css('top'))) / 2,
            left: (parseFloat(star1.element.css('left')) + parseFloat(star2.element.css('left'))) / 2,
        };

        const combinedVector = {
            deltaX: (star1.deltaX + star2.deltaX) / 2,
            deltaY: (star1.deltaY + star2.deltaY) / 2,
            velocity: (star1.velocity + star2.velocity) / 2
        };

        const angleBetweenStars = Math.abs(Math.atan2(star1.deltaY, star1.deltaX) - Math.atan2(star2.deltaY, star2.deltaX)) * 180 / Math.PI;

        for (let i = 0; i < fragmentCount; i++) {
            const size = (star1.size + star2.size) / 10;
            let deltaX, deltaY;

            if (angleBetweenStars > 80 && angleBetweenStars < 100) {
                // Special case: fly outwards in all directions
                const angle = Math.random() * 2 * Math.PI;
                deltaX = Math.cos(angle);
                deltaY = Math.sin(angle);
            } else {
                // Combined vector with random variation
                deltaX = combinedVector.deltaX + (Math.random() - 0.5);
                deltaY = combinedVector.deltaY + (Math.random() - 0.5);
            }

            const fragment = document.createElement('div');
            fragment.className = 'fragment';
            fragment.style.width = `${size}px`;
            fragment.style.height = `${size}px`;
            fragment.style.top = `${collisionPoint.top}px`;
            fragment.style.left = `${collisionPoint.left}px`;
            fragment.style.transition = `top 2s linear, left 2s linear, opacity 2s`; // Use CSS transitions for smooth movement
            fragment.style.opacity = 1;
            fragment.style.animation = `${getRandomColorChangeAnimation()} 0.2s infinite`;

            // Set initial position
            $('.star-container').append(fragment);

            // Set final position with adjusted speed scaling
            setTimeout(() => {
                const finalTop = parseFloat(fragment.style.top) + deltaY * combinedVector.velocity * 200; // Adjusted speed scaling factor
                const finalLeft = parseFloat(fragment.style.left) + deltaX * combinedVector.velocity * 200; // Adjusted speed scaling factor
                fragment.style.top = `${finalTop}px`;
                fragment.style.left = `${finalLeft}px`;
                fragment.style.opacity = 0;
            }, 10); // Short delay to ensure transition occurs

            // Remove fragment after the transition
            setTimeout(() => {
                fragment.remove();
            }, 3000); // Duration of transition + fade duration
        }
    }

    function addToGrid(star) {
        const x = Math.floor(parseFloat(star.element.css('left')) / gridSize);
        const y = Math.floor(parseFloat(star.element.css('top')) / gridSize);
        if (!grid[x]) grid[x] = [];
        if (!grid[x][y]) grid[x][y] = [];
        grid[x][y].push(star);
    }

    function addCursorToGrid() {
        const cursorRect = $cursor[0].getBoundingClientRect();
        const cursorX = Math.floor((cursorRect.left + $(window).scrollLeft()) / gridSize);
        const cursorY = Math.floor((cursorRect.top + $(window).scrollTop()) / gridSize);
        const cursorObject = { element: $cursor, size: 20, deltaX: 0, deltaY: 0, velocity: 0 }; // cursorObject mimics star properties
        if (!grid[cursorX]) grid[cursorX] = [];
        if (!grid[cursorX][cursorY]) grid[cursorX][cursorY] = [];
        grid[cursorX][cursorY].push(cursorObject);
    }

    function checkCollisions() {
        const neighborOffsets = [
            [-1, -1], [-1, 0], [-1, 1],
            [0, -1], [0, 0], [0, 1],
            [1, -1], [1, 0], [1, 1]
        ];
    
        // Reset and repopulate the grid
        grid = [];
        for (const star of stars) {
            addToGrid(star);
        }
        addCursorToGrid(); // Add cursor to grid
    
        const starsToRemove = [];
    
        for (let x = 0; x < grid.length; x++) {
            if (!grid[x]) continue;
            for (let y = 0; y < grid[x].length; y++) {
                if (!grid[x][y]) continue;
                const cellStars = grid[x][y];
    
                for (const star of cellStars) {
                    for (const [dx, dy] of neighborOffsets) {
                        const neighborX = x + dx;
                        const neighborY = y + dy;
    
                        if (
                            neighborX < 0 ||
                            neighborY < 0 ||
                            neighborX >= grid.length ||
                            !grid[neighborX] ||
                            neighborY >= grid[neighborX].length ||
                            !grid[neighborX][neighborY]
                        ) continue;
    
                        const neighborCellStars = grid[neighborX][neighborY];
    
                        for (const neighborStar of neighborCellStars) {
                            if (star !== neighborStar && isColliding(star.element, neighborStar.element)) {
                                console.log(`Collision detected between elements at (${x}, ${y}) and (${neighborX}, ${neighborY})`);
    
                                const isCursorCollision =
                                    star.element.is($cursor) || neighborStar.element.is($cursor);
    
                                let combinedSize = star.size + neighborStar.size;
    
                                if (isCursorCollision) {
                                    combinedSize = star.element.is($cursor)
                                        ? neighborStar.size
                                        : star.size;
                                }
    
                                const collisionPointX =
                                    (parseFloat(star.element.css('left')) +
                                        parseFloat(neighborStar.element.css('left'))) / 2;
                                const collisionPointY =
                                    (parseFloat(star.element.css('top')) +
                                        parseFloat(neighborStar.element.css('top'))) / 2;
    
                                createFlashEffect(collisionPointX, collisionPointY, combinedSize);
    
                                // Spawn fragments at the collision point
                                spawnFragments(star, neighborStar);
    
                                // Mark the colliding elements for removal
                                if (star.element !== $cursor) {
                                    starsToRemove.push(star);
                                }
                                if (neighborStar.element !== $cursor) {
                                    starsToRemove.push(neighborStar);
                                }
    
                                // Break out of the nested loop safely
                                break;
                            }
                        }
                    }
                }
            }
        }
    
        // Remove the marked stars
        for (const star of starsToRemove) {
            star.element.remove();
            const index = stars.indexOf(star);
            if (index > -1) {
                stars.splice(index, 1);
            }
        }
    }
    
    
    
    

    function applyGravityToStars() {
        if ($(window).width() <= 768) {
            return; // Disable gravity on mobile devices
        }

        if (isMousePressed) {
            const cursorRect = $cursor[0].getBoundingClientRect();
            const cursorX = cursorRect.left + cursorRect.width / 2;
            const cursorY = cursorRect.top + cursorRect.height / 2;
            const gravityStrength = 0.5; // Strength of the gravitational pull

            for (let i = 0; i < stars.length; i++) {
                const star = stars[i];
                const starRect = star.element[0].getBoundingClientRect();
                const starX = starRect.left + starRect.width / 2;
                const starY = starRect.top + starRect.height / 2;

                const dx = cursorX - starX;
                const dy = cursorY - starY;
                const distance = Math.sqrt(dx * dx + dy * dy);
                const force = gravityStrength * star.size / distance;

                star.deltaX += force * (dx / distance);
                star.deltaY += force * (dy / distance);
            }
        }
    }

    function logStarCount() {
        console.log(`Current star count: ${stars.length}`);
    }

    setInterval(createShootingStar, spawnRate); // Spawn stars at defined rate
    setInterval(logStarCount, 1000); // Log star count every second

    function update() {
        moveStars();
        checkCollisions();
        requestAnimationFrame(update);
    }

    update(); // Start the animation loop
});
