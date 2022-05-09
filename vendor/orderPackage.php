<?php include('partial/header.php') ?>
<?php include('partial/sidebar.php') ?>

<!--Container Main start-->
<main class=" content">
    <?php 
        $title=" Order Package";
        include("partial/breadcrumb.php"); 
 ?>
    <section class="content-wrap">
        <div class="site-header">
            <h5>Order Package</h5>
        </div>

        <div class="vendor-block">
            <div class="site-header">
                <h5>Fill in Order Package</h5>
            </div>
            <div class="custom-block">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Order no</label>
                                <input type="number" placeholder="" value="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Order Date</label>
                                <input type="date" placeholder="" value="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Order Item ID<sup>*</sup></label>
                                <input type="text" placeholder="" value="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Unit Price</label> <input type="text"
                                    placeholder="" value="" /></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Bank Name<sup>*</sup></label>
                                <select class="inputbox">
                                    <option value="">Please Select</option>
                                    <option value="1">Agriculture Development Bank Ltd</option>
                                    <option value="2">Bank of kathmandu Ltd</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Branch Name</label>
                                <input type="text" placeholder="" value="" />
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Upload Cheque Copy<sup>*</sup></label> <input
                                    type="file" placeholder="" value="" /></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="product-send">
            <button class="site-button">Cancel</button>
            <button class="site-button">Submit</button>
        </div>
    </section>
</main>
<!--Container Main end-->


<?php include('partial/footer.php') ?>