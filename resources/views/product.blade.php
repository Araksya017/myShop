
@include('partials.header')


<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


  <div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.home') }}">{{ __('messages.главная') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{ __('messages.товар') }}</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content product-content">
    <div class="container">

        <div class="product-detail-info">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="slider-wrapper">
                                <div class="slider-for">

                                    <a class="slider-for__item ex1 fancybox-button" href="{{ Voyager::image($single_products->img) }}" data-fancybox-group="fancybox-button" title="{{ $single_products->getTranslatedAttribute('title', app()->getLocale())}}">
                                        <img src="{{ Voyager::image($single_products->img) }}" alt="{{ $single_products->getTranslatedAttribute('title', app()->getLocale())}}" />
                                    </a>
                                </div>
{{--@dd($single_img)--}}

                                @foreach( $single_img  as $pro)

                                  <?php
                                   $single=json_decode($pro->singleimg);
                                    ?>

{{--                               @dd($single)--}}
{{--                                    @dd($item->singleimg)--}}


                                          <div class="slider-nav">
                                             @foreach( $single as $img )
                                    <div class="slider-nav__item">

                                        <img src="{{ Voyager::image($img) }}" alt="Zoom Image"/>

                                    </div>

                                    @endforeach
                            </div>
                                @endforeach



                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="pro-tags">
                                        <div class="pro-tag bg-success">{{ __('messages.новинка') }}</div>
                                        <div class="pro-tag bg-primary">{{ __('messages.популярные') }}</div>
                                        <div class="pro-tag">{{ __('messages.акция') }}</div>
                                    </div>
                                    <h1 class="pro-title">{{ $single_products->getTranslatedAttribute('title', app()->getLocale())}}</h1>

                                    <div class="pro-price">
                                        <!--                                        <del>$450</del>-->
                                        <ins>{{$single_products->price}}</ins>
                                    </div>
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <a href="#review" class="btn-link">2 reviews</a>
                                    </div>
                                    <div class="pro-infos">
                                        <div class="pro-single-info"><b>{{ __('messages.номер_продукта') }}</b>{{$single_products->product_number}}</div>
                                        <div class="pro-single-info"><b>{{ __('messages.категории') }} :</b><a href="#">{{ $single_products->name}}</a></div>

{{--                                        <div class="pro-single-info">--}}
{{--                                            <b>Tags :</b>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="#">bracelets</a></li>--}}
{{--                                                <li><a href="#">diamond</a></li>--}}
{{--                                                <li><a href="#">ring</a></li>--}}

{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="pro-single-info"><b>Available :</b><span class="text-secondary">InStock</span></div>--}}
{{--                                        <div class="pro-single-info"><b>Min Order Limit :</b><a href="#">5</a></div>--}}
                                    </div>

{{--                                    <div class="pro-options">--}}
{{--                                        <div class="color-selection">--}}
{{--                                            <h4><b>Color : </b>Silver</h4>--}}
{{--                                            <ul>--}}
{{--                                                <li class="active"><a class="green " href="javascript:void(0);"></a></li>--}}
{{--                                                <li ><a class="red " href="javascript:void(0);"></a></li>--}}

{{--                                            </ul>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}




                                    <div class="pro-counter">
                                        <div class="input-group item-quantity">

                                            <input type="text" id="quantity1" name="quantity" class="form-control" value="10">

                                            <span class="input-group-btn">
                                          <button type="button" value="quantity1" class="quantity-plus btn" data-type="plus" data-field="">
                                              <i class="fas fa-plus"></i>
                                          </button>

                                          <button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
                                              <i class="fas fa-minus"></i>
                                          </button>
                                      </span>
                                        </div>
                                        <button type="button" class="btn btn-secondary btn-lg swipe-to-top" onclick="notificationCart();">{{ __('messages.в_корзину') }}</button>


                                    </div>
                                    <div class="pro-sub-buttons">
                                        <div class="buttons">
                                            <button type="button" class="btn  btn-link" onclick="notificationWishlist();"><i class="fas fa-heart"></i>{{ __('messages.добавить_в_список_желаний') }}</button>
                                            <button type="button" class="btn btn-link" onclick="notificationCompare();"><i class="fas fa-align-right"></i>{{ __('messages.добавить_к_сравнению') }}</button>
                                        </div>
                                        <!-- AddToAny BEGIN -->
                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                            <a class="a2a_button_facebook"></a>
                                            <a class="a2a_button_twitter"></a>
                                            <a class="a2a_button_email"></a>
                                        </div>
                                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                                        <!-- AddToAny END -->

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="nav nav-pills" role="tablist">
                                        <a class="nav-link nav-item  active" href="#description" id="description-tab" data-toggle="pill">{{ __('messages.описание') }}</a>
                                        <a class="nav-link nav-item " href="#additionalInfo" id="additional-info-tab" data-toggle="pill" role="tab" >Additional information</a>
                                        <a class="nav-link nav-item" href="#review" id="review-tab" data-toggle="pill" role="tab" >Reviews</a>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active show" id="description" aria-labelledby="description-tab">
                                            <p>{{ $single_products->getTranslatedAttribute('description', app()->getLocale())}}</p>
{{--                                            <ul>--}}
{{--                                                <li>Pellentesque consectetur lorem gravida lacinia mollis.</li>--}}
{{--                                                <li>Phasellus vel nisl consequat, sagittis mi nec, dignissim turpis.</li>--}}
{{--                                                <li>Morbi ornare lorem non lacus ultricies fermentum.</li>--}}
{{--                                                <li>Mauris aliquam turpis ut orci egestas luctus.</li>--}}
{{--                                            </ul>--}}



                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="additionalInfo" aria-labelledby="additional-info-tab">
                                            <table class="table table-striped table-borderless">

                                                <tbody>
                                                <tr>
                                                    <th scope="row">Brand Name:</th>
                                                    <td>lindoMetals</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Metals Type:</th>
                                                    <td>Silver</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Main Stone:</th>
                                                    <td>Pearl</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Style:</th>
                                                    <td>Trendy</td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade " id="review" aria-labelledby="review-tab">
                                            <div class="reviews">
                                                <div class="review-bubbles">
                                                    <h2>
                                                        Customer Reviews
                                                    </h2>
                                                    <div class="review-bubble-single">
                                                        <div class="review-bubble-bg">
                                                            <div class="pro-rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>

                                                            </div>
                                                            <h4>Good</h4>
                                                            <span>Sep 20, 2019</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                                        </div>

                                                    </div>
                                                    <div class="review-bubble-single">
                                                        <div class="review-bubble-bg">
                                                            <div class="pro-rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>

                                                            </div>
                                                            <h4>NICE WORK!!!</h4>
                                                            <span>Sep 20, 2019</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="write-review">
                                                    <h2>Write a Review</h2>
                                                    <div class="write-review-box">
                                                        <div class="from-group row mb-3">
                                                            <div class="col-12"> <label for="inlineFormInputGroup0">Name</label></div>
                                                            <div class="input-group col-12">

                                                                <input type="text" class="form-control" id="inlineFormInputGroup0" placeholder="Enter Your Name">
                                                            </div>
                                                        </div>
                                                        <div class="from-group row mb-3">
                                                            <div class="col-12"> <label for="inlineFormInputGroup1">Email Address</label></div>
                                                            <div class="input-group col-12">

                                                                <input type="text" class="form-control" id="inlineFormInputGroup1" placeholder="Enter Your Email">
                                                            </div>
                                                        </div>
                                                        <div class="from-group row mb-3">
                                                            <div class="col-12"> <label for="inlineFormInputGroup2">Rating</label></div>
                                                            <div class="pro-rating  col-12">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>

                                                            </div>
                                                        </div>

                                                        <div class="from-group row mb-3">
                                                            <div class="col-12"> <label for="inlineFormInputGroup2">Review Title</label></div>
                                                            <div class="input-group col-12">

                                                                <input type="text" class="form-control" id="inlineFormInputGroup2" placeholder="Title of Review">
                                                            </div>
                                                        </div>
                                                        <div class="from-group row mb-3">
                                                            <div class="col-12"> <label for="inlineFormInputGroup3">Review Body</label></div>
                                                            <div class="input-group col-12">

                                                                <textarea class="form-control" id="inlineFormInputGroup3" placeholder="Write Your Review"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="from-group">
                                                            <button type="button" class="btn btn-secondary swipe-to-top">Submit</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-12 d-md-none d-lg-block col-lg-2">
                            <div class="pro-banner-detial">
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="banner-single">
                                            <div class="panel">
                                                <span class="fas fa-truck"></span>
                                                <div class="block">
                                                    <h4 class="title">{{ __('messages.бесплатная_доставка') }}</h4>
                                                    <p>{{ __('messages.на_заказ_свыше') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="banner-single">
                                            <div class="panel">
                                                <span class="fas fa-money-bill-alt"></span>
                                                <div class="block">
                                                    <h4 class="title">{{ __('messages.возврат_денег') }}</h4>
                                                    <p>{{ __('messages.в_течении_30_дней') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="banner-single">
                                            <div class="panel">
                                                <span class="fas fa-life-ring"></span>
                                                <div class="block">
                                                    <h4 class="title">{{ __('messages.поддержка_24/7') }}</h4>
                                                    <p>{{ __('messages.горячая_линия') }} 888 - 963 - 600</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="banner-single last">
                                            <div class="panel">
                                                <span class="fas fa-credit-card"></span>
                                                <div class="block">
                                                    <h4 class="title">{{ __('messages.безопасная_оплата') }}</h4>
                                                    <p>{{ __('messages.защита_онлайн_платежей') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="related-product-content">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="pro-heading-title">
                        <h1> {{ __('messages.похожие_товары') }}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="tab-carousel-js row">
{{--@dd($similar);--}}
                @foreach( $similar as $item)

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product">
                        <article>
                            <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                <a href="wishlist.html" class="icon active swipe-to-top">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                            </div>

                            <div class="pro-thumb ">
{{--                                <div class="pro-tag bg-success">NEW</div>--}}
                                <a href="{{ route('product.index', $item->id)}}">
                                    <span class="pro-image"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"></span>
                                    <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"></span>
                                </a>
                                <div class="pro-buttons d-none d-lg-block d-xl-block">
                                    <div class="pro-icons">
                                        <a href="wishlist.html" class="icon active swipe-to-top">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                    </div>


                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                </div>

                            </div>

                                <h2 class="pro-title"><a href="{{ route('product.index', $item->id)}}">{{ $item->getTranslatedAttribute('title', app()->getLocale())}}</a></h2>

                                <div class="pro-price">
                                    <ins>{{$item->price}}</ins>
                                </div>
                                <div class="pro-description" style="word-wrap: break-word;
                                                                                    /*height: 100px;*/

                                                                                    display: block;
                                                                                    display: -webkit-box;

                                                                                    margin: 3px auto;
                                                                                    font-size: 14px;
                                                                                    /*line-height: 1.4;*/
                                                                                    -webkit-line-clamp: 2;
                                                                                    -webkit-box-orient: vertical;
                                                                                    overflow: hidden;
                                                                                    text-overflow: ellipsis" >

                                    <span class="pro-info">
                                        {{ $item->getTranslatedAttribute('description', app()->getLocale())}}
                                      </span>
                                <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">{{ __('messages.в_корзину') }}</button>

                               </div>
                            </div>

                        </article>
                    </div>
                </div>

           @endforeach
            </div>

        </div>
    </div>
</section>

<!-- Product Modal -->

@include('partials.footer')
