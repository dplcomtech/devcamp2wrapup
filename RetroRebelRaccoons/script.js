var videos = [
{
	url: 'https://www.youtube.com/embed/PKDodoDF9Qg',
	title: 'Tom Hagerman - Granny Old Wound'
},{
	url: 'https://www.youtube.com/embed/SpPkih-GXF8',
	title: "DeVotchKa - Comrade Z"
},{
	url: 'https://www.youtube.com/embed/jPMy01lS5as',
	title: 'Amos Lee - Windows are Rolled Down'
}
];

var selectedVideo = 0;
function nextVideo() {
	selectedVideo = selectedVideo + 1;
	if (selectedVideo > videos.length - 1) {
		selectedVideo = 0;
	}

	var videoEl = window.document.querySelector('.youtube-video');
	videoEl.setAttribute('src', videos[selectedVideo].url);
	var titleEl = window.document.querySelector('.selected-video-title');
	titleEl.innerHTML = videos[selectedVideo].title;
}

function previousVideo() {
	selectedVideo = selectedVideo - 1;
	if (selectedVideo < 0) {
		selectedVideo = videos.length - 1;
	}

	var videoEl = window.document.querySelector('.youtube-video');
	videoEl.setAttribute('src', videos[selectedVideo].url);
	var titleEl = window.document.querySelector('.selected-video-title');
	titleEl.innerHTML = videos[selectedVideo].title;
}
