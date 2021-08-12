@include('partials.header')


<!-- Products content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.home') }}">{{ __('messages.главная') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.новинки') }}</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content shop-content shop-special">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    {{ __('messages.новинки') }}
                </h1>
            </div>
        </div>
        <div class="top-bar">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-2">
                            <div class="block">
                                <label>{{ __('messages.дисплей') }}</label>
                                <div class="buttons">
                                    <a href="javascript:void(0);" id="grid_3column" class="fas fa-th-large active"></a>
                                    <a href="javascript:void(0);" id="list_3column" class="fas fa-list"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <form class="form-inline justify-content-center">
                                <div class="form-group ">
                                    <label>{{ __('messages.категории') }}</label>
                                    <div class="select-control">
                                        <select class="form-control ">
                                            <option value="1">{{ __('messages.детская_мебель') }}</option>

                                            <option value="2">{{ __('messages.постельные_принадлежности') }}</option>
                                            <option value="3">{{ __('messages.детские_игрушки_и_игры') }}</option>

                                            <option value="4">{{ __('messages.коляски_и_автокресла') }}</option>
                                            <option value="5">{{ __('messages.купание_малыша') }}</option>
                                        </select>
                                    </div>

                                </div>


{{--                                <div class="form-group ">--}}
{{--                                    <label>{{ __('messages.цена') }}</label>--}}
{{--                                    <div class="select-control">--}}
{{--                                        <select class="form-control ">--}}

