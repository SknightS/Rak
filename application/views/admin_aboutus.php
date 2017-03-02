<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php $this->load->view('adminmenu');?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                       About us Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>About</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_content" enctype="multipart/form-data">

                                <?php if ($show_about_us_content == Null){ ?>

                                    <div class="form-group">
                                        <label>About us small</label>
                                        <input class="form-control" type="text" name="asmall">
                                    </div>



                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_about_us_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>About us small</label>
                                            <input class="form-control" type="text" name="asmall" value="<?php echo $s->small?>">
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>About Details</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_details_content" enctype="multipart/form-data">

                                <?php if ($show_about_us_details_content == Null){ ?>

                                    <div class="form-group">
                                        <label>header</label>
                                        <input class="form-control" type="text" name="header">
                                    </div>

                                    <div class="form-group">
                                        <label>details</label>
                                        <input class="form-control" type="text" name="details">
                                    </div>

                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_about_us_details_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>header</label>
                                            <input class="form-control" type="text" name="header" value="<?php echo $s->header ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>details</label>
                                            <input class="form-control" type="text" name="details" value="<?php echo $s->details?>">
                                        </div>


                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>About feature</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_feature_content" enctype="multipart/form-data">

                                <?php if ($show_about_us_feature_content == Null){ ?>

                                    <div class="form-group">
                                        <label>Big</label>
                                        <input class="form-control" type="text" name="big">
                                    </div>

                                    <div class="form-group">
                                        <label>Small</label>
                                        <input class="form-control" type="text" name="small">
                                    </div>

                                    <div class="form-group">
                                        <label>Box Header</label>
                                        <input class="form-control" type="text" name="boxheader" >
                                    </div>

                                    <div class="form-group">
                                        <label>Box details</label>
                                        <input class="form-control" type="text" name="boxdetails" >
                                    </div>

                                    <div class="form-group">
                                        <label>Icon</label>

                                        <select class="form-control"  name="icon" id="dst" >

                                            <option value="" selected disabled>Icon Name</option>

                                            <?php

                                            foreach ($icon as $i)
                                                {
                                                    echo "<option value='" . $i->icon_name . "'>" . $i->icon_name . "</option>";
                                                }

                                            ?>
                                        </select>
                                    </div>


                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_about_us_feature_content as $s){
                                        ?>

                                        <table>
                                            <tr>
                                                <td>Sl</td>
                                                <td>Big</td>
                                                <td>Small</td>
                                                <td>Box Header</td>
                                                <td>Box details</td>
                                                <td>Icon</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input class="form-control" type="text" name="big" value="<?php echo $s->big?>" ></td>
                                                <td><input class="form-control" type="text" name="small" value="<?php echo $s->small?>"></td>
                                                <td><input class="form-control" type="text" name="boxheader" value="<?php echo $s->box_header?>"></td>
                                                <td><input class="form-control" type="text" name="boxdetails" value="<?php echo $s->box_details?>"></td>
                                                <td>
                                                    <select class="form-control"  name="dst" id="dst" >

                                                        <option value="<?php echo $s->icon_name ?>" selected disabled><?php echo $s->icon_name ?></option>

                                                        <?php

                                                        foreach ($icon as $i)
                                                        {
                                                            echo "<option value='" . $i->icon_name . "'>" . $i->icon_name . "</option>";
                                                        }

                                                        ?>
                                                    </select>
                                                </td>

                                            </tr>
                                        </table>


                                        <div class="form-group">
                                            <label>Icon</label>

                                            <select class="form-control"  name="dst" id="dst" >

                                                <option value="<?php echo $s->icon_name ?>" selected disabled><?php echo $s->icon_name ?></option>

                                                <?php

                                                foreach ($icon as $i)
                                                {
                                                    echo "<option value='" . $i->icon_name . "'>" . $i->icon_name . "</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>About banner</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_banner_content" enctype="multipart/form-data">

                                <?php if ($show_about_us_banner_content == Null){ ?>

                                    <div class="form-group">
                                        <label>Details</label>
                                        <input class="form-control" type="text" name="details">
                                    </div>

                                    <div class="form-group">
                                        <label>image</label>
                                        <input class="form-control" type="text" name="image">
                                    </div>

                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_about_us_banner_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>Details</label>
                                            <input class="form-control" type="text" name="details" value="<?php echo $s->details?>">
                                        </div>

                                        <div class="form-group">
                                            <label>image</label>
                                            <input class="form-control" type="text" name="image">
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


</body>

</html>
