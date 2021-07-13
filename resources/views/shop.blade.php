@include('partials.header')


<!-- Products content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.home') }}">{{ __('messages.главная') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.каталог') }}</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content shop-content shop-special">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    {{ __('messages.каталог') }}
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
                                            <option value="1">{{ __('messages.детская_мебель') }} </option>

{{--                                                 <option value="1.1">{{ __('messages.Детские_кроватки') }}</option>--}}
{{--                                                 <option value="1.2">{{ __('messages.Кроватки_трансформеры') }}</option>--}}
{{--                                                 <option value="1.3">{{ __('messages.Колыбели') }}</option>--}}
{{--                                                 <option value="1.4">{{ __('messages.Манежи') }}</option>--}}
{{--                                                 <option value="1.5">{{ __('messages.Комоды') }}</option>--}}
{{--                                                 <option value="1.6">{{ __('messages.Детская_кресло_качалки') }}</option>--}}



                                            <option value="2">{{ __('messages.постельные_принадлежности') }}</option>
                                            <option value="3">{{ __('messages.детские_игрушки_и_игры') }}</option>

                                            <option value="4">{{ __('messages.коляски_и_автокресла') }}</option>
                                            <option value="5">{{ __('messages.купание_малыша') }}</option>
                                        </select>
                                    </div>

                                </div>


                                <div class="form-group ">
                                    <label>{{ __('messages.цена') }}</label>
                                    <div class="select-control">
                                        <select class="form-control ">

                                            <option value="1">$1001-$2500</option>
                                            <option value="2">$501-$1000</option>
                                            <option value="3">0-$500</option>
                                        </select>
                                    </div>
                                </div>
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
{{--                                            <option value="3">{{ __('messages.размер') }}</option>--}}
                                        </select>
                                    </div>
                                </div>

                                <li><a class=" brands-btn" href="{{route('shop.shop',['category' =>  __('messages.детская_мебель'), 'name' => request()->name ])}}" role="button">
                                        <i class="fas fa-angle-right"></i>{{ __('messages.детская_мебель') }}</a></li>

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


                                    <li><a class=" brands-btn" href="{{route('shop.shop',['category' =>  __('messages.детская_мебель'), 'name' => request()->name ])}}" role="button">
                                            <i class="fas fa-angle-right"></i>{{ __('messages.детская_мебель') }}</a></li>
                                    <li><a class="  brands-btn" href="{{route('shop.shop',['category' =>  __('messages.постельные_принадлежности'), 'name' => request()->name ])}}" role="button">
                                            <i class="fas fa-angle-right"></i>{{ __('messages.постельные_принадлежности') }}</a></li>
                                    <li><a class=" brands-btn" href="{{route('shop.shop',['category' =>  __('messages.детские_игрушки_и_игры'), 'name' => request()->name ])}}" role="button">
                                            <i class="fas fa-angle-right"></i>{{ __('messages.детские_игрушки_и_игры') }}</a></li>
                                    <li><a class=" brands-btn" href="{{route('shop.shop',['category' =>  __('messages.коляски_и_автокресла'), 'name' => request()->name ])}}" role="button">
                                            <i class="fas fa-angle-right"></i>{{ __('messages.коляски_и_автокресла') }}</a></li>
                                    <li><a class=" brands-btn" href="{{route('shop.shop',['category' =>  __('messages.купание_малыша'), 'name' => request()->name ])}}" role="button">
                                            <i class="fas fa-angle-right"></i>{{ __('messages.купание_малыша') }} </a></li>
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
                                <ul  class="brands">
                                    <li><a class=" brands-btn" href="#" role="button">$10-$100
                                        </a></li>
                                    <li><a class="  brands-btn" href="#" role="button">$100-$200
                                        </a></li>
                                    <li><a class=" brands-btn" href="#" role="button">$200-$300
                                        </a></li>
                                    <li><a class=" brands-btn" href="#" role="button">$300-$400
                                        </a></li>
                                    <li><a class=" brands-btn" href="#" role="button">$400-$500</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


