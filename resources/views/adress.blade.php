

@include('partials.header')



<!--Shipping Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.home') }}">{{ __('messages.главная') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.адрес_доставки') }}</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content shipping-content">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    {{ __('messages.адрес_доставки') }}
                </h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-lg-3">


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


                <table class="table">
                    <thead>
                    <tr class="d-flex">
                        <th class="col-12 col-md-8">{{ __('messages.адрес_доставки') }}</th>
                        <th class="col-12 col-md-4">{{ __('messages.действие') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="d-flex">

                        <td class="col-12 col-md-8">

                            <div class="form-check">
{{--                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">--}}
{{--                                <label class="form-check-label" for="exampleRadios1">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,--}}
{{--                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--                                </label>--}}

                            </div>
                        </td>

                        <td class=" col-12 col-md-4">
                            <ul  class="controls">
                                <li><a href="{{ route('users.users') }}"> <i class="fas fa-pen"></i> {{ __('messages.Редактировать') }}</a></li>
                                <li><a href="#"> <i class="fas fa-trash-alt"></i> {{ __('messages.Удалить') }}</a></li>
                            </ul>

                        </td>
                    </tr>


                    </tbody>
                </table>


                <div class="add-address">
                    <form action="{{ route('adress.update') }}" name="general-form">
                        @csrf
                        <h4 >{{ __('messages.Персональная_информация') }}</h4>

                        <div class="form-row">
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group ">

                                    <input type="text" name="name" value = "{{$user->name}}" class="form-control" id="inlineFormInputGroup0" placeholder="{{ __('messages.введите_ваше_имя') }}">
                                </div>
                            </div>
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group ">

                                    <input type="text" name="surname" value = "{{$user->surname}}" class="form-control" id="inlineFormInputGroup1" placeholder="{{ __('messages.введите_ваше_фамилию') }}">
                                </div>
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group ">

                                    <input type="text" name="phone"  value = "{{$user->phone}}"class="form-control" id="inlineFormInputGroup2" placeholder="{{ __('messages.номер_телефона') }}">
                               </div>
                            </div>
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group ">

                                    <input type="text" name="address" value = "{{$user->adress}}" class="form-control" id="inlineFormInputGroup3" placeholder="{{ __('messages.адрес_ул_дом_кв') }}">
                                </div>
                            </div>
                        </div>
{{--                        <div class="form-row">--}}
{{--                            <div class="from-group col-md-6 mb-4">--}}
{{--                                <div class="input-group select-control">--}}

{{--                                    <select class="form-control" name="SelectName" id="inlineFormInputGroup4">--}}
{{--                                        <option selected>{{ __('messages.Выберите_страну') }}</option>--}}
{{--                                        <option value="1">Canada</option>--}}
{{--                                        <option value="2">United Kingdom</option>--}}
{{--                                        <option value="3">United States</option>--}}

{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="from-group col-md-6 mb-4">--}}
{{--                                <div class="input-group select-control">--}}

{{--                                    <select class="form-control" name="SelectStateName" id="inlineFormInputGroup5">--}}
{{--                                        <option selected>{{ __('messages.Выберите_район') }}</option>--}}
{{--                                        <option value="1">Alaska</option>--}}
{{--                                        <option value="2">New York</option>--}}
{{--                                        <option value="3">Taxes</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                        <div class="form-row">
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group"  >

                                    <input type="text" name="city" value = "{{$user->city}}" class="form-control" id="inlineFormInputGroup7" placeholder="{{ __('messages.город') }}">
                                </div>
                            </div>
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group"  >

                                    <input type="text" name="post" value = "{{$user->post}}" class="form-control" id="inlineFormInputGroup7" placeholder="{{ __('messages.Почтовый_индекс') }}">
                                </div>
                            </div>

                        </div>
{{--                        <div class="form-row">--}}
{{--                            <div class="from-group col-md-6 mb-4">--}}
{{--                                <div class="input-group">--}}

{{--                                    <input type="text" name="phone" class="form-control" id="inlineFormInputGroup8" placeholder="{{ __('messages.номер_телефона') }}">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

                        <button type="submit" class="btn btn-secondary swipe-to-top">{{ __('messages.Добавить_адрес') }}</button>
                    </form>
                </div>
                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>






@include('partials.footer')
