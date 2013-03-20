$(function() {
    if ($('#bannerSuperDestaque').length > 0) {
        $('#bannerSuperDestaque')
        .cycle({
            fx:         'fade',
            speed:      'slow',
            timeout:    6000,
            pause:      1,
            pager:      '#paginacaoBanner'
        });
    }

    var userFeed = new Instafeed({
        get: 'user',
        userId: 46594137,
        limit: 4,
        resolution: 'low_resolution',
        accessToken: '46594137.467ede5.a24eafb0720546929588bf8728c08797',
        template: '<li class="lista-acompanhe"><div class="image-acompanhe"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></div><div class="dados-acompanhe"><span class="comments"></span><span class="acompanhe-number"><a href="{{link}}" target="_blank">{{comments}}</a></span><span class="heart"></span><span class="acompanhe-number"><a href="{{link}}" target="_blank">{{likes}}</a></span></div></li>'
    });
    userFeed.run();
});