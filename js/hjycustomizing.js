// 허준영 커스텀 자바스크립트 입니다.

// hjy 팝업 닫기 버튼
$(function () {
    $("#hjy_pop .close_btn").click(function () {
        $('#hjy_pop').addClass('popClose');
        $('#popbg').addClass('popClose');
    });
});

// 네비게이션 탭 슬라이드 효과
$(function () {
    $(".gnb_menu_btn").click(function () {
        $("#gnb_all, #gnb_all_bg").show();
    });
    $(".gnb_close_btn, #gnb_all_bg").click(function () {
        $("#gnb_all, #gnb_all_bg").hide();
    });
    $('#gnb_1dul > li').mouseover(function () {
        $('.gnb_2dul_box').stop().slideDown();
    });
    $('#gnb_1dul > li').mouseleave(function () {
        $('.gnb_2dul_box').stop().slideUp();
    });
});

// mainbanner
$(function () {

    var swiper1 = new Swiper('.swiper_main', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        slidesPerView: 1,
        paginationClickable: true,
        loop: true, // 루프(반복)옵션 활성화시 주석해제
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        centeredSlides: true,
        spaceBetween: 0,
    });
});

// 공지사항&뉴스레터 탭 메뉴
$(function(){
    
    $('.area_top .latest_top_wr > ul > li').click(function(){
        $('.area_top .latest_top_wr > ul > li').removeClass('on');
        $(this).addClass('on');
    });
});

// footbanner
$(function () {
    var main = $('.bxslider').bxSlider({
        auto: true,	//자동으로 슬라이드 
        controls : true,	//좌우 화살표	
        autoControls: true,	//stop,play
        minSlides: 3, //최소 슬라이드 수
        maxSlides: 15,
        pager:false,	//페이징 
        autoDelay: 0,
        speed: 2000,
        slideWidth: 'auto', //이미지 박스 크기설정
        slideMargin: 20,
        stopAutoOnclick: true,
}); 
    
$(".bx-stop").click(function(){	// 중지버튼 눌렀을때 
        main.stopAuto(); 
        $(".bx-stop").hide(); 
        $(".bx-start").show(); 
        return false; 
    }); 
    
    $(".bx-start").click(function(){ //시작버튼 눌렀을때 
        main.startAuto(); 
        $(".bx-start").hide(); 
        $(".bx-stop").show(); 
        return false; 
    });

    $(".bx-start").hide()	//onload시 시작버튼 숨김. 
});