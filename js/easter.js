
//goatifi
//runs immediately
(function() {
    // probability check
    var shouldChange = Math.random() < 0.0001;  //its 0 to 1 max value. so eg 0.1 is 10%

    // Function to change images
    function changeImages() {
        var homeCardsWrapper = document.querySelector('.home-cards-wrapper');
        if (homeCardsWrapper) {
            var imgTags = homeCardsWrapper.querySelectorAll('img');
            imgTags.forEach(function(img) {
                img.src = '..\\media\\img\\ee\\goatifid-ee.webp';
                img.style.filter = 'grayscale(0)';
            });
        }
    }

    // If we should change images, wait for the DOM to be ready
    if (shouldChange) {
        if (document.readyState === 'loading') {  // Loading hasn't finished yet
            document.addEventListener('DOMContentLoaded', changeImages);
        } else {  // `DOMContentLoaded` has already fired
            changeImages();
        }
    }
})();



//rickroll
document.addEventListener('DOMContentLoaded', function() {
    // Get the element with class 'header-txt'
    var headerTxt = document.querySelector('.header-txt');

    if (headerTxt) {
        // Store the original onclick function
        var originalOnClick = headerTxt.getAttribute('onclick');

        // Add a new click event listener
        headerTxt.addEventListener('click', function(event) {
            // Prevent the default action and the original onclick
            event.preventDefault();

            // chance rate 
            if (Math.random() < 0.0001) { //1 in 10k
                // If the random condition is met, change the location
                window.location.href = '../media/img/ee/rick-ee.webp';
            } else {
                // Otherwise, execute the original onclick function
                if (originalOnClick) {
                    eval(originalOnClick);
                }
            }
        });

        // Remove the original onclick attribute to avoid conflicts
        headerTxt.removeAttribute('onclick');
    }
});


