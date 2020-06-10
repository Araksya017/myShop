

@include('partials.header')


<!-- login Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </div>
    </nav>
</div>

<section class="pro-content login-content center-content-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="pro-heading-title">
                <h1>
                    Login Page
                </h1>
            </div>
        </div>

        <div class="row justify-content-center">


            <div class="col-12 col-sm-12 col-md-8 col-lg-5 mb-5 ">

                <ul class="nav nav-tabs" id="registerTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">New Customer</a>
                    </li>

                </ul>
                <div class="tab-content" id="registerTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="registration-process">
                            <form action="/" name="login">
                                <div class="from-group mb-4">

                                    <div class="input-group col-12">

                                        <input type="text" name="email" class="form-control" id="inlineFormInputGroup2" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="from-group mb-4">

                                    <div class="input-group col-12">

                                        <input type="text" name="password" class="form-control" id="inlineFormInputGroup3" placeholder="Enter Your Password">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <button class="btn btn-secondary swipe-to-top">Login</button>
                                    <a href="change-password.html" class="btn btn-link">Forgot Password</a>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <div class="registration-process">
                            <form action="/" name="general-form">
                                <div class="from-group  mb-4">

                                    <div class="input-group col-12">

                                        <input type="text" name="fullname" class="form-control" id="inlineFormInputGroup4" placeholder="Enter Your Fullname">
                                    </div>
                                </div>
                                <div class="from-group mb-4">

                                    <div class="input-group col-12">

                                        <input type="text" name="email" class="form-control" id="inlineFormInputGroup5" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="from-group mb-4">

                                    <div class="input-group col-12">

                                        <input type="password" name="password" class="form-control" id="inlineFormInputGroup6" placeholder="Enter Your Password">
                                    </div>
                                </div>
                                <div class="from-group  mb-4">

                                    <div class="input-group col-12">

                                        <input type="text" class="form-control" id="inlineFormInputGroup7" placeholder="Enter Your Mobile Number">
                                    </div>
                                </div>
                                <div class="from-group">
                                    <div class="col-12">
                                        <button class="btn btn-primary swipe-to-top">Create Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="registration-socials">
                <div class="col-12">
                    <p class="mb-3 text-center">
                        Access Your Account Through Your Social Networks
                    </p>
                    <div class="from-group">
                        <button type="button" class="btn btn-google swipe-to-top"><i class="fab fa-google-plus-g"></i>&nbsp;Google</button>
                        <button type="button" class="btn btn-facebook swipe-to-top"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</button>
                        <button type="button" class="btn btn-twitter swipe-to-top"><i class="fab fa-twitter"></i>&nbsp;Twitter</button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p  class="mt-3"> *Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae viverra nibh. Etiam a arcu sed mi suscipit rutrum. Sed a lorem pellentesque, dignissim risus in, feugiat ipsum. Nulla laoreet faucibus velit eget iaculis. Vivamus porttitor diam lectus, eu rhoncus lacus dignissim et. </p>

            </div>
        </div>
    </div>
</section>


@include('partials.footer')