{{--                <div class="accordion shop-bar-categories" id="accordionExample3">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header" id="CardThree">--}}
{{--                            <a href="" class="mb-0"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                Color Selection--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div id="collapseThree" class="collapse show" aria-labelledby="CardThree" data-parent="#accordionExample3">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="pro-options">--}}
{{--                                    <div class="color-selection">--}}

{{--                                        <ul>--}}
{{--                                            <li class="active"><a class="bg-primary " href="javascript:void(0);"></a></li>--}}
{{--                                            <li ><a class="bg-secondary " href="javascript:void(0);"></a></li>--}}
{{--                                            <li ><a class="bg-success " href="javascript:void(0);"></a></li>--}}
{{--                                            <li ><a class="bg-info " href="javascript:void(0);"></a></li>--}}
{{--                                            <li ><a class="bg-warning " href="javascript:void(0);"></a></li>--}}
{{--                                            <li ><a class="bg-danger " href="javascript:void(0);"></a></li>--}}

{{--                                            <li ><a class="bg-light " href="javascript:void(0);"></a></li>--}}
{{--                                            <li ><a class="bg-dark " href="javascript:void(0);"></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="accordion shop-bar-categories" id="accordionExample4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header" id="CardFour">--}}
{{--                            <a href="" class="mb-0"  data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                Size Selection--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div id="collapseFour" class="collapse show" aria-labelledby="CardFour" data-parent="#accordionExample4">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="pro-options">--}}
{{--                                    <div class="size-selection">--}}

{{--                                        <ul>--}}
{{--                                            <li class="active"><a href="javascript:void(0);" tabindex="0">28</a></li>--}}
{{--                                            <li><a href="javascript:void(0);" tabindex="0">32</a></li>--}}
{{--                                            <li><a href="javascript:void(0);" tabindex="0">34</a></li>--}}
{{--                                            <li><a href="javascript:void(0);" tabindex="0">36</a></li>--}}
{{--                                            <li><a href="javascript:void(0);" tabindex="0">38</a></li>--}}
{{--                                            <li><a href="javascript:void(0);" tabindex="0">40</a></li>--}}
{{--                                            <li><a href="javascript:void(0);" tabindex="0">42</a></li>--}}
{{--                                            <li><a href="javascript:void(0);" tabindex="0">44</a></li>--}}
{{--                                            <li><a href="javascript:void(0);" tabindex="0">46</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="img-main">
                    <a href="shop-page1.html" ><img class="img-fluid" src="images/shop/side-image.jpg" alt="shop Image"></a>

                </div>
            </div>



            <div class="col-12 col-lg-9">

                <div class="products-area">

                    <div class="row">
                        <div id="swap" class="col-12 col-sm-12">

                            <div class="row">
                                        @foreach( $products as $item)
                                            <div class="col-12 col-sm-6  col-lg-4">

                                                <div class="product">

                                        <article>


                                            <div class="pro-thumb ">


                                                <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                                    <a href="{{ route('wishlist') }}" class="icon active swipe-to-top">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </div>
                                                    <a href="{{ route('compare') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                                </div>

                                                <a href="{{ route('product.index', $item->id)}}">
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

                                                            <button  style="background: transparent; border: none; outline: none; color: #fff"><a  class="icon active swipe-to-top"></a></button>

                                                        </form>
                                                            <i class="fas fa-heart"></i>

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


                                               <h2 class="pro-title"><a href="{{  route('product.index', $item->id)}}">{{ $item->getTranslatedAttribute('title', app()->getLocale())}}</a></h2>

                                               <div class="pro-price" >

                                                    <ins>{{$item->price}}</ins>

                                                </div>
                                                <span class="pro-info">
                                     {{ $item->getTranslatedAttribute('description', app()->getLocale())}}


                                                   </span>

                                                <div class="list2">

{{--                                                    <div class="pro-options">--}}
{{--                                                        <div class="color-selection">--}}
{{--                                                            <h4>Color: <span>Silver</span></h4>--}}
{{--                                                            <ul>--}}
{{--                                                                <li class="active"><a class="green " href="javascript:void(0);" tabindex="0"></a></li>--}}
{{--                                                                <li><a class="red " href="javascript:void(0);" tabindex="0"></a></li>--}}

{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="size-selection">--}}
{{--                                                            <h4>Size: <span>28</span></h4>--}}
{{--                                                            <ul>--}}
{{--                                                                <li class="active"><a href="javascript:void(0);" tabindex="0">28</a></li>--}}
{{--                                                                <li><a href="javascript:void(0);" tabindex="0">32</a></li>--}}

{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

                                                </div>
                                                <div class="pro-mobile-buttons d-lg-none d-xl-none">
{{--                                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">{{ __('messages.в_корзину') }}</button>--}}

                                                    <form action="{{route('create.create')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$item->id}}">
                                                        <input type="hidden" name="user_id" value="1">
                                                        <input type="hidden" name="count" value="1">
                                                        <input type="hidden" name="color" value="">
                                                        <input type="hidden" name="size" value="">
                                                        <button  style="background: transparent; border: none; outline: none"><a  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>
                                                    </form>


                                                </div>

                                            </div>

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
{{--                            <li class="loader-page-item " ><a href="#">--}}

{{--                                    <i class="fa fa-angle-double-left" style="font-size:12px"></i></a>--}}
{{--                            </li>--}}

{{--                            <li  class="loader-page-item" ><a href="#">1</a></li>--}}

{{--                            <li  class="loader-page-item "><a href="#">2</a></li>--}}

{{--                            <li  class="loader-page-item "><a href="#">3</a></li>--}}

{{--                            <li  class="loader-page-item "><a href="#">4</a></li>--}}

{{--                            <li  class="loader-page-item "><a href="#">--}}

{{--                                    <i class="fa fa-angle-double-right" style="font-size:12px"></i></a>--}}

{{--                           </li>--}}
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
