


<footer id="footerTwo" class="footer-area footer-two d-block">

    <div class="container-fluid p-0">

        <div class="newsletter-content">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-12 col-lg-12">

                        <div class="pro-heading-title">

                            <h2> {{ __('messages.подписывайтесь_на_акции_и_скидки') }}

                            </h2>

                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>

                        </div>

                    </div>

                    <div class="row justify-content-center">

                        <div class="col-12 col-lg-8">




                            <div class="newsletter-form">

                                <input type="text" class="form-control" placeholder="{{ __('messages.ваш_электронный_адрес') }}">


                                <button class="btn btn-secondary btn-lg swipe-to-top">{{ __('messages.подписаться') }}</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        </div>

    </footer>

<!-- Product Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="row ">
                                <div id="quickViewCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <img class="img-fluid" src="images/gallery_demo_3/preview/Product_image_01.jpg" alt="image">
                                        </div>
                                        <div class="carousel-item">

                                            <img class="img-fluid" src="images/gallery_demo_3/preview/Product_image_02.jpg" alt="image">
                                        </div>
                                        <div class="carousel-item">

                                            <img class="img-fluid" src="images/gallery_demo_3/preview/Product_image_03.jpg" alt="image">
                                        </div>
                                        <div class="carousel-item">

                                            <img class="img-fluid" src="images/gallery_demo_3/preview/Product_image_04.jpg" alt="image">
                                        </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#quickViewCarousel" data-slide="prev">
                                        <span class="fas fa-angle-left "></span>
                                    </a>
                                    <a class="carousel-control-next" href="#quickViewCarousel" data-slide="next">
                                        <span class="fas fa-angle-right "></span>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="pro-description">
                                <h2 class="pro-title">Leather Pent for Women</h2>

                                <div class="pro-price">
                                    <del>$484</del><ins>$300</ins>
                                </div>

                                <div class="pro-infos">
                                    <div class="pro-single-info"><b>Product ID :</b>1004</div>
                                    <div class="pro-single-info"><b>Categroy :</b><a href="#">Women Fashion</a></div>
                                    <div class="pro-single-info">
                                        <b>Tags :</b>
                                        <ul>
                                            <li><a href="#">Tops</a></li>
                                            <li><a href="#">Bottoms</a></li>
                                            <li><a href="#">Skirts</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-single-info"><b>Available :</b><span class="text-secondary">InStock</span></div>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor.
                                </p>
                                <div class="pro-counter">
                                    <div class="input-group item-quantity">

                                        <input type="text" id="quantity1" name="quantity" class="form-control " value="10">

                                        <span class="input-group-btn">
                                            <button type="button" value="quantity1" class="quantity-plus btn" data-type="minus" data-field="">
                                                <i class="fas fa-plus"></i>
                                            </button>

                                            <button type="button" value="quantity1" class="quantity-minus btn" data-type="plus" data-field="">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-lg swipe-to-top" onclick="notificationCart();">{{ __('messages.в_корзину') }}</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Footer Mobile -->

<footer id="footerMobile" class="footer-area footer-mobile d-lg-none d-xl-none">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="single-footer">

                    <div class="pro-about">
                        <a href=""  data-toggle="collapse" data-target="#collapseFooter" aria-expanded="false" aria-controls="collapseFooter">{{ __('messages.магазин') }}</a>
                        <div class="collapse" id="collapseFooter">
                            <div class="card card-body">
                                <ul class="pl-0 mb-0">
                                    <li><a href="index.html">
                                            <img src="images/logo/logo.png" alt="logo here">
                                        </a></li>
                                   <li> <span>1223, Main Street, Anytown New York, 38000 USA</span> </li>
                                    <li><span>+7(917)575-97-57</span><span><a href="#">info@example.com</a> </span> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            @foreach($parent_id_categories as $item)--}}
                <div class="col-12 col-lg-2">

                    <div class="single-footer">
                        <div class="collapse" id="collapseFooterOne">
                            <div class="card card-body">
                                <ul class="pl-0 mb-0">

