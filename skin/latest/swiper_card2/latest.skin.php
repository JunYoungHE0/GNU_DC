<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css?ver=<?php echo time(); ?>">', 0);
$thumb_width = 350;
$thumb_height = 120;
?>


<div class="swiper-container swiper_1">
    <h2 class="lat_title"><?php echo $bo_subject ?></h2>
    <p class="sub1">필요한 계약서를 클릭하여 다운로드하세요.</p>
    <div class="swiper-wrapper">

        <?php
        for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

        if($thumb['src']) {
            $img = $thumb['ori'];
        } else {
            $img = $latest_skin_url.'/img/noimg.png';
            $thumb['alt'] = '등록된 이미지가 없습니다.';
        }
        //$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
        $img_content = $img;
        ?>

        <div class="swiper-slide" onclick="location.href='<?php echo $list[$i]['wr_link1'] ?>';" style="cursor: pointer;">
            <div class="sw_img" style="background-image: url('<?php echo $img_content; ?>');">
            </div>
            <div class="sw_tit">
                <?php echo $list[$i]['wr_content'] ?>
            </div>                         
        </div>

        <?php }  ?>
        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
        <div class="swiper-slide">
            <div class="sw_sub">
                등록된 게시물이 없습니다.
            </div>
        </div>
        <?php }  ?>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
    <!-- 더보기 아이콘 -->
    <!-- <a href="/project_1/bbs/board.php?bo_table=contract" class="lt_more"><span class="sound_only">DC 표준계약서 게시판</span>더보기</a> -->
</div>

<!-- <script>
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        slidesPerView: 3,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true, // 루프(반복)옵션 활성화시 주석해제
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
        centeredSlides: true,
        spaceBetween: 6,
    });
</script> -->