<?php
    $pageName = "Media";
    $pageTitle = "News";
    $pageBanner = "../img/banner-news.png";
    $newsPic = [
        "../img/pic1.png",
        "../img/pic2.png",
        "../img/pic1.png",
        "../img/pic2.png",
        "../img/pic1.png",
        "../img/pic2.png",
        "../img/pic1.png",
        "../img/pic2.png",
        "../img/pic1.png",
    ];
    $newsTitle = [
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet",
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
            <li><a class="active">NEWS</a></li>
        </ul>
        <div class="container">
            <div class="tabBox">
                <div class="tab-common-active d-sm-none d-flex align-items-center">
                    <p>NEWS</p>
                    <img src="../img/arrow-blue-bottom.svg" alt="">
                </div>
                <ul class="nav nav-pills tab-common">
                    <li class="nav-item" role="presentation">
                        <a href="./news.php" class="nav-link active">NEWS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="" class="nav-link">EXHIBITIONS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="./catalogue.php" class="nav-link">CATALOGUE</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="./video.php" class="nav-link">VIDEO</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="news-list">
            <div class="container">
                <div class="row">
                    <?php for ($i=0; $i < 9; $i++) { 
                    ?>
                        <div class="col-lg-4 col-6">
                            <a href="./news-detail.php" class="news-list_item">
                                <div class="news-list_pic">
                                    <img src="<?php echo $newsPic[$i] ?>" alt="">
                                    <div class="news-list_date">
                                        <p class="day">10</p>
                                        <p class="month">2023/02</p>
                                    </div>
                                </div>
                                <h3><?php echo $newsTitle[$i] ?></h3>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php include("../include/pagination.php") ?>
        
    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>
</body>
</html>
    