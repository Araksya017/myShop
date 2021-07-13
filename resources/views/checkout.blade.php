@include('partials.header')


<!-- checkout Content -->
      <div class="container-fuild">
          <nav aria-label="breadcrumb">
              <div class="container">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{ __('messages.главная') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.оформления_заказа') }}</li>
                  </ol>
              </div>
            </nav>
      </div>
      <section class="pro-content checkout-content">
          <div class="container">
            <div class="row">
                <div class="pro-heading-title">
                    <h1>
                        {{ __('messages.оформления_заказа') }}
</h1>
                  </div>
            </div>
            <div class="row">
              <div class="col-12 col-xl-9">
                  <div class="row">
                    <div class="checkout-module">
                      <ul class="nav nav-pills checkoutd-nav mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link  active" id="pills-shipping-tab" data-toggle="pill" href="#pills-shipping" role="tab" aria-controls="pills-shipping" aria-selected="true"><span class="d-flex d-lg-none">1</span><span class="d-none d-lg-flex">{{ __('messages.адрес_доставки') }}</span></a>
                          </li>
{{--                          <li class="nav-item">--}}
{{--                            <a class="nav-link " id="pills-billing-tab" data-toggle="pill" href="#pills-billing" role="tab" aria-controls="pills-billing" aria-selected="false"><span class="d-flex d-lg-none">2</span><span class="d-none d-lg-flex">Billing Address</span></a>--}}
{{--                          </li>--}}
                          <li class="nav-item">
                            <a class="nav-link " id="pills-method-tab" data-toggle="pill" href="#pills-method" role="tab" aria-controls="pills-method" aria-selected="false"><span class="d-flex d-lg-none">3</span><span class="d-none d-lg-flex">{{ __('messages.Методы_доставки') }}</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link " id="pills-order-tab" data-toggle="pill" href="#pills-order" role="tab" aria-controls="pills-order" aria-selected="false"><span class="d-flex d-lg-none">4</span><span class="d-none d-lg-flex">{{ __('messages.Информация_заказа') }}</span></a>
                            </li>
                        </ul>

                        <div class="tab-content" >
                          <div class="tab-pane fade show active" id="pills-shipping" role="tabpanel" aria-labelledby="pills-shipping-tab">
                            <form action="{{ route('checkout.update') }}" method="post" name="general-form">
                                @csrf
                              <div class="form-row">
                                  <div class="from-group col-md-6 mb-3">
                                      <div class="input-group ">

                                        <input type="text" class="form-control" name="name" value = "{{$user->name}}" id="inlineFormInputGroup0" placeholder="{{ __('messages.имя') }}">
                                      </div>
                                    </div>
                                    <div class="from-group col-md-6 mb-3">
                                      <div class="input-group ">

                                        <input type="text" class="form-control" name="surname" value = "{{$user->surname}}" id="inlineFormInputGroup1" placeholder="{{ __('messages.фамиля') }}">
                                      </div>
                                    </div>
                              </div>
                              <div class="form-row">
                                  <div class="from-group col-md-6 mb-3">
                                      <div class="input-group"  >

                                          <input type="text" class="form-control" name="phone" value = "{{$user->phone}}" id="inlineFormInputGroup8" placeholder="{{ __('messages.телефон') }}">
                                      </div>
                                    </div>
                                    <div class="from-group col-md-6 mb-3">
                                        <div class="input-group ">

                                          <input type="text" class="form-control" name="adress" value = "{{$user->adress}}" id="inlineFormInputGroup3" placeholder="{{ __('messages.адрес_ул_дом_кв') }}">
                                        </div>
                                      </div>
                              </div>
{{--                              <div class="form-row">--}}
{{--                                  <div class="from-group col-md-6 mb-3">--}}
{{--                                      <div class="input-group select-control">--}}

{{--                                          <select class="form-control" id="inlineFormInputGroup4">--}}
{{--                                              <option selected>{{ __('messages.выберите_страну') }}</option>--}}
{{--                                              <option  value="1">USA</option>--}}
{{--                                              <option value="2">Canada</option>--}}
{{--                                            </select>--}}
{{--                                      </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="from-group col-md-6 mb-3">--}}
{{--                                        <div class="input-group select-control">--}}

{{--                                            <select class="form-control" id="inlineFormInputGroup5">--}}
{{--                                                <option selected>{{ __('messages.выберите_область') }}</option>--}}
{{--                                                <option  value="1">New York</option>--}}
{{--                                                <option value="2">Taxes</option>--}}
{{--                                              </select>--}}
{{--                                        </div>--}}
{{--                                      </div>--}}

{{--                              </div>--}}

                              <div class="form-row">
                                  <div class="from-group col-md-6 mb-3">
                                      <div class="input-group"  >

                                          <input type="text" class="form-control" name="city" id="inlineFormInputGroup7" placeholder="{{ __('messages.город') }}">
                                      </div>
                                    </div>
                                    <div class="from-group col-md-6 mb-3">
                                        <div class="input-group"  >

                                            <input type="text" class="form-control" name="post" id="inlineFormInputGroup7" placeholder="{{ __('messages.Почтовый_индекс') }}">
                                        </div>
                                      </div>

                              </div>
                              <div class="form-row">
                                  <div class="from-group col-md-6 mb-3">

                                    </div>

                              </div>

                                <div class="col-12 col-sm-12">
                                  <div class="row">

                                    <a data-toggle="pill" href="#pills-billing" class="btn btn-secondary swipe-to-top cta">{{ __('messages.Продолжить') }}</a>
                                  </div>
                                </div>
                            </form>
                          </div>
{{--                          <div class="tab-pane fade" id="pills-billing" role="tabpanel" aria-labelledby="pills-billing-tab">--}}
{{--                              <form>--}}
{{--                                  <div class="form-row">--}}
{{--                                      <div class="from-group col-md-6 mb-3">--}}
{{--                                          <div class="input-group ">--}}

{{--                                            <input type="text" class="form-control" id="inlineFormInputGroup01" placeholder="First Name">--}}
{{--                                          </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="from-group col-md-6 mb-3">--}}
{{--                                          <div class="input-group ">--}}

{{--                                            <input type="text" class="form-control" id="inlineFormInputGroup12" placeholder="Last Name">--}}
{{--                                          </div>--}}
{{--                                        </div>--}}
{{--                                  </div>--}}
{{--                                  <div class="form-row">--}}
{{--                                      <div class="from-group col-md-6 mb-3">--}}
{{--                                          <div class="input-group ">--}}

{{--                                            <input type="text" class="form-control" id="inlineFormInputGroup23" placeholder="Company Name">--}}
{{--                                          </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="from-group col-md-6 mb-3">--}}
{{--                                            <div class="input-group ">--}}

{{--                                              <input type="text" class="form-control" id="inlineFormInputGroup34" placeholder="Address">--}}
{{--                                            </div>--}}
{{--                                          </div>--}}
{{--                                  </div>--}}
{{--                                  <div class="form-row">--}}
{{--                                      <div class="from-group col-md-6 mb-3">--}}
{{--                                          <div class="input-group select-control">--}}

{{--                                              <select class="form-control" id="inlineFormInputGroup45">--}}
{{--                                                  <option selected>Select Country</option>--}}
{{--                                                  <option value="1">USA</option>--}}
{{--                                                  <option value="2">Canada</option>--}}
{{--                                                </select>--}}
{{--                                          </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="from-group col-md-6 mb-3">--}}
{{--                                            <div class="input-group select-control">--}}

{{--                                                <select class="form-control" id="inlineFormInputGroup56">--}}
{{--                                                    <option selected>Select State</option>--}}
{{--                                                    <option value="1">New York</option>--}}
{{--                                                    <option value="2">Taxes</option>--}}
{{--                                                  </select>--}}
{{--                                            </div>--}}
{{--                                          </div>--}}

{{--                                  </div>--}}

{{--                                  <div class="form-row">--}}
{{--                                      <div class="from-group col-md-6 mb-3">--}}
{{--                                          <div class="input-group"  >--}}
{{--                                              <input type="text" class="form-control" id="inlineFormInputGroup7" placeholder="City">--}}
{{--                                          </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="from-group col-md-6 mb-3">--}}
{{--                                            <div class="input-group"  >--}}

{{--                                                <input type="text" class="form-control" id="inlineFormInputGroup78" placeholder="Postal Code">--}}
{{--                                            </div>--}}
{{--                                          </div>--}}

{{--                                  </div>--}}
{{--                                  <div class="form-row">--}}
{{--                                      <div class="from-group col-md-6 mb-3">--}}
{{--                                          <div class="input-group"  >--}}

{{--                                              <input type="text" class="form-control" id="inlineFormInputGroup89" placeholder="Phone">--}}
{{--                                          </div>--}}
{{--                                        </div>--}}

{{--                                  </div>--}}
{{--                                      <div class="form-group">--}}
{{--                                          <div class="form-check">--}}

{{--                                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck0">--}}
{{--                                              <label class="form-check-label" for="defaultCheck0">--}}
{{--Same shipping and billing address.--}}
{{--                                              </label>--}}
{{--                                              <small id="checkboxHelp" class="form-text text-muted"></small>--}}
{{--                                            </div>--}}
{{--                                      </div>--}}

{{--                                      <div class="col-12 col-sm-12">--}}
{{--                                      <div class="row">--}}
{{--                                          <a data-toggle="pill" href="#pills-shipping" class="btn btn-light swipe-to-top cta">Back</a>--}}
{{--                                        <a data-toggle="pill" href="#pills-method" class="btn btn-secondary swipe-to-top cta">Continue</a>--}}
{{--                                        </div>--}}
{{--                                      </div>--}}
{{--                                </form>--}}
{{--                          </div>--}}
                          <div class="tab-pane fade" id="pills-method" role="tabpanel" aria-labelledby="pills-method-tab">

                                      <div class="col-12 col-sm-12 ">
                                        <div class="row"> <p>{{ __('messages.выберите_способ_доставки') }}</p></div>
                                      </div>

                                      <div class="col-12 col-sm-12 ">
                                          <div class="row">

                                          <div class="col-12 col-sm-6 mb-4">
                                              <h4>Flate Rate</h4>

                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
Flat Rate --- $11
</label>
                                                        <small id="emailHelp" class="form-text text-muted"></small>
                                                      </div>

                                          </div>
                                          <div class="col-12 col-sm-6">
                                              <h4>UPS Shipping</h4>

                                                    <div class="form-check mb-2">

                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                        <label class="form-check-label" for="defaultCheck2">
24 hours --- $15
</label>

                                                      </div>

                                                    <div class="form-check mb-2">

                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                                        <label class="form-check-label" for="defaultCheck3">
48 hours --- $10
</label>

                                                      </div>

                                                    <div class="form-check mb-4">

                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                                        <label class="form-check-label" for="defaultCheck4">
48 hours --- $5
</label>

                                                      </div>

                                          </div>
                                        </div>
                                        </div>
                                        <div class="col-12 col-sm-12">
                                            <div class="row">
                                                <a data-toggle="pill" href="#pills-billing" class="btn btn-light swipe-to-top cta">{{ __('messages.Назад') }}</a>

                                              <a  data-toggle="pill" href="#pills-order" class="btn btn-secondary swipe-to-top cta">{{ __('messages.Продолжить') }}</a>
                                              </div>
                                            </div>
                          </div>



                            <?php
                            $user=Auth::user();
                            $cartProduct=DB::table('products')
                                ->leftJoin('cart', 'products.id', 'cart.product_id')->where('cart.user_id',$user->id)
                                ->get();
                            $total=0;
                            $total_sum = 0;
                            $cart_count = 0;
                            $count = 1;
                             ?>
                          <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">


                            <table class="table top-table">
                              <thead>
                                <tr class="d-flex">
                                  <th class="col-12 col-md-2">{{ __('messages.товары') }}</th>
                                  <th class="col-12 col-md-4"></th>
                                  <th class="col-12 col-md-2">{{ __('messages.цена') }}</th>
                                  <th class="col-12 col-md-2">{{ __('messages.количество') }}</th>
                                  <th class="col-12 col-md-2">{{ __('messages.Промежуточная_цена') }}</th>
                                </tr>
                              </thead>
                                @foreach($products as $item)
                                    <?php $total = $item->count * $item->price; ?>

                              <tbody>


                                  <tr class="d-flex">
                                    <td class="col-12 col-md-2" >
                                        <img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"/>
                                    </td>
                                      <td class="col-12 col-md-4">
                                        <div class="item-detail">
                                            <span class="pro-info"> <a href="{{  route('product.index', $item->id)}}">{{ $item->title}}</a></span>
                                            <h2 class="pro-title">

                                              <a href="#">
{{--                                                  {{ $item->categories}}--}}
</a>

                                            </h2>

                                            <div class="item-attributes"></div>
                                            <div class="item-controls">
                                                <button type="button" class="btn" >
                                                    <span class="fas fa-pencil-alt"></span>
                                                </button>
                                                <button type="button" class="btn" >
                                                    <span class="fas fa-times"></span>
                                                </button>
                                            </div>
                                          </div>
                                      </td>
                                    <td class="item-price col-12 col-md-2">{{$item->price}}</td>
                                    <td class="col-12 col-md-2">
                                        <div class="input-group">
                                            {{$item -> count}}
                                        </div>
                                    </td>
                                    <td class="align-middle item-total col-12 col-md-2">{{ $total}}</td>
                                  </tr>


                              </tbody>
                                        <?php $total_sum+= $item->count*$item->price; ?>
                                @endforeach

                            </table>


                                <div class="col-12 col-sm-12">
                                    <div class="row">
                                        <div class="heading">
                                            <h4>Order Notes & Summary</h4>

                                          </div>

                                      <div class="form-group" style="width:100%; padding:0;">
                                          <label for="exampleFormControlTextarea1">Please write notes of your order</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-12 ">
                                    <div class="row">
                                      <div class="heading">
                                        <h4>Payment Methods</h4>

                                      </div>
                                      <div class="form-group" style="width:100%; padding:0;">
                                          <label for="exampleFormControlTextarea1" style="width:100%; margin-bottom:30px;">Please select a prefered payment method to use on this order.</label>
                                          <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                                              <label class="form-check-label" for="inlineCheckbox1"><img src="images/miscellaneous/paypal.png" alt="Image"></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
                                              <label class="form-check-label" for="inlineCheckbox2"><img src="images/miscellaneous/braintree.png" alt="Image"></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3"><img src="images/miscellaneous/stripe.png" alt="Image"></label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" id="inlineCheckbox4" value="option4">
                                                  <label class="form-check-label" for="inlineCheckbox4"><img src="images/miscellaneous/cod.png" alt="Image"></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inlineCheckbox5" value="option5">
                                                    <label class="form-check-label" for="inlineCheckbox5"><img src="images/miscellaneous/instamojo.png" alt="Image"></label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" id="inlineCheckbox6" value="option6">
                                                      <label class="form-check-label" for="inlineCheckbox6"><img src="images/miscellaneous/hyperpay.png" alt="Image"></label>
                                                    </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="row">
                                      <a data-toggle="pill" href="#pills-method"  class="btn btn-light swipe-to-top cta">Back</a>
                                  <a href="thankyou.html" class="btn btn-secondary swipe-to-top">{{ __('messages.Продолжить') }}</a>
                                    </div>
                                </div>
                          </div>
                        </div>
                  </div>
                  </div>
              </div>
              <div class="col-12 col-xl-3">

                  <table class="table right-table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2">{{ __('messages.итог_заказа') }}</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{ __('messages.Промежуточная_цена') }}</th>
                        <td >$910.00</td>

                      </tr>
                      <tr>
                        <th scope="row">{{ __('messages.Код_купона') }}</th>
                        <td >$20.00</td>

                      </tr>
                      <tr>
                          <th scope="row">{{ __('messages.налоги') }}</th>
                          <td >$150.00</td>

                        </tr>
                        <tr>
                            <th scope="row">{{ __('messages.фсд') }}</th>
                            <td >$11.00</td>

                          </tr>
                      <tr class="item-price">
                        <th scope="row">{{ __('messages.Итог') }}</th>
                        <td >{{ $total_sum}}</td>

                      </tr>
                    </tbody>
                  </table>

              </div>
            </div>
          </div>
        </section>

@include('partials.footer')
