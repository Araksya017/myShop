@include('partials.header')


<!-- cart Content -->
<!-- cart Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.home') }}">{{ __('messages.главная') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.корзина') }}</li>
            </ol>
        </div>
    </nav>
</div>

<?php
$user=Auth::user();
$cartProduct=DB::table('products')
    ->leftJoin('cart', 'products.id', 'cart.product_id')->where('cart.user_id',$user->id)
    ->get();
$total=0;
$total_sum = 0;
$cart_count = 0;
?>

<section class="pro-content cart-content">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    {{ __('messages.корзина') }}
                </h1>
            </div>
        </div>
        <div class="row">
<?php $count = 1; ?>
            <div class="col-12 col-lg-9">
                @foreach($products as $item)

                <table class="table top-table">
                    <!-- <thead>
                      <tr class="d-flex">
                        <th class="col-12 col-md-2">ITEM(S)</th>
                        <th class="col-12 col-md-4"></th>
                        <th class="col-12 col-md-2">PRICE</th>
                        <th class="col-12 col-md-2">QTY</th>
                        <th class="col-12 col-md-2">SUBTOTAL</th>
                      </tr>
                    </thead> -->
                    <tbody>
                    <tr class="d-flex">
                        <td class="col-12 col-md-2" >
                            <img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"/>
                        </td>
                        <?php $total = $item->count * $item->price; ?>


                        <td class="col-12 col-md-4">
                            <div class="item-detail">
{{--                                <span class="pro-info">{{ $item->parent_id}}</span>--}}


                                <h2 class="pro-title">
                                        <a href="{{  route('product.index', $item->id)}}">{{ $item->title}}</a>
                                    </h2>


                                <div class="item-attributes"></div>
                                <div class="item-controls">
                                    <button type="button" class="btn" >
                                        <span class="fas fa-pencil-alt"></span>
                                    </button>
                                    <a href="{{  route('cart.remove',$item->id)}}"><button type="button" class="btn" >
                                       <span class="fas fa-times"></span>
                                    </button> </a>
                                </div>
                            </div>
                        </td>
                        <td class="col-12 col-md-2">
                            <span class="item-price">{{$item->price}}</span>
                        </td>

                        <td class="col-12 col-md-2">
                            <div class="input-group item-quantity">

                                <input type="text" id="quantity{{$count}}" name="quantity" class="form-control" value="{{$item -> count}}" >


                                <span class="input-group-btn">


                                <button type="button" value="quantity{{$count}}" class="quantity-plus btn"  data-type="minus" data-field="">


                                  <span class="fas fa-plus"></span>
                                </button>


{{--                                    <form action="{{route('create.create')}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="product_id" value="{{$item->id}}">--}}
{{--                                    <input type="hidden" name="user_id" value="1">--}}
{{--                                    <input type="hidden" name="count" value="1">--}}
{{--                                    <input type="hidden" name="color" value="">--}}
{{--                                    <input type="hidden" name="size" value="">--}}

                                <button type="button" value="quantity{{$count++}}" class="quantity-minus btn" data-type="plus" data-field="">
{{--                                    <a href="{{ route('shop.shop') }}" ></a>--}}
                                              <span class="fas fa-minus"></span>
                                </button>
                            </span>

                            </div>

                        </td>
                        <td class="col-12 col-md-2"><span class="item-price">{{ $total}}  <a href="{{  route('cart.remove',$item->id)}}"></a></span></td>
                    </tr>




                    </tbody>
                </table>
                    <?php $total_sum+= $item->count*$item->price; ?>

                @endforeach

                <div class="col-12 col-lg-12 mb-4">

                    <div class="row justify-content-between">
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="input-group">
                                    <input type="text" class="form-control" style="height: 43px;" placeholder="{{ __('messages.Код_купона') }}" aria-label="Coupon code" aria-describedby="coupon-code">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary swipe-to-top" type="button" id="coupon-code">{{ __('messages.Применять') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="row justify-content-end btn-res">
                                <button type="button" class="btn btn-link "><a href="{{  route('shop.shop')}}">{{ __('messages.Продолжить_покупки') }}</a></button>
                                <button type="button" class="btn btn-primary swipe-to-top"><a href="{{  route('cart.cart')}}">{{ __('messages.Обновлять') }}</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">



                <table class="table right-table">
                    <thead>
                    <tr>
                        <th scope="col" colspan="2" >{{ __('messages.Итог_заказа') }}</th>

                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <th scope="row">{{ __('messages.Промежуточная_цена') }}</th>
                        <td >{{ $total_sum}}</td>

                    </tr>
                    <tr>
                        <th scope="row">{{ __('messages.Код_купона') }}</th>
                        <td >$20</td>

                    </tr>
                    <tr class="item-price">
                        <th scope="row">{{ __('messages.Итог') }}</th>
                        <td >{{ $total_sum}}</td>

                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block swipe-to-top"><a style="color: #ffffff" href="{{  route('checkout')}}">{{ __('messages.Перейти_к_оформлению_заказа') }}</a></button>
            </div>
        </div>

    </div>
</section>
@include('partials.footer')
