<?php
$user=Auth::user();
$cartProduct=DB::table('products')
    ->leftJoin('cart', 'products.id', 'cart.product_id')->where('cart.user_id',$user->id)
    ->get();
$total=0;
?>

<li class="cart-header dropdown head-cart-content" data-toggle="tooltip" data-placement="bottom" title={{ __('messages.корзина') }}>
<button type="button" id="dropdownCart" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
    <i class="fas fa-shopping-cart"></i>

    <?php $qt=1; ?>
    <span class="badge badge-secondary">2</span>
</button>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCart">
    <ul class="shopping-cart-items">
        @foreach($cartProduct as $item)
        <li>
            <div class="item-thumb">


                <div class="image">
                    <img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image">
                </div>
            </div>
            <div class="item-detail">
                <h2>{{ $item->title}}</h2>
                <div class="item-s">{{ $item->count}} x {{ $item->price}} <a href="{{  route('cart.remove',$item->id)}}"> <i class="fas fa-trash"></i></a></div>
            </div>
        </li>
        <?php $total+= $item->count*$item->price; ?>
        @endforeach
        <li>
                              <span class="item-summary">{{ __('messages.Итог') }}&nbsp;:&nbsp;<span>${{$total}}</span>
                              </span>
        </li>
        <li>
            <a class="btn  btn-link btn-block " href="{{ route('cart.cart') }}">{{ __('messages.корзина') }}</a>
            <a class="btn btn-secondary btn-block  swipe-to-top" href="{{ route('cart.cart') }}">{{ __('messages.оформления_заказа') }}</a>
        </li>
    </ul>


</div>
</li>


