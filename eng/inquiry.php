<?php
    $pageTitle = "Inquiry";
    $pageBanner = "../img/banner-product.png";
    $inquiryPic = [
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
        "../img/product-2.png",
        "../img/product-1.png",
    ];
    $inquiryTitle = [
        "TSA-111",
        "TSA-112",
        "TSA-113",
        "TSA-114",
        "TSA-115",
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
            <li><a class="active">INQUIRY</a></li>
        </ul>
        <div class="inquiry mb-footer">
            <div class="container d-flex flex-wrap">
                <div class="inquiry_list">
                    <?php for ($i=0; $i < 5; $i++) { 
                    ?>
                        <div class="inquiry_list_item">
                            <a href="./product-detail.php" class="inquiry_list_link">
                                <div class="inquiry_list_pic"><img src="<?php echo $inquiryPic[$i] ?>" alt=""></div>
                                <h2 class="inquiry_list_title"><?php echo $inquiryTitle[$i] ?></h2>
                            </a>
                            <div class="inquiry_list_edit">
                                <div class="inquiry_list_num">
                                    <p class="inquiry_list_num_value">5</p>
                                    <div class="inquiry_list_num_btn">
                                        <button class="inquiry_list_plus inquiry_list_btn">
                                            <svg class="inquiry_list_btn_bg" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 5.81132L0 15H13.9286L13.9286 5.81132L6.96429 0L0 5.81132Z" fill="#022257"/>
                                            </svg>
                                            <img src="../img/icon_plus.svg" alt="">
                                        </button>
                                        <button class="inquiry_list_minus inquiry_list_btn">
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 9.18868L0 -1.11759e-07H13.9286L13.9286 9.18868L6.96429 15L0 9.18868Z" fill="#022257"/>
                                            </svg>
                                            <img src="../img/icon_minus.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                                <button class="inquiry_list_delete">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_237_1062)">
                                        <path d="M11.875 4.00625L10.9937 3.125L7.5 6.61875L4.00625 3.125L3.125 4.00625L6.61875 7.5L3.125 10.9937L4.00625 11.875L7.5 8.38125L10.9937 11.875L11.875 10.9937L8.38125 7.5L11.875 4.00625Z" fill="#BBBBBB"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_237_1062">
                                        <rect width="15" height="15" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="inquiry_form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input">
                                <label for="">Company</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input">
                                <label for="">Division</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input">
                                <label for="">Address</label>
                                <input type="address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input">
                                <label for="">Zip Code / City / Country</label>
                                <input type="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input">
                                <label for="">Contact Person</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input">
                                <label for="">Contact Number</label>
                                <input type="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input">
                                <label for="">Email</label>
                                <input type="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input">
                                <label for="">Fax</label>
                                <input type="number">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input">
                                <label for="">Message</label>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="vertify">
                                <label for="">Verification</label>
                                <div class="vertify_input">
                                    <input type="text">
                                    <img class="vertify_transfer" src="../img/icon_transfer.svg" alt="">
                                    <img class="vertify_value" src="../img/vertify.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-btn d-flex align-items-end justify-content-between">
                                <button class="btn-border">CANCEL</button>
                                <button class="btn-bg">SEND</button>
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
        $(".inquiry_list_btn").click(function(){
            let num = $(this).parents(".inquiry_list_num").find(".inquiry_list_num_value").text();
            if($(this).hasClass("inquiry_list_minus")) {
                if(num > 0) {
                    num--;
                }else {
                    num = 0;
                }
            }else if($(this).hasClass("inquiry_list_plus")) {
                num++;
            }
            $(this).parents(".inquiry_list_num").find(".inquiry_list_num_value").text(num)
        })
    </script>
</body>
</html>
    