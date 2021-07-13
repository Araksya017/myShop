
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

                        @foreach( $single_img  as $pro)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="slider-wrapper">
                                <div class="slider-for">

                                    <a class="slider-for__item ex1 fancybox-button" href="{{ Voyager::image($single_products->img) }}" data-fancybox-group="fancybox-button" title="{{ $single_products->getTranslatedAttribute('title', app()->getLocale())}}">
                                        <img src="{{ Voyager::image($single_products->img) }}" alt="{{ $single_products->getTranslatedAttribute('title', app()->getLocale())}}" />
                                    </a>
                                </div>
{{--@dd($single_img)--}}



                                  <?php
                                   $single=json_decode($pro->singleimg);
                                    ?>

{{--                               @dd($single)--}}
{{--                                    @dd($item->singleimg)--}}


                                         <div class="slider-nav">

                                             @if($single)

                                             @foreach( $single as $img )
                                    <div class="slider-nav__item">

                                        <img src="{{ Voyager::image($img) }}" alt="Zoom Image"/>

                                    </div>

                                    @endforeach

                                             @endif
                            </div>




                            </div>
                            @endforeach
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



                                  @auth
                                    <div class="pro-counter">
                                        <div class="input-group item-quantity">

                                            <input  form = "create" type="text" id="quantity1" name="count" class="form-control" value="1">

                                            <span class="input-group-btn">
                                          <button type="button" value="quantity1" class="quantity-plus btn" data-type="plus" data-field="">
                                              <i class="fas fa-plus"></i>
                                          </button>

                                          <button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
                                              <i class="fas fa-minus"></i>
                                          </button>
                                      </span>
                                        </div>
                                        <form method="Post" action="{{ route('create.create') }}" id="create">
                                            @csrf
                                            <input type="hidden" name = "color" value = "">
                                            <input type="hidden" name = "product_id" value = "{{ $pro -> id }}">
                                        </form>
{{--                                        <button form = "create" type="submit" class="btn btn-secondary btn-lg swipe-to-top" onclick="notificationCart();">{{ __('messages.в_корзину') }}</button>--}}

                                        <form action="{{route('create.create')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$pro->id}}">
                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                            <input type="hidden" name="count" value="1">
                                            <input type="hidden" name="color" value="">
                                            <input type="hidden" name="size" value="">
                                            <button  style="background: transparent; border: none; outline: none; color:#ffffff"><a  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>
                                        </form>
                                    </div>

                                    <div class="pro-sub-buttons">
                                        <div class="buttons">
{{--                                            <button type="button" class="btn  btn-link" onclick="notificationWishlist();"><i class="fas fa-heart"></i>{{ __('messages.добавить_в_список_желаний') }}</button>--}}
                                            <form action="{{route('create.wish')}}" method="post" >
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$pro->id}}">
                                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                                <button type="button" class="btn  btn-link" ><i class="fas fa-heart"></i>{{ __('messages.добавить_в_список_желаний') }}</button>
                                            </form>

                                             <a href="{{ route('compare') }}">
                                            <button type="button" class="btn btn-link" onclick="notificationCompare();"><i class="fas fa-align-right"></i>{{ __('messages.добавить_к_сравнению') }}</button>
                                             </a>
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
                                        @endauth

                                       @guest

                                            <div class="pro-counter">
                                                <div class="input-group item-quantity">

                                                    <input  form = "create" type="text" id="quantity1" name="count" class="form-control" value="1">

                                                    <span class="input-group-btn">
                                          <button type="button" value="quantity1" class="quantity-plus btn" data-type="plus" data-field="">
                                              <i class="fas fa-plus"></i>
                                          </button>

                                          <button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
                                              <i class="fas fa-minus"></i>
                                          </button>
                                      </span>
                                                </div>
                                                <form method="Post" action="{{ route('create.create') }}" id="create">
                                                    @csrf
                                                    <input type="hidden" name = "color" value = "">
                                                    <input type="hidden" name = "product_id" value = "{{ $pro -> id }}">
                                                </form>
                                                {{--                                        <button form = "create" type="submit" class="btn btn-secondary btn-lg swipe-to-top" onclick="notificationCart();">{{ __('messages.в_корзину') }}</button>--}}

                                                <button style="background: transparent; border: none; outline: none" ><a href="{{ route('login') }}"  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>

                                            </div>

{{--                                        @endguest--}}

                                        <div class="pro-sub-buttons">
                                            <div class="buttons">
                                                {{--                                            <button type="button" class="btn  btn-link" onclick="notificationWishlist();"><i class="fas fa-heart"></i>{{ __('messages.добавить_в_список_желаний') }}</button>--}}

                                                     <a href="{{route('login')}}"  >
                                                    <button type="button" class="btn  btn-link" ><i class="fas fa-heart"></i>{{ __('messages.добавить_в_список_желаний') }}</button>
                                                    </a>

                                                <a href="{{route('login')}}"  >
                                                <button type="button" class="btn btn-link" ><i class="fas fa-align-right"></i>{{ __('messages.добавить_к_сравнению') }}</button>
                                                </a>
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
                                       @endguest

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



