

@include('partials.header')

<!--My Order Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content order-content">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    Order Page
                </h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-lg-3   d-block d-xl-block">

                <ul class="list-group mb-4">
                    <li class="list-group-item">
                        <a class="nav-link" href="profile.html">
                            <i class="fas fa-user"></i>
                            Profile
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="wishlist.html">
                            <i class="fas fa-heart"></i>
                            Wishlist
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="orders.html">
                            <i class="fas fa-shopping-cart"></i>
                            Orders
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="shipping-address.html">
                            <i class="fas fa-map-marker-alt"></i>
                            Shipping Address
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-power-off"></i>
                            Logout
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="change-password.html">
                            <i class="fas fa-unlock-alt"></i>
                            Change Password
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-9 ">

                <table class="table order-table">

                    <thead>
                    <tr class="d-flex">
                        <th class="col-12 d-block d-md-none"></th>
                        <th class="col-12 col-md-3">Order ID</th>
                        <th class="col-12 col-md-3">Order Date</th>
                        <th class="col-12 col-md-3">Total Price</th>
                        <th class="col-12 col-md-3" >Order Status</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr class="d-flex">
                        <td class="col-12 d-block d-md-none"><span>order# 1</span></td>
                        <td class="col-12 col-md-3"><a href="order-detail.html">354365G4</a></td>
                        <td class="col-12 col-md-3">
                            25th April 2019
                        </td>
                        <td class="col-12 col-md-3">
                            $890.00
                        </td>
                        <td class="col-12 col-md-3">
                            <div class="text-secondary">Pending</div>
                        </td>
                    </tr>
                    <tr class="d-flex">
                        <td class="col-12 d-block d-md-none"><span>order#2</span></td>
                        <td class="col-12 col-md-3"><a href="order-detail.html">845s5112</a></td>
                        <td class="col-12 col-md-3">
                            25th Dec 2010
                        </td>
                        <td class="col-12 col-md-3">
                            $896.00
                        </td>
                        <td class="col-12 col-md-3">
                            <div class="text-success">Confirm</div>
                        </td>
                    </tr>
                    <tr class="d-flex">
                        <td class="col-12 d-block d-md-none"><span>order#3</span></td>
                        <td class="col-12 col-md-3"><a href="order-detail.html">se874142</a></td>
                        <td class="col-12 col-md-3">
                            25th May 2009
                        </td>
                        <td class="col-12 col-md-3">
                            $8580.00
                        </td>
                        <td class="col-12 col-md-3">
                            <div class="text-danger">Cancel</div>
                        </td>
                    </tr>
                    </tbody>
                </table>


                <div class="pagination justify-content-between ">

                    <label class="col-form-label">Showing 1&ndash;<span class="showing_record">1</span>&nbsp;of&nbsp;<span class="showing_total_record">23</span>&nbsp;results.</label>

                    <div class="col-12 col-sm-6">
                        <ol class="loader-page">
                            <li class="loader-page-item"><a href="#">
                                    <i class="fa fa-angle-double-left" style="font-size:12px"></i></a>
                            </li>
                            <li  class="loader-page-item"><a href="#">1</a></li>
                            <li  class="loader-page-item"><a href="#">2</a></li>
                            <li  class="loader-page-item"><a href="#">3</a></li>
                            <li  class="loader-page-item"><a href="#">4</a></li>
                            <li  class="loader-page-item"><a href="#">
                                    <i class="fa fa-angle-double-right" style="font-size:12px"></i></a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>


@include('partials.footer')
