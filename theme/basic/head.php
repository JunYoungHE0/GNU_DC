<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<header id="hd">
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div id="hd_wrapper">
        <div class="hd_loginbar">
            <ul class="hd_login">    
                <?php if ($is_member) {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <?php }  ?>
            </ul>
        </div>   
    </div>
    <nav id="gnb">
        <h1 id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/DC_center_logo.svg" alt="DC상생협력지원센터로고"></a>
        </h1>
        <h2>메인메뉴</h2>
        <div class="gnb_wrap">
                <ul id="gnb_1dul">
                    <li class="gnb_1dli gnb_mnal"><button type="button" class="gnb_menu_btn" title="전체메뉴"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button></li>
                    <?php
				    $menu_datas = get_menu_db(0, true);
				    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                    ?>
                    <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){

                            if( empty($row2) ) continue; 

                            if($k == 0)
                            echo '<span class="bg">하위분류</span><ul class="gnb_2dul_box">'.PHP_EOL;
                        ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
            <div class="gnbbg"></div>
            <div id="gnb_all">
            <h2>전체메뉴</h2>
                <ul class="gnb_al_ul">
                    <?php
                    
                    $i = 0;
                    foreach( $menu_datas as $row ){
                    ?>
                    <li class="gnb_al_li">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){
                            if($k == 0)
                                echo '<ul>'.PHP_EOL;
                        ?>
                            <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
        </div>
    </nav>
    


    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
        });
        $('#gnb_1dul > li').mouseover(function(){
            $('.gnb_2dul_box' ).stop().slideDown();            
        });
        $('#gnb_1dul > li').mouseleave(function(){
            $('.gnb_2dul_box' ).stop().slideUp();
        });
        // $('#gnb .gnb_al_li_plus').hover(function(){
        //    $('#hd').addClass('over');
        // }, function(){
        //    $('#hd').removeClass('over');
        // });
    });

    </script>
    
</header>
<!-- } 상단 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <?php if (!defined("_INDEX_")) { ?>
    <div id="locationbar">
        <div class="breadcrumb">
        <ul>
        <?php
        $url = $_SERVER['SCRIPT_NAME']."?".$_SERVER['QUERY_STRING'];
        $sql = " select * from {$g5['menu_table']} where length(me_code) = '4' and me_link like '%".$url."%' and me_use = '1' order by me_order, me_id ";
        $result = mb_substr(sql_fetch_array(sql_query($sql, false))['me_code'],0 ,2);
        $sql = " select * from {$g5['menu_table']} where me_code like '{$result}%' and me_use = '1' order by me_order, me_code ";
        $query = sql_query($sql, false);
        $num = sql_num_rows($query);
        for($i=0; $i < $num;$i++) {
            $list[$i] = sql_fetch_array($query);
        }
        // 메뉴 자체가 있을 경우
        if ($result > 0) {
        ?>
        <li>HOME</li>
        <?php for($i=0;$i<count($list);$i++) { $class = "class=\"d-none\""; if(strpos($list[$i]['me_link'], $url) !== false) $class = " class=\"active\"";
            if ($i == 0) { ?>
        <!-- 첫번째 상단 상위 메뉴 이름 출력 -->
        <li><?php echo $list[$i]['me_name']?></li>
        <?php } else { ?>
        <!-- 하위 서브 메뉴 출력 -->
        <li <?php echo $class?>><?php echo $list[$i]['me_name']?></li>
        <?php }
        }  echo "</ul>".PHP_EOL; echo "</li>".PHP_EOL; ?>
        <?php } else { ?>
        <li><?php echo get_head_title($g5['title']); ?></li>
        <?php } ?>
        </ul>
        </div>
    </div>
    <div id="container_wr_page">
        <?php
            $url = $_SERVER['SCRIPT_NAME']."?".$_SERVER['QUERY_STRING'];
            $sql = " select * from {$g5['menu_table']} where length(me_code) = '4' and me_link like '%".$url."%' and me_use = '1' order by me_order, me_id ";
            $result = mb_substr(sql_fetch_array(sql_query($sql, false))['me_code'],0 ,2);
            $sql = " select * from {$g5['menu_table']} where me_code like '{$result}%' and me_use = '1' order by me_order, me_code ";
            $query = sql_query($sql, false);
            $num = sql_num_rows($query);
            for($i=0; $i < $num;$i++) {
                $list[$i] = sql_fetch_array($query);
            }
            // 메뉴 자체가 있을 경우
            if ($result > 0) {
            ?>
            <ul class="subnb">
            <?php for($i=0;$i<count($list);$i++) { $class = ""; if(strpos($list[$i]['me_link'], $url) !== false) $class = " class=\"active\"";
            if ($i == 0) { ?>
            <!-- 첫번째 상단 상위 메뉴 이름 출력 -->
                <li class="high_menu"><h3><?php echo $list[$i]['me_name']?></h3></li>
            <?php } else { ?>
            <!-- 하위 서브 메뉴 출력 -->
                <li class="sub_menu"><a href="<?php echo $list[$i]['me_link']?>" target="_<?php echo $list[$i]['me_target']?>" <?php echo $class?>><?php echo $list[$i]['me_name']?></a></li>
            <?php }
            }  echo "</ul>".PHP_EOL; ?>
            </ul>
            <?php } else { ?>
            <ul></ul>
        <?php } ?>
        <div id="container">
            <h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2>
            <?php }