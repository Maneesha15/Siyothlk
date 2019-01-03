<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url('asset/images/logo_white.jpg') ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url("asset/css/style.css")?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>

    <title> Siyoth.lk </title>

</head>

<body id="<?php echo $page; ?>">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('index.php/home'); ?>">
        <img src="<?php echo base_url() ?>asset/images/logo_white.jpg" width="30" height="30" class="rounded-circle" alt="image">
        Siyoth.lk
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <?php
                if($this->session->userdata('admin_flag')==1) {
                    if($page=='dashboard') {
                        echo "<a class=\"nav-link active\" href=\"" . base_url('index.php/home/dashboard') . "\"> Dashboard <span class=\"sr-only\"></span></a>";
                    }
                    else {
                        echo "<a class=\"nav-link\" href=\"" . base_url('index.php/home/dashboard') . "\"> Dashboard <span class=\"sr-only\"></span></a>";
                    }
                }
                else {
                    if($page=='home') {
                        echo "<a class=\"nav-link active\" href=\"" . base_url('index.php/home') . "\"> Home <span class=\"sr-only\"></span></a>";
                    }
                    else {
                        echo "<a class=\"nav-link\" href=\"" . base_url('index.php/home') . "\"> Home <span class=\"sr-only\"></span></a>";
                    }
                }
                ?>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='bird_wiki'){echo " active";}?>" href="<?php echo base_url('index.php/home/bird_wiki') ?>">Bird WiKi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='news_articles'){echo " active";}?>" href="<?php echo base_url('index.php/home/news_and_articles') ?>">News & Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='forum'){echo " active";}?>" href="#">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='events'){echo " active";}?>" href="<?php echo base_url('index.php/home/events') ?>">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='sanctuaries'){echo " active";}?>" href="<?php echo base_url('index.php/home/sanctuary') ?>">Sanctuaries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='gallery'){echo " active";}?>" href="<?php echo base_url('index.php/home/gallery') ?>">Gallery</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Maps
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Pic Map</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Distribution Maps</a>
                    <a class="dropdown-item" href="#">Sanctuary Maps</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav navbar-right mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php if($page=='login'){echo " active";}?>" href="<?php echo base_url("index.php/home/login") ?>">
                    <?php
                    if($this->session->userdata('username')==false) {
                        echo "Login";
                    }
                    ?>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <?php
                if($this->session->userdata('username')) {
                    echo "<li class=\"nav-item dropdown\">";
                        echo "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
                                echo $this->session->userdata('username');
                        echo "</a>\n";
                        echo "<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
                            echo "<a class=\"dropdown-item\" href=\"" . base_url('index.php/home/my_profile');
                            echo "\">My Profile</a>\n";
                            echo "<a class=\"dropdown-item\" href=\"" . base_url('index.php/login/user_logout');
                            echo "\">Logout</a>\n";
                       echo " </div>";
                    echo "</li>";
                }
            ?>
        </ul>
    </div>
</nav>