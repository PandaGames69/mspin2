// Function to update the iframe src on page load
function updateIframeSrc() {
    // Get the first button
    const firstButton = document.querySelector('.feed-buttons-wrapper button');
    if (firstButton) {
        // Extract the URL from the onclick attribute
        const onclickAttr = firstButton.getAttribute('onclick');
        const urlMatch = onclickAttr.match(/src\s*=\s*['"]([^'"]+)['"]/);
        if (urlMatch && urlMatch[1]) {
            // Set the iframe src to the extracted URL
            document.getElementById('feed-iframe').src = urlMatch[1];
        }
    }
}

// Run the function when the page loads
window.onload = updateIframeSrc;
