<?php
    $pageName = "Media";
    $pageTitle = "News";
    $pageBanner = "../img/banner-news.png";
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
            <li><a href="./news.php">NEWS</a></li>
            <li><a class="active">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet</a></li>
        </ul>
        <div class="news-detail mb-footer">
            <div class="news-detail_head">
                <div class="news-detail_pic-box">
                    <img class="news-detail_pic" src="../img/pic1.png" alt="">
                    <img class="news-detail_pic_mask" src="../img/news-mask-m.svg" alt="">
                </div>
                <div class="news-detail_title">
                    <h2>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit </h2>
                    <p class="news-detail_date">2023/02/10</p>
                    <div class="detail-page news-detail_page justify-content-end">
                        <a href="" class="detail-page_prev">PREV</a>
                        <a href="" class="detail-page_next">NEXT</a>
                    </div>
                </div>
            </div>
            <div class="news-detail_content">
                <p>
                    Vivamus efficitur viverra ex. Donec ac risus enim. Phasellus vel sapien elit. Curabitur pretium magna ac dui ultricies, quis faucibus sapien varius. Pellentesque accumsan velit vitae pretium venenatis. In elit metus, ornare sed eros a, bibendum consectetur sem. Donec lobortis interdum tristique. Sed sodales leo et consequat facilisis. Praesent pharetra risus et volutpat mollis. Aenean vitae lacus non eros volutpat mattis.
                    Nullam a nisi lectus. Ut mattis justo eget aliquet ultrices. Morbi semper odio nunc, et efficitur ligula varius ut. Nunc finibus turpis ut massa lacinia, non ullamcorper nisl rutrum. Morbi tristique lectus libero, sed convallis sapien faucibus ut. Sed lobortis lectus vitae tincidunt sodales. Vestibulum ornare mattis risus, in tincidunt arcu mollis in. Fusce pulvinar eu urna sed fermentum.
                    Sed ac malesuada elit. Sed tempor quam sit amet diam aliquam consequat. Cras at augue nisi. Aenean mauris ligula, tempor et pharetra placerat, fringilla sit amet ipsum. Nam non nunc sed magna volutpat congue. Pellentesque ornare porttitor metus vitae pharetra. Integer in dui id ipsum congue tempor non quis lorem. Quisque eleifend mi blandit tellus lobortis vestibulum. Donec blandit, ligula eu auctor accumsan, lectus dolor laoreet felis, non accumsan nulla quam ut elit. Integer tempus odio sed libero aliquet, ac iaculis metus luctus. In consequat purus vel ipsum auctor rutrum.
                </p>
            </div>
        </div>
        
    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>
</body>
</html>
    