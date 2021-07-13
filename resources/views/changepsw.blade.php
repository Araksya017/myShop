
@include('partials.header')

<!-- login Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.home') }}">{{ __('messages.главная') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.изменить_пароль') }}</li>
            </ol>
        </div>
    </nav>
</div>

<section class="pro-content login-content center-content-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="pro-heading-title">
                <h1>
                    {{ __('messages.изменить_пароль') }}
                </h1>
            </div>
        </div>

        <div class="row justify-content-center">


            <div class="col-12 col-sm-12 col-md-8 col-lg-5 mb-5 px-0">


                <div class="tab-content" id="registerTabContent">
                    <div class="tab-pane active" >
                        <div class="registration-process">
                            <form>
                                <div class="from-group mb-4">

                                    <div class="input-group col-12">

                                        <input type="password" class="form-control" id="inlineFormInputGroup3" placeholder="{{ __('messages.введите_Ваш_прежний_пароль') }}">
                                    </div>
                                </div>
                                <div class="from-group mb-4">

                                    <div class="input-group col-12">

                                        <input type="password" class="form-control" id="inlineFormInputGroup4" placeholder="{{ __('messages.введите_Ваш_новый_пароль') }}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <button class="btn btn-secondary swipe-to-top">{{ __('messages.изменить') }}</button>

                                </div>
                            </form>
                        </div>

                    </div>


                </div>
            </div>

        </div>
        <div class="row">
            <div class="container">
                <div class="registration-socials">
                    <p class="mb-3 text-center">
                        {{ __('messages.Доступ_к_своему_аккаунту_через_социальные_сети') }}
                    </p>
                    <div class="from-group">
                        <button type="button" class="btn btn-google swipe-to-top"><i class="fab fa-google-plus-g"></i>&nbsp;Google</button>
                        <button type="button" class="btn btn-facebook swipe-to-top"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</button>
                        <button type="button" class="btn btn-twitter swipe-to-top"><i class="fab fa-twitter"></i>&nbsp;Twitter</button>
                    </div>
                </div>
{{--                <p>*Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                    Nulla vitae viverra nibh. Etiam a arcu sed mi suscipit rutrum.--}}
{{--                    Sed a lorem pellentesque, dignissim risus in, feugiat ipsum.--}}
{{--                    Nulla laoreet faucibus velit eget iaculis. Vivamus porttitor diam lectus,--}}
{{--                    eu rhoncus lacus dignissim et. </p>--}}
            </div>
        </div>
    </div>
</section>


@include('partials.footer')
