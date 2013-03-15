$(function() {
    $('#carrossel1 ul').carouFredSel({
        auto:   false,
        infinite: true,
        scroll:     3,
        width:  '100%',
        prev:   '#btn-carrossel1-prev',
        next:   '#btn-carrossel1-next'
    });

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