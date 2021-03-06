<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="down_area">
    <ul class="down_icon">
        <li class="icon_info">
            <h3>디지털콘텐츠<br>표준계약서(5종)</h3>
            <p>필요한 계약서를<br> 다운받으세요.</p>
        </li>
    <?php
    for ($i=count($list)-1; $i>=0; $i--) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = $img;
    ?>
        <li class="icon_item" style="cursor: pointer;">
            <div class="icon_img" style="background-image: url('<?php echo $img_content; ?>');">
                <a href="<?php echo $list[$i]['wr_link1'] ?>" target="_blank"></a>
            </div>
            <div class="icon_tit">
                <?php echo $list[$i]['subject'] ?>
            </div>
        </li>
        <?php }  ?>
        <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <li class="empty_li">게시물이 없습니다.</li>
        <?php }  ?>
    </ul>
</div>