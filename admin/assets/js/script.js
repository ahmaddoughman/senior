// Get the input element and listen for changes
const fileInput = document.getElementById('fileInput');
const fileLabel = document.getElementById('fileLabel');

fileInput.addEventListener('change', function() {
    if (fileInput.files.length > 0) {
        fileLabel.textContent = 'Chosen file: ' + fileInput.files[0].name;
    } else {
        fileLabel.textContent = 'Choose an Image:';
    }
});


document.addEventListener('DOMContentLoaded', function() {
    var notification = document.querySelector('.notification');

    // Display notification if it's hidden
    if (notification.style.display === 'none') {
        // Show notification
        notification.style.display = 'block';

        // Remove notification after 3 seconds
        setTimeout(function() {
            notification.style.display = 'none';
        }, 1000);
    }
});