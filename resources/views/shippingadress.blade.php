
@include('partials.header')


<!--Shipping Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shipping Address</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content shipping-content">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    Shipping Address
                </h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-lg-3">


                <ul class="list-group">
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


                <table class="table">
                    <thead>
                    <tr class="d-flex">
                        <th class="col-12 col-md-8">DEFAULT ADDRESS</th>
                        <th class="col-12 col-md-4">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="d-flex">

                        <td class="col-12 col-md-8">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </label>

                            </div>
                        </td>

                        <td class=" col-12 col-md-4">
                            <ul  class="controls">
                                <li><a href="#"> <i class="fas fa-pen"></i> Edit</a></li>
                                <li><a href="#"> <i class="fas fa-trash-alt"></i> Remove</a></li>
                            </ul>

                        </td>
                    </tr>


                    </tbody>
                </table>


                <div class="add-address">
                    <form action="/" name="general-form">
                        <h4 >Personal Information</h4>

                        <div class="form-row">
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group ">

                                    <input type="text" name="firstname" class="form-control" id="inlineFormInputGroup0" placeholder="First Name">
                                </div>
                            </div>
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group ">

                                    <input type="text" name="lastname" class="form-control" id="inlineFormInputGroup1" placeholder="Last Name">
                                </div>
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group ">

                                    <input type="text" class="form-control" id="inlineFormInputGroup2" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group ">

                                    <input type="text" name="address" class="form-control" id="inlineFormInputGroup3" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group select-control">

                                    <select class="form-control" name="SelectName" id="inlineFormInputGroup4">
                                        <option selected>Select Country</option>
                                        <option value="1">Canada</option>
                                        <option value="2">United Kingdom</option>
                                        <option value="3">United States</option>

                                    </select>
                                </div>
                            </div>
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group select-control">

                                    <select class="form-control" name="SelectStateName" id="inlineFormInputGroup5">
                                        <option selected>Select State</option>
                                        <option value="1">Alaska</option>
                                        <option value="2">New York</option>
                                        <option value="3">Taxes</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group"  >

                                    <input type="text" name="postcode" class="form-control" id="inlineFormInputGroup7" placeholder="City">
                                </div>
                            </div>
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group"  >

                                    <input type="text" name="postcode" class="form-control" id="inlineFormInputGroup7" placeholder="Postal Code">
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="from-group col-md-6 mb-4">
                                <div class="input-group">

                                    <input type="text" name="phone" class="form-control" id="inlineFormInputGroup8" placeholder="Phone">
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-secondary swipe-to-top">Add Address</button>
                    </form>
                </div>
                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>


@include('partials.footer')
