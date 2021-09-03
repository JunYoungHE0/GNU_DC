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
	        echo latest('swiper_footbanner', 'footbanner', 15,0);
            ?>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');

