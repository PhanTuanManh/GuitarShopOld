<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1Versace</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://www.versace.com/on/demandware.static/-/Library-Sites-ver-shared-trans/default/dwc296e088/images/icon/jc-favicon.png" rel="icon" sizes="32x32">
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="gird">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                           Join Versace shopp in application

                            <div class="header__qr">
                                <img src="./img/Untitled.png" alt="QR code" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="" class="header__qr-link">
                                        <img src="" alt="" class="header__qr-download-img">
                                    </a>

                                    <a href="" class="header__qr-link">
                                        <img src="" alt="" class="header__qr-download-img">
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <!-- Vì là trường hợp đb kh ấn được nên ta tạo thẻ span để css riêng cho nó -->
                             <a href="./add_product.php">
                                <span class="header__navbar-title--no-pointer">Add Product</span>
                                
                            </a>
                            <a href="./add_product.php" class="header__navbar-icon-link">
                             <i class="header__navbar-icon fa-solid fa-plus"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="header__navbar-list ">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="#" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-solid fa-bell"></i>
                                Notification
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item header__notify-item-readed">
                                        <a href="" class="header__notify-link">
                                            <img src="./img/395686598.jpg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Toner Hoa cúc</span>
                                                <span class="header__notify-des">Mỹ Phẩm chính hãng</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./img/395686598.jpg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Xác thực chính hãng nguồn gốc các sản
                                                    phẩm chính hãng</span>
                                                <span class="header__notify-des">Mỹ Phẩm chính hãng</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./img/395686598.jpg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Toner Hoa cúc</span>
                                                <span class="header__notify-des">Mỹ Phẩm chính hãng</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="#" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-solid fa-circle-info"></i>
                                Help
                            </a>
                        </li>
                        <a href="./Auth.php">
                            <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Sign in</li>
                        </a>
                        <a href="./Auth.php">

                            <li class="header__navbar-item header__navbar-item--strong">Create an account</li>
                        </a>
                    </ul>
                </nav>

                <!-- Header with seacher -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <svg class="header__logo-img" xmlns="header__logo-img" viewBox="0 0 284 64" width="100%" height="100%" xml:space="preserve" style="clip-rule:evenodd;fill-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2">
                            <path fill="#fff" d="M343.98 115.21h-19.62V93.46h15.44v-5.72h-15.44V66.22h19.62v-5.77h-31.24v60.53h31.24zm-34.19-37.96c-.36-12.08-8.85-17.84-20.07-17.84-18.48 0-23.61 14.71-23.61 31.24 0 17.39 5.54 31.42 24.02 31.42 9.63 0 19.25-4.77 19.57-17.75h-9.72c-.14 6.86-3.22 13.98-9.81 13.98-10.58 0-11.67-15.48-11.67-27.11v-.77c0-8.95.23-27.29 10.94-27.29 7.22 0 8.99 8.45 9.26 14.12zm-60.38-16.8h-9l-20.61 60.53h5.77l6.72-19.93h17.44l5.95 19.93h12.71zm-15.22 34.87 7.04-20.93h.5L248 95.32Zm-13.03 7.08c0-8.81-4.54-14.76-14.39-17.39l-4.95-1.32c-5.81-1.54-10.44-3.86-10.44-10.44 0-5.86 3.72-8.76 8.22-8.76s9.63 2.91 12.67 8.63l6.36-6.45a22.732 22.732 0 0 0-16.57-7.17c-10.08 0-19.52 6.81-19.52 19.48 0 11.26 7.9 15.17 15.62 17.25l3.54.95c6.72 1.82 9.72 6.31 9.72 10.76 0 6.36-4.4 9.72-9.4 9.72-6.45 0-11.44-5.22-14.21-10.58-6.58 6.31-6.67 6.45-6.67 6.45 5.09 6.72 13.53 8.54 19.8 8.54 12.94 0 20.25-8.76 20.25-19.66m-53.12-9.76c7.08-2.45 10.81-8.72 10.81-15.21 0-8.45-5.95-16.98-18.98-16.98h-19.84v60.53h11.62V95.34h4.99l12.08 25.65h12.8l-13.49-28.33Zm-1.09-14.71c0 7.63-2.82 13.12-10.17 13.12h-5.13v-26.2h5.13c7.36 0 10.17 5.45 10.17 13.08m-29.65 37.28h-19.62V93.47h15.44v-5.72h-15.44V66.23h19.62v-5.77h-31.24v60.53h31.24zM98.55 60.46l-12.67 46.68h-.5L73.3 60.46H60.54l17.12 60.53h9.31l17.3-60.53z" style="fill-rule:nonzero" transform="matrix(1.00198 0 0 1.00198 -60.66 -59.527)"></path>
                        </svg>
                    </div>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Nhập để tìm kiếm">
                            <div class="header__search-history">
                                <h4 class="header__search-history-heading"></h4>
                            </div>
                        </div>
                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <!-- cart -->
                    <div class="header__cart">
                        <i class="header__cart-icon fa-solid fa-cart-shopping"></i>
                        <div class="header__cart-list header__cart-list--nocart">

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app__container">
            <div class="gird">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="fa-solid fa-bars"></i>
                                Danh Mục
                            </h3>
                            <ul class="category-list">
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">Guitar</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">Piano</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">Violin</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">Drums</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">Flute</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">Harmonica</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">Saxophone</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="gird__column-10">
                        <!-- Home -->
                        <div class="home-filter">
                            <span class="home-filter__label">Sort by</span>
                            <button class="home-filter__btn btn">Popular</button>
                            <button class="home-filter__btn btn">Newest</button>
                            <button class="home-filter__btn btn">Best seller</button>

                            <div class="select-input">
                                <span class="select-input_label">Price</span>
                                <i class="select-input__icon fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-num-curent">1</span>/1

                                </span>

                                <div class="home-filter__page-controls">
                                    <a href="" class="home-filter__page-btn home-filter__page-btn--disable">
                                        <i class="fa-solid fa-chevron-left home-filter__page-icon"></i>
                                    </a>
                                    <a href="" class="home-filter__page-btn">
                                        <i class="fa-solid fa-chevron-right home-filter__page-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="home-product">
                            <!-- Product item -->
                            <div class="grid__row">
                                
                                    <!-- item -->
                                   
                                
                                <?php
                                 $connect = mysqli_connect("sql108.epizy.com","epiz_33161425","7zrmTNo7VzlG","epiz_33161425_Versacee");
                                //B2: Viết câu truy vấn
                                $sql = "select * from product";
                                //B3: Thực thi truy vấn
                                $result = mysqli_query($connect, $sql);
                                //Đưa kết quả vào mảng liên kết

                                while ($row_product = mysqli_fetch_array($result)) {
                                    //Hiển thị lần lượt từng sản phẩm
                                    $product_id = $row_product['product_id'];
                                    $product_name = $row_product['product_name'];
                                    $product_price = $row_product['product_price'];
                                    $product_img = $row_product['product_img'];
                                    echo "<div class='grid__column-2-4'>
        <!-- item -->
        <div class='home-product-item'>
            <div class='home-product-item__img' style='background-image:url(./img/$product_img);'></div>
            <h4 class='home-product-item__name'>$product_name</h4>
            <div class='home-product-item__price'>
                <span class='home-product-item__price-old'>đ</span>
                <span class='home-product-item__price-current'>$product_price</span>
            </div>
            <div class='home-product-item__detail'>VIEW DETAIL</div>
        </div>
    </div>";
                                }
                                ?>

                            </div>


                        </div>



                    </div>
                </div>
            </div>
        </div>


        <div class="footer-basic">
            <footer>
                <div class="social"><a href="https://www.instagram.com/m5.phan/"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/m5phan/"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">1Versace</p>
            </footer>
        </div>
    </div>
    </div>

    <!-- Modal layout -->

    <!-- <div class="modal">
        <div class="modal_overlay"></div>
        <div class="modal__body">
            <div class="modal__inner"> -->

    <!-- Authem form registed -->
    <!-- action -->
    <!-- <form method="POST">
                    <div class="auth-form">
                        <div class="auth-form__container">
                            <div class="auth-form__header">
                                <h3 class="auth-form__heading">Register</h3>
                                <span class="auth-form__switch-btn">
                                    <a href="./Login.php" class="item-a__text-color">Login</a>
                                </span>
                            </div>

                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input type="text" placeholder="Username" class="auth-form__input" name="user">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" placeholder="Password" class="auth-form__input" name="password">
                                </div>
                                <div class="auth-form__group">
                                    <input type="Email" placeholder="Email" class="auth-form__input" name="email">
                                </div>
                            </div>

                            <div class="auth-form__controls">
                                <button class="btn item-a-btn-b" onclick="window.location='Trangchu.php'">
                                    Back
                                </button>
                                <input type="submit" name="register" value="register" class="btn btn--primary">
                            </div>
                        </div>
                    </div>
                </form> -->
    <!-- Authen form Login -->
    <!-- <div class="auth-form">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Login</h3>
                            <span class="auth-form__switch-btn">Registed</span>
                        </div>

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" placeholder="Username" required class="auth-form__input">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" placeholder="Password" required class="auth-form__input">
                            </div>
        
                        </div>

                        <div class="auth-form__controls">
                            <button class="btn">Back</button>
                            <button class="btn btn--primary">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>  -->
</body>


</html>