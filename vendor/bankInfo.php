<?php include('partial/header.php') ?>
<?php include('partial/sidebar.php') ?>

<!--Container Main start-->
<main class=" content">
    <?php 
        $title=" Verify Corporate";
        include("partial/breadcrumb.php"); 
 ?>
    <section class="content-wrap">
        <div class="site-header">
            <h5>Verify Bank Account</h5>
        </div>

        <div class="vendor-block">
            <div class="site-header">
                <h5>Fill in Bank Information</h5>
            </div>
            <div class="custom-block">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Account Title<sup>*</sup></label>
                                <input type="text" placeholder="" value="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Account Number<sup>*</sup></label> <input type="text"
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