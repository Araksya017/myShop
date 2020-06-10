@include('partials.header')


<!-- cart Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart Page</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content cart-content cart-page-2">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    Cart Page
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12">
                <table class="table top-table">
                    <!-- <thead>
                      <tr class="d-flex">
                        <th class="col-12 col-md-2">ITEM(S)</th>
                        <th class="col-12 col-md-3"></th>
                        <th class="col-12 col-md-2">PRICE</th>
                        <th class="col-12 col-md-2">QUANTITY</th>
                        <th class="col-12 col-md-1">SUBTOTAL</th>
                        <th class="col-12 col-md-2 align-right">ACTIONS</th>

                      </tr>
                    </thead> -->
                    <tbody>

                    <tr class="d-flex">
                        <td class="col-12 col-md-1">
                            <img class="img-fluid" src="images/product_images/product_image_02.jpg" alt="Product Image"/>
                        </td>
                        <td class="col-12 col-md-4 ">
                            <div class="item-detail">
                                <span class="pro-info">Earrings</span>
                                <h2 class="pro-title">

                                    <a href="#">
                                        Crystal Water Drop Earrings
                                    </a>

                                </h2>

                                <div class="item-attributes"></div>

                            </div>
                        </td>
                        <td class="col-12 col-md-2 item-price">$285</td>
                        <td class="col-12 col-md-2" >
                            <div class="input-group item-quantity">

                                <input type="text" id="quantity1" name="quantity" class="form-control" value="2" >

                                <span class="input-group-btn">
                                    <button type="button" value="quantity1" class="quantity-plus btn"  data-type="minus" data-field="">
                                      <span class="fas fa-plus"></span>
                                    </button>

                                    <button type="button" value="quantity1" class="quantity-minus btn" data-type="plus" data-field="">
                                        <span class="fas fa-minus"></span>
                                    </button>
                                </span>


                            </div>
                        </td>
                        <td class="col-12 col-md-1 item-total">$570</td>
                        <td class="col-12 col-md-2 align-right">
                            <div class="item-controls">
                                <button type="button" class="btn" >
                                    <span class="fas fa-pencil-alt"></span>
                                </button>
                                <button type="button" class="btn" >
                                    <span class="fas fa-times"></span>
                                </button>
                            </div>
                        </td>

                    </tr>
                    <tr class="d-flex">
                        <td class="col-12 col-md-1">
                            <img class="img-fluid" src="images/product_images/product_image_03.jpg" alt="Product Image"/>
                        </td>
                        <td class="col-12 col-md-4">
                            <div class="item-detail">
                                <span class="pro-info">Ring Collection</span>
                                <h2 class="pro-title">

                                    <a href="#">
                                        Crytal Wedding Engagement Rings
                                    </a>

                                </h2>
                                <div class="item-attributes"></div>

                            </div>
                        </td>
                        <td class="col-12 col-md-2 item-price">$85</td>
                        <td class="col-12 col-md-2" >
                            <div class="input-group item-quantity">

                                <input type="text" id="quantity2" name="quantity" class="form-control" value="4">

                                <span class="input-group-btn">
                                <button type="button" value="quantity2" class="quantity-plus btn"  data-type="minus" data-field="">
                                  <span class="fas fa-plus"></span>
                                </button>

                                <button type="button" value="quantity2" class="quantity-minus btn" data-type="plus" data-field="">
                                    <span class="fas fa-minus"></span>
                                </button>
                            </span>


                            </div>
                        </td>
                        <td class="col-12 col-md-1 item-total">$340</td>
                        <td class="col-12 col-md-2 align-right">
                            <div class="item-controls">
                                <button type="button" class="btn" >
                                    <span class="fas fa-pencil-alt"></span>
                                </button>
                                <button type="button" class="btn" >
                                    <span class="fas fa-times"></span>
                                </button>
                            </div>
                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="row">

            <div class="col-12 col-lg-9 ">
                <table class="table table-background">
                    <thead>
                    <tr>
                        <th scope="col" colspan="4">CALCULATE SHIPPING</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr class="d-flex">
                        <td scope="row">
                            <input type="text" class="form-control" id="city" aria-describedby="city" placeholder="City">
                        </td>
                        <td><input type="text" class="form-control" id="country" aria-describedby="country" placeholder="Country"></td>
                        <td><input type="text" class="form-control" id="postcode" aria-describedby="postcode" placeholder="Post Code"></td>
                        <td><button class="btn btn-block btn-secondary swipe-to-top" type="button">Estimate</button></td>
                    </tr>

                    </tbody>
                </table>
                <div class="col-12 col-sm-12 mb-4">
                    <div class="row justify-content-between ">
                        <div class="col-12 col-lg-5">

                            <div class="row">
                                <div class="input-group ">
                                    <input type="text" class="form-control" style="height: 44px;" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="coupon-code">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary swipe-to-top" type="button" id="coupon-code">Apply</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-lg-7">

                            <div class="row justify-content-end btn-res">
                                <button type="button" class="btn btn-link">Continue Shopping</button>
                                <button type="button" class="btn btn-primary swipe-to-top">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <table class="table">
                    <thead >
                    <tr>
                        <th scope="col" colspan="2">Order Summary</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th >Subtotal</th>
                        <td >$910</td>

                    </tr>
                    <tr>
                        <th >Coupon Code</th>
                        <td >$20</td>

                    </tr>
                    <tr class="item-price">
                        <th>Total</th>
                        <td >$890</td>

                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block swipe-to-top">Proceed to checkout</button>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')
