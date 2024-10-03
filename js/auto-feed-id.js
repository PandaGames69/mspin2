//stream feeds id animations
document.addEventListener("DOMContentLoaded", function() {
    const streamWrappers = document.querySelectorAll('.stream-wrapper');
  
    streamWrappers.forEach(wrapper => {
        const streamFeeds = wrapper.querySelectorAll('.stream-feed');
        
        streamFeeds.forEach((feed, index) => {
            if (index === 0) {
                feed.id = 'appear-left1';
            } else if (index === 1) {
                feed.id = 'appear-left2';
            } else if (index === 2) {
                feed.id = 'appear-left3';
            } else {
                feed.id = 'appear-left3';
            }
        });
    });
  });