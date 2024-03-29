
@include('partials.header')

<!--My Order Content -->
<section class="pro-content order-detail-content">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    {{ __('messages.Информация_о_заказе') }}
                </h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-lg-3 ">


                <ul class="list-group mb-4">
                    <li class="list-group-item">
                        <a class="nav-link" href="{{ route('login') }}">
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
                        <a class="nav-link" href="{{ route('order') }}">
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
                        <a class="nav-link" href="{{ route('logout') }}">
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


                <div class="row">
                    <div class="col-12 col-md-6">
                        <h4>{{ __('messages.Идентификатор_заказа') }} 35468430
                        </h4>

                        <table class="table order-id">
                            <tbody>
                            <tr class="d-flex">
                                <td class="col-6 col-md-6 pb-0"><strong>{{ __('messages.Статус_заказа') }}</strong></td>
                                <td class="pending col-6 col-md-6 pb-0" ><p>Pending</p></td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-6 col-md-6 "><strong>{{ __('messages.Дата_Заказа') }}</strong></td>
                                <td  class="col-6 col-md-6">28/04/2019</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-12 col-md-6">
                        <h4>
                            {{ __('messages.способы_оплаты') }}
                        </h4>

                        <table class="table order-id">
                            <tbody>
                            <tr class="d-flex">
                                <td class="col-6 pb-0"><strong>{{ __('messages.Метод_доставки') }}</strong> </td>
                                <td class="col-6 pb-0">Flat Rate</td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-6"><strong>{{ __('messages.способ_оплаты_2') }}</strong> </td>
                                <td class="underline col-6">Cash on Delivery</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <h4>{{ __('messages.Детали_Доставки') }}
                        </h4>

                        <table class="table order-id">
                            <tbody>
                            <tr class="d-flex">
                                <td class="address col-12 col-md-6 pb-0"><strong>{{ __('messages.адрес_доставки') }}</strong></td>


                            </tr>
                            <tr class="d-flex">
                                <td  class="address col-12 col-md-12">Address Details, Near, City Name, Country Name</td>

                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-12 col-md-6">
                        <h4>
                            {{ __('messages.данные_для_выставления_счета') }}
                        </h4>

                        <table class="table order-id">
                            <tbody>
                            <tr class="d-flex">
                                <td class="address col-12 pb-0"><strong>{{ __('messages.адрес_доставки') }}</strong> </td>
                            </tr>
                            <tr  class="d-flex">
                                <td class="address col-12">Address Details, Near, City Name, Country Name</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

                <table class="table top-table">
                    <thead>
                    <tr class="d-flex">
                        <th class="col-12 col-md-2">{{ __('messages.товары1') }}</th>
                        <th class="col-12 col-md-4"></th>
                        <th class="col-12 col-md-2">{{ __('messages.цена1') }}</th>
                        <th class="col-12 col-md-2">{{ __('messages.количество') }}</th>
                        <th class="col-12 col-md-2">{{ __('messages.Промежуточная_цена1') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="d-flex">
                        <td class="col-12 col-md-2" >
                            <img class="img-fluid" src="images/product_images/product_image_02.jpg" alt="Product Image"/>
                        </td>
                        <td class="col-12 col-md-4">
                            <div class="item-detail">
                                <span class="pro-info">Earrings</span>
                                <h2 class="pro-title">

                                    <a href="#">
                                        Crytal Wedding Engagement Rings
                                    </a>

                                </h2>

                                <div class="item-attributes"></div>

                            </div>
                        </td>
                        <td class="col-12 col-md-2"><span class="item-price">$285</span></td>
                        <td class="col-12 col-md-2">
                            <div class="input-group "> 2</div>
                        </td>
                        <td class="col-12 col-md-2"><span class="item-price">$540</span></td>
                    </tr>

                    </tbody>
                </table>

                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="comments-area">
                            <h4>
                                Order Comments
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis justo lacus, eu venenatis urna varius vitae. Vestibulum felis risus, tempus vitae consequat vel, porta at lacus. Curabitur sit amet scelerisque libero, sit amet feugiat ligula. Proin quis ex consectetur odio blandit vestibulum. Nullam fringilla pulvinar porttitor. Proin aliquet sapien fermentum justo placerat, et lacinia est egestas. Suspendisse ultricies finibus ex. Fusce sit amet est vel nisi ultricies cursus. Etiam ultricies malesuada dignissim.</p>
                        </div>
                    </div>
                </div>


                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>


@include('partials.footer')
