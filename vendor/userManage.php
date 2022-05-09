<?php include('partial/header.php') ?>
<?php include('partial/sidebar.php') ?>

<!--Container Main start-->
<main class=" content">
    <?php 
        $title=" Manage User";
        include("partial/breadcrumb.php"); 
 ?>
    <section class="content-wrap">
        <div class="site-header">
            <h5>Manage Users</h5>
            <a href="createUser.php">Add User</a>
        </div>

        <div class="vendor-block">
            <div class="custom-block custom-table">
                <table id="table-1" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Role</th>
                            <th>UserName</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>rsanj054@gmail.com</td>
                            <td>Seller Full Access</td>
                            <td>superstarstore pvt.ltd</td>
                            <td>Active</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
<!--Container Main end-->


<?php include('partial/footer.php') ?>