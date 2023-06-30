<?php

   include 'components/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Gold Designer - Made in Viet Nam" />
    <title>Trần Khánh Dư | Gold Designer</title>
    <link rel="icon" href="../img/logo-gold.png">
    <meta name="description" content="Tôi là một nhà phát triển website và nhà thiết kế trải nghiệm người dùng (Web Developer &amp; UX Designer). Với tôi lập trình là khoa học, thiết kế là nghệ thuật và viết lách là để nuôi dưỡng tâm hồn.">
    <meta property="og:type" content="profile">
    <meta property="og:title" content="Trần Khánh Dư | Gold Designer">
    <!-- <meta property="og:url" content="https://trankhanhdu54.github.io/trandugold/"> -->
    <meta property="og:image" content="../img/image/image/avatar.jpg">
    <meta property="og:site_name" content="Trần Khánh Dư">
    <meta property="og:description" content="Tôi là một nhà phát triển website và nhà thiết kế trải nghiệm người dùng (Web Developer &amp; UX Designer). Với tôi lập trình là khoa học, thiết kế là nghệ thuật và viết lách là để nuôi dưỡng tâm hồn.">
    <meta name="robots" content="index,follow">
    <link type="image/png" rel="icon" href="img/logo-gold.png">
    <!-- <link rel="canonical" href="https://trandugold.com/"> -->
    
    <link type="text/css" rel="stylesheet" href="assets/css/gold/reset/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/base/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/screen/large/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/screen/medium/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/screen/small/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/animate/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/component/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/hover/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/custom/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/extension/v.1.0.0.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/gold/icon/v.1.0.0.min.css">
    <script src="assets/javascripts/config/fix-vh/v.1.0.0.min.js"></script>
    
    <style>
	.text_brand {
		color: #ff5252 !important;
	}

	.border_brand {
		border-color: #ff5252!important;
	}

	.background_brand {
		background: #ff5252!important;
	}
	.stroke_brand {
		stroke : #ff5252;
	}
	[hover-select*="background_brand"]:hover  {
		background: #ff5252!important;
	}
	[hover-select*="text_brand"]:hover  {
		color: #ff5252!important;
	}
	[hover-select*="border_brand"]:hover  {
		border-color: #ff5252!important;
	}
</style>
</head>


<body id="body" class="view_width_100 view_height_100 overflow_auto ">
    <header id="Header" class="width_x100 background_profession">
        <nav id="NavBar">
    <div
        class=" background_profession z_index_9xx  position_fixed width_x100 top_0 bottom_auto noselect">
        <div style="height: 58px;" class="container display_flex content_between items_center">
            <a href="home" class="display_flex items_center text_white">
                <img loading="lazy" src="img/logo.png" alt="Trần Khánh Dư logo"
                    class="rounded_circle square_2_half" /><span class="padding_x_1 text_6">|</span><span
                    class="text_6 text_capitalize text_bolder ">Trần Khánh Dư</span></a>

            <ul class="height_x100 display_flex margin_bottom_0" medium-screen="display_none"
                style="list-style-type: none;">
                <li class="cursor_pointer height_x100  text_uppercase padding_x_3 margin_x_1 
                 border_brand ">
                    <a href="home"
                        class="text_capitalize height_x100 display_flex items_center 
                     text_bolder text_brand text_white "
                        hover-select="text_danger">Trang Chủ</a>
                </li>
                <li class="cursor_pointer height_x100  text_uppercase padding_x_3 margin_x_1 
                      ">
                    <a href="gioi-thieu"
                        class="text_capitalize height_x100 display_flex items_center
                     text_white"
                        hover-select="text_danger">Giới Thiệu</a>
                </li>
                <li component-name="dropdown-hover" class="cursor_pointer height_x100  text_uppercase padding_left_3 padding_right_1 margin_x_1 
                     ">
                    <a href="dich-vu"
                        class="text_capitalize height_x100 display_flex items_center
                     text_white"
                        hover-select="text_danger">Dịch Vụ
                        <div class="square_1_half display_inline_block margin_left_2 margin_bottom_2">
                            
		<svg fill="currentColor" viewBox="0 0 24 24" >
