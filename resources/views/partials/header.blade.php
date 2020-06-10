<!DOCTYPE html>

<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Katora&nbsp;&minus;&nbsp;Bootstrap Multipurpose Shopping Template</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nibh vel tellus tincidunt molestie. Ut in libero ac elit pharetra auctor a eget nunc.">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="icon" type="image/png" href="images/miscellaneous/fav.png">

    <!-- Fontawesome CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Core CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">


</head>

<body >
<!-- Paste this code after body tag -->
<div class="se-pre-con"></div>

<!-- //header style Two -->
<header id="headerTwo" class="header-area header-two header-desktop">

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <div class="container">
            <div class="pro-description">
                <div class="pro-info">
                    Get<strong> UPTO 40% OFF </strong>on your 1st order
                    <div class="pro-link-dropdown js-toppanel-link-dropdown">
                        <a href="shop-page1.html" class="pro-dropdown-toggle">
                            More details
                        </a>

                    </div>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

        </div>
    </div>

    <div class="header-mini bg-top-bar">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-4 ">
                    <h4><strong>+7(917)575-97-57</strong></h4>
                </div>
                <div class="col-12 col-md-8">
                    <div class="pro-header-options">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle">
                                {{ __('messages.профиль') }}
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="{{ route('users.users') }}">{{ __('messages.войти') }}</a>
                                <a class="dropdown-item" href="wishlist.html">{{ __('messages.регистрация') }}</a>
                                <a class="dropdown-item" href="compare.html">{{ __('messages.сравнить') }}</a>
                                <a class="dropdown-item" href="orders.html">{{ __('messages.мои_заказы') }}</a>
                                <a class="dropdown-item" href="shipping-address.html">{{ __('messages.адрес_доставки') }}</a>
                                <a class="dropdown-item" href="#">{{ __('messages.выйти') }}</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle">
                                {{ __('messages.Русский') }}
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="{{ url('locale/ru') }}">Русский</a>
                                <a class="dropdown-item" href="{{ url('locale/en') }}">English</a>

                            </div>
                        </div>

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle">
                                RUB
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="#">{{ __('messages.₽_RUB') }}</a>
                                <a class="dropdown-item" href="#">{{ __('messages.$ USD') }}</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="header-maxi bg-header-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-2">
                    <a href="index.html" class="logo" data-toggle="tooltip" data-placement="bottom" title="logo" >
                        <img class="img-fluid" src="images/logo/logo.png"  alt="logo here">
                    </a>
                </div>

                <div class="col-12 col-sm-8 nav-start">
                    <nav id="headerOneNavbar" class="navbar navbar-expand-lg bg-nav-bar">

                        <div class="navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown" href="{{ route('home.home') }}" >
                                        {{ __('messages.главная') }}
                                    </a>

                                </li>

                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('shop.shop') }}"  >
                                        {{ __('messages.каталог') }}
                                        <span class="badge badge-secondary">{{ __('messages.новинки') }}</span>
                                    </a>
                                    <div class="dropdown-menu mega-dropdown-menu row ">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <ul>
                                                        <li class="dropdown-header">{{ __('messages.категории') }}</li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.детская_мебель') }}">{{ __('messages.детская_мебель') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.постельные_принадлежности') }}">{{ __('messages.постельные_принадлежности') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.детские_игрушки_и_игры') }}">{{ __('messages.детские_игрушки_и_игры') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.коляски_и_автокресла') }}">{{ __('messages.коляски_и_автокресла') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.купание_малыша') }}">{{ __('messages.купание_малыша') }}</a></li>
{{--                                                        <li><a class="dropdown-item" href="#">Kitchen Appliances</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Video games</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Touch Screen</a></li>--}}
                                                    </ul>
                                                </div>
{{--                                                <div class="col-md-2">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="dropdown-header">Departments</li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Featured Accessories</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Hot Brands</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Home Improvement</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Tools</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Security & Protection</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Accessories & Parts</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Smart Electronics</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-2">
{{--                                                    <ul>--}}
{{--                                                        <li><a class="dropdown-item dropdown-header" href="#">Shop Instagram</a></li>--}}
{{--                                                        <li><a class="dropdown-item dropdown-header" href="#">Shop By Brands</a></li>--}}
{{--                                                        <li><a class="dropdown-item dropdown-header" href="#">Repair & Cleaning</a></li>--}}
{{--                                                        <li><a class="dropdown-item dropdown-header" href="#">Sell Your Product</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-6 col-lg-6">
                                                            <div class="product">
{{--                                                                <article>--}}
{{--                                                                    <div class="pro-thumb ">--}}

{{--                                                                        <a href="product-page1.html">--}}
{{--                                                                            <span class="pro-image"><img class="img-fluid" src="images/product_images_demo_2/product_image_01.jpg" alt="Product Image"></span>--}}
{{--                                                                            <span class="pro-image-hover swipe-to-top"><img class="img-fluid" src="images/product_images_demo_2/product_image_01_02.jpg" alt="Product Image"></span>--}}
{{--                                                                        </a>--}}
{{--                                                                        <div class="pro-buttons">--}}
{{--                                                                            <div class="pro-icons">--}}
{{--                                                                                <a href="wishlist.html" class="icon active swipe-to-top">--}}
{{--                                                                                    <i class="fas fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                                <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">--}}
{{--                                                                                    <i class="fas fa-eye"></i>--}}
{{--                                                                                </div>--}}
{{--                                                                                <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>--}}
{{--                                                                            </div>--}}


{{--                                                                            <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="pro-tag bg-success">NEW</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="pro-description">--}}

{{--                                                                        <h2 class="pro-title"><a href="product-page1.html">Original Samsung Galaxy S8 Plus</a></h2>--}}


{{--                                                                    </div>--}}
{{--                                                                </article>--}}
                                                            </div>
                                                        </div>
                                                        <div class="col-6  col-lg-6">
                                                            <div class="product">
{{--                                                                <article>--}}
{{--                                                                    <div class="pro-thumb ">--}}

{{--                                                                        <a href="product-page1.html">--}}
{{--                                                                            <span class="pro-image"><img class="img-fluid" src="images/product_images_demo_2/product_image_02.jpg" alt="Product Image"></span>--}}
{{--                                                                            <span class="pro-image-hover swipe-to-top"><img class="img-fluid" src="images/product_images_demo_2/product_image_02_02.jpg" alt="Product Image"></span>--}}
{{--                                                                        </a>--}}
{{--                                                                        <div class="pro-buttons">--}}
{{--                                                                            <div class="pro-icons">--}}
{{--                                                                                <a href="wishlist.html" class="icon active swipe-to-top">--}}
{{--                                                                                    <i class="fas fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                                <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">--}}
{{--                                                                                    <i class="fas fa-eye"></i>--}}
{{--                                                                                </div>--}}
{{--                                                                                <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>--}}
{{--                                                                            </div>--}}


{{--                                                                            <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="pro-tag bg-success">NEW</div>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="pro-description">--}}

{{--                                                                        <h2 class="pro-title"><a href="product-page1.html">15-6inch metal gaming notebook laptop</a></h2>--}}


{{--                                                                    </div>--}}
{{--                                                                </article>--}}
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item dropdown">

                                    <a class="nav-link dropdown-toggle" href="{{ __('messages.акции') }}" >
                                        {{ __('messages.акции') }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="shop-page1.html">{{ __('messages.детская_мебель') }}
                                        </a>
                                        <a class="dropdown-item" href="shop-page2.html">{{ __('messages.постельные_принадлежности') }}
                                        </a>
                                        <a class="dropdown-item" href="shop-page3.html">{{ __('messages.детские_игрушки_и_игры') }}</a>
                                        <a class="dropdown-item" href="shop-page4.html">{{ __('messages.коляски_и_автокресла') }}</a>
                                        <a class="dropdown-item" href="shop-page5.html">{{ __('messages.купание_малыша') }}</a>

                                    </div>
                                </li>



                                </li>



                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ __('messages.новинки') }}" >
                                        {{ __('messages.новинки') }}
                                    </a>
                                    <div class="dropdown-menu" >
                                        <a class="dropdown-item" href="product-page1.html">{{ __('messages.детская_мебель') }}</a>
                                        <a class="dropdown-item" href="product-page2.html">{{ __('messages.постельные_принадлежности') }}</a>
                                        <a class="dropdown-item" href="product-page3.html">{{ __('messages.детские_игрушки_и_игры') }}</a>
                                        <a class="dropdown-item" href="product-page4.html">{{ __('messages.коляски_и_автокресла') }}</a>
                                        <a class="dropdown-item" href="product-page5.html">{{ __('messages.купание_малыша') }}</a>

                                    </div>
                                </li>



                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('contact.us') }}" >
                                        {{ __('messages.помощ') }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-submenu">
{{--                                            <a class="dropdown-item" href="{{ __('messages.о_магазине') }}">{{ __('messages.о_магазине') }}--}}

{{--                                            </a>--}}

                                        </div>
                                        <div class="dropdown-submenu">

                                            <a class="dropdown-item" href="{{ route('about.us') }}">{{ __('messages.о_магазине') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>

                                        </div>
                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('contact.us') }}">{{ __('messages.свяжитесь_с_нами') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ __('messages.регистрация') }}">{{ __('messages.регистрация') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="signup.html">{{ __('messages.регистрация') }}</a>
{{--                                                <a class="dropdown-item" href="login-page1.html">Login Page 1</a>--}}
                                                <a class="dropdown-item" href="login-page2.html">{{ __('messages.войти') }}</a>
                                            </div>
                                        </div>

                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('blog.blog') }}">{{ __('messages.блог') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>

                                        </div>

                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('cart.cart') }}">{{ __('messages.корзина') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>

                                        </div>

                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('checkout') }}">Checkout</a>

                                        </div>

