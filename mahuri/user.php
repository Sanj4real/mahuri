<?php @include("partial/header.php") ?>
<section class="breadcrumb-wrap list-wrap">
    <?php
        $title = "User Dashboard";
        @include("homepage/breadcrumb.php");
    ?>
    <div class="user-dashboard ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="user-sidebar">
                        <ul>
                            <li class="active"><a href="user.php"><i class="las la-search-plus"></i>Profile
                                    Overview</a></li>
                            <li><a href="manage.php"><i class="las la-user-circle"></i>Manage Profile</a></li>
                            <li><a href="cart.php"><i class="las la-shopping-cart"></i>Cart</a></li>
                            <li><a href="order.php"><i class="las la-list-alt"></i>Order Details</a></li>
                            <li><a href="wishlist.php"><i class="las la-heart"></i>wishlist</a></li>
                            <li><a href="history.php"><i class="las la-history"></i>History</a></li>
                            <li><a href="logout.php"><i class="las la-sign-out-alt"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="user-content">
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Profile Overview</h5>
                                </div>
                                <div class="view-tours review-comment d-flex align-items-center">
                                    <a href="manage.php">Edit</a>
                                </div>
                            </div>
                            <div class="user-profile">
                                <div class="img">
                                    <img src="img/user.png" alt="">
                                </div>
                                <div class="profile-info">
                                    <h5>Sabina Dangol</h5>
                                    <span>ghimire.sagar@gmail.com</span>
                                    <span>9808575505</span>
                                    <ul class=" social">
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="img/svg/social/f.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="img/svg/social/i.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="img/svg/social/t.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Overview</h5>
                                </div>
                                <div class="view-tours review-comment d-flex align-items-center">
                                    <a href="">See all</a>
                                </div>
                            </div>
                            <div class="user-flex">
                                <div class="overview-block">
                                    <h5>Total Orders</h5>
                                    <h3>320</h3>
                                </div>
                                <div class="overview-block">
                                    <h5>Total Returns</h5>
                                    <h3>520</h3>
                                </div>
                                <div class="overview-block">
                                    <h5>Total Cancellations</h5>
                                    <h3>220</h3>
                                </div>
                                <div class="overview-block">
                                    <h5>Total wishlist</h5>
                                    <h3>120</h3>
                                </div>
                            </div>
                        </div> -->
                        <div class="user-block">
                            <div class="row">
                                <!-- <div class="col-lg-6 col-col-md-6 col-sm-6">
                                    <div class="review">
                                        <div class="review-wrap">
                                            <div class="site-header">
                                                <div class="head">
                                                    <h5>Product Reviews</h5>
                                                </div>
                                                <div class="view-tours review-comment d-flex align-items-center">
                                                    <a href="review.php">See all</a>
                                                </div>
                                            </div>
                                            <div class="review-block">
                                                <div class="review-top user">
                                                    <div class="top-left">
                                                        <i class="lar la-user"></i>
                                                        <div class="left-content">
                                                            <h6>Nina Holloway</h6>
                                                            <span>29<sup>th</sup> Aug 2022</span>
                                                        </div>
                                                    </div>
                                                    <div class="top-right">
                                                        <div class="ratting">
                                                            <ul>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star-half"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>text ever since the 1500s, when an unknown printer took a galley
                                                        of type and
                                                        scrambled it to make a
                                                        type specimen book. It has survived not only five centuries, but
                                                        also the leap into
                                                        electronic
                                                        typesetting</p>
                                                </div>
                                            </div>
                                            <div class="review-block">
                                                <div class="review-top user">
                                                    <div class="top-left">
                                                        <i class="lar la-user"></i>
                                                        <div class="left-content">
                                                            <h6>Nina Holloway</h6>
                                                            <span>29<sup>th</sup> Aug 2022</span>
                                                        </div>
                                                    </div>
                                                    <div class="top-right">
                                                        <div class="ratting">
                                                            <ul>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star-half"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>text ever since the 1500s, when an unknown printer took a galley
                                                        of type and
                                                        scrambled it to make a
                                                        type specimen book. It has survived not only five centuries, but
                                                        also the leap into
                                                        electronic
                                                        typesetting</p>
                                                </div>
                                            </div>
                                            <div class="review-block">
                                                <div class="review-top user">
                                                    <div class="top-left">
                                                        <i class="lar la-user"></i>
                                                        <div class="left-content">
                                                            <h6>Nina Holloway</h6>
                                                            <span>29<sup>th</sup> Aug 2022</span>
                                                        </div>
                                                    </div>
                                                    <div class="top-right">
                                                        <div class="ratting">
                                                            <ul>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star"></i></li>
                                                                <li><i class="las la-star-half"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>text ever since the 1500s, when an unknown printer took a galley
                                                        of type and
                                                        scrambled it to make a
                                                        type specimen book. It has survived not only five centuries, but
                                                        also the leap into
                                                        electronic
                                                        typesetting</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="order">
                                        <div class="site-header">
                                            <div class="head">
                                                <h5>Recent Order</h5>
                                            </div>
                                            <div class="view-tours review-comment d-flex align-items-center">
                                                <a href="order.php">See all</a>
                                            </div>
                                        </div>

                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="img/product/p-1.jpg" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="img/product/p-1.jpg" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="img/product/p-1.jpg" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="img/product/p-1.jpg" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="order">
                                        <div class="site-header">
                                            <div class="head">
                                                <h5>wishlist</h5>
                                            </div>
                                            <div class="view-tours review-comment d-flex align-items-center">
                                                <a href="order.php">See all</a>
                                            </div>
                                        </div>

                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="img/product/p-1.jpg" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="img/product/p-1.jpg" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="img/product/p-1.jpg" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="img/product/p-1.jpg" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-block ">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Overview</h5>
                                </div>
                            </div>
                            <div class="delivery">
                                <div class="delivery-left delivery-block">
                                    <h5>Shipping Address</h5>
                                    <ul>
                                        <li>Harisidhhi-8 lalitpur</li>
                                        <li>Bagmati Province</li>
                                        <li>Outside Ringroad, Harisiddhi Patan Area</li>
                                        <li>9808495505</li>
                                    </ul>
                                </div>
                                <div class="delivery-right delivery-block">
                                    <h5>Billing Address</h5>
                                    <ul>
                                        <li>Harisidhhi-8 lalitpur</li>
                                        <li>Bagmati Province</li>
                                        <li>Outside Ringroad, Harisiddhi Patan Area</li>
                                        <li>9808495505</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include("partial/footer.php") ?>