/*
SocialStory.JS
Copyright (c) 2018 TK Dewjee / iamtk
*/

(function () {

    // Declare plugin's variables
    var defaults;
    var video;
    var thisTimeline;
    var start = 0;
    var storyTime;
    var storySpinner;
    var imageInterval;
    var loadingErrors = [];

    this.Story = function () {
        loadingErrors = [];
        // Default parameters if non provided.
        defaults = {
            playlist: null
        };

        if (arguments[0] && typeof arguments[0] === "object") {
            this.options = extendDefaults(defaults, arguments[0]);
        }

        try {
            if (defaults.playlist == null || defaults.playlist == '') {
                console.log('[SocialStories] No playlist provided.');
                return false;
            }
        } catch (e) {
            console.log(e);
            return false;
        }

        var Div = document.getElementById('storytime');

        // HTML for story popup to be added to page
        var baseHTML = '<div class="storytime" style="opacity: 0; display: none;">' +
            '<div class="story-cover"></div>' +
            '<div class="story-window">' +
            '<a href="#" class="story-arrow left" onclick="event.preventDefault(); socialStory.prev();"></a><a href="#" class="story-arrow right" onclick="event.preventDefault(); socialStory.next();"></a>' +
            '<div class="story-nav">' +
            '<div class="story-nav-left"><span class="story-text"></span><span class="story-date"></span></div><div class="story-nav-right"><button class="btn btn-success download-story-btn" onclick="socialStory.downloadStory()">Download</button><a href="#" class="close story-close" onclick="event.preventDefault(); socialStory.close();"></a></div>' +
            '</div>' +
            '<div class="story-timeline"></div>' +
            '<div class="story-video" onclick="event.preventDefault(); socialStory.next();">' +
            '<video class="story-next story-video-elem" playsinline></video>' +
            '<img class="story-image story-next"></img>' +
            '</div>' +
            '<div class="spinner">' +
            '<div class="bounce1"></div>' +
            '<div class="bounce2"></div>' +
            '<div class="bounce3"></div>' +
            '</div>' +
            '</div>' +
            '</div>';

        var timelineHTML = '';

        // Add HTML to storytime div element
        Div.innerHTML = baseHTML;

        // Create timeline elements by looping thorugh story items
        var i;
        for (i = 0; i < defaults.playlist.length; i++) {
            timelineHTML = timelineHTML + '<div class="story-timeline-item"><div class="story-timeline-line"></div><div class="story-timeline-line-active story-active-' + i + '" style="width: 0%;"></div></div>';
        }

        // Add timeline HTML to storytime div element
        var storyTimeline = document.getElementsByClassName('story-timeline')[0];
        storyTimeline.innerHTML = timelineHTML;
    };

    // Utility method to extend defaults with user options
    function extendDefaults(source, properties) {
        var property;
        for (property in properties) {
            if (properties.hasOwnProperty(property)) {
                source[property] = properties[property];
            }
        }
        return source;
    }

    function getPlayList() {
        return defaults.playlist;
    }

    function getStart() {
        return start;
    }

    function launch() {
        // Get HTML elements
        storyTime = document.getElementsByClassName('storytime')[0];
        storySpinner = document.getElementsByClassName('spinner')[0];
        thisTimeline = document.getElementsByClassName('story-active-' + start)[0];
        var icon = document.getElementsByClassName('story-icon')[0];
        var text = document.getElementsByClassName('story-text')[0];
        var date = document.getElementsByClassName('story-date')[0];
        video = document.getElementsByClassName("story-video-elem")[0];
        image = document.getElementsByClassName("story-image")[0];
        var currentPlaylist = defaults.playlist[start];
        var onLoadingVideoError = false;

        // Show the Social Story Pop-up
        if (start == 0) {
            storyTime.setAttribute("style", "display: block; opacity: 0;");
        } else {
            storyTime.setAttribute("style", "display: block; opacity: 1;");
        }

        // Set CSS loading spinner to display: block (i.e. show it)
        storySpinner.style.display = 'block';
        setTimeout(function () {
            storyTime.setAttribute("style", "display: block; opacity: 1;");
        }, 10);

        // Load in the icon
        /*   if (defaults.playlist[start].icon) {
             icon.src = defaults.playlist[start].icon;
           }*/

        if (defaults.playlist[start].title) {
            text.innerHTML = defaults.playlist[start].title;
        }
        date.innerHTML = defaults.playlist[start].createdTime;

        // Remove any previous images
        // image.src = '#';
        image.style.display = 'none';

        // Remove any previous videos
        video.src = ' ';
        video.style.display = 'none';

        if (currentPlaylist.type === 'image') {
            video.currentTime = 0;
            video.pause();
            image.style.display = 'block';
            storySpinner.style.display = 'none';
            image.src = 'https://cdn.instanavigation.com/?' + currentPlaylist.thumbnailUrl;
            var currentPercent = 0;
            var percentToIncrease = 4;

            imageInterval = setInterval(function () {
                currentPercent += percentToIncrease;
                thisTimeline.style.width = currentPercent + '%';
                if (currentPercent >= 100) {
                    clearInterval(imageInterval);
                    next();
                }
            }, 400)
        } else if (currentPlaylist.type === 'video') {
            video.style.display = 'block';
            // video.src = 'https://stories-cdn.b-cdn.net/' + defaults.playlist[start].videoUrl;
            video.src = 'https://stories-cdn.fun/' + defaults.playlist[start].videoUrl;
            // video.src = defaults.playlist[start].videoUrl;
            // video.src = 'https://posts-live.b-cdn.net/' + defaults.playlist[start].videoUrl;
            // video.src = 'https://video-cors-live.b-cdn.net/' + defaults.playlist[start].videoUrl;
            // video.src = 'https://bitter-feather-9c64.videocdn13.workers.dev/?' + defaults.playlist[start].videoUrl;
            video.load();

            /*video.onerror = function() {
                if (typeof loadingErrors[start] == "undefined" && video.src.indexOf("stories-cdn.fun") == -1) {
                    video.src = 'https://stories-cdn.fun/' + video.src;
                    video.load();
                    loadingErrors[start] = true;
                }
            }*/

            // When video can play, hide spinner
            video.oncanplay = function () {
                storySpinner.style.display = 'none';
                video.play();
                // document.getElementsByClassName('story-video')[0].setAttribute("style", "min-width: " + video.offsetWidth + "px;");
                document.getElementsByClassName('story-video')[0]/*.setAttribute("style", "max-width: 450px")*/;
                video.muted = false;
            };

            // Add event listener to track video progress and run function timeUpdate()
            video.addEventListener('timeupdate', timeUpdate, false);
            // Add event listerer to run function videoEnded() at end of video
            video.addEventListener('ended', videoEnded, false);
        }

        thisTimeline.style.width = '0%';
    }

    function timeUpdate() {
        // Calculate percentage of video played and update the videos timeline width accordingly
        var percentage = Math.ceil((100 / video.duration) * video.currentTime);
        thisTimeline.style.width = percentage + '%';
    }

    function videoEnded() {
        // Remove all event listeners on video end so they don't get duplicated.
        video.removeEventListener('timeupdate', timeUpdate);
        video.removeEventListener('ended', videoEnded);
        // Run next video
        next();
    }

    function next() {

        clearInterval(imageInterval);

        // Set previous video timeline to 100% complete
        thisTimeline.style.width = '100%';
        // Advance play count to next video
        start++;
        // If next video doesn't exist (i.e. the previous video was the last) then close the Social Story popup
        if (start >= defaults.playlist.length) {
            setTimeout(function () {
                close();
                return false;
            }, 400);
        } else {
            // Otherwise run the next video
            launch(start);
        }
    }

    function prev() {
        clearInterval(imageInterval);

        // If previous video was not first video set its timeline to 0%
        if (start != 0) {
            thisTimeline.style.width = '0%';
        }
        // Subtract play count to previous video
        start--;
        // If next video doesn't exist (i.e. the previous video was the last) then close the Social Story popup
        if (start < 0) {
            start = 0;
            return false;
        } else {
            // Otherwise run the previous video
            launch(start);
        }
    }

    function downloadStory() {
        const start = getStart();
        const playlist = getPlayList();
        const currentPlayList = playlist[start];
        let url = currentPlayList['thumbnailUrl'];

        if (currentPlayList['type'] === 'video') {
            url = currentPlayList['videoUrl'];
            // download('https://video-cors-live.b-cdn.net/' + url.replace('https://', ''));
            // download('https://posts-live.b-cdn.net/' + url.replace('https://', ''));
            // download('https://stories-cdn.b-cdn.net/' + url.replace('https://', ''));
            // download('https://stories-cdn.fun/' + url.replace('https://', ''));
            download('https://stories-cdn.fun/' + url);
            // download('https://bitter-feather-9c64.videocdn13.workers.dev/?' + url);
        } else {
            download('https://cdn.instanavigation.com/?' + url);
        }

    }

    function close() {

        clearInterval(imageInterval);

        // Pause currently playing video
        video.pause();
        // Hide Social Story popup
        storyTime.setAttribute("style", "opacity: 0;");
        // After 500ms set stoyrtime element to display:none and reset all video timelines to 0%
        setTimeout(function () {
            storyTime.setAttribute("style", "opacity: 0; display: none;");
            var i;
            for (i = 0; i < defaults.playlist.length; i++) {
                document.getElementsByClassName('story-timeline-line-active')[i].setAttribute("style", "width: 0%;");
            }
        }, 500);
    }

    // Plugin functions that can be called from your webpages

    // socialStory.launch()
    Story.prototype.launch = function (num) {
        // Launch Social Stories - if no number is passed with socialStory.launch() then choose the first story.  As the stories are a javascript array the first story is 0
        if (!num) {
            var num = 0;
        }
        start = num;
        launch();
    };

    Story.prototype.getStart = function () {
        return getStart();
    }

    Story.prototype.getPlayList = function () {
        return getPlayList();
    }

    Story.prototype.downloadStory = function () {
        return downloadStory();
    }

    // socialStory.next()
    Story.prototype.next = function () {
        next();
    };

    // socialStory.prev()
    Story.prototype.prev = function () {
        prev();
    };

    // socialStory.close()
    Story.prototype.close = function () {
        close();
    };

}());