{{--                                        <div class="dropdown-submenu">--}}
{{--                                            <a class="dropdown-item" href="#">Email Templates--}}

{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu">--}}
{{--                                                <a class="dropdown-item" href="email-templates/amazing-deals.html">Amazing Deals</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/new-arrival.html">New Arrival</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/overall-sale.html">Overall Sale</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/winter-sale.html">Winter Sale</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/signup.html">Signup</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/forgot-password.html">Forgot Password</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                    <ul class="pro-header-right-options">

                        <li class="dropdown">

                            <button type="button" id="dropdownSearch2" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                <i class="fas fa-search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSearch2">
                                <form>
                                    <div class="pt-col">
                                        <input type="text" class="pt-search-input" placeholder={{ __('messages.поиск') }}>
                                        <button class="btn pt-btn-search" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </li>
                        <li>
                            <a href="wishlist.html" class="btn" data-toggle="tooltip" data-placement="bottom" title={{ __('messages.избранное') }}>
                                <i class="far fa-heart"></i>
                                <span class="badge badge-secondary">3</span>
                            </a>
                        </li>
                        <li class="cart-header dropdown head-cart-content" data-toggle="tooltip" data-placement="bottom" title={{ __('messages.корзина') }}>
                            <button type="button" id="dropdownCart" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge badge-secondary">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCart">
                                <ul class="shopping-cart-items">
                                    <li>
                                        <div class="item-thumb">

                                            <div class="image">
                                                <img class="img-fluid" src="images/product_images_demo_2/product_image_01.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="item-detail">
                                            <h2>Original Samsung Galaxy S8 Plus</h2>
                                            <div class="item-s">1 x $900.00 <i class="fas fa-trash"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-thumb">

                                            <div class="image">
                                                <img class="img-fluid" src="images/product_images_demo_2/product_image_02.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="item-detail">
                                            <h2>15-6 Metal gaming notebook laptop</h2>
                                            <span class="item-s">2 x $1185.00 <i class="fas fa-trash"></i></span>
                                        </div>
                                    </li>
                                    <li>
                              <span class="item-summary">Total&nbsp;:&nbsp;<span>$3270.00</span>
                              </span>
                                    </li>
                                    <li>
                                        <a class="btn  btn-link btn-block " href="cart-page1.html">View Cart</a>
                                        <a class="btn btn-secondary btn-block  swipe-to-top" href="checkout.html">Checkout</a>
                                    </li>
                                </ul>


                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>







</header>

<!-- //Sticky Header -->
<header id="stickyHeader" class="header-area header-sticky d-none" >
    <div class="header-maxi bg-sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-2">
                    <a href="index.html" class="logo" data-toggle="tooltip" data-placement="bottom" title="logo" >
                        <img class="img-fluid" src="images/logo/logo.png"  alt="logo here">
                    </a>
                </div>

                <div class="col-12 col-sm-8" style="position:static;">
                    <nav id="stickyNavbar" class="navbar navbar-expand-lg navbar-fixed-top">

                        <div class="navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown" href="{{ route('home.home') }}" >
                                        {{ __('messages.главная') }}
                                    </a>
{{--                                    <div class="dropdown-menu">--}}
{{--                                        <a class="dropdown-item" href="index.html">Home 1--}}
{{--                                        </a>--}}
{{--                                        <a class="dropdown-item" href="index-2.html">Home 2--}}
{{--                                        </a>--}}
{{--                                        <a class="dropdown-item" href="index-3.html">Home 3--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
                                </li>

                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('shop.shop') }}"  >
                                        {{ __('messages.каталог') }}
                                        <span class="badge badge-secondary">{{ __('messages.новинки') }}</span>
                                    </a>
                                    <div class="dropdown-menu mega-dropdown-menu row ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <ul>
                                                        <li class="dropdown-header">{{ __('messages.категории') }}</li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.детская_мебель') }}">{{ __('messages.детская_мебель') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.постельные_принадлежности') }}">{{ __('messages.постельные_принадлежности') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.детские_игрушки_и_игры') }}">{{ __('messages.детские_игрушки_и_игры') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.коляски_и_автокресла') }}">{{ __('messages.коляски_и_автокресла') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ __('messages.купание_малыша') }}">{{ __('messages.купание_малыша') }}</a></li>
                                                        <li><a class="dropdown-item" href="#">Men Accessroies</a></li>
                                                        <li><a class="dropdown-item" href="#">Women Accessroies</a></li>
                                                        <li><a class="dropdown-item" href="#">Women Tops</a></li>
                                                    </ul>
                                                </div>
{{--                                                <div class="col-md-2">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="dropdown-header">Departments</li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Hot Sales</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">High Fashion</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Wedding & Events</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Accessories</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Bottoms</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Tops & Tees</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Jackets & Coats</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-2">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a class="dropdown-item dropdown-header" href="#">Shop Instagram</a></li>--}}
{{--                                                        <li><a class="dropdown-item dropdown-header" href="#">Shop By Brands</a></li>--}}
{{--                                                        <li><a class="dropdown-item dropdown-header" href="#">Repair & Cleaning</a></li>--}}
{{--                                                        <li><a class="dropdown-item dropdown-header" href="#">Sell Your Product</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                                <div class="col-md-6">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-6 col-lg-6">--}}
{{--                                                            <div class="product">--}}
{{--                                                                <article>--}}
{{--                                                                    <div class="pro-thumb ">--}}

{{--                                                                        <a href="product-page1.html">--}}
{{--                                                                            <span class="pro-image"><img class="img-fluid" src="images/product_images_demo_3/product_image_02.jpg" alt="Product Image"></span>--}}
{{--                                                                            <span class="pro-image-hover swipe-to-top"><img class="img-fluid" src="images/product_images_demo_3/product_image_02_02.jpg" alt="Product Image"></span>--}}
{{--                                                                        </a>--}}
{{--                                                                        <div class="pro-buttons">--}}
{{--                                                                            <div class="pro-icons">--}}
{{--                                                                                <a href="wishlist.html" class="icon active swipe-to-top">--}}
{{--                                                                                    <i class="fas fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                                <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">--}}
{{--                                                                                    <i class="fas fa-eye"></i>--}}
{{--                                                                                </div>--}}
{{--                                                                                <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>--}}
{{--                                                                            </div>--}}


{{--                                                                            <a href="shop-page1.html" class="btn btn-secondary btn-block swipe-to-top">Add to Cart</a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="pro-tag bg-success">NEW</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="pro-description">--}}

{{--                                                                        <h2 class="pro-title"><a href="product-page1.html">Denim Jeans for Men</a></h2>--}}


{{--                                                                    </div>--}}
{{--                                                                </article>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-6  col-lg-6">--}}
{{--                                                            <div class="product">--}}
{{--                                                                <article>--}}
{{--                                                                    <div class="pro-thumb ">--}}

{{--                                                                        <a href="product-page1.html">--}}
{{--                                                                            <span class="pro-image"><img class="img-fluid" src="images/product_images_demo_3/product_image_08.jpg" alt="Product Image"></span>--}}
{{--                                                                            <span class="pro-image-hover swipe-to-top"><img class="img-fluid" src="images/product_images_demo_3/product_image_02.jpg" alt="Product Image"></span>--}}
{{--                                                                        </a>--}}
{{--                                                                        <div class="pro-buttons">--}}
{{--                                                                            <div class="pro-icons">--}}
{{--                                                                                <a href="wishlist.html" class="icon active swipe-to-top">--}}
{{--                                                                                    <i class="fas fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                                <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">--}}
{{--                                                                                    <i class="fas fa-eye"></i>--}}
{{--                                                                                </div>--}}
{{--                                                                                <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>--}}
{{--                                                                            </div>--}}


{{--                                                                            <a href="shop-page1.html" class="btn btn-secondary btn-block swipe-to-top">Add to Cart</a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="pro-tag bg-success">NEW</div>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="pro-description">--}}

{{--                                                                        <h2 class="pro-title"><a href="product-page1.html">Double Tank Trouser</a></h2>--}}


{{--                                                                    </div>--}}
{{--                                                                </article>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}

                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" >
                                        {{ __('messages.акции') }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="shop-page1.html">{{ __('messages.детская_мебель') }}
                                        </a>
                                        <a class="dropdown-item" href="shop-page2.html">{{ __('messages.постельные_принадлежности') }}
                                        </a>
                                        <a class="dropdown-item" href="shop-page3.html">{{ __('messages.детские_игрушки_и_игры') }}</a>
                                        <a class="dropdown-item" href="shop-page4.html">{{ __('messages.коляски_и_автокресла') }}</a>
                                        <a class="dropdown-item" href="shop-page5.html">{{ __('messages.купание_малыша') }}</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" >
                                        {{ __('messages.новинки') }}
                                    </a>
                                    <div class="dropdown-menu" >
                                        <a class="dropdown-item" href="product-page1.html">{{ __('messages.детская_мебель') }}</a>
                                        <a class="dropdown-item" href="product-page2.html">{{ __('messages.постельные_принадлежности') }}</a>
                                        <a class="dropdown-item" href="product-page3.html">{{ __('messages.детские_игрушки_и_игры') }}</a>
                                        <a class="dropdown-item" href="product-page4.html">{{ __('messages.коляски_и_автокресла') }}</a>
                                        <a class="dropdown-item" href="product-page5.html">{{ __('messages.купание_малыша') }}</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('contact.us') }}" >
                                        {{ __('messages.помощ') }}
                                    </a>
                                    <div class="dropdown-menu">

                                        <div class="dropdown-submenu">

                                            <a class="dropdown-item" href="{{ route('about.us') }}">{{ __('messages.о_магазине') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>

                                        </div>
                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('contact.us') }}">{{ __('messages.свяжитесь_с_нами') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>

                                        </div>
                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ __('messages.регистрация') }}">{{ __('messages.регистрация') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="signup.html">{{ __('messages.регистрация') }}</a>

                                                <a class="dropdown-item" href="login-page2.html">{{ __('messages.войти') }}</a>
                                            </div>
                                        </div>

                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('blog.blog') }}">{{ __('messages.блог') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>

                                        </div>

                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('cart.cart') }}">{{ __('messages.корзина') }}
                                                <i class="fas fa-chevron-right"></i>
                                            </a>

                                        </div>

                                        <div class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('checkout') }}">Checkout</a>

                                        </div>

