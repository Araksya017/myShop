@include('partials.header')


<!-- Profile Content -->

<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.home') }}">{{ __('messages.главная') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.профиль') }}</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content profile-content">
    <div class="container ">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    {{ __('messages.личная_страничка') }}
                </h1>
            </div>
        </div>
        <div class="row">


            <div class="col-12">

                <div class="media">
{{--                    <img src="{{ ($user->img) }}" alt="avatar">--}}
                    <div class="media-body">
                        <h5 class="mt-0">{{$user->name}}  {{$user->surname}}</h5>
                        <p>E-mail:<a href="#">{{$user->email}}</a></p>

                    </div>
                </div>

            </div>

        </div>
        <div class="row ">
            <div class=" col-12 col-lg-3">


                <ul class="list-group mb-4">
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
                <form  action="{{ route('user.update') }}" method="post" name="general-form">
                    @csrf

                    <div class="row">

                            <div class="col-12 col-md-7">
                            <h5> {{ __('messages.обновить_профиль') }}</h5>

                                <div class="from-group row mb-4 pt-3">

                                <div class="input-group col-12">

                                    <input type="text" name="name" value = "{{$user->name}}" class="form-control" id="inlineFormInputGroup0" placeholder="{{ __('messages.введите_ваше_имя') }}">
                                </div>
                            </div>
                            <div class="from-group row mb-4">

                                <div class="input-group col-12">

                                    <input type="text" name="surname" value = "{{$user->surname}}" class="form-control" id="inlineFormInputGroup1" placeholder="{{ __('messages.введите_ваше_фамилию') }}">
                                </div>
                            </div>
                                <div class="from-group row mb-4">

                                    <div class="input-group col-12">

                                        <input type="text" name="city" value = "{{$user->city}}" class="form-control" id="inlineFormInputGroup1" placeholder="{{ __('messages.город') }}">
                                    </div>
                                </div>

                                <div class="from-group row mb-4">

                                    <div class="input-group col-12">

                                        <input type="text" name="adress" value = "{{$user->adress}}" class="form-control" id="inlineFormInputGroup1" placeholder="{{ __('messages.адрес_ул_дом_кв') }}">
                                    </div>
                                </div>
                                <div class="from-group row mb-4">

                                    <div class="input-group col-12">

                                        <input type="text" name="post" value = "{{$user->post}}" class="form-control" id="inlineFormInputGroup1" placeholder="{{ __('messages.Почтовый_индекс') }}">
                                    </div>
                                </div>
                            <div class="from-group row mb-4">

                                <div class="input-group col-12">

                                    <input type="text" name="email" value = "{{$user->email}}"  class="form-control" id="inlineFormInputGroup2" placeholder="{{ __('messages.введите_ваш_электронный_адрес') }}">
                                </div>
                            </div>
                            <div class="from-group row mb-4">

                                <div class="input-group col-12">
                                    <select class="form-control"  name="gender" id="inlineFormInputGroup3">
                                        <option name="gender">{{ __('messages.пол') }}</option>
                                        <option>{{ __('messages.мужской') }}</option>
                                        <option>{{ __('messages.женский') }}</option>

                                    </select>
                                </div>
                            </div>


                            <div class="from-group row mb-4">

                                <div class="input-group col-12">
                                    <input type="text" name="phone" value = "{{$user->phone}}" class="form-control" placeholder="{{ __('messages.напишите_свой_номер_телефона') }}" id="inlineFormInputGroup4">
                                </div>
                            </div>



                            <button type="submit" class="btn btn-secondary mt-3 swipe-to-top">{{ __('messages.обновить') }}</button>

                        </div>
{{--                        <div class="col-12 col-md-5">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    Aliquam ac mi ultricies, congue ex vel, aliquam nisi.--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    Cras ultrices felis at elit luctus, eget venenatis lacus luctus.--}}
{{--                                    Cras vel nisl non ligula euismod elementum.--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    Curabitur volutpat risus ornare justo eleifend, id imperdiet neque iaculis.--}}
{{--                                    Etiam sagittis eros id rhoncus bibendum.--}}
{{--                                    Phasellus et arcu in magna congue fermentum.--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </div>--}}

                    </div>
                </form>
                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>


@include('partials.footer')
