
@include('partials.header')



<!-- About-us Content -->
<section class="empty-content">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="pro-empty-page">
                    <h2 style="font-size: 150px;"><i class="far fa-check-circle"></i></h2>
                    <h1 >{{ __('messages.благодарим') }}</h1>
                    <p>{{ __('messages.завершена') }} </p>
                    354365G4.
                    <p> {{ __('messages.Перейдите') }} </p> <a href="{{ route('orders.info') }}" class="btn-link"><b>{{ __('messages.Информация_о_заказе') }}</b></a>
                    </p>
                </div>
                </p>
            </div>
        </div>

    </div>


</section>


@include('partials.footer')
