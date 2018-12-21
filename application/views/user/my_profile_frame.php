<?php $page = "my_profile"; include 'header.php' ?>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3><i class="fas fa-user-circle"></i> My Profile <small style="color: red"><?php echo $this->session->userdata['username']?></small></h3>
            </div>
        </div>
    </div>
</header>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="<?php echo base_url('index.php/home/my_profile')?>" class="list-group-item list-group-item-action <?php if($panel=='my_profile'){echo " active";}?>"><i class="fas fa-user-circle"></i> My Profile </a>
                    <a href="<?php echo base_url('index.php/user_profile/my_wiki_posts')?>" class="list-group-item list-group-item-action <?php if($panel=='my_wiki_posts'){echo " active";}?>"><i class="fas fa-feather"></i> My Wiki Posts <span class="badge badge-pill badge-danger float-right">12</span></a>
                    <a href="<?php echo base_url('index.php/user_profile/my_articles')?>" class="list-group-item list-group-item-action <?php if($panel=='my_articles'){echo " active";}?>"><i class="fas fa-book"></i> My Articles <span class="badge badge-pill badge-danger float-right">5</span></a>
                    <a href="<?php echo base_url('index.php/user_profile/my_forum_posts')?>" class="list-group-item list-group-item-action <?php if($panel=='my_forum_posts'){echo " active";}?>"><i class="fas fa-question-circle"></i> My Forum Posts <span class="badge badge-pill badge-danger float-right">7</span></a>
                </div>
            </div>