<?php
$url = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?= base_url('/')?>">Japa Yag</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item home <?php if($url == 'home' or $url == 'index.php') echo 'active'?>">
        <a class="nav-link" href="<?= base_url('home')?>">Global Japa Mala Statics<span class="sr-only">(current)</span></a>
      </li>
<!--       <li class="nav-item yoga_kirtan <?php if($url == 'yoga_kirtan') echo 'active'?>">
        <a class="nav-link" href="<?= base_url('yoga_kirtan')?>">Yoga Kirtan<span class="sr-only">(current)</span></a>
      </li> -->
      <?php if($this->session->userdata('userData')): ?>
      <li class="nav-item my_japa_mala <?php if($url == 'my_japa_mala') echo 'active'?>">
        <a class="nav-link" href="<?= base_url('my_japa_mala')?>">My Japa Mala <span class="sr-only"></span></a>
      </li>
      <?php endif;?>
    </ul>
    <form class="form-inline my-2 my-lg-0 dropdown">
        <button type="button" class="btn dropdown-toggle text-white"><i class="far fa-user-circle"></i> &nbsp;<?php if($userData = $this->session->userData('userData')): echo $userData['name']; else: echo "Account"; endif; ?><span class="caret"></span></button>
        <div class="dropdown-menu">
          <?php if($this->session->userdata('userData')): ?>
          <a class="dropdown-item" href="<?= base_url('logout')?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
          <a class="dropdown-item" href="<?= base_url('settings')?>"><i class="fas fa-cog"></i> Settings</a>
          <?php else: ?>
          <a class="dropdown-item" href="<?= base_url('user_login')?>">Login</a>
          <a class="dropdown-item" href="<?= base_url('user_signup')?>">Signup</a>
        <?php endif;?>
        </div>
    </form>
  </div>
</nav>

<!-- GMT Time -->
<span class="GMT-time">
  <?= gmdate("d/M/Y H:i:s "); ?>
  <br>
  <small>As on GMT +00:00</small>
</span>
<!-- GMT Time -->

<!--Error/ Success Message-->

  <?php if($success = $this->session->flashdata('success')):?>
     <!--Toast-->
     <div class="bs-example text-white bg-danger">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background:#89be47">
                <strong class="mr-auto"><?= $success; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <div class="toast-body">
                <div><?= $success; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>

    <?php if($error = $this->session->flashdata('error')):?>
       <!--Toast-->
     <div class="bs-example">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background: #be4747">
                <strong class="mr-auto"><?= $error; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- 
            <div class="toast-body">
                <div><?= $error; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>


    <?php if($warning = $this->session->flashdata('warning')):?>
       <!--Toast-->
     <div class="bs-example">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background: #008c9a">
                <strong class="mr-auto"><?= $warning; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- 
            <div class="toast-body">
                <div><?= $error; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>
    <!--/Error/ Success Message End-->