<?php include('partial/header.php') ?>
<?php include('partial/sidebar.php') ?>


<!--Container Main start-->
<main class=" content">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="las la-home"></i> Home</a>&nbsp; <svg width="5" height="8"
                    viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.13798 7.80468L4.94265 4.00001L1.13798 0.195343L0.195312 1.13801L3.05731 4.00001L0.195312 6.86201L1.13798 7.80468Z"
                        fill="#D01010" />
                </svg></li>
            <li class="breadcrumb-item"><a href="userManage.php">Manage User</a>&nbsp; <svg width="5" height="8"
                    viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.13798 7.80468L4.94265 4.00001L1.13798 0.195343L0.195312 1.13801L3.05731 4.00001L0.195312 6.86201L1.13798 7.80468Z"
                        fill="#D01010" />
                </svg></li>
            <li class="breadcrumb-item active" aria-current="page">
               Seller Management
            </li>
        </ol>
    </nav>
    <section class="content-wrap">
        <div class="site-header">
            <h5>Add Users</h5>
        </div>

        <div class="vendor-block">
            <div class="custom-block">
                <form action="">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Role</label>
                                <select class="inputbox">
                                    <option value="">Seller Full Access</option>
                                    <option value="">Seller Catelog Access</option>
                                    <option value="">Seller Order Access</option>
                                    <option value="">Seller Api Product Access</option>
                                    <option value="">Seller Stock Access</option>
                                    <option value="">Seller Brand Access</option>
                                    <option value="">Seller Decorate Access</option>
                                    <option value="">Seller Junior Access</option>
                                    <option value="">Seller Product Access</option>
                                    <option value="">Seller DG &amp; SOF Access</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Email Address<sup>*</sup></label>
                                <input type="email" placeholder="Email" value="rsanj054@gmail.com" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">User Name<sup>*</sup></label>
                                <input type="text" placeholder="" value="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ">
                            <div class="form-group">
                                <label for="">Default Language</label>
                                <select class="inputbox">
                                    <option value="">English(Nepal)</option>
                                    <option value="1">Public Company</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <button class="site-button">Cancel</button>
                                <button class="site-button">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
</main>
<!--Container Main end-->


<?php include('partial/footer.php') ?>