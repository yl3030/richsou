<header class="header">
    <div class="header_inner d-flex align-items-center justify-content-lg-end justify-content-between">
        <nav class="header_nav">
            <ul class="header_nav_first d-lg-flex align-items-center justify-content-center">
                <li><a href="./about.php" class="<?php if($pageName == "About Us") echo "active" ?>">About Us</a></li>
                <li class="drop">
                    <a data-link="./news.php" class="<?php if($pageName == "Media") echo "active" ?>">Media</a>
                    <ul class="header_nav_second">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                    <ul class="header_nav_third">
                                        <li><a data-target="#header_nav_news" data-link="./news.php" class="active">News</a></li>
                                        <li><a data-target="#header_nav_exhibitions" data-link="./news.php">Exhibitions</a></li>
                                        <li><a data-target="#header_nav_catalogue" data-link="./catalogue.php">Catalogue</a></li>
                                        <li><a data-target="#header_nav_video" data-link="./video.php">Video</a></li>
                                    </ul>
                                </div>
                                <div class="col-9 d-lg-block d-none">
                                    <ul class="header_nav_forth row active" id="header_nav_news">
                                        <li class="col-6">
                                            <a href="./news-detail.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                        </li>
                                        <li class="col-6">
                                            <a href="./news-detail.php">Pellentesque hendrerit risus vitae massa efficitur malesuada non nec lacus.</a>
                                        </li>
                                        <li class="col-6">
                                            <a href="./news-detail.php">Proin a ante sit amet metus iaculis condimentum.</a>
                                        </li>
                                    </ul>
                                    <ul class="header_nav_forth row" id="header_nav_exhibitions">
                                        <li class="col-6">
                                            <a href="./news-detail.php">Mauris malesuada at augue vitae congue</a>
                                        </li>
                                        <li class="col-6">
                                            <a href="./news-detail.php">Nulla dui ipsum, fermentum viverra enim in, feugiat porta odio.</a>
                                        </li>
                                        <li class="col-6">
                                            <a href="./news-detail.php">Phasellus quis erat ac lectus sollicitudin feugiat non at ipsum. Proin dui augue, elementum id dolor quis, laoreet gravida lacus.</a>
                                        </li>
                                    </ul>
                                    <ul class="header_nav_forth row" id="header_nav_catalogue">
                                        <li class="col-6">
                                            <a href="" download>Sed odio ipsum, vestibulum sit amet erat nec, dignissim pellentesque mi.</a>
                                        </li>
                                        <li class="col-6">
                                            <a href="" download>Vivamus id ex vestibulum, tempus enim sit amet, dignissim nunc.</a>
                                        </li>
                                        <li class="col-6">
                                            <a href="" download>Aliquam tincidunt non enim eu semper. Suspendisse potenti.</a>
                                        </li>
                                    </ul>
                                    <ul class="header_nav_forth row" id="header_nav_video">
                                        <li class="col-6">
                                            <a href="https://www.youtube.com/watch?v=JGR1h2xYHh8&t=26s&ab_channel=TaiwanExcellence%E5%8F%B0%E7%81%A3%E7%B2%BE%E5%93%81" target="_blank">Integer quis libero ac mi vehicula ultrices. Curabitur risus diam,</a>
                                        </li>
                                        <li class="col-6">
                                            <a href="https://www.youtube.com/watch?v=JGR1h2xYHh8&t=26s&ab_channel=TaiwanExcellence%E5%8F%B0%E7%81%A3%E7%B2%BE%E5%93%81" target="_blank">ultrices ac pulvinar nec, porta vitae velit. Donec interdum risus a eleifend gravida. Mauris eget aliquam dolor,</a>
                                        </li>
                                        <li class="col-6">
                                            <a href="https://www.youtube.com/watch?v=JGR1h2xYHh8&t=26s&ab_channel=TaiwanExcellence%E5%8F%B0%E7%81%A3%E7%B2%BE%E5%93%81" target="_blank">id interdum sapien. Vivamus viverra massa dui, in posuere ante</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="header_nav_space d-lg-block d-none"></li>
                <li class="drop">
                    <a data-link="./product.php" class="<?php if($pageName == "Product") echo "active" ?>">Products</a>
                    <ul class="header_nav_second">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                    <ul class="header_nav_third">
                                        <li><a data-target="#header_nav_equipment" data-link="./product-list.php" class="active">Equipment</a></li>
                                        <li><a data-target="#header_nav_abrasives" data-link="./product-list.php">Abrasives</a></li>
                                        <li><a data-target="#header_nav_spareparts" data-link="./product-list.php">Spare parts</a></li>
                                        <li><a href="./product-list.php">Used machines</a></li>
                                    </ul>
                                </div>
                                <div class="col-9 d-lg-block d-none">
                                    <ul class="header_nav_forth row active" id="header_nav_equipment">
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">Sand Blast Equipment</a>
                                        </li>
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">Shot Blast Equipment</a>
                                        </li>
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">RICH SOU Shot Peening Equipment</a>
                                        </li>
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">Blast Room</a>
                                        </li>
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">Engraving Machine & Grinder</a>
                                        </li>
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">Sand suction equipment</a>
                                        </li>
                                    </ul>
                                    <ul class="header_nav_forth row" id="header_nav_abrasives">
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">Abrasives material</a>
                                        </li>
                                    </ul>
                                    <ul class="header_nav_forth row" id="header_nav_spareparts">
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">Spare parts</a>
                                        </li>
                                        <li class="col-4">
                                            <a href="./product-list-inner.php">Carbide Borate Nozzle</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a href="./contact.php" class="<?php if($pageName == "Contact") echo "active" ?>">Contact</a></li>
            </ul>
            <div class="header_nav_lang d-lg-none d-flex align-items-center">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_659_1862)">
                    <path d="M7.5 0.46875C3.62297 0.46875 0.46875 3.62297 0.46875 7.5C0.46875 11.377 3.62297 14.5312 7.5 14.5312C11.377 14.5312 14.5312 11.377 14.5312 7.5C14.5312 3.62297 11.377 0.46875 7.5 0.46875ZM13.1237 5.15625H10.6058C10.3847 3.73184 9.96434 2.54063 9.40699 1.71621C11.0866 2.27145 12.4458 3.53578 13.1237 5.15625ZM9.84375 7.5C9.84375 7.99113 9.81879 8.45953 9.77613 8.90625H5.22387C5.18121 8.45953 5.15625 7.99113 5.15625 7.5C5.15625 7.00887 5.18121 6.54047 5.22387 6.09375H9.77602C9.81879 6.54047 9.84375 7.00887 9.84375 7.5ZM7.5 13.5938C6.65367 13.5938 5.73527 12.1321 5.34738 9.84375H9.65262C9.26473 12.1321 8.34633 13.5938 7.5 13.5938ZM5.34738 5.15625C5.73527 2.86793 6.65367 1.40625 7.5 1.40625C8.34633 1.40625 9.26473 2.86793 9.65262 5.15625H5.34738ZM5.59301 1.71621C5.03566 2.54074 4.6152 3.73184 4.39418 5.15625H1.87629C2.55422 3.53578 3.91336 2.27145 5.59301 1.71621ZM1.57652 6.09375H4.28133C4.24172 6.54621 4.21875 7.01473 4.21875 7.5C4.21875 7.98527 4.24172 8.45379 4.28145 8.90625H1.57652C1.46918 8.45391 1.40625 7.98469 1.40625 7.5C1.40625 7.01531 1.46918 6.54609 1.57652 6.09375ZM1.87629 9.84375H4.39406C4.6152 11.2682 5.03555 12.4594 5.59289 13.2838C3.91324 12.7286 2.55422 11.4642 1.87629 9.84375ZM9.40699 13.2838C9.96434 12.4593 10.3848 11.2682 10.6058 9.84375H13.1236C12.4458 11.4642 11.0868 12.7286 9.40699 13.2838ZM13.4235 8.90625H10.7186C10.7583 8.45379 10.7812 7.98527 10.7812 7.5C10.7812 7.01473 10.7583 6.54621 10.7186 6.09375H13.4234C13.5308 6.54609 13.5936 7.01531 13.5936 7.5C13.5936 7.98469 13.5308 8.45391 13.4235 8.90625Z" fill="#89AEEA"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_659_1862">
                    <rect width="15" height="15" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <ul class="d-flex align-items-center">
                    <li><a href="" class="active">EN</a></li>
                    <li><a href="">繁體中文</a></li>
                    <li><a href="">日本語</a></li>
                </ul>
            </div>
        </nav>
        <a href="./index.php" class="header_logo">
            <img src="../img/logo.png" alt="">
        </a>
        <div class="header_menu d-lg-none">
            <div class="bar top"></div>
            <div class="bar middle"></div>
            <div class="bar bottom"></div>
        </div>
        <div class="header_icon d-flex">
            <div class="d-flex align-items-center">
                <div class="header_lang d-lg-flex d-none">
                    <div class="header_lang_active d-flex align-items-center">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_659_1862)">
                            <path d="M7.5 0.46875C3.62297 0.46875 0.46875 3.62297 0.46875 7.5C0.46875 11.377 3.62297 14.5312 7.5 14.5312C11.377 14.5312 14.5312 11.377 14.5312 7.5C14.5312 3.62297 11.377 0.46875 7.5 0.46875ZM13.1237 5.15625H10.6058C10.3847 3.73184 9.96434 2.54063 9.40699 1.71621C11.0866 2.27145 12.4458 3.53578 13.1237 5.15625ZM9.84375 7.5C9.84375 7.99113 9.81879 8.45953 9.77613 8.90625H5.22387C5.18121 8.45953 5.15625 7.99113 5.15625 7.5C5.15625 7.00887 5.18121 6.54047 5.22387 6.09375H9.77602C9.81879 6.54047 9.84375 7.00887 9.84375 7.5ZM7.5 13.5938C6.65367 13.5938 5.73527 12.1321 5.34738 9.84375H9.65262C9.26473 12.1321 8.34633 13.5938 7.5 13.5938ZM5.34738 5.15625C5.73527 2.86793 6.65367 1.40625 7.5 1.40625C8.34633 1.40625 9.26473 2.86793 9.65262 5.15625H5.34738ZM5.59301 1.71621C5.03566 2.54074 4.6152 3.73184 4.39418 5.15625H1.87629C2.55422 3.53578 3.91336 2.27145 5.59301 1.71621ZM1.57652 6.09375H4.28133C4.24172 6.54621 4.21875 7.01473 4.21875 7.5C4.21875 7.98527 4.24172 8.45379 4.28145 8.90625H1.57652C1.46918 8.45391 1.40625 7.98469 1.40625 7.5C1.40625 7.01531 1.46918 6.54609 1.57652 6.09375ZM1.87629 9.84375H4.39406C4.6152 11.2682 5.03555 12.4594 5.59289 13.2838C3.91324 12.7286 2.55422 11.4642 1.87629 9.84375ZM9.40699 13.2838C9.96434 12.4593 10.3848 11.2682 10.6058 9.84375H13.1236C12.4458 11.4642 11.0868 12.7286 9.40699 13.2838ZM13.4235 8.90625H10.7186C10.7583 8.45379 10.7812 7.98527 10.7812 7.5C10.7812 7.01473 10.7583 6.54621 10.7186 6.09375H13.4234C13.5308 6.54609 13.5936 7.01531 13.5936 7.5C13.5936 7.98469 13.5308 8.45391 13.4235 8.90625Z" fill="#89AEEA"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_659_1862">
                            <rect width="15" height="15" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>EN</span>
                    </div>
                    <ul class="header_lang_list">
                        <li><a href="" class="active">EN</a></li>
                        <li><a href="">繁體中文</a></li>
                        <li><a href="">日本語</a></li>
                    </ul>
                </div>
                <div class="header_search">
                    <div class="header_search_active">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_659_1858)">
                            <path d="M6.03703 12.0688C7.37775 12.0689 8.68012 11.6215 9.73785 10.7977L13.7283 14.7882C14.0264 15.0761 14.5014 15.0678 14.7893 14.7697C15.0702 14.4789 15.0702 14.0179 14.7893 13.7272L10.7989 9.73668C12.8432 7.10509 12.3671 3.31453 9.73555 1.27021C7.10396 -0.774105 3.31343 -0.298055 1.26911 2.33353C-0.775204 4.96512 -0.299154 8.75568 2.33243 10.8C3.39189 11.623 4.69543 12.0695 6.03703 12.0688ZM2.83072 2.82951C4.60153 1.05866 7.47259 1.05863 9.24344 2.82944C11.0143 4.60026 11.0143 7.47132 9.24351 9.24217C7.47269 11.013 4.60163 11.013 2.83078 9.24223C2.83075 9.2422 2.83075 9.2422 2.83072 9.24217C1.0599 7.48425 1.04947 4.62366 2.80738 2.85284C2.81515 2.84504 2.82292 2.83728 2.83072 2.82951Z" fill="#89AEEA"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_659_1858">
                            <rect width="15" height="15" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="header_search_form">
                        <form action="" class="d-flex">
                            <input type="text" placeholder="search">
                            <button>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_659_1858)">
                                    <path d="M6.03703 12.0688C7.37775 12.0689 8.68012 11.6215 9.73785 10.7977L13.7283 14.7882C14.0264 15.0761 14.5014 15.0678 14.7893 14.7697C15.0702 14.4789 15.0702 14.0179 14.7893 13.7272L10.7989 9.73668C12.8432 7.10509 12.3671 3.31453 9.73555 1.27021C7.10396 -0.774105 3.31343 -0.298055 1.26911 2.33353C-0.775204 4.96512 -0.299154 8.75568 2.33243 10.8C3.39189 11.623 4.69543 12.0695 6.03703 12.0688ZM2.83072 2.82951C4.60153 1.05866 7.47259 1.05863 9.24344 2.82944C11.0143 4.60026 11.0143 7.47132 9.24351 9.24217C7.47269 11.013 4.60163 11.013 2.83078 9.24223C2.83075 9.2422 2.83075 9.2422 2.83072 9.24217C1.0599 7.48425 1.04947 4.62366 2.80738 2.85284C2.81515 2.84504 2.82292 2.83728 2.83072 2.82951Z" fill="#89AEEA"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_659_1858">
                                    <rect width="15" height="15" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <a href="./inquirt.php" class="header_inquiry">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.375 8.38125C24.3606 8.14249 24.2556 7.91824 24.0813 7.75441C23.907 7.59058 23.6767 7.49957 23.4375 7.5H20.625C20.625 6.00816 20.0324 4.57742 18.9775 3.52252C17.9226 2.46763 16.4918 1.875 15 1.875C13.5082 1.875 12.0774 2.46763 11.0225 3.52252C9.96763 4.57742 9.375 6.00816 9.375 7.5H6.5625C6.32331 7.49957 6.09299 7.59058 5.91871 7.75441C5.74442 7.91824 5.63935 8.14249 5.625 8.38125L4.6875 23.7937C4.6875 24.6938 5.04505 25.557 5.68151 26.1935C6.31796 26.8299 7.18117 27.1875 8.08125 27.1875H21.9187C22.3688 27.1863 22.8142 27.0958 23.2291 26.9213C23.644 26.7468 24.0201 26.4918 24.3358 26.1709C24.6514 25.85 24.9003 25.4697 25.0679 25.052C25.2356 24.6344 25.3187 24.1875 25.3125 23.7375L24.375 8.38125ZM15 3.75C15.9946 3.75 16.9484 4.14509 17.6516 4.84835C18.3549 5.55161 18.75 6.50544 18.75 7.5H11.25C11.25 6.50544 11.6451 5.55161 12.3483 4.84835C13.0516 4.14509 14.0054 3.75 15 3.75ZM21.9187 25.3125H8.08125C7.6866 25.3176 7.30587 25.1669 7.02157 24.8931C6.73728 24.6193 6.57233 24.2446 6.5625 23.85L7.44375 9.375H9.375V12.1875C9.375 12.4361 9.47377 12.6746 9.64959 12.8504C9.8254 13.0262 10.0639 13.125 10.3125 13.125C10.5611 13.125 10.7996 13.0262 10.9754 12.8504C11.1512 12.6746 11.25 12.4361 11.25 12.1875V9.375H18.75V12.1875C18.75 12.4361 18.8488 12.6746 19.0246 12.8504C19.2004 13.0262 19.4389 13.125 19.6875 13.125C19.9361 13.125 20.1746 13.0262 20.3504 12.8504C20.5262 12.6746 20.625 12.4361 20.625 12.1875V9.375H22.5562L23.4375 23.7937C23.4387 23.9935 23.4003 24.1916 23.3244 24.3764C23.2485 24.5612 23.1367 24.7292 22.9954 24.8704C22.8542 25.0117 22.6862 25.1235 22.5014 25.1994C22.3166 25.2753 22.1185 25.3137 21.9187 25.3125Z" fill="#0E6FC8"/>
                </svg>
                <span>INQUIRY</span>
            </a>
        </div>
    </div>
</header>