{{--                                            {{$item->parent_id}}</a> </li>--}}
                                    <li> <a href="blog-page1.html">
                                            {{ __('messages.детская_мебель') }} </a> </li>
                                    <li> <a href="about-page1.html"> {{ __('messages.постельные_принадлежности') }}</a> </li>
                                    <li> <a href="contact-page1.html"> {{ __('messages.детские_игрушки_и_игры') }}</a> </li>
                                    <li> <a href="contact-page1.html"> {{ __('messages.коляски_и_автокресла') }}</a> </li>
                                    <li> <a href="contact-page1.html"> {{ __('messages.купание_малыша') }}</a> </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
{{--            @endforeach--}}
            <div class="col-12 col-lg-2">
                <div class="single-footer">
                    <a href=""  data-toggle="collapse" data-target="#collapseFooterTwo" aria-expanded="false" aria-controls="collapseFooterTwo">{{ __('messages.покупателям') }}</a>
                    <div class="collapse" id="collapseFooterTwo">
                        <div class="card card-body">
                            <ul class="pl-0 mb-0">
                                <li> <a href="#">{{ __('messages.как_сделать_заказ') }}</a> </li>
                                <li> <a href="privacy.html">{{ __('messages.способы_оплаты') }}</a> </li>
                                <li> <a href="refund.html">{{ __('messages.доставка') }}</a> </li>
                               <li> <a href="term.html">{{ __('messages.помощ') }}</a> </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <div class="single-footer">
                    <a href=""  data-toggle="collapse" data-target="#collapseFooterThree" aria-expanded="false" aria-controls="collapseFooterThree">{{ __('messages.мой_аккаунт') }}</a>
                    <div class="collapse" id="collapseFooterThree">
                        <div class="card card-body">
                            <ul class="pl-0 mb-0">

                                <li> <a href="shop-page1.html">{{ __('messages.магазин') }}</a> </li>
                                <li> <a href="orders.html">{{ __('messages.мои_заказы') }}</a> </li>
                                <li> <a href="cart-page1.html">{{ __('messages.корзина') }}</a> </li>
                                <li> <a href="wishlist.html">{{ __('messages.избранное') }}</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="single-footer">
                    <div class="pro-newsletter">
                        <h5>{{ __('messages.новостная_рассылка') }}</h5>

                        <form class="form-inline">
                            <div class="search">
                                <input  type="search" placeholder="{{ __('messages.ваш_электронный_адрес') }}">

                                <button type="button" class="btn btn-secondary">
                                    <i class="fas fa-location-arrow"></i>
                                </button>
                            </div>

                        </form>
                        <p>{{ __('messages.вводя_адрес_электронной_почты') }}</p>
                    </div>

                    <div class="pro-socials">
                        <h5>{{ __('messages.Подписывайтесь_на_нас') }}</h5>
                        <ul>
                            <li><a href="#" class="fab fb fa-facebook-square"></a></li>
                           <li><a href="#" class="fab tw fa-twitter-square"></a></li>
                            <li><a href="#" class="fab sk fa-skype"></a></li>
                           <li><a href="#" class="fab ln fa-linkedin"></a></li>
                            <li><a href="#" class="fab ig fa-instagram"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="copyright-content">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-12 col-sm-12">
                        <div class="footer-info">
                           &copy;&nbsp;2019 Company, Inc. <a href="privacy.html">Privacy</a>&nbsp;&bull;&nbsp;<a href="term.html">Terms</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>

<!-- Footer Two -->
<footer id="footerTwo" class="footer-area footer-two footer-desktop d-none d-lg-block d-xl-block">

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="single-footer">

{{--                    <div class="pro-about">--}}
{{--                        <h5>Get the app</h5>--}}

{{--                        <ul class="pl-0 mb-0">--}}

{{--                            <li> <span>Katora App is now available on Google Play & App Store. Get it now.</span> </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"><img class="img-fluid" src="images/miscellaneous/google-play-btn.png" width="120" alt="Button Image"></a>--}}
{{--                                <a href="#"><img class="img-fluid" src="images/miscellaneous/app-store-btn.png" width="120" alt="Button Image"></a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="single-footer">
                    <h5>{{ __('messages.Информация') }}</h5>

                    <ul class="pl-0 mb-0">
                        <li> <a href="index.html">{{ __('messages.главная') }}</a> </li>
                        <li> <a href="blog-page1.html">{{ __('messages.блог') }}</a> </li>
                        <li> <a href="about-page1.html">{{ __('messages.о_магазине') }}</a> </li>
                        <li> <a href="contact-page1.html">{{ __('messages.свяжитесь_с_нами') }}</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="single-footer">
                    <h5>{{ __('messages.покупателям') }}</h5>

                    <ul class="pl-0 mb-0">
                        <li> <a href="#">{{ __('messages.как_сделать_заказ') }}</a> </li>
                        <li> <a href="privacy.html">{{ __('messages.способы_оплаты') }}</a> </li>
                        <li> <a href="refund.html">{{ __('messages.доставка') }}</a> </li>
                       <li> <a href="term.html">{{ __('messages.помощ') }}</a> </li>

                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="single-footer">
                    <h5>{{ __('messages.мой_аккаунт') }}</h5>

                    <ul class="pl-0 mb-0">

                        <li> <a href="shop-page1.html">{{ __('messages.магазин') }}</a> </li>
                        <li> <a href="orders.html">{{ __('messages.мои_заказы') }}</a> </li>
                        <li> <a href="cart-page1.html">{{ __('messages.корзина') }}</a> </li>
                        <li> <a href="wishlist.html">{{ __('messages.избранное') }}</a> </li>
                    </ul>
                </div>
            </div>



            <div class="col-12 col-lg-3">
                <div class="single-footer">


                    <div class="pro-socials">
                        <h5>{{ __('messages.свяжитесь_с_нами') }}</h5>

                        <p>

                            <strong>+7(917)575-97-57</strong>
                        </p>

{{--                        <p>1223, Main Street, Anytown New York, 38000 USA. info@example.com</p>--}}
                        <ul>
                            <li><a href="#" class="fab fb fa-facebook-square"></a></li>
                            <li><a href="#" class="fab tw fa-twitter-square"></a></li>
                            <li><a href="#" class="fab sk fa-skype"></a></li>
                            <li><a href="#" class="fab ln fa-linkedin"></a></li>
                            <li><a href="#" class="fab ig fa-instagram"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="copyright-content">
            <div class="container">
{{--                <div class="row align-items-center">--}}

{{--                    <div class="col-12 col-sm-12">--}}
{{--                        <div class="footer-info">--}}
{{--                            &copy;&nbsp;2019 Company, Inc. <a href="privacy.html">Privacy</a>&nbsp;&bull;&nbsp;<a href="term.html">Terms</a>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>


<div class="mobile-overlay"></div>
<a href="#" id="back-to-top" class="swipe-to-top" title="Back to top">&uarr;</a>
<div class="notifications" id="notificationCart">Product Added To Cart</div>
<div class="notifications" id="notificationWishlist">Product Added To Wishlist</div>
<div class="notifications" id="notificationCompare">Product Added To Compare</div>





<script src="{{asset('js/scripts.js')}}"></script>

<!-- Revolution JS Files -->
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
<script src="{{asset('js/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.video.min.js')}}"></script>





