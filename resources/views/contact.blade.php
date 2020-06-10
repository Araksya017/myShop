@include('partials.header')

<!-- contact Content -->
<div class="container-fuild">
    <div id="map" style="height:400px; margin:0 auto;">

    </div>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
            async defer></script>
</div>


<section class="pro-content contact-content contact-content-page">
    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-4">
                <ul class="contact-info more-info pl-0 mb-0">
                    <li>
                        <h2>{{ __('messages.тема') }}</h2>
                        <p>
                            <span>Katora<br>Demo Store 3654123</span>

                        </p>
                    </li>
                    <li>
                        <h2>Editorial Inquiries</h2>
                        <span>888-9636-6000<br>info@example.com</span>
                    </li>
                    <li>
                        <h2>{{ __('messages.Общие_запросы_клиентов') }}</h2>
                        <span>888-9636-6000<br>Support@example.com</span>
                    </li>


                </ul>
                <div class="pro-socials">
                    <h4>
                        {{ __('messages.Следите_за_нами') }}
                    </h4>
                    <ul>
                        <li><a href="#" class="fab fb fa-facebook-square"></a></li>
                        <li><a href="#" class="fab tw fa-twitter-square"></a></li>
                        <li><a href="#" class="fab sk fa-skype"></a></li>
                        <li><a href="#" class="fab ln fa-linkedin"></a></li>
                        <li><a href="#" class="fab ig fa-instagram"></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="pro-heading-title">
                        <h1>
                            {{ __('messages.свяжитесь_с_нами') }}
                        </h1>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <form action="#" name="contact" id="theForm" method="POST">
                    <div class="form-group row">

                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" placeholder="{{ __('messages.имя') }}">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" class="form-control" placeholder="{{ __('messages.почта') }}">
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-6">
                            <input type="text" name="phone" class="form-control" placeholder="{{ __('messages.телефон') }}">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="subject" class="form-control" placeholder="{{ __('messages.тема') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea class="form-control" name="msg" placeholder="{{ __('messages.письмо') }}" rows="5" cols="56"></textarea>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-secondary swipe-to-top">{{ __('messages.отправить') }}</button>

                    <div id="alert-box" class="alert alert-success alert-dismissible" role="alert">
                        <div id="alert-msg"></div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </form>
            </div>


        </div>

    </div>
</section>

@include('partials.footer')
