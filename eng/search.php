<?php 
    $pageName = "Search";
    $pageTitle = "Search";
    $pageBanner = "../img/banner-product.png";
    $productListInnerPic = [
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
    ];
    $productListInnerTitle = [
        "TSA-100",
        "TSA-109",
        "TSA-110",
        "TSA-117",
        "TSA-127",
        "TSA-130",
        "TSA-133",
        "TSA-135",
        "TSA-139",
    ];
    $productListInnerClass = [
        "Sand Blasting Machine",
        "High Pressure Sand Blasting Machine",
        "Standard Blasting Machine",
        "TSA-117 Cyclone Blasting Machine",
        "Tumble Type Sand Blasting Machine",
        "Wet Type Sand Blasting Machine",
        "Automatic Sand Blasting Machine for Aluminum Mole",
        "Rotary Indexing Type Blasting Machine",
        "Conveyer Type Sand Blasting Machine (Standard Type)",
    ];
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include("../include/meta.php") ?>
</head>
<body>
    <?php include("./header.php") ?>

    <main>
        <?php include("../include/banner.php") ?>

        <ul class="breadcrumb-common container">
            <li><a href="./index.php">HOME</a></li>
            <li><a class="active">Search</a></li>
        </ul>

        <div class="product-listInner mb-footer">
            <div class="container">
                <div class="row">
                    <?php for ($i=0; $i < 9; $i++) { 
                    ?>
                        <div class="col-lg-4 col-6">
                            <div class="product-listInner_item">
                                <a href="./product-detail.php">
                                    <div class="product-listInner_pic"><img src="<?php echo $productListInnerPic[$i] ?>" alt=""></div>
                                    <h2 class="product-listInner_title"><?php echo $productListInnerTitle[$i] ?></h2>
                                    <p class="product-listInner_class"><?php echo $productListInnerClass[$i] ?></p>
                                </a>
                                <button class="add-inquiry">
                                    <svg class="d-sm-block d-none" width="158" height="33" viewBox="0 0 158 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5755 0H79.5472V33H13.5755L0.5 16.5L13.5755 0Z" fill="#022257"/>
                                        <path d="M144.925 0H78.9528V33H144.925L158 16.5L144.925 0Z" fill="#022257"/>
                                    </svg>
                                    <svg class="d-sm-none" width="158" height="55" viewBox="0 0 158 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.0755 0H79.0472V55H13.0755L0 27.5L13.0755 0Z" fill="#022257"/>
                                        <path d="M144.425 0H78.4528V55H144.425L157.5 27.5L144.425 0Z" fill="#022257"/>
                                    </svg>
                                    <span>Add to <br class="d-sm-none">Inquiry</span>
                                </button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>


</body>
</html>