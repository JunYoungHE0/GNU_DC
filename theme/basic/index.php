<?php
include_once(G5_LIB_PATH.'/mwb.lib.php');
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>  
<!-- 허준영 팝업 추가-->
<div id="hjy_pop">
    <div id="hjy_pops_head">
        <p>DC상생협력지원센터 홈페이지 리뉴얼_by 허준영</p>
    </div>
    <div class="hjy_pops_con">
        <div class="d-flex">
            <div class="con_left">
                <dl class="workinfo1">
                    <dt class="d1">💡<b>&nbsp;제작배경</b></dt>
                    <dd class="d2">이전 직장에서 운영·관리하던 홈페이지를<br> 관리자는 쉽게 관리하고, 사용자에게는 더욱 편리한<br>페이지로 바꿔보고자 제작해보았습니다.
                    </dd>
                </dl>
                <dl class="workinfo1">
                    <dt class="d1">💡<b>&nbsp;제작목표</b></dt>   
                    <dd class="d2">- 손쉬운 관리 및 유지보수비용 ZERO!</dd>
                    <dd class="d2">- 사용자 편의성, 가시성 UP!</dd>
                </dl>
                <dl class="workinfo1">
                    <dt class="d1">💡<b>&nbsp;제작내용</b></dt>
                    <dd class="d2">- 그누보드5 기본(basic) 테마로 제작</dd>
                    <dd class="d2">- 메인 90%이상 최근게시 스킨 활용·개조하여 제작</dd>
                    <dd class="d2">- 관리자페이지를 통해 관리자가 콘텐츠 수정 가능</dd>
                    <dd class="d2">- SEO 최적화</dd>
                    <dd class="d2">- 반응형 제작(최소 모바일 사이즈 width: 375px)</dd>
                </dl>
                <ul class="workinfo2">
                    <li class="d1"><i class="xi-calendar xi-x"></i><b>&nbsp;작업기간</b>&nbsp;&nbsp;3주</li>
                    <li class="d1"><i class="xi-percent xi-x"></i><b>&nbsp;참여도</b>&nbsp;&nbsp;100%</li>
                </ul>
            </div>
            <div class="con_right">
                <div class="con_right_1">
                    <p class="d1">💡<b>&nbsp;최근 게시글 스킨 활용·개조(주요)</b></p>
                    <dl class="workinfo1">
                        <dt><b>메인슬라이드배너</b><dt>
                        <dd class="d2">/skin/latest/swiper_mainbanner/latest.skin.php</dd>
                        <dt><b>바로가기 메뉴</b><dt>
                        <dd class="d2">/skin/latest/pic_block_quickbar/latest.skin.php</dd>
                        <dt><b>계약서 다운로드</b><dt>
                        <dd class="d2">/skin/latest/pic_block_down/latest.skin.php</dd>
                    </dl>
                </div>
                <div class="con_right_2">
                    <p class="d1">💡<b>&nbsp;Customizing</b></p>
                    <dl class="workinfo1">
                        <dt><b>CSS</b></dt>   
                        <dd class="d2">/theme/css/hjy.css</dd>
                        <dt><b>JS</b></dt>   
                        <dd class="d2">/js/hjycustomizing.js</dd>
                    </dl>
                    <ul class="workinfo2">
                        <li class="d1"><i class="xi-php xi-x"></i><b>&nbsp;DB</b>&nbsp;&nbsp;phpMyAdmin-4.0.10.20 사용</li>
                        <li class="d1"><i class="xi-php xi-x"></i><b>&nbsp;DB경로</b>&nbsp;&nbsp;special59.cafe24.com/myadmin</li>
                        <li class="d1"><i class="xi-php xi-x"></i><b>&nbsp;DB접두어</b>&nbsp;&nbsp;project1_</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="con_bottom">
            <ul class="workinfo3 d-flex">
                <li class="d1"><a href="https://drive.google.com/file/d/1aVucXJDU73Z6hfsRnRGGiCUnoACaSn1r/view?usp=sharing" target="_blank">스토리보드</a></li>
                <li class="d1"><a href="https://youtu.be/J2XGuz0tHrg" target="_blank">XD 프로토타입</a></li>
                <li class="d1"><a href="https://drive.google.com/file/d/1o43wH4VIZhUWnAxY07oJhjZYS11pxC7V/view?usp=sharing" target="_blank">관리자 매뉴얼</a></li>
                <li class="d1"><a href="//github.com/JunYoungHE0/GNU_DC"  target="_blank">GitHub</a></li>
            </ul>
        </div>
        <button class="close_btn">
            <i class="xi-close"></i>
        </button>
    </div>
</div>
<div id="popbg"></div>
    <div id="mainbanner">
    <?php echo mwb_latest_multi('swiper_mainbanner', "mainbanner", 5, 0, $order='', $view_notice='', $view_secret='out', $search_opt=''); ?>
    <!-- >?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	echo latest('swiper_mainbanner', 'mainbanner', 6,0);  //메인배너관리 게시판
    ?> -->
    </div>

    <!-- 메인 배너 하단 빠른메뉴 아이콘바 -->
    <div id="quickbar">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo mwb_latest_multi('pic_block_quickbar', 'quickbar', 4, 0, $order='', $view_notice='', $view_secret='out', $search_opt='');
    ?>
    </div>

    
<!-- index 콘텐츠 부분 -->
    <div id="container_wr" class="container">
        <div class="index_content">
            <!-- 첫 콘텐츠 -->
            <div class="area_top">
            <!-- 공지사항 -->
                <div class="latest_top_wr">
                    <h2 class="sound_only">공지사항 및 뉴스레터 최신글 탭</h2>
                    <ul>
                    <?php
                    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                    echo mwb_latest_multi('pic_list_notice', 'notice', 5, 50, $order='', $view_notice='', $view_secret='out', $search_opt='');
                    ?>
                    <?php
                    echo mwb_latest_multi('pic_list_newsletter', 'newsletter', 5, 23, $order='', $view_notice='', $view_secret='out', $search_opt='');
                    ?>
                    </ul>
                </div>
                <!-- 표준계약서 다운로드 아이콘 부분 -->
                <div id="contract">
                    <div class="contractdown">
                        <h2 class="sound_only">DC 표준계약서 다운링크</h2>
                        <?php
                        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                        echo latest('pic_block_down', 'contract_down', 5, 23);
                        ?>
                    </div>
                </div>
            </div>
            <!-- 두번째 콘텐츠 -->
            <div class="area_bottom">
                <div class="latest_wr">
                <!-- 활동사진 최신글 -->
                <?php
                // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                echo mwb_latest_multi('pic_block_activity', 'gallery', 4, 23, $order='', $view_notice='', $view_secret='out', $search_opt='');
                ?>
                <!-- 활동사진 최신글 끝 -->
                </div>
                <div class="guide">
                    <div class="sns">
                    <!-- SNS 채널 -->
                    <?php
                    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                    echo latest('pic_block_sns', 'sns_channel', 3, 0);
                    ?>
                    <!-- SNS 채널 끝 -->
                    </div>
                    <div class="enquiry">
                    <?php
                    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                    echo latest('pic_block_info', 'enquiry', 1, 0);
                    ?>
                    </div>
                </div>
            </div>
            <!-- 메인 하단 로고배너 -->
            <div id="footbanner">
            <?php
	         echo mwb_latest_multi('bxslider_footbanner', 'footbanner', 15,0, $order='', $view_notice='', $view_secret='out', $search_opt='');
            ?>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');

