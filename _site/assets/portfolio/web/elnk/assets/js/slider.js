
var videos = [];
$(document).ready(function () {
    $('.el-carousel').elCarousel({
        singleItem: true,
        afterAction: function (current) {
            current.find('video').get(0);
        },
        margin: 0,
        nav: true,
        loop: false,
        dots: true,
        items: 1,
        video: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    // El Carousel video fix
    var el = $('.el-carousel');
    el.elCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        video: true,
        items: 1
    })
    el.on('translate.el.carousel', function (e) {
        $('.el-item video').each(function () {
            if($(this).get(0)) {
                $(this).get(0).pause();
            }
        });
        $('.el-item iframe').each(function () {
            if($(this)) {
                var $path = $(this).attr('id');
                if($path) {
                    var player = videos[$path];
                    if(player) {
                        player.pauseVideo();
                    }
                }
            }
        });
    });
    el.on('translated.el.carousel', function (e) {
        if($('.el-item.active video').get(0)) {
            $('.el-item.active video').get(0).play();
        }
        if($('.el-item.active iframe')) {
            var $path = $('.el-item.active iframe').attr('id');
            if($path) {
                var player = videos[$path];
                if(player) {
                    player.playVideo();
                }
            }
        }
    })
    var id = 0;
    $('.el-item .item').each(function () {
        var attr = $(this).attr('data-videosrc');
        if(typeof attr !== typeof undefined && attr !== false) {
            var videosrc = $(this).attr('data-videosrc');
            var type = videosrc.match(/https:\/\/(:?www.)?(\w*)/)[2];
            if(type == "youtube") {
                if(!$(this).has('iframe').length) {
                    $(this).prepend('<div class="video__wrapper"><iframe id="youtube-player-' + id + '" src="' + videosrc + '" width="100%" height="100%" frameborder="0"></iframe></div>');
                    id += 1;
                }
            } else {
                if(!$(this).has('video').length) {
                    $(this).prepend('<video muted><source src="' + videosrc + '" type="video/mp4"></video>');
                }
            }
        }
    });
    $('.el-item.active video').attr('autoplay', true).attr('loop', true);
    // El Carousel video fix no slide
    var el = $('.el-carousel');
    el.on('translated.el.carousel', function (e) {
        if($('.vid-no-slide video').get(0)) {
            $('.vid-no-slide video').get(0).play();
        }
        if($('.vid-no-slide iframe')) {
            var $path = $('.vid-no-slide iframe').attr('id');
            if($path) {
                var player = videos[$path];
                if(player) {
                    player.playVideo();
                }
            }
        }
    })
    if($('.hero-feature__video').length) {
        $('.hero-feature__video')
    }
    if(!isMobile()) {
        $('.el-stage-outer').each(function () {
            var attr = $('.vid-no-slide.el-carousel').attr('data-videosrc');
            if(typeof attr !== typeof undefined && attr !== false) {
                var videosrc = $('.vid-no-slide.el-carousel').attr('data-videosrc');
                $(this).prepend('<video muted><source src="' + videosrc + '" type="video/mp4"></video>');
            }
        });
        $('.vid-no-slide video').attr('autoplay', true).attr('loop', true);
    }
});

function onYouTubeIframeAPIReady() {
    $('.hero-wrapper .item iframe').each(function () {
        var $path = $(this).attr('id');
        videos[$path] = new YT.Player($path, {
            playerVars: {
                'rel': 0,
                'autoplay': 1,
                'controls': 0,
                'loop': -1,
                'showinfo': 0
            },
            height: "100%",
            width: "100%",
            events: {
                'onReady': function (e) {
                    e.target.playVideo();
                }
            }
        });
    });
    $('.hero-feature__video iframe').each(function () {
        var $path = $(this).attr('id');
        new YT.Player($path, {
            playerVars: {
                'rel': 0,
                'autoplay': 1,
                'controls': 0,
                'loop': -1,
                'showinfo': 0
            },
            height: "100%",
            width: "100%",
            events: {
                'onReady': onPlayerReady
            }
        });
    });
}

function onPlayerReady(e) {
    e.target.playVideo();
}
