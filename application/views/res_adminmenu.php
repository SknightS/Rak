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
            <a href="<?php echo base_url()?>Res_Admin_menu"><i class="fa fa-fw fa-dashboard"></i> Menu</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Res_Admin_menu_attribute"><i class="fa fa-fw fa-bar-chart-o"></i> Menu Attribute</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Res_Admin_Restaurant"><i class="fa fa-fw fa-table"></i> Restaurant</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Res_Admin_Res_Details"><i class="fa fa-fw fa-edit"></i> Restaurant Details</a>
        </li>
        <li>
    </ul>
</div>