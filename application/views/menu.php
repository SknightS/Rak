<!-- Header ================================================== -->
<header xmlns:font-size="http://www.w3.org/1999/xhtml">
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4" >
                <a href="index.php" id="logo">
                <img style="margin-top:-15px; padding: 0px" src="<?php echo base_url()?>img/logo.png" width="100" alt="" data-retina="true" class="hidden-xs">
                <img src="<?php echo base_url()?>img/logo_mobile.png" width="50" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
                <div id="header_menu">         
                    <img src="<?php echo base_url()?>img/logo.png" width="190" height="23" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                <ul>
                    <li>
                    	<a href="<?php echo base_url()?>Home">Home</a>
                    </li>
                    <li>
                    	<a href="<?php echo base_url()?>Restaurants">Restaurants</a>
                    </li>
                    <li><a href="<?php echo base_url()?>About">About us</a></li>
                    <li><a href="<?php echo base_url()?>Faq">Faq</a></li>
                    <li><a href="<?php echo base_url()?>Contact">Contacts</a></li>
                    <!--<?php  $username=$this->session->userdata('username');
                    if ($username == "") {
                        ?>
                        <button class="btn btn-sm btn-info" href="#0" data-toggle="modal" data-target="#login_2">User
                            Login
                        </button>
                        <button class="btn btn-sm btn-success" href="#0" data-toggle="modal" data-target="#register">User Register</button>
                        <?php
                    } else { ?>
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $username ?>
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url()?>Admin_Home">Profile</a></li>
                        <li><a href="<?php echo base_url()?>Home/Logout">Log Out</a></li>

                    </ul>
            </div>
                </li>
                    <?php }
                    ?>-->
                         <?php if($this->session->userdata('loggedin')=="true"){
                        $username=$this->session->userdata('username');
                        $usertype=$this->session->userdata('type');
                        if($usertype=="Admin"){

                    ?>
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $username ?>
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()?>Admin_Home">Profile</a></li>
                                <li><a href="<?php echo base_url()?>Home/Logout">Log Out</a></li>

                            </ul>
                        </div>
                    </li>
                    <?php }elseif ($usertype=="User"){

                    ?>

                    <li>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $username ?>
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()?>Profile/showuser/<?php echo $username; ?>">Profile</a></li>
                                <li><a href="<?php echo base_url()?>Home/Logout">Log Out</a></li>

                            </ul>
                        </div>
                    </li>

                  <?php }elseif ($usertype=="Res"){?>

                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $username ?>
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url()?>Res_Admin_Home">Profile</a></li>
                                        <li><a href="<?php echo base_url()?>Home/Logout">Log Out</a></li>

                                    </ul>
                                </div>
                            </li>

                        <?php } } else{?>

                    <button class="btn btn-sm btn-info" href="#0" data-toggle="modal" data-target="#login_2">User
                        Login
                    </button>
                    <button class="btn btn-sm btn-success" href="#0" data-toggle="modal" data-target="#register">User Register</button>

                    <?php }?>






                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
	<!-- End Header =============================================== -->
<style>
    .showme{
        display: none;
    }
    .showhim:hover .showme{
        display : block;
    }
</style>