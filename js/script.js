$(document).ready(function() {

    $("#works").removeClass('notCurrentPage');

    $('.slider').each(function () {
        let $this = $(this); // Current slider
        // Get the slide-group (container)
        let $group = $this.find('.slide-group');
        // Create jQuery object to hold all slides
        let $slides = $this.find('.slide');
        let buttonArray = []; // Array holds nav
        let currentIndex = 0; // Current slide
        let timeout; // Gap between slide

        console.log("TEST");

        function move(newIndex) {
            let animateLeft, slideLeft; // Declare variables
            advance(); // Call advance() again
            // If it is the current slide animating, do nothing
            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }
            // Remove active class from current slide button
            buttonArray[currentIndex].removeClass('active');
            // Add active class to new slide button
            buttonArray[newIndex].addClass('active');
            if (newIndex > currentIndex) { // If new item > current
                slideLeft = '100%'; // Sit new slide to the right
                animateLeft = '-100%'; // Animate current group to left
            } else { // Otherwise
                slideLeft = '-100%'; // Sit the new slide to the left
                animateLeft = '100%'; // Animate current group right
            }
            // Position slide left (if less) right (if more) of current
            $slides.eq(newIndex).css({left: slideLeft, display: 'block'});
            $group.animate({left: animateLeft}, function () { // Animate
                $slides.eq(currentIndex).css({display: 'none'}); // Hide old
                $slides.eq(newIndex).css({left: 0}); // Set pos: new item
                $group.css({left: 0}); // Set pos: slide group
                currentIndex = newIndex; // Set to new image
            });
        }

        function advance() { // Set timer

            clearTimeout(timeout); // Clear timeout
            // New timer
            timeout = setTimeout(function () {
                // If slide < total slides
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1); // Move slides
                    console.log("Moved forward!");
                } else { // Otherwise
                    move(0); // Go to first slide
                    console.log("Moved backward!");
                }
            }, 4000); // Milliseconds timer waits
        }

        $.each($slides, function (index) {
            // Create button
            let $button = $('<button type="button" class="slide-btn">&bull;</button>');
            if (index === currentIndex) { // Is it current item
                $button.addClass('active'); // Add active class
            }
            $button.on('click', function () { // Add event handler
                move(index); // It calls the move()
            }).appendTo('.slide-buttons'); // Add to holder
            buttonArray.push($button); // Add to array
        });
        advance();
    });

});