{{--                                        <div class="dropdown-submenu">--}}
{{--                                            <a class="dropdown-item" href="#">Email Templates--}}

{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu">--}}
{{--                                                <a class="dropdown-item" href="email-templates/amazing-deals.html">Amazing Deals</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/new-arrival.html">New Arrival</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/overall-sale.html">Overall Sale</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/winter-sale.html">Winter Sale</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/signup.html">Signup</a>--}}
{{--                                                <a class="dropdown-item" href="email-templates/forgot-password.html">Forgot Password</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                    <ul class="pro-header-right-options">

                        <li class="dropdown">

                            <button type="button" id="dropdownSearch" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                <i class="fas fa-search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSearch">
                                <form>
                                    <div class="search-field-module">
                                        <input  type="search" placeholder="{{ __('messages.поиск') }}" data-toggle="tooltip" data-placement="bottom" title="search item">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </li>
                        <li>
                            <a href="wishlist.html" class="btn" data-toggle="tooltip" data-placement="bottom" title="{{ __('messages.избранное') }}">
                                <i class="far fa-heart"></i>
                                <span class="badge badge-secondary">3</span>
                            </a>
                        </li>
                        <li class="cart-header dropdown" data-toggle="tooltip" data-placement="bottom" title="{{ __('messages.корзина') }}">
                            <button type="button" id="stickyHeaderCartButton" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge badge-secondary">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="stickyHeaderCartButton">
                                <ul class="shopping-cart-items">
                                    <li>
                                        <div class="item-thumb">

                                            <div class="image">
                                                <img class="img-fluid" src="images/product_images/product_image_02.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="item-detail">
                                            <h2>Crystal Water Drop Earrings</h2>
                                            <div class="item-s">2 x $285.00 <i class="fas fa-trash"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-thumb">

                                            <div class="image">
                                                <img class="img-fluid" src="images/product_images/product_image_03.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="item-detail">
                                            <h2>Crytal Wedding Engagement Rings</h2>
                                            <span class="item-s">4 x $85.00 <i class="fas fa-trash"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                <span class="item-summary">Total&nbsp;:&nbsp;<span>$910.00</span>
                                </span>
                                    </li>
                                    <li>
                                        <a class="btn btn-link btn-block " href="cart-page1.html">View Cart</a>
                                        <a class="btn btn-secondary btn-block  swipe-to-top" href="checkout.html">Checkout</a>
                                    </li>
                                </ul>


                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- //Mobile Header -->
<header id="headerMobile" class="header-area header-mobile">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <div class="container">
            <div class="pro-description">
                <div class="pro-info">
                    Get<strong> UPTO 40% OFF </strong>on your 1st order
                    <div class="pro-link-dropdown js-toppanel-link-dropdown">
                        <a href="shop-page1.html" class="pro-dropdown-toggle">
                            More details
                        </a>

                    </div>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

        </div>
    </div>
    <div class="header-mini bg-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="navbar-lang">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle">
                                {{ __('messages.Русский') }}
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="{{ url('locale/ru') }}">Русский</a>
                                <a class="dropdown-item" href="{{ url('locale/en') }}">English</a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle">
                                USD
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">₽ RUB</a>
                                <a class="dropdown-item" href="#">$ USD</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-maxi bg-header-bar ">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-2 pr-0">
                    <div class="navigation-mobile-container">
                        <a href="javascript:void(0)" class="navigation-mobile-toggler">
                            <span class="fas fa-bars"></span>
                        </a>
                        <nav id="navigation-mobile">
                            <div class="logout-main">
                                <div class="welcome">
                                    <span>{{ __('messages.добро_пожаловать') }}</span>
                                </div>
                                <div class="logout">
                                    <a href="#" class="">{{ __('messages.выйти') }}</a>
                                </div>

                            </div>

                            <a class="main-manu btn" data-toggle="collapse" href="{{ route('home.home') }}" role="button" aria-expanded="false" aria-controls="shoppages">
                                {{ __('messages.главная') }}

                            </a>
{{--                            <div class="sub-manu collapse multi-collapse" id="homepages">--}}
{{--                                <ul class="unorder-list">--}}
{{--                                    <li class="">--}}
{{--                                        <a href="index.html" class="btn main-manu">--}}
{{--                                            Home Page 1--}}
{{--                                        </a>--}}
{{--                                        <a href="index-2.html" class="btn main-manu">--}}
{{--                                            Home Page 2--}}
{{--                                        </a>--}}
{{--                                        <a href="index-3.html" class="btn main-manu">--}}
{{--                                            Home Page 3--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                            <a class="main-manu btn" data-toggle="collapse" href="#shoppages" role="button" aria-expanded="false" aria-controls="{{ route('shop.shop') }}">
                                {{ __('messages.каталог') }}

                            </a>
                            <div class="sub-manu collapse multi-collapse" id="shoppages">
                                <ul class="unorder-list">
                                    <li class="">
                                        <a href="shop-page1.html" class="btn main-manu">
                                            {{ __('messages.детская_мебель') }}
                                        </a>
                                        <a href="shop-page2.html" class="btn main-manu">
                                            {{ __('messages.постельные_принадлежности') }}
                                        </a>
                                        <a href="shop-page3.html" class="btn main-manu">
                                            {{ __('messages.детские_игрушки_и_игры') }}
                                        </a>
                                        <a href="shop-page4.html" class="btn main-manu">
                                            {{ __('messages.коляски_и_автокресла') }}
                                        </a>
                                        <a href="shop-page5.html" class="btn main-manu">
                                            {{ __('messages.купание_малыша') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a class=" main-manu btn" data-toggle="collapse" href="#productpages" role="button" aria-expanded="false" aria-controls="productpages">
                                {{ __('messages.акции') }}

                            </a>
                            <div class="sub-manu collapse multi-collapse" id="productpages">
                                <ul class="unorder-list">
                                    <li class="">
                                        <a href="product-page1.html" class="btn main-manu">
                                            {{ __('messages.детская_мебель') }}
                                        </a>
                                        <a href="product-page2.html" class="btn main-manu">
                                            {{ __('messages.постельные_принадлежности') }}
                                        </a>
                                        <a href="product-page3.html" class="btn main-manu">
                                            {{ __('messages.детские_игрушки_и_игры') }}
                                        </a>
                                        <a href="product-page4.html" class="btn main-manu">
                                            {{ __('messages.коляски_и_автокресла') }}
                                        </a>
                                        <a href="product-page5.html" class="btn main-manu">
                                            {{ __('messages.купание_малыша') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a class=" main-manu btn" data-toggle="collapse" href="{{ route('contact.us') }}" role="button" aria-expanded="false" aria-controls="staticpages">
                                {{ __('messages.помощ') }}

                            </a>
                            <div class="sub-manu collapse multi-collapse" id="staticpages">
                                <ul class="unorder-list">
                                    <li class="">
                                        <a class="main-manu btn " data-toggle="collapse" href="{{ route('about.us') }}" role="button" aria-expanded="false" aria-controls="staticabout">
                                            {{ __('messages.о_магазине') }}

                                        </a>



                                        <a class="main-manu btn " data-toggle="collapse" href="{{ route('contact.us') }}" role="button" aria-expanded="false" aria-controls="staticcontact">
                                            {{ __('messages.связаться_с_нами') }}

                                        </a>


                                        <a class="main-manu btn" data-toggle="collapse" href="#staticlogin" role="button" aria-expanded="false" aria-controls="staticlogin">
                                            {{ __('messages.вход') }}

                                        </a>


                                        <a class="main-manu btn " data-toggle="collapse" href="{{ route('blog.blog') }}" role="button" aria-expanded="false" aria-controls="staticblog">
                                            {{ __('messages.блог') }}

                                        </a>


                                        <a class="main-manu btn " data-toggle="collapse" href="{{ route('cart.cart') }}" role="button" aria-expanded="false" aria-controls="staticcart">
                                            {{ __('messages.корзина') }}

                                        </a>


                                        <a href="{{ route('checkout') }}" class="main-manu btn ">
                                            Checkout
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="profile.html" class="main-manu btn ">
                                {{ __('messages.профиль') }}
                            </a>
                            <a href="wishlist.html" class="main-manu btn ">
                                {{ __('messages.избранное') }}
                            </a>
                            <a href="compare.html" class="main-manu btn ">
                                {{ __('messages.сравнить') }}
                            </a>

                            <a href="orders.html" class="main-manu btn ">
                                {{ __('messages.мои_заказы') }}
                            </a>
                            <a href="shipping-address.html" class="main-manu btn ">
                                {{ __('messages.адрес_доставки') }}
                            </a>
                        </nav>
                    </div>

                </div>



                <div class="col-8">
                    <a href="index.html" class="logo" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="logo">
                        <img class="img-fluid" src="images/logo/logo.png" alt="logo here">
                    </a>
                </div>

                <div class="col-2 pl-0">
                    <div class="cart-dropdown dropdown">
                        <a class="cart-dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                            <span class="badge badge-secondary">2</span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                            <ul class="shopping-cart-items">
                                <li>
                                    <div class="item-thumb">

                                        <div class="image">
                                            <img class="img-fluid" src="images/product_images/product_image_02.jpg" alt="Product Image">
                                        </div>
                                    </div>
                                    <div class="item-detail">
                                        <h2>Crystal Water Drop Earrings</h2>
                                        <div class="item-s">2 x $285.00 <i class="fas fa-trash"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-thumb">

                                        <div class="image">
                                            <img class="img-fluid" src="images/product_images/product_image_03.jpg" alt="Product Image">
                                        </div>
                                    </div>
                                    <div class="item-detail">
                                        <h2>Crytal Wedding Function Rings</h2>
                                        <span class="item-s">4 x $85.00 <i class="fas fa-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                <span class="item-summary">Total&nbsp;:&nbsp;<span>$910.00</span>
                                </span>
                                </li>
                                <li>
                                    <a class="btn btn-link btn-block " href="cart-page1.html">View Cart</a>
                                    <a class="btn btn-secondary btn-block  swipe-to-top" href="checkout.html">Checkout</a>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navbar bg-menu-bar">
        <div class="container">
            <form class="form-inline">
                <div class="search-field-module">
                    <div class="search-field-select" >
                        <select class="form-control">
                            <option selected>{{ __('messages.категории') }}</option>
                            <option value="1">{{ __('messages.детская_мебель') }}</option>
                            <option value="1">{{ __('messages.постельные_принадлежности') }}</option>
                            <option value="1">{{ __('messages.детские_игрушки_и_игры') }}</option>
                            <option value="1">{{ __('messages.коляски_и_автокресла') }}</option>
                            <option value="1">{{ __('messages.купание_малыша') }}</option>
{{--                            <option value="1">Anklet&nbsp;</option>--}}
{{--                            <option value="1">Hairpin&nbsp;</option>--}}
{{--                            <option value="2">Bangle&nbsp;</option>--}}
                        </select>
                    </div>
                    <div class="search-field-wrap">
                        <input  type="search" placeholder="{{ __('messages.поиск') }}" data-toggle="tooltip" data-placement="bottom" title="search item">
                        <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip" data-placement="bottom" title="{{ __('messages.поиск') }}">
                            <i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>

