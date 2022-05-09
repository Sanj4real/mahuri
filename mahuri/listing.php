<?php @include("partial/header.php") ?>
<section class="breadcrumb-wrap list-wrap">

    <?php
        $title = "Product Listing";
        @include("homepage/breadcrumb.php");
    ?>
    
    <div class="list products">
        <div class="list__tab">
            <div class="container">
                <ul class="nav nav-pills " id="pills-tab" role="tablist">
                    <li role="presentation">
                        <button class=" active" id="list-one" data-bs-toggle="pill" data-bs-target="#list-1"
                            type="button" role="tab" aria-controls="list-1" aria-selected="true">
                            <div class="image"> <img src="img/product/bear.png" alt=""> </div>
                            <h5>Toys and Accesories</h5>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="" id="list-two" data-bs-toggle="pill" data-bs-target="#list-2" type="button"
                            role="tab" aria-controls="list-2" aria-selected="false">
                            <div class="image"> <img src="img/product/mobile.png" alt=""></div>
                            <h5> Mobile and Tablets </h5>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="" id="list-three" data-bs-toggle="pill" data-bs-target="#list-3" type="button"
                            role="tab" aria-controls="list-3" aria-selected="false">
                            <div class="image"> <img src="img/product/mouse.png" alt=""></div>
                            <h5> Electronic Accesories </h5>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="" id="list-four" data-bs-toggle="pill" data-bs-target="#list-4" type="button"
                            role="tab" aria-controls="list-4" aria-selected="false">
                            <div class="image"> <img src="img/product/laptop.png" alt=""></div>
                            <h5> Laptops and Desktops </h5>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="" id="list-four" data-bs-toggle="pill" data-bs-target="#list-4" type="button"
                            role="tab" aria-controls="list-4" aria-selected="false">
                            <div class="image"> <img src="img/product/laptop.png" alt=""></div>
                            <h5> Laptops and Desktops </h5>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="" id="list-four" data-bs-toggle="pill" data-bs-target="#list-4" type="button"
                            role="tab" aria-controls="list-4" aria-selected="false">
                            <div class="image"> <img src="img/product/laptop.png" alt=""></div>
                            <h5> Laptops and Desktops </h5>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="list__content">
            <div class="container">
                <div class="tab-content br-rm " id="pills-tabContent">
                    <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="list-sidebar">
                                    <div class="list__sidebar--block">
                                        <h5>Brands</h5>
                                        <form action="#">
                                            <ul class="nav flex-column">
                                                <li class="nav-item ">
                                                    <input type="checkbox" id="test1" name="checkbox-group" checked>
                                                    <label for="test1">Samsung</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="test2" name="checkbox-group">
                                                    <label for="test2">Apple</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="test3" name="checkbox-group">
                                                    <label for="test3">Redmi</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="test4" name="checkbox-group">
                                                    <label for="test4">Infinix</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="test5" name="checkbox-group">
                                                    <label for="test5">Poco</label>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="list__sidebar--block">
                                        <h5>Services</h5>
                                        <form action="#">
                                            <ul class="nav flex-column">
                                                <li class="nav-item active">
                                                    <input type="checkbox" id="d-1" name="checkbox-group" checked>
                                                    <label for="d-1">Cash on Delivery</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="d-2" name="checkbox-group">
                                                    <label for="d-2">Free Delivery</label>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="list__sidebar--block">
                                        <h5>Rating</h5>
                                        <ul class="rating-">
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                5 star
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                </ul>
                                                4 star
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                </ul>
                                                3 star
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                </ul>
                                                2 star
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                </ul>
                                                1 star
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__sidebar--block">
                                        <h5>Pricing Range</h5>
                                        <div class="wrapper">
                                            <fieldset class="filter-price">
                                                <div class="price-field">
                                                    <div class="label">
                                                        <h6>min</h6>
                                                        <h6>max</h6>
                                                    </div>
                                                    <input type="range" min="100" max="500" value="135" id="lower">
                                                    <input type="range" min="100" max="500" value="500" id="upper">
                                                </div>
                                                <div class="price-wrap">
                                                    <div class="price-container">
                                                        <div class="price-wrap-1">
                                                            <label for="one">Rs</label>
                                                            <input id="one">
                                                        </div>
                                                        <div class="price-wrap-2">
                                                            <label for="two">Rs</label>
                                                            <input id="two">

                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="list__sidebar--block">
                                        <h5>Color Family</h5>
                                        <form action="#">
                                            <ul class="nav flex-column">
                                                <li class="nav-item active">
                                                    <input type="checkbox" id="color-1" name="checkbox-group" checked>
                                                    <label for="color-1">Samsung</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="color-2" name="checkbox-group">
                                                    <label for="color-2">Apple</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="color-3" name="checkbox-group">
                                                    <label for="color-3">Redmi</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="color-4" name="checkbox-group">
                                                    <label for="color-4">Infinix</label>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="site-header">
                                    <h5>Flash Sale</h5>
                                </div>
                                <div class="row row-cols-lg-3 row-cols-xl-4 row-cols-md-2 row-col-sm-2">
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-1.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-7.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-11.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-12.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-3.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-14.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-14.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-14.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <nav aria-label="..." class="my-4">
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
                    <div class="tab-pane fade show " id="list-2" role="tabpanel" aria-labelledby="list-two">

                    </div>
                    <div class="tab-pane fade show " id="list-3" role="tabpanel" aria-labelledby="list-three">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="list-sidebar">
                                    <div class="list__sidebar--block">
                                        <h5>Brands</h5>
                                        <form action="#">
                                            <ul class="nav flex-column">
                                                <li class="nav-item ">
                                                    <input type="checkbox" id="test1" name="checkbox-group" checked>
                                                    <label for="test1">Samsung</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="test2" name="checkbox-group">
                                                    <label for="test2">Apple</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="test3" name="checkbox-group">
                                                    <label for="test3">Redmi</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="test4" name="checkbox-group">
                                                    <label for="test4">Infinix</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="test5" name="checkbox-group">
                                                    <label for="test5">Poco</label>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="list__sidebar--block">
                                        <h5>Services</h5>
                                        <form action="#">
                                            <ul class="nav flex-column">
                                                <li class="nav-item active">
                                                    <input type="checkbox" id="d-1" name="checkbox-group" checked>
                                                    <label for="d-1">Cash on Delivery</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="d-2" name="checkbox-group">
                                                    <label for="d-2">Free Delivery</label>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="list__sidebar--block">
                                        <h5>Rating</h5>
                                        <ul class="rating-">
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                5 star
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                </ul>
                                                4 star
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                </ul>
                                                3 star
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                </ul>
                                                2 star
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                    <li class="shade"><i class="las la-star"></i></li>
                                                </ul>
                                                1 star
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="list__sidebar--block">
                                        <h5>Pricing Range</h5>
                                        <div class="wrapper">
                                            <fieldset class="filter-price">
                                                <div class="price-field">
                                                    <div class="label">
                                                        <h6>min</h6>
                                                        <h6>max</h6>
                                                    </div>
                                                    <input type="range" min="100" max="500" value="135" id="lower">
                                                    <input type="range" min="100" max="500" value="500" id="upper">
                                                </div>
                                                <div class="price-wrap">
                                                    <div class="price-container">
                                                        <div class="price-wrap-1">
                                                            <label for="one">Rs</label>
                                                            <input id="one">
                                                        </div>
                                                        <div class="price-wrap-2">
                                                            <label for="two">Rs</label>
                                                            <input id="two">

                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="list__sidebar--block">
                                        <h5>Color Family</h5>
                                        <form action="#">
                                            <ul class="nav flex-column">
                                                <li class="nav-item active">
                                                    <input type="checkbox" id="color-1" name="checkbox-group" checked>
                                                    <label for="color-1">Samsung</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="color-2" name="checkbox-group">
                                                    <label for="color-2">Apple</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="color-3" name="checkbox-group">
                                                    <label for="color-3">Redmi</label>
                                                </li>
                                                <li class="nav-item">
                                                    <input type="checkbox" id="color-4" name="checkbox-group">
                                                    <label for="color-4">Infinix</label>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="site-header">
                                    <h5>Flash Sale</h5>
                                </div>
                                <div class="row row-cols-lg-4 row-cols-xl-4 row-cols-md-3 row-col-sm-2">
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-1.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-7.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-11.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-12.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-3.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-14.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-14.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product-block">
                                            <div class="product__img">
                                                <a href="detail.php">
                                                    <img src="img/product/p-14.webp" alt="">
                                                    <div class="side-hov">
                                                        <ul>
                                                            <li>
                                                                <a href="leave.php">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3.54745 0.840149C2.07809 0.840149 0.882812 2.03663 0.882812 3.50745C0.882812 4.71155 1.68982 5.71979 2.78612 6.05054V11.5071C2.78536 11.6435 2.80668 12.8644 3.67992 13.7408C4.21894 14.2834 4.94067 14.5577 5.82381 14.5577V16.0819L8.86911 13.7956L5.82381 11.5094V13.0335C4.43591 13.0335 4.31334 11.8645 4.30877 11.5094V6.05054C5.40508 5.71979 6.21209 4.71155 6.21209 3.50745C6.21209 2.03663 5.01604 0.840149 3.54745 0.840149ZM3.54745 4.65059C2.91783 4.65059 2.40546 4.1377 2.40546 3.50745C2.40546 2.87721 2.91783 2.36432 3.54745 2.36432C4.17706 2.36432 4.68944 2.87721 4.68944 3.50745C4.68944 4.1377 4.17706 4.65059 3.54745 4.65059ZM13.4447 10.8715V5.41039C13.4409 4.18647 12.6247 2.36432 10.3918 2.36432V0.840149L7.34646 3.12641L10.3918 5.41267V3.8885C11.7842 3.8885 11.9152 5.06135 11.922 5.41267V10.8715C10.8257 11.2022 10.0187 12.2105 10.0187 13.4146C10.0187 14.8854 11.214 16.0819 12.6833 16.0819C14.1527 16.0819 15.348 14.8854 15.348 13.4146C15.348 12.2105 14.541 11.2022 13.4447 10.8715ZM12.6833 14.5577C12.0537 14.5577 11.5414 14.0448 11.5414 13.4146C11.5414 12.7843 12.0537 12.2715 12.6833 12.2715C13.313 12.2715 13.8253 12.7843 13.8253 13.4146C13.8253 14.0448 13.313 14.5577 12.6833 14.5577Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                                            fill="#E0E0E0" />
                                                                        <path
                                                                            d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                                            fill="#E0E0E0" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <svg width="16" height="14" viewBox="0 0 16 14"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                                            fill="#D01010" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <a href="detail.php">
                                                    <h5>Ezeekart silicone wall mounted toilet brush</h5>
                                                    <div class="price">
                                                        <h4 class="present">Rs. 400</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <nav aria-label="..." class="my-4">
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
                    <div class="tab-pane fade show " id="list-4" role="tabpanel" aria-labelledby="list-four">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php @include("partial/footer.php") ?>