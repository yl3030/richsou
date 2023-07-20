<?php
    $pageName = "Product";
    $pageTitle = "Product";
    $pageBanner = "../img/banner-product.png";
    $productClassPic = [
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
    ];
    $productClassTitle = [
        "Equipment",
        "Abrasives",
        "Spare partsg",
        "Used machines",
    ];
    $productClassContent = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
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
            <li><a class="active">PRODUCT</a></li>
        </ul>
        <div class="product-class mb-footer">
            <div class="container">
                <?php for ($i=0; $i < 4; $i++) { 
                ?>
                    <div class="product-class_item">
                        <div class="product-class_pic">
                            <div class="product-class_pic_inner"><img src="<?php echo $productClassPic[$i] ?>" alt=""></div>
                        </div>
                        <div class="product-class_text">
                            <h2><?php echo $productClassTitle[$i] ?></h2>
                            <p>
                                <?php echo $productClassContent[$i] ?>
                            </p>
                            <a href="./product-list.php" class="product-class_more">
                                <img class="product-class_more_arrow" src="../img/btn-hover.svg" alt="">
                                <span>MORE</span>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>
</body>
</html>
    