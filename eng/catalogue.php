<?php
    $pageName = "Media";
    $pageTitle = "Catalogue";
    $pageBanner = "../img/banner-news.png";
    $cataloguePic = [
        "../img/pic3.png",
        "../img/pic4.png",
        "../img/pic5.png",
        "../img/pic6.png",
        "../img/pic3.png",
        "../img/pic4.png",
        "../img/pic5.png",
        "../img/pic6.png",
    ];
    $catalogueTitle = [
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor sit",
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../include/meta.php") ?>
</head>
<body>
    <?php include("./header.php") ?>

    <main class="main">
        <?php include("../include/banner.php") ?>
        <ul class="breadcrumb-common container">
            <li><a href="./index.php">HOME</a></li>
            <li><a>MEDIA</a></li>
            <li><a class="active">CATALOGUE</a></li>
        </ul>
        <div class="container">
            <div class="tabBox">
                <div class="tab-common-active d-sm-none d-flex align-items-center">
                    <p>CATALOGUE</p>
                    <img src="../img/arrow-blue-bottom.svg" alt="">
                </div>
                <ul class="nav nav-pills tab-common">
                    <li class="nav-item" role="presentation">
                        <a href="./news.php" class="nav-link">NEWS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="" class="nav-link">EXHIBITIONS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="./catalogue.php" class="nav-link active">CATALOGUE</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="./video.php" class="nav-link">VIDEO</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-footer">
            <div class="container">
                <div class="catalogue">
                    <div class="swiper-container catalogue_swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i=0; $i < 6; $i++) { 
                            ?>
                                <div class="swiper-slide">
                                    <div class="catalogue_swiper_pic">
                                        <img src="<?php echo $cataloguePic[$i] ?>" alt="">
                                    </div>
                                    <div class="catalogue_swiper_text">
                                        <h2><?php echo $catalogueTitle[$i] ?></h2>
                                        <a class="btn-download" download href="">
                                            <svg width="158" height="33" viewBox="0 0 158 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5755 0H79.5472V33H13.5755L0.5 16.5L13.5755 0Z" fill="#022257"/>
                                                <path d="M144.925 0H78.9528V33H144.925L158 16.5L144.925 0Z" fill="#022257"/>
                                            </svg>
                                            <div class="btn-download_text d-flex align-items-center justify-content-center">
                                                <img src="../img/icon_download.svg" alt="">
                                                <span>Download PDF</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>     
                    </div>
                    <div class="catalogue_swiper-small">
                        <div class="catalogue_swiper_arrow justify-content-md-start justify-content-end">
                            <div class="catalogue_swiper_arrow-prev catalogue_swiper_arrow_item">
                                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 2L1 8L7 14" stroke="#0E6FC8" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="catalogue_swiper_arrow_line"></div>
                            <div class="catalogue_swiper_arrow-next catalogue_swiper_arrow_item">
                                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L8 8L2 14" stroke="#0E6FC8" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-container catalogue_swiperThumb">
                            <div class="swiper-wrapper">
                                <?php for ($i=0; $i < 6; $i++) { 
                                ?>
                                    <div class="swiper-slide">
                                        <div class="catalogue_swiperThumb_pic">
                                            <img src="<?php echo $cataloguePic[$i] ?>" alt="">
                                            <div class="catalogue_swiperThumb_mask"></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
         var swiperSmall = new Swiper(".catalogue_swiperThumb", {
            slidesPerView: 5,
            spaceBetween: 15,
            loop: true,
            speed: 800,
            watchSlidesProgress: true,
        })

        var swiperBig = new Swiper(".catalogue_swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".catalogue_swiper_arrow-next",
                prevEl: ".catalogue_swiper_arrow-prev",
            },
            speed: 800,
            thumbs: {
                swiper: swiperSmall,
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
        });

       
    </script>

</body>
</html>
    