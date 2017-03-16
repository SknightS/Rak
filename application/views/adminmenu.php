<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">RAK Admin</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li  class="active">
            <a href="<?php echo base_url()?>Admin_Home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_Faq"><i class="fa fa-fw fa-bar-chart-o"></i> Faq</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_contact"><i class="fa fa-fw fa-table"></i> Contact</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_aboutus"><i class="fa fa-fw fa-edit"></i> About us</a>
        </li>
        <li>
            <!--<a href="<?php echo base_url()?>Admin_Restaurant"><i class="fa fa-fw fa-desktop"></i> Restaurant</a>-->
            <a href="javascript:;" data-toggle="collapse" data-target="#dropdown"><i class="fa fa-fw fa-arrows-v"></i> Restaurant <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="dropdown" class="collapse">
                <li>
                    <a href="<?php echo base_url()?>Admin_Restaurant">Restaurant</a>

                    <a href="<?php echo base_url()?>Admin_Res_Details">Add Restaurant Details</a>
                </li>
            </ul>

        </li>
        <!--<li>
            <a href="<?php echo base_url()?>Admin_Res_Details"><i class="fa fa-fw fa-desktop"></i> Add Restaurant Details</a>

        </li>-->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Menu <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="<?php echo base_url()?>Admin_menu">Menu</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Restaurant_menu">Restaurant Menu</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Admin_menu_attribute">Admin Menu Attribute</a>
                </li>
            </ul>
            <!--<a href="<?php echo base_url()?>Admin_menu"><i class="fa fa-fw fa-desktop"></i> Menu</a>-->
        </li>
        <!--<li>
            <a href="<?php echo base_url()?>Admin_menu_attribute"><i class="fa fa-fw fa-wrench"></i>Menu Attribute</a>
        </li>-->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo1" class="collapse">
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo base_url()?>Rating"><i class="fa fa-fw fa-file"></i> Rating</a>
        </li>
        <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
        </li>
    </ul>
</div>