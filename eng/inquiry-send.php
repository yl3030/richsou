<?php
    $pageTitle = "Inquiry";
    $pageBanner = "../img/banner-product.png";
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
                <div class="contact_send">
                    <h2>Thank you for your message</h2>
                    <p>
                        Message has been successful<br>
                        Once we receive your message, we will contact you as soon as possible.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>
</body>
</html>
    