<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" />
</svg>
		
                        </div></a>
                    <div component-name="dropdown-menu" class="background_white padding_y_2 shadow_1"
                        style="top: 100%; right: 0px;">
                        
                        <a href="thiet-ke-website"
                            class="display_block padding_y_2 padding_x_3 text_nowrap text_bolder text_3 text_black text_capitalize"
                            hover-select="background_light text_brand">
                            Thiết Kế Website
                        </a>
                        
                        <a href="quang-cao-facebook"
                            class="display_block padding_y_2 padding_x_3 text_nowrap text_bolder text_3 text_black text_capitalize"
                            hover-select="background_light text_brand">
                            Quảng Cáo - Tiếp Thị
                        </a>
                        
                        <a href="phat-trien-web-ung-dung"
                            class="display_block padding_y_2 padding_x_3 text_nowrap text_bolder text_3 text_black text_capitalize"
                            hover-select="background_light text_brand">
                            Phát Triển Web Ứng Dụng
                        </a>
                        
                        <a href="viet-noi-dung-content"
                            class="display_block padding_y_2 padding_x_3 text_nowrap text_bolder text_3 text_black text_capitalize"
                            hover-select="background_light text_brand">
                            Xây Dựng Thương Hiệu
                        </a>
                        
                        <a href="xay-dung-thuong-hieu"
                            class="display_block padding_y_2 padding_x_3 text_nowrap text_bolder text_3 text_black text_capitalize"
                            hover-select="background_light text_brand">
                            Phát Triển Nền Tảng
                        </a>
                        
                        <a href="trai-nghiem-nguoi-dung"
                            class="display_block padding_y_2 padding_x_3 text_nowrap text_bolder text_3 text_black text_capitalize"
                            hover-select="background_light text_brand">
                            Thiết Kế UI/UX
                        </a>
                        
                    </div>
                </li>
                <li class="cursor_pointer height_x100   text_uppercase padding_x_3 margin_x_1 
                     ">
                    <a href="lien-lac"
                        class="text_capitalize height_x100 display_flex items_center
                     text_white"
                        hover-select="text_danger">Liên Lạc</a>
                </li>

            </ul>
            
            <ul class="display_none items_center height_x100 margin_0" medium-screen="display_flex">
                
                
                
                
                <li>
                    <a href="http://messenger.com/t/trandugold" target="_blank" rel="noopener"
                        class="text_white padding_x_2">
                        <span class="text_hide">nhắn tin</span>
                        <div class="display_inline_block square_2">
                            <svg fill="currentColor" viewBox="0 0 24 24" >
		<path fill="currentColor" d="M10 12.5L5.63936 15L10 9L14 11.5L18.5 9L14 15L10 12.5ZM4 22.5L4.14286 19.6984C2.19871 17.7144 1 14.9972 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C9.88735 23 7.9138 22.4044 6.2381 21.372L4 22.5ZM5.63936 18.2319V20L7.33714 19.5882C8.6919 20.4228 10.2865 20.9048 12 20.9048C16.918 20.9048 20.9048 16.918 20.9048 12C20.9048 7.08204 16.918 3.09524 12 3.09524C7.08204 3.09524 3.09524 7.08204 3.09524 12C3.09524 14.427 4.06343 16.6237 5.63936 18.2319Z" />
		</svg>
                        </div>

                    </a>
                </li>
                
                
                
                
            </ul>
            
        </div>
    </div>
</nav> 

