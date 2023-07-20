<?php
    $pageName = "Product";
    $pageTitle = "Product";
    $pageBanner = "../img/banner-product.png";
    $productListPic = [
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
    ];
    $productListTitle = [
        "Sand Blast Equipment",
        "Shot Blast Equipment",
        "RICH SOU Shot Peening Equipment",
        "Engraving Machine & Grinder",
        "Sand suction equipment",
        "Blast Room",
        "Sand Blast Equipment",
        "Shot Blast Equipment",
        "Engraving Machine & Grinder",
        "Sand suction equipment",
    ];
    $productListContent = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mi nec nisl venenatis vestibulum. Maecenas et erat sit amet metus aliquam rutrum quis eget nisi. In ultricies nisi at accumsan venenatis.",
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
            <li><a href="./product.php">PRODUCT</a></li>
            <li><a class="active">Equipment</a></li>
        </ul>
        <div class="product-list">
            <div class="container">
                <div class="row">
                    <?php for ($i=0; $i < 10; $i++) { 
                    ?>
                        <div class="col-lg-6">
                            <a href="./product-list-inner.php" class="product-list_item">
                                <div class="product-list_pic"><img src="<?php echo $productListPic[$i] ?>" alt=""></div>
                                <div class="product-list_text">
                                    <h2><?php echo $productListTitle[$i] ?></h2>
                                    <p>
                                        <?php echo $productListContent[$i] ?>
                                    </p>
                                </div>
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
    