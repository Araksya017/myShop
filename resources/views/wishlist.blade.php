

@include('partials.header')

<!-- wishlist Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.home') }}">{{ __('messages.главная') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.Мои_желания') }}</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content wishlist-content">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    {{ __('messages.Мои_желания') }}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class=" col-12 col-lg-3">


                <ul class="list-group">
                    <li class="list-group-item">
                        <a class="nav-link" href="{{ route('users.users') }}">
                            <i class="fas fa-user"></i>
                            {{ __('messages.профиль') }}
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="{{ route('wishlist') }}">
                            <i class="fas fa-heart"></i>
                            {{ __('messages.Мои_желания') }}
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="{{ route('cart.cart') }}">
                            <i class="fas fa-shopping-cart"></i>
                            {{ __('messages.мои_заказы') }}
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="{{ route('adress') }}">
                            <i class="fas fa-map-marker-alt"></i>
                            {{ __('messages.адрес_доставки') }}
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-power-off"></i>
                            {{ __('messages.выйти') }}
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="{{ route('changepsw') }}">
                            <i class="fas fa-unlock-alt"></i>
                            {{ __('messages.изменить_пароль') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-9 ">

                @foreach($products as $item)
                <div class="media">



                    <div class="media-thumb">
                         <img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image">
                         </div>
                    <div class="media-body">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <h2><a href="{{  route('product.index', $item->id)}}">{{ $item->title}}</a></h2>
                                <div class="pro-price">
                                    <ins>{{$item->price}}</ins>
                                </div>
                                <p class="d-none d-lg-block d-xl-block">{{$item->description}}</p>
                                <div class="buttons">
                                    <div class="input-group item-quantity">

{{--                                        <input type="text" id="quantity1" name="quantity" class="form-control" value="2" >--}}

{{--                                        <span class="input-group-btn">--}}
{{--                                          <button type="button" value="quantity1" class="quantity-plus btn"  data-type="plus" data-field="">--}}
{{--                                            <span class="fas fa-plus"></span>--}}
{{--                                          </button>--}}

{{--                                          <button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">--}}
{{--                                              <span class="fas fa-minus"></span>--}}
{{--                                          </button>--}}
{{--                                      </span>--}}


                                    </div>
{{--                                    <a  class="btn btn-secondary swipe-to-top">--}}

                                        <form action="{{route('create.create')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$item->id}}">
                                            <input type="hidden" name="user_id" value="1">
                                            <input type="hidden" name="count" value="1">
                                            <input type="hidden" name="color" value="">
                                            <input type="hidden" name="size" value="">
                                            <button style="background: transparent; border: none; outline: none; color: white" ><a  class="btn btn-secondary swipe-to-top">{{ __('messages.добавить_в_корзину') }}</a></button>

                                        </form>


{{--                                        {{ __('messages.добавить_в_корзину') }}--}}
{{--                                    </a>--}}

                                </div>
                            </div>
                            <div class="col-12 col-md-4 detail">

                                <div class="share"><a href="#">{{ __('messages.поделиться') }} &nbsp;<i class="fas fa-share"></i></a> </div>
                                <div class="share"><a href="{{  route('wish.remove',$item->id)}}">{{ __('messages.удалить') }} &nbsp;<i class="fas fa-trash-alt"></i></a> </div>
                            </div>
                        </div>
                    </div>



                </div>
                <hr class="border-line">
                @endforeach
{{--                <div class="media">
{{--                    <div class="media-thumb">--}}
{{--                        <img class="img-fluid" src="images/product_images/product_image_03.jpg" alt="Product Image">--}}
{{--                    </div>--}}
{{--                    <div class="media-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-md-8">--}}
{{--                                <h2><a href="product-page1.html">Crytal Wedding Engagement Rings</a></h2>--}}
{{--                                <div class="pro-price">--}}
{{--                                    <ins>$85</ins>--}}
{{--                                </div>--}}
{{--                                <p class="d-none d-lg-block d-xl-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                <div class="buttons">--}}
{{--                                    <div class="input-group item-quantity">--}}

{{--                                        <input type="text" id="quantity2" name="quantity" class="form-control" value="5">--}}

{{--                                        <span class="input-group-btn">--}}
{{--                                  <button type="button" value="quantity2" class="quantity-plus btn" data-type="plus" data-field="">--}}
{{--                                      <i class="fas fa-plus"></i>--}}
{{--                                  </button>--}}

{{--                                  <button type="button" value="quantity2" class="quantity-minus btn" data-type="minus" data-field="">--}}
{{--                                      <i class="fas fa-minus"></i>--}}
{{--                                  </button>--}}
{{--                              </span>--}}
{{--                                    </div>--}}
{{--                                    <a href="cart-page1.html" class="btn btn-secondary swipe-to-top">--}}
{{--                                        Add to Cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-4 detail">--}}

{{--                                <div class="share"><a href="#">Share &nbsp;<i class="fas fa-share"></i></a> </div>--}}
{{--                                <div class="share"><a href="#">Remove &nbsp;<i class="fas fa-trash-alt"></i></a> </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <hr class="border-line">--}}

{{--                <div class="media">--}}
{{--                    <div class="media-thumb">--}}
{{--                        <img class="img-fluid" src="images/product_images/product_image_04.jpg" alt="Product Image">--}}
{{--                    </div>--}}
{{--                    <div class="media-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-md-8 ">--}}
{{--                                <h2><a href="product-page1.html">Women Wedding Zircon Engagement Ring</a></h2>--}}
{{--                                <div class="pro-price">--}}
{{--                                    <del>$450</del><ins>$285</ins>--}}
{{--                                </div>--}}
{{--                                <p class="d-none d-lg-block d-xl-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing elit.</p>--}}
{{--                                <div class="buttons">--}}
{{--                                    <div class="input-group item-quantity">--}}

{{--                                        <input type="text" id="quantity3" name="quantity3" class="form-control" value="4" >--}}

{{--                                        <span class="input-group-btn">--}}
{{--                                  <button type="button" value="quantity3" class="quantity-plus btn"  data-type="plus" data-field="">--}}
{{--                                    <span class="fas fa-plus"></span>--}}
{{--                                  </button>--}}

{{--                                  <button type="button" value="quantity3" class="quantity-minus btn" data-type="minus" data-field="">--}}
{{--                                      <span class="fas fa-minus"></span>--}}
{{--                                  </button>--}}
{{--                              </span>--}}


{{--                                    </div>--}}
{{--                                    <a href="cart-page1.html" class="btn btn-secondary swipe-to-top">--}}
{{--                                        Add to Cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="col-12 col-md-4 detail">--}}

{{--                                <div class="share"><a href="#">Share &nbsp;<i class="fas fa-share"></i></a> </div>--}}
{{--                                <div class="share"><a href="#">Remove &nbsp;<i class="fas fa-trash-alt"></i></a> </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <hr class="border-line">--}}

                <div class="pagination justify-content-between ">

                    <label  class="col-form-label">Showing 1&ndash;<span class="showing_record">1</span>&nbsp;of&nbsp;<span class="showing_total_record">23</span>&nbsp;results.</label>

                    <div class="col-12 col-sm-6">
                        <ol class="loader-page">
                            <li class="loader-page-item"><a href="#">
                                    <i class="fa fa-angle-double-left" style="font-size:12px"></i></a>
                            </li>
                            <li  class="loader-page-item"><a href="#">1</a></li>
                            <li  class="loader-page-item"><a href="#">2</a></li>
                            <li  class="loader-page-item"><a href="#">3</a></li>
                            <li  class="loader-page-item"><a href="#">4</a></li>
                            <li  class="loader-page-item"><a href="#">
                                    <i class="fa fa-angle-double-right" style="font-size:12px"></i></a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>


@include('partials.footer')
