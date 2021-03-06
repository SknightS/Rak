<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rak</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

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
        <!--sidemenu-->
        <?php $this->load->view('adminmenu');?>
        <!--sidemenu-->

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">




            <div class="row">
                <div class="col-lg-12">



                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Restaurant Content</h3></div>
                        <div class="panel-body">





                                <h2>Add Restaurant Content</h2>
                            <?php foreach ($this->data['show_res_content'] as $e){?>
                                <form method="post" action="<?php echo base_url()?>Res_Admin_Restaurant/insert_res" enctype="multipart/form-data">
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" value="<?php echo $e->name?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>Type</label>
                                        <input class="form-control"type="text" name="type" value="<?php echo $e->type?>">
                                    </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control"type="text" name="address" value="<?php echo $e->address?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>City</label>
                                        <input class="form-control"type="text" name="city" value="<?php echo $e->city?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>State</label>
                                        <input class="form-control"type="text" name="state" value="<?php echo $e->state?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input class="form-control"type="text" name="postal_code" value="<?php echo $e->postal_code?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input class="form-control"type="text" name="country" value="<?php echo $e->country?>">
                                    </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6" >
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input class="form-control"type="text" name="website" value="<?php echo $e->website?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>Time</label>
                                        <input class="form-control"type="text" name="time" value="<?php echo $e->time?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control"type="text" name="username" value="<?php echo $e->username?>" readonly>
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>password</label>
                                        <input class="form-control"type="text" name="password" value="<?php echo $e->password?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>VAT</label>
                                        <input class="form-control"type="text" name="vat"value="<?php echo $e->vat?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input class="form-control"type="text" name="status" value="<?php echo $e->status?>">
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >

                                    <div class="form-group">
                                        <label>File input</label>
                                        <input class="form-control" type="file" name="res_image" value="res_image" >
                                    </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6" >

                                        <div class="form-group">

                                            <input class="form-control" type="hidden" name="res_id" value="<?php echo $e->res_id?>" >
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12" >
                                    <input   class="btn btn-success" type="submit">
                                    </div>
                                </form>

                            </div>

                            <!--<div id="myModal2" class="modal">

                                <!-- Modal content
                                <div class="modal-content">
                                    <span class="close">×</span>

                                    <h2>Add Restaurant Content</h2>
                                    <form method="post" action="<?php echo base_url()?>Res_Admin_Restaurant/insert_res" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input class="form-control"type="text" name="type">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control"type="text" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control"type="text" name="city">
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <input class="form-control"type="text" name="state">
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control"type="text" name="postal_code">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input class="form-control"type="text" name="country">
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input class="form-control"type="text" name="time">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control"type="text" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control"type="text" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>VAT</label>
                                            <input class="form-control"type="text" name="vat">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control"type="text" name="status">
                                        </div>

                                        <div class="form-group">
                                            <label>File input</label>
                                            <input class="form-control" type="file" name="res_image" value="res_image">
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                    </form>

                                </div>-->


                            </div>

                            <!--<div id="myModal3" class="modal">

                                <!-- Modal content
                                <div class="modal-content">
                                    <span class="close">×</span>

                                    <h2>Edit Content</h2>
                                    <div id="txtHint"></div>

                                </div>


                            </div>-->

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

<!-- jQuery -->
<!--<script>


    // Get the modal
    // var modal = document.getElementById('myModal');
    var modal2 = document.getElementById('myModal2');
    var modal3 = document.getElementById('myModal3');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close")[1];


    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');

    function selectid2(x) {


        modal2.style.display = "block";

    }




    function selectid(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Res_Admin_Restaurant/showedit/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });


    }


    span.onclick = function() {
        modal2.style.display = "none";
    }
    span2.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }


    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }


</script>-->
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


</body>

</html>
