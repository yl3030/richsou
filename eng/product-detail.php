<?php
    $pageName = "Product";
    $pageTitle = "Product";
    $pageBanner = "../img/banner-product.png";
    $productDetailPic = [
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
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
            <li><a href="./product-list.php">Equipment</a></li>
            <li><a href="./product-list-inner.php">Sand Blast Equipment</a></li>
            <li><a class="active">TSA-111</a></li>
        </ul>
        <div class="product-detail">
            <div class="product-detail_main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="product-detail_pic d-flex">
                                <div class="swiper-container product-detail_swiper">
                                    <div class="swiper-wrapper">
                                        <?php for ($i=0; $i < 5; $i++) { 
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="product-detail_swiper_item"><img src="<?php echo $productDetailPic[$i] ?>" alt=""></div>
                                            </div>
                                        <?php } ?>
                                    </div>     
                                </div>
                                <div class="product-detail_swiper_btn">
                                    <div class="product-detail_swiper_pagination"></div>
                                    <div class="product-detail_swiper_arrow">
                                        <div class="product-detail_swiper_arrow-next product-detail_swiper_arrow_item">
                                            <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 7L8 1L2 7" stroke="#0E6FC8" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="product-detail_swiper_arrow_line"></div>
                                        <div class="product-detail_swiper_arrow-prev product-detail_swiper_arrow_item">
                                            <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 2L8 8L2 2" stroke="#0E6FC8" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-detail_text">
                                <div class="product-detail_title d-flex justify-content-between align-items-center">
                                    <h2>TSA-111</h2>
                                    <div class="product-detail_class">Equipment</div>
                                </div>
                                <h3>Barrel Type Shot Blasting Machine</h3>
                                <p>Easy to operate and control, steady jet flow, automatic pop-up filler valve, durable abrasive adjusting valve.Can be equipped with remote control to start and stop the blasting operation.</p>
                                <div class="detail-page product-detail_btn d-sm-flex justify-content-between align-items-center">
                                    <button class="add-inquiry d-block mx-sm-0 mx-auto">
                                        <svg width="158" height="33" viewBox="0 0 158 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.5755 0H79.5472V33H13.5755L0.5 16.5L13.5755 0Z" fill="#022257"/>
                                            <path d="M144.925 0H78.9528V33H144.925L158 16.5L144.925 0Z" fill="#022257"/>
                                        </svg>
                                        <span>Add to Inquiry</span>
                                    </button>
                                    <div class="detail-page product-detail_page justify-content-sm-end justify-content-center">
                                        <a href="" class="detail-page_prev product-detail_prev">PREV</a>
                                        <a href="" class="detail-page_next product-detail_next">NEXT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-detail_intro mb-footer">
                <div class="container">
                    <ul class="nav nav-pills tab-common" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-purpose-tab" data-bs-toggle="pill" data-bs-target="#pills-purpose" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Main Purpose</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-specification-tab" data-bs-toggle="pill" data-bs-target="#pills-specification" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Specification</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-purpose" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="purpose-content">
                                <img src="../img/product-1.png" alt="">
                                <p>
                                Easy to operate and control, steady jet flow, automatic pop-up filler valve, durable abrasive adjusting valve.Can be equipped with remote control to start and stop the blasting operation.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-specification" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="specification-content">
                                <table>
                                    <tr class="table-title">
                                        <td>Model</td>
                                        <td>TSA-100</td>
                                        <td>TSA-100</td>
                                        <td>TSA-100</td>
                                    </tr>
                                    <tr>
                                        <td class="table-model">Machine Die</td>
                                        <td>700x 800x 1200(mm)</td>
                                        <td>700x 800x 1200(mm)</td>
                                        <td>700x 800x 1200(mm)</td>
                                    </tr>
                                    <tr>
                                        <td class="table-model">Sand Storage</td>
                                        <td>100L</td>
                                        <td>100L</td>
                                        <td>100L</td>
                                    </tr>
                                    <tr>
                                        <td class="table-model">Nozzle</td>
                                        <td>4-6mm</td>
                                        <td>4-6mm</td>
                                        <td>4-6mm</td>
                                    </tr>
                                    <tr>
                                        <td class="table-model">Piping</td>
                                        <td>3/4" x 4M</td>
                                        <td>3/4" x 4M</td>
                                        <td>3/4" x 4M</td>
                                    </tr>
                                    <tr>
                                        <td class="table-model">Caster</td>
                                        <td>4"x2 pcs</td>
                                        <td>4"x2 pcs</td>
                                        <td>4"x2 pcs</td>
                                    </tr>
                                    <tr>
                                        <td class="table-model">Packing Die</td>
                                        <td>950x950x1400(mm)</td>
                                        <td>950x950x1400(mm)</td>
                                        <td>950x950x1400(mm)</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
        </div>
    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        var swiper = new Swiper(".product-detail_swiper", {
            slidesPerView: 1,
            loop: true,
            pagination: {
                el: ".product-detail_swiper_pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".product-detail_swiper_arrow-next",
                prevEl: ".product-detail_swiper_arrow-prev",
            },
            speed: 800,
        })
    </script>
</body>
</html>
    