<section id="TabBar" class="display_none background_white z_index_9xx shadow_2 position_fixed width_x100 bottom_0 noselect"
    medium-screen="display_block">
    <div class="container">
        <ul class="row margin_bottom_0 padding_0" style="height: 58px;">

            <li class="column display_flex items_center content_center text_center padding_0 border_bottom_2 
             border_brand ">
                <a href="home" class="display_block padding_y_1">

                    <div
                        class="square_2 display_inline_block text_brand ">
                        <svg fill="currentColor"  viewBox="0 0 24 24">
		<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.88867 10L11.89 3.99867L17.8913 10H17.89V20H5.89001V10H5.88867ZM3.89001 11.9987L2.4132 13.4755L1 12.0623L10.477 2.58529C11.2574 1.8049 12.5226 1.8049 13.303 2.58529L22.78 12.0623L21.3668 13.4755L19.89 11.9987V20C19.89 21.1046 18.9946 22 17.89 22H5.89001C4.78545 22 3.89001 21.1046 3.89001 20V11.9987Z" />
		</svg>
		</div>
                    <p class="align_middle margin_0 display_block text_4 text_nowrap text_bolder text_capitalize
                     text_bolder text_brand ">
                        Trang Chủ
                    </p>
                </a>
            </li>

            <li class="column display_flex items_center content_center text_center padding_0 border_bottom_2 
            border_white ">
                <a href="gioi-thieu" class="display_block padding_y_1">


                    <div
                        class="square_2 display_inline_block text_black">
                        <svg fill="currentColor" viewBox="0 0 24 24">
		<path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z" />
		</svg>
		</div>
                    <p class="align_middle margin_0 display_block text_4 text_nowrap text_bolder text_capitalize
                    text_black text_hide">
                        Giới Thiệu
                    </p>
                </a>
            </li>

            <li class="column display_flex items_center content_center text_center padding_0 border_bottom_2 
            border_white ">
                <a href="dich-vu" class="display_block padding_y_1">
                    <div
                        class="square_2 display_inline_block text_black">
                        <svg fill="currentColor"  viewBox="0 0 24 24" >
		<path fill="currentColor" d="M10.5 4.5c.28 0 .5.22.5.5v2h6v6h2c.28 0 .5.22.5.5s-.22.5-.5.5h-2v6h-2.12c-.68-1.75-2.39-3-4.38-3s-3.7 1.25-4.38 3H4v-2.12c1.75-.68 3-2.39 3-4.38 0-1.99-1.24-3.7-2.99-4.38L4 7h6V5c0-.28.22-.5.5-.5m0-2C9.12 2.5 8 3.62 8 5H4c-1.1 0-1.99.9-1.99 2v3.8h.29c1.49 0 2.7 1.21 2.7 2.7s-1.21 2.7-2.7 2.7H2V20c0 1.1.9 2 2 2h3.8v-.3c0-1.49 1.21-2.7 2.7-2.7s2.7 1.21 2.7 2.7v.3H17c1.1 0 2-.9 2-2v-4c1.38 0 2.5-1.12 2.5-2.5S20.38 11 19 11V7c0-1.1-.9-2-2-2h-4c0-1.38-1.12-2.5-2.5-2.5z"/>
		</svg>
		</div>
                    <p class="align_middle margin_0 display_block text_4 text_nowrap text_bolder text_capitalize
                    text_black text_hide">

                        Dịch Vụ

                    </p>
                </a>
            </li>

            <li class="column display_flex items_center content_center text_center padding_0 border_bottom_2 
            border_white ">
                <a href="lien-lac" class="display_block padding_y_1">
                    <div
                        class="square_2 display_inline_block text_black">
                        <svg fill="currentColor" viewBox="0 0 24 24" >
		<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M13.0962 18.2554L12 19.2126L10.9038 18.2554C6.98842 14.8366 5 11.8112 5 9C5 5.02141 8.10349 2 12 2C15.8965 2 19 5.02141 19 9C19 11.8112 17.0116 14.8366 13.0962 18.2554ZM5.68555 14.8034C6.09614 15.3656 6.55352 15.9373 7.05748 16.519C5.19525 16.9384 4 17.5337 4 18C4 18.807 7.57914 20 12 20C16.4209 20 20 18.807 20 18C20 17.5337 18.8047 16.9384 16.9425 16.519C17.4465 15.9373 17.9039 15.3656 18.3144 14.8034C20.5633 15.4858 22 16.5804 22 18C22 20.5068 17.5203 22 12 22C6.47973 22 2 20.5068 2 18C2 16.5804 3.43674 15.4858 5.68555 14.8034ZM12 4C14.8038 4 17 6.13816 17 9C17 11.047 15.3727 13.5659 12 16.556C8.62733 13.5659 7 11.047 7 9C7 6.13816 9.19624 4 12 4ZM12 6C13.6569 6 15 7.34315 15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6ZM11 9C11 8.44772 11.4477 8 12 8C12.5523 8 13 8.44772 13 9C13 9.55228 12.5523 10 12 10C11.4477 10 11 9.55228 11 9Z" />
		</svg></div>
                    <p class="align_middle margin_0 display_block text_4 text_nowrap text_bolder text_capitalize
                    text_black text_hide">

                        Liên Lạc

                    </p>
                </a>
            </li>


        </ul>
    </div>

