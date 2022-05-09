<?php include('partial/header.php') ?>
<section class="breadcrumb-wrap list-wrap">
    <?php $title=" Manage Profile"; include("homepage/breadcrumb.php"); ?>
    <div class="user-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="user-sidebar">
                        <ul>
                            <li>
                                <a href="user.php"><i class="las la-search-plus"></i>Profile Overview</a>
                            </li>
                            <li>
                                <a href="manage.php"><i class="las la-user-circle"></i>Manage Profile</a>
                            </li>
                            <li>
                                <a href="cart.php"><i class="las la-shopping-cart"></i>Cart</a>
                            </li>
                            <li>
                                <a href="order.php"><i class="las la-list-alt"></i>Order Details</a>
                            </li>
                            <li>
                                <a href="wishlist.php"><i class="las la-heart"></i>wishlist</a>
                            </li>
                            <li class="active">
                                <a href="history.php"><i class="las la-history"></i>History</a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="las la-sign-out-alt"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="user-content">
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>History </h5>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="las la-trash"></i>Delete All
                                            </a>
                                        </li>
                                        <li class="checkbox">
                                            <input type="checkbox" id="test1" name="checkbox-group" checked>
                                            <label for="test1">6/6 selected</label>
                                        </li>
                                        <li>
                                            <label>Show <select name="dataTable-1_length" aria-controls="dataTable-1"
                                                    class="">
                                                    <option>Last 10 Days</option>
                                                    <option value="5">Last 6 Days</option>
                                                    <option value="10">Last 8 Days</option>
                                                </select></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="order history">
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
                                                <div class="action">
                                                    <i class="las la-trash "></i>
                                                </div>
                                                <div class="status">
                                                    <span class="sold">Sold</span>
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
                                                <div class="action">
                                                    <i class="las la-trash "></i>
                                                </div>
                                                <div class="status">
                                                    <span class="cancel">Cancelled</span>
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
                                                <div class="action">
                                                    <i class="las la-trash "></i>
                                                </div>
                                                <div class="status">
                                                    <span class="order">Ordered</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <nav aria-label="..." class="mt-4">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">2</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('partial/footer.php') ?>