{{--                            <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">--}}
{{--                                <a href="wishlist.html" class="icon active swipe-to-top">--}}
{{--                                @auth--}}
{{--                                <form action="{{route('create.wish')}}" method="post" >--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="product_id" value="{{$item->id}}">--}}
{{--                                    <input type="hidden" name="user_id" value="{{$user->id}}">--}}

{{--                                    <button  style="background: transparent; border: none; outline: none; color: #fff"><a  class="icon active swipe-to-top"></a></button>--}}

{{--                                </form>--}}
{{--                                @endauth--}}


{{--                                    <div class="pro-buttons d-none d-lg-block d-xl-block">--}}
{{--                                        <div class="pro-icons">--}}
{{--                                            @guest--}}
{{--                                            <a  href="{{ route('login') }}" class="icon active swipe-to-top">--}}

{{--                                                <i class="fas fa-heart"></i>--}}
{{--                                            </a>--}}
{{--                                @endguest--}}

{{--                                    <i class="fas fa-heart"></i>--}}

{{--                                <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">--}}
{{--                                    <i class="fas fa-eye"></i>--}}
{{--                                </div>--}}
{{--                                <a href="{{ route('compare') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>--}}
{{--                            </div>--}}


                            <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                <a href="{{ route('wishlist') }}" class="icon active swipe-to-top">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <a href="{{ route('compare') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                            </div>

                            <div class="pro-thumb ">
{{--                                <div class="pro-tag bg-success">NEW</div>--}}
                                <a href="{{ route('product.index', $item->id)}}">
                                    <span class="pro-image"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"></span>
                                    <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"></span>
                                </a>

                                @auth
                                <div class="pro-buttons d-none d-lg-block d-xl-block">
                                    <div class="pro-icons">
{{--                                        <a href="wishlist.html" class="icon active swipe-to-top">--}}

                                        <form action="{{route('create.wish')}}" method="post" >
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$item->id}}">
                                            <input type="hidden" name="user_id" value="{{$user->id}}">

                                            <button  style="background: transparent; border: none; outline: none; color: #fff"><a  class="icon active swipe-to-top"></a></button>

                                        </form>
                                            <i class="fas fa-heart"></i>

                                        <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <a href="{{ route('compare') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                    </div>


{{--                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>--}}
                                    <form action="{{route('create.create')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$item->id}}">
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="color" value="">
                                        <input type="hidden" name="size" value="">
                                        <button  style="background: transparent; border: none; outline: none; color:#ffffff"><a  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>
                                    </form>

                                </div>
                                @endauth

                                @guest
                                    <div class="pro-buttons d-none d-lg-block d-xl-block">
                                        <div class="pro-icons">

                                            <a  href="{{ route('login') }}" class="icon active swipe-to-top">

                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                            <a href="{{ route('login') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                        </div>
                                        <button style="background: transparent; border: none; outline: none" ><a href="{{ route('login') }}"  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>
                                    </div>
                                @endguest

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

{{--<!-- Newsletter Modal -->--}}
{{--<div class="modal fade show" id="newsletterModal" tabindex="-1" role="dialog" aria-hidden="false">--}}

{{--    <div class="modal-dialog modal-lg" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-body">--}}

{{--                <div class="container">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="pro-image">--}}
{{--                                    <img class="img-fluid" src="images/miscellaneous/newsletter.jpg" alt="image">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <div class="promo-box">--}}

{{--                                <div class="text-01">--}}
{{--                                    Sign Up for Our Newsletter--}}
{{--                                </div>--}}
{{--                                <div class="text-03">--}}
{{--                                    Be the first to learn about our latest trends and get exclusive offers.--}}
{{--                                </div>--}}

{{--                                <form>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="email" value="" name="EMAIL" class="required email form-control"  placeholder="Enter Your Email Address...">--}}

{{--                                    </div>--}}

{{--                                    <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-secondary swipe-to-top">Subscribe</button>--}}
{{--                                </form>--}}



{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="alert alert-warning alert-dismissible alert-cookie fade show" role="alert">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-12 col-md-8 col-lg-9">--}}
{{--                <div class="pro-description">--}}
{{--                    This site uses cookies. By continuing to browse the site you are agreeing to our use of cookies. Review our <a href="#" class="btn-link">cookies information</a> for more details.--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 col-md-4 col-lg-3">--}}
{{--                <button type="button" class="btn btn-secondary swipe-to-top" data-dismiss="alert" aria-label="Close">--}}
{{--                    OK, I agree--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- All custom scripts here -->
<script src="js/scripts.js"></script>

<!-- Revolution JS Files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>

@include('partials.footer')