</section>
<?php
         $select_slider = $conn->prepare("SELECT * FROM `slider` ORDER BY id DESC LIMIT 1");
         $select_slider->execute();
         if($select_slider->rowCount() > 0){
            while($fetch_slider = $select_slider->fetch(PDO::FETCH_ASSOC)){
      ?>
        <section class="position_relative padding_top_6 flex_center view_height_100">
            <div class="container mask height_x100 z_index_1">
                <div class="row padding_top_2 items_center height_x100">
                    <div class="column_6 text_white " medium-screen="column_8" small-screen="column_12">
                        <div>
                            <h1 class="text_6 text_brand text_bolder padding_bottom_2">I'm <span
                                    class="text_7 text_bold"> Gold,</span></h1>
                            <h2 class="text_3x text_bold padding_bottom_2" small-screen="text_9"
                                style="line-height: 124%;">
                                Trần Khánh Dư
                            </h2>
                            <p>Dev & Marketing</p>
                            <p class="text_5 text_normal" small-screen="text_5"><?= $fetch_slider['name']; ?></p>
                            <div class="padding_top_4">

                                <a href="https://www.facebook.com/TranDuGold" target="_blank" rel="noopener"
                                    class="padding_x_4 padding_y_3 rounded background_brand text_bolder text_white text_5">
                                    Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_fluid height_x100">
                <div class="row height_x100">
                    <div class="offset_6 column padding_0 height_x100" medium-screen="offset_0">
                        <img class="object_cover width_x100 height_x100 max_width_6x" src="slider_img/<?= $fetch_slider['image']; ?>" alt="Trần Khánh Dư">
                        <div class="mask display_none" medium-screen="display_block"
                            style="background-color: rgba(0,0,0,0.56);"></div>
                    </div>
                </div>
            </div>

        </section>

        <?php
            }
         }else{
            echo '<p class="empty">!</p>';
         }
      ?>
    </header>
    <main id="Main">

        <section class="container padding_y_5">
            <div class="row display_flex items_center">
                <div class="column_6 padding_right_6" small-screen="column_12">
                   
                    <h1 class="text_9">Skills and<br><span class="text_brand display_inline_block">Experience</span></h1>

                </div>
                <div class="column_6 padding_bottom_3" small-screen="column_12">
                    <div class="border_left_3 border_brand padding_left_3">
                        <p class="text_5">Tuổi trẻ là sự trải nghiệm, tìm tòi học hỏi. Sự nghiên cứu của bản thân là sự
                            trải nghiệm của những nền tảng sẽ cho ta cách học từ từng góc nhìn.</p>
                            <div class="border border_brand width_8 margin_top_3 margin_bottom_2"></div>
                            <p class="text_5">Nếu bạn buồn hãy ấn vào nút Play, kênh Radio Cô Đơn, của đài TP Hồ Chí Minh.</p>
                            <audio controls autoplay>   
                                <source src="http://node-12.zeno.fm/6p12ugpebkhvv?zs=VpHF0GtqTniFKWDI02uD3A&listening-from-radio-garden=1649154125&rj-ttl=5&rj-tok=AAABf_lIFzAAiDGLuxoayZ6UsA" type="audio/mpeg">
                            </audio>
                    </div>
                </div>
            </div>

            <div class="row margin_top_4">
            <?php
         $select_noidung = $conn->prepare("SELECT * FROM `noidung` ORDER BY id DESC LIMIT 6");
         $select_noidung->execute();
         if($select_noidung->rowCount() > 0){
            while($fetch_noidung = $select_noidung->fetch(PDO::FETCH_ASSOC)){
      ?>
            
            	<div class="column_4 padding_y_2" medium-screen="column_6" small-screen="column_12">
                    <div class="border padding_3" hover-select="border_brand" style="height:230px;">
                        <p class="text_5 text_brand margin_bottom_1 text_bolder">
                        <?= $fetch_noidung['nam']; ?>
                            
                        </p>
                        <p class="text_6 text_bolder"><?= $fetch_noidung['name']; ?>
                             
                            <a class="text_black" href="<?= $fetch_noidung['link']; ?>" target="_blank" rel="noopener"><?= $fetch_noidung['namelink']; ?></a> 
                            
                        </p>
                        <p><?= $fetch_noidung['text']; ?></p>
                        <div class="border border_brand width_8 margin_top_3 margin_bottom_2" style="top:56%"></div>
                    </div>
                </div>
                
                <?php
            }
         }else{
            echo '<p class="empty">!</p>';
         }
      ?> 
            </div>
        </section>


        <?php
         $select_mid = $conn->prepare("SELECT * FROM `tieude` ORDER BY id DESC LIMIT 1");
         $select_mid->execute();
         if($select_mid->rowCount() > 0){
            while($fetch_mid = $select_mid->fetch(PDO::FETCH_ASSOC)){
      ?>

        <section class="container padding_y_5">
            <div class="row display_flex items_center">
                <div class="column_5 padding_x_5" small-screen="column_12 order_last">
                    <img class="width_x100 shadow_2 rounded"
                        src="mid_img/<?= $fetch_mid['image']; ?>" alt="">
                </div>
                <div class="column_7 padding_right_6" small-screen="column_12">

                    <h2 class="text_9 text_bolder text_brand"><?= $fetch_mid['name']; ?></h2>
                    <p class="text_5">
                        <i icon-name="check" class="text_brand"></i>
                        <?= $fetch_mid['text1']; ?>
                    </p>
                    <p class="text_5">
                        <i icon-name="check" class="text_brand"></i>
                        <?= $fetch_mid['text2']; ?>
                    </p>
                    <p class="text_5">
                        <i icon-name="check" class="text_brand"></i>
                        <?= $fetch_mid['text3']; ?>
                    </p>
                </div>

            </div>
        </section>
        <?php
            }
         }else{
            echo '<p class="empty">!</p>';
         }
      ?>

        <section class="container padding_y_5">
            <div class="row display_flex items_center">
                <div class="column_6 padding_right_6" small-screen="column_12">
                    <h2 class="text_6 text_bolder text_brand">Những gì tôi làm</h2>
                    <h3 class="text_9">Giải pháp và <span class="text_brand display_inline_block">dịch vụ</span></h3>

                </div>
                <div class="column_6 padding_bottom_3" small-screen="column_12">
                    <div class="border_left_3 border_brand padding_left_3">
                        <p class="text_5">Tôi có một niềm đam mê vô tận với thiết kế và phát triển website. Cách tôi làm
                            là thiết kế, phát triển và tối ưu hóa website khi đến tay người dùng.</p>
                    </div>
                </div>
            </div>

            <div class="row margin_top_4 items_stretch">

            <?php
         $select_congviec = $conn->prepare("SELECT * FROM `congviec` ORDER BY id DESC LIMIT 6");
         $select_congviec->execute();
         if($select_congviec->rowCount() > 0){
            while($fetch_congviec = $select_congviec->fetch(PDO::FETCH_ASSOC)){
      ?>
                
                <div class="column_4 padding_y_2" medium-screen="column_6" small-screen="column_12">
                    <div class="padding_3 height_x100" hover-select="shadow_2">

                        <p class="text_6 text_bolder"><?= $fetch_congviec['name']; ?> </p>
                        <p><?= $fetch_congviec['text']; ?></p>
                        <div class="border border_brand width_8 margin_top_3 margin_bottom_2" style="top:56%"></div>
                    </div>
                </div>
                
                <?php
            }
         }else{
            echo '<p class="empty">!</p>';
         }
      ?>
                
            </div>
        </section>


        <?php
         $select_chamngon = $conn->prepare("SELECT * FROM `chamngon` ORDER BY id DESC LIMIT 1");
         $select_chamngon->execute();
         if($select_chamngon->rowCount() > 0){
            while($fetch_chamngon = $select_chamngon->fetch(PDO::FETCH_ASSOC)){
      ?>
        <section class="container_fluid padding_0 margin_0 background_profession">
            <div class="row display_flex items_center padding_0 margin_0">
                <div class="column padding_x_8 text_white padding_y_5" medium-screen="padding_x_6"
                    small-screen="padding_x_5">

                    <p class=" text_1x text_bolder" medium-screen="text_8" style="line-height: 124%;">" <?= $fetch_chamngon['name']; ?> "</p>
                    <p class="margin_bottom_1 text_6 text_bolder">Trần Khánh Dư</p>
                    <p class="text_5">Dev & Marketing, <a href="https://www.facebook.com/TranDuGold/" target="_brank" rel="noopener"
                            class="text_brand text_bolder">Gold Designer</a></p>
                </div>
                <div class="column_3 padding_x_0" medium-screen="column_4" small-screen="display_none">
                    <img class="width_x100" src="mid_img/<?= $fetch_chamngon['image']; ?>" alt="">
                    <div class="mask flex_center" style="background-color: rgba(0,0 , 0, 0.12  );">
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
         }else{
            echo '<p class="empty">!</p>';
         }
      ?>
        
        

        <?php
         $select_sanpham = $conn->prepare("SELECT * FROM `sanpham` ORDER BY id DESC LIMIT 3");
         $select_sanpham->execute();
         if($select_sanpham->rowCount() > 0){
            while($fetch_sanpham = $select_sanpham->fetch(PDO::FETCH_ASSOC)){
      ?>
        <section class="container padding_y_5">
            <div class="row display_flex items_center">
                <div class="column_6 padding_x_5" small-screen="column_12">
                    <img class="width_x100 "
                        src="mid_img/<?= $fetch_sanpham['image']; ?>" alt="">
                </div>
                <div class="column padding_y_3 padding_right_6" small-screen="column_12">
                    
                    <h2 class="text_brand"><?= $fetch_sanpham['name']; ?></h2>
                    <p class="text_5">
                        <i icon-name="check" class="text_brand"></i>
                        <?= $fetch_sanpham['text1']; ?>
                    </p>
                    <p class="text_5">
                        <i icon-name="check" class="text_brand"></i>
                        <?= $fetch_sanpham['text2']; ?>
                    </p>
                    <p class="text_5">
                        <i icon-name="check" class="text_brand"></i>
                        <?= $fetch_sanpham['text3']; ?>
                    </p>
                </div>

            </div>
            </div>
            <div class="border border_brand" style="top:50%"></div>
        
        </section>
        <?php
            }
         }else{
            echo '<p class="empty">!</p>';
         }
      ?>


      

    
    </main>

    
    <?php include 'footer.php'; ?>
    
</footer>
</body>


<!-- Mirrored from mrsong.dev/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 16:58:14 GMT -->
</html>