{{--                                            <option value="1">$1001-$2500</option>--}}
{{--                                            <option value="2">$501-$1000</option>--}}
{{--                                            <option value="3">0-$500</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                {{--                                <div class="form-group ">--}}
                                {{--                                    <label>{{ __('messages.размер') }}</label>--}}
                                {{--                                    <div class="select-control">--}}
                                {{--                                        <select class="form-control ">--}}


                                {{--                                            <option value="1">Medium</option>--}}
                                {{--                                            <option value="2">Large</option>--}}
                                {{--                                            <option value="3">Small</option>--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                            </form>
                        </div>
                        <div class="col-12 col-lg-4">
                            <form class="form-inline justify-content-end">

                                                                <div class="form-group">
                                                                    <label>{{ __('messages.сортировать_по') }}</label>
                                                                    <div class="select-control">
                                                                        <select class="form-control ">

                                                                            <option selected>{{ __('messages.новинки') }}</option>
                                                                            <option  value="1">{{ __('messages.популярные') }}</option>
                                                                            <option value="2">{{ __('messages.акции') }}</option>
{{--                                                                                                                        <option value="3">{{ __('messages.размер') }}</option>--}}
                                                                        </select>
                                                                    </div>
                                                                </div>

                                {{--                                <div class="form-group">--}}
                                {{--                                    <label>Items</label>--}}
                                {{--                                    <div class="select-control">--}}
                                {{--                                        <select class="form-control ">--}}
                                {{--                                            <option selected>08</option>--}}
                                {{--                                            <option value="1">20</option>--}}
                                {{--                                            <option value="2">16</option>--}}
                                {{--                                            <option value="3">12</option>--}}
                                {{--                                            <option value="4">08</option>--}}
                                {{--                                            <option value="5">04</option>--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}

                                {{--                                </div>--}}




                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-lg-3  d-lg-block d-xl-block right-menu">
                <div class="accordion shop-bar-categories" id="accordionExample1">
                    <div class="card">
                        <div class="card-header" id="CardOne">
                            <a href="" class="mb-0"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ __('messages.категории') }}
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="CardOne" data-parent="#accordionExample1">
                            <div class="card-body">
                                <ul  class="brands">
                                    <li><a class=" brands-btn" href="{{ route('shop.shop') }}" role="button"><i class="fas fa-angle-right"></i>{{ __('messages.смотреть_все') }}</a></li>
                                    <li><a class=" brands-btn" href="#" role="button"><i class="fas fa-angle-right"></i>{{ __('messages.детская_мебель') }}</a></li>
                                    <li><a class="  brands-btn" href="#" role="button"><i class="fas fa-angle-right"></i>{{ __('messages.постельные_принадлежности') }}</a></li>
                                    <li><a class=" brands-btn" href="#" role="button"><i class="fas fa-angle-right"></i>{{ __('messages.детские_игрушки_и_игры') }}</a></li>
                                    <li><a class=" brands-btn" href="#" role="button"><i class="fas fa-angle-right"></i>{{ __('messages.коляски_и_автокресла') }}</a></li>
                                    <li><a class=" brands-btn" href="#" role="button"><i class="fas fa-angle-right"></i>{{ __('messages.купание_малыша') }} </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion shop-bar-categories" id="accordionExample2">
                    <div class="card">
                        <div class="card-header" id="CardTwo">
                            <a href="" class="mb-0"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                {{ __('messages.цена') }}
                            </a>
                        </div>

                        <div id="collapseTwo" class="collapse show" aria-labelledby="CardTwo" data-parent="#accordionExample2">
                            <div class="card-body">
                                <div class="slidecontainer">
                                    <input type="range" min="10" max="30000" value="5000" class="slider" id="myRange">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="img-main">
                    <a href="{{ route('shop.shop') }}" ><img class="img-fluid" src="{{ Voyager::image($shopimg_new->img) }}" alt="shop Image"></a>

                </div>
            </div>

            <div class="col-12 col-lg-9">

                <div class="products-area">

                    <div class="row">
                        <div id="swap" class="col-12 col-sm-12">

                            <div class="row">
                                @foreach( $new_products as $item)
                                    <div class="col-12 col-sm-6  col-lg-4">

                                        <div class="product">

                                            <article>


                                                <div class="pro-thumb ">
                                                    @auth
                                                        <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none" >

                                                            <form action="{{route('create.wish')}}" method="post" >
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{$item->id}}">
                                                                <input type="hidden" name="user_id" value="{{$user->id}}">

                                                                <button  style="background: transparent; border: none; outline: none; color: #fff"><a  class="icon active swipe-to-top"><i class="fas fa-heart"></i></a></button>

                                                            </form>
                                                            <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                                                <i class="fas fa-eye"></i>
                                                            </div>
                                                            <a href="{{ route('compare') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                                        </div>
                                                    @endauth

                                                    @guest
                                                        <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                                            <a href="{{ route('login') }}" class="icon active swipe-to-top">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                                                <i class="fas fa-eye"></i>
                                                            </div>
                                                            <a href="{{ route('login') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                                        </div>
                                                    @endguest

                                                    <a href="{{ route('new.products', $item->id)}}">
                                                        <span class="pro-image"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"></span>
                                                        <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"></span>
                                                    </a>

                                                    @auth
                                                        <div class="pro-buttons d-none d-lg-block d-xl-block">
                                                            <div class="pro-icons">
                                                                {{--                                                        <a href="{{route('create.wish')}}" class="icon active swipe-to-top">--}}

                                                                <form action="{{route('create.wish')}}" method="post" >
                                                                    @csrf
                                                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                                                    <input type="hidden" name="user_id" value="{{$user->id}}">

                                                                    <button  style="background: transparent; border: none; outline: none; color: #fff"><a  class="icon active swipe-to-top"><i class="fas fa-heart"></i></a></button>

                                                                </form>


                                                                <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </div>
                                                                <a href="{{ route('compare') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                                            </div>
                                                            {{--                                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">{{ __('messages.в_корзину') }}</button>--}}
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
                                                <div class="pro-description"            style="word-wrap: break-word;
                                                                                    /*height: 150px;*/
                                                                                    overflow: hidden;
                                                                                    display: block;
                                                                                    display: -webkit-box;

                                                                                    margin: 3px auto;
                                                                                    font-size: 14px;
                                                                                    line-height: 1.4;
                                                                                    -webkit-line-clamp: 2;
                                                                                    -webkit-box-orient: vertical;
                                                                                    text-overflow: ellipsis" >


                                                    <h2 class="pro-title"><a href="{{  route('new.products', $item->id)}}">{{ $item->getTranslatedAttribute('title', app()->getLocale())}}</a></h2>

                                                    <div class="pro-price" >

                                                        <ins>{{$item->price}}</ins>

                                                    </div>
                                                    <span class="pro-info">
                                     {{ $item->getTranslatedAttribute('description', app()->getLocale())}}


                                                   </span>
                                                </div>
                                                    @auth
                                                        <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                                            {{----}}
                                                            <form action="{{route('create.create')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{$item->id}}">
                                                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                                                <input type="hidden" name="count" value="1">
                                                                <input type="hidden" name="color" value="">
                                                                <input type="hidden" name="size" value="">
                                                                <button  style="background: transparent; width: 100%; color: white; border: none; outline: none"><a  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>
                                                            </form>
                                                        </div>
                                                    @endauth

                                                    @guest
                                                        <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                                            <button style="background: transparent; width: 100%; border: none; outline: none" ><a href="{{ route('login') }}"  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>

                                                        </div>
                                                    @endguest



                                            </article>
                                        </div>

                                    </div>

                                @endforeach


                            </div>

                        </div>
                    </div>

                </div>

                <div class="pagination justify-content-between ">


{{--                    <label  class="col-form-label">Showing 1&ndash;<span class="showing_record">1</span>&nbsp;of&nbsp;<span class="showing_total_record">23</span>&nbsp;results.</label>--}}
                    <div class="col-12 col-sm-6">

                        <ol class="loader-page">

                                                       {{ $products->links() }}
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Modal -->


@include('partials.footer')


