document.addEventListener('DOMContentLoaded', function() {
    const videos = document.querySelectorAll('.video-slideshow video');
    let currentVideoIndex = 0;
    
    // Start the first video
    videos[currentVideoIndex].classList.add('active-video');
    videos[currentVideoIndex].play();
    
    // Add ended event listener to all videos
    videos.forEach((video, index) => {
        video.addEventListener('ended', function() {
            // Hide current video
            this.classList.remove('active-video');
            
            // Calculate next video index
            currentVideoIndex = (index + 1) % videos.length;
            
            // Show and play next video
            videos[currentVideoIndex].classList.add('active-video');
            videos[currentVideoIndex].currentTime = 0;
            videos[currentVideoIndex].play();
        });
    });
});