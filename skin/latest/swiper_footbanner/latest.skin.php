<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 350;
$thumb_height = 120;
?>
<div class="ftb_area">
    <div class="layout">
        <ul class="bxslider">
        <?php
        for ($i=count($list)-1; $i>=0; $i--) {
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

            <li class="list_it">
                <a href="<?php echo $list[$i]['wr_link1'] ?>" target="_blank" title="<?php echo $list[$i]['subject'] ?>"> 
                <img src="<?php echo $img_content; ?>" alt="<?php echo $list[$i]['wr_content'] ?>">
                </a>
            </li>

        <?php }  ?>
        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
            <li class="list_it">등록된 게시물이 없습니다.</li>
        <?php }  ?>
        </ul>
    </div>
</div>