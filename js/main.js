$(function(){
	setInterval("bgslide()", 50);	
});
 
var current = 0;
 
function bgslide(){
	current -= 1;
	$('.head_wrap').css("background-position", current+"px 0px");
}



function init() {
    // スクロールして何ピクセルでアニメーションさせるか
    var px_change   = 300;
 
    // スクロールのイベントハンドラを登録
    window.addEventListener('scroll', function(e){
        // 変化するポイントまでスクロールしたらクラスを追加
        if ( $(window).scrollTop() > px_change ) {
            $("header").addClass("smaller");
 
        // 変化するポイント以前であればクラスを削除
        } else if ( $("header").hasClass("smaller") ) {
            $("header").removeClass("smaller");
        }
    });
}
window.onload = init();



$(function() {
    $('.slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 20000,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHoveer: false,
        touchMove: false,
        swipe: false,
        draggable: false,
        accessibility: false,
        adaptiveHeight: true,
        cssEase: 'linear',
    });
    });