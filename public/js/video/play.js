const videoPlayer = document.querySelector('.video-player')
const video = videoPlayer.querySelector('.video')
const playButton = videoPlayer.querySelector('.play-button')
const volume = videoPlayer.querySelector('.volume')
const progress = videoPlayer.querySelector('.video-progres')
const progresBar = videoPlayer.querySelector('.video-progress-filled')

// Play And Pause Button
playButton.addEventListener('click', (e) => {
    if(video.paused){
        video.play()
        e.target.textContent = 'Pause'
    } else {
        video.pause()
        e.target.textContent = 'Play'
    }
})

// Volume
volume.addEventListener('mousemove', (e) => {
    video.volume = e.target.value
})

// progress bar
video.addEventListener('timeupdate')


