<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
    
    </div>
</div>
<script src="/project_1/js/hjycustomizing.js"></script>
<!-- } 콘텐츠 끝 -->


<!-- 하단 시작 { -->
<!-- 허준영 수정 -->
<div id="ft">
    <div id="ft_wr" class="ft_top">
        <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'not_mail'); ?>">이메일무단수집거부</a>
            <a href="<?php echo get_pretty_url('content', 'directions'); ?>">찾아오시는길</a>
            <!-- <a href="<?php echo get_device_change_url(); ?>">모바일버전</a> -->
        </div>
        <!-- <div id="ft_company" class="ft_cnt2">
	        <span>디지털콘텐츠상생협력지원센터</span>
            <span><em>주소</em>서울시 강남구 압구정로 36길 신구빌딩 4층</span>
	    </div> -->
        <div class="ft_cnt2">
        <?php
        echo latest('footer', 'footer', 1, 0);
        ?>
        </div>
	</div>
    <div class="ft_bottom">
        <!-- <div id="ft_copy">
            Copyright &copy; <b>이 사이트는 DC센터와 무관하며 허준영의 포트폴리오 작품입니다.</b> All rights reserved.
        </div> -->
        <?php
        echo latest('copyright', 'copyright', 1, 0);
        ?>
    </div>
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {

        $("#top_btn").hide();
        $(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop()>200) { //스크롤 내릴 높이
                    $('#top_btn').fadeIn();                    
                } else {
                    $('#top_btn').fadeOut();
                }
            });

            $("#top_btn").click(function() {
                $("html, body").animate({
                    scrollTop:0
                }, '500'); //탑 이동 스크롤 속도
                return false;
            });
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");