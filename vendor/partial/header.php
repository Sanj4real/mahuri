<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahuri Seller Center</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap cdn CSS -->
    <link href="app/css/bootstrap.min.css" rel="stylesheet">

    <!-- line-awesome -->
    <link rel="stylesheet" href="app/css/line-awesome.min.css">

    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- dataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

    <!-- datatable-date -->
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">

    <!-- css-link -->
    <link rel="stylesheet" href="app/css/main.css">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu ' id="header-toggle"></i> </div>
        <div class="search">
            <input type="text" class="searchTerm" placeholder="What are you looking for?">
            <button type="submit" class="searchButton">
                <i class="las la-search"></i>
            </button>
        </div>
        <ul class="user-wrap">
            <!-- Nav Item - Alerts -->
            <li>
                <a class="" href="#" role="button" data-bs-toggle="modal" data-bs-target="#alertsDropdown">
                    <i class="las la-bell"></i>
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>

            </li>


            <!-- Nav Item - Messages -->
            <li>
                <a class="" href="#" role="button" data-bs-toggle="modal" data-bs-target="#messagesDropdown">
                    <i class="las la-envelope"></i>
                    <span class="badge badge-danger badge-counter">7</span>
                </a>

            </li>
            <li>
                <div class="user dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="https://i.imgur.com/hczKIze.jpg" alt="">
                    <div class="user__info custom-head">
                        <h6>John Doe</h6>
                    </div>
                </div>
                <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                    <li><a href="add.php">Profile</a></li>
                    <li><a href="userManage.php">User Management</a></li>
                    <li><a href="view.php">Account Setting</a></li>
                    <li><a href="view.php">Chat Setting</a></li>
                    <li><a class="" href="#">signout</a></li>
                </ul>

            </li>
        </ul>
    </header>
    <?php include('partial/modal.php') ?>