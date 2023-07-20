<?php
    $pageName = "Media";
    $pageTitle = "Video";
    $pageBanner = "../img/banner-news.png";
    $videoLink = [
        "https://www.youtube.com/watch?v=G-2mW_8_PJo&ab_channel=TaiwanExcellence%E5%8F%B0%E7%81%A3%E7%B2%BE%E5%93%81",
        "https://www.youtube.com/watch?v=44yWrudMdz4&ab_channel=TaiwanExcellence%E5%8F%B0%E7%81%A3%E7%B2%BE%E5%93%81",
        "https://www.youtube.com/watch?v=Xk8OrKcSyV4&ab_channel=TaiwanExcellence%E5%8F%B0%E7%81%A3%E7%B2%BE%E5%93%81",
        "https://www.youtube.com/watch?v=JGR1h2xYHh8&t=10s&ab_channel=TaiwanExcellence%E5%8F%B0%E7%81%A3%E7%B2%BE%E5%93%81",
        "https://www.youtube.com/watch?v=QOy_9-qA0Xg&ab_channel=TaiwanExcellence%E5%8F%B0%E7%81%A3%E7%B2%BE%E5%93%81"

    ];
    $videoCode = [
        "G-2mW_8_PJo",
        "wolAyGNhW_s",
        "alahnGW9gTw",
        "24k-88HZRr0",
        "JGR1h2xYHh8",
    ];
    $videoTitle = [
        "Rich Sou: Shot Blasting Technology | Taiwan Excellence台灣精品",
        "Award-Winning Products highlighted at the 'Taiwan Excellence Pop-up Store in Thailand'(24/06/2023)",
        "Taiwan Excellence “Empowering Smart Manufacturing” Product Launch",
        "第32屆台灣精品選拔說明會企業分享-所羅門（股）公司",
        "第32屆台灣精品選拔說明會-選拔須知、報名系統、填寫技巧",
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
            <li><a class="active">VIDEO</a></li>
        </ul>
        <div class="container">
            <div class="tabBox">
                <div class="tab-common-active d-sm-none d-flex align-items-center">
                    <p>VIDEO</p>
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
                        <a href="./catalogue.php" class="nav-link">CATALOGUE</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="./video.php" class="nav-link active">VIDEO</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="video mb-footer">
            <div class="swiper-container video_swiper">
                <div class="swiper-wrapper align-items-center">
                    <?php for ($i=0; $i  < 5; $i++) { 
                    ?>
                        <div class="swiper-slide">
                            <div class="video_swiper_item">
                                <div class="video_swiper_pic">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $videoCode[$i] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    <div class="video_swiper_pic_mask"></div>
                                    <a href="<?php echo $videoLink[$i] ?>" target="_blank" class="video_swiper_icon"><img src="../img/icon_video.svg" alt=""></a>
                                </div>
                                <h2 class="video_swiper_title"><?php echo $videoTitle[$i] ?></h2>
                            </div>
                        </div>
                    <?php } ?>
                </div>    
                <div class="video_swiper_arrow">
                    <div class="video_swiper_prev">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 2L1 8L7 14" stroke="#0E6FC8" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="video_swiper_next">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 2L8 8L2 14" stroke="#0E6FC8" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
         var swiper = new Swiper(".video_swiper", {
            slidesPerView: 1,
            spaceBetween: 35,
            loop: true,
            speed: 800,
            centeredSlides: true,
            navigation: {
                nextEl: ".video_swiper_next",
                prevEl: ".video_swiper_prev",
            },
            breakpoints: {
                991: {
                    slidesPerView: 2,
                },
            }
        })

       
    </script>

</body>
</html>
    