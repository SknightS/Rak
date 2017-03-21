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

    <!-- Custom CSS -->
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
        <?php $this->load->view('adminmenu');?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Restaurant Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">



                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Restaurant Content</h3></div>
                        <div class="panel-body">

                            <?php
                            $count=1;
                           ?>

                                    <table class=" table table-responsive" border="1">
                                        <tr>
                                            <td>SL</td>
                                            <td>Name</td>
                                            <td>Type</td>
                                            <td>Address</td>
                                            <td>Website</td>
                                            <td>Email</td>
                                            <td>City</td>
                                            <td>State</td>
                                            <td>Postal Code</td>
                                            <td>Country</td>
                                            <td>Time</td>
                                            <td>Username</td>
                                            <td>Password</td>
                                            <td>VAT</td>
                                            <td>Status</td>
                                            <td>Image</td>
                                            <td colspan="2">Action</td>

                                        </tr>
                             <?php foreach ($req_restaurant as $s){?>
                                        <tr>
                                            <td><?php echo $count ?></td>
                                            <td><?php echo $s->name ?></td>
                                            <td><?php echo $s->type ?></td>
                                            <td><?php echo $s->address ?></td>
                                            <td><?php echo $s->website ?></td>
                                            <td><?php echo $s->email ?></td>
                                            <td><?php echo $s->city ?></td>
                                            <td><?php echo $s->state ?></td>
                                            <td><?php echo $s->postal_code ?></td>
                                            <td><?php echo $s->country ?></td>
                                            <td><?php echo $s->time ?></td>
                                            <td><?php echo $s->username ?></td>
                                            <td><?php echo $s->password ?></td>
                                            <td><?php echo $s->vat ?></td>
                                            <td><?php echo $s->status ?></td>
                                            <td><img src = "<?php echo base_url()?>/img/slider_single_restuarant/<?php echo $s->image ?>" alt = 'pic' height="100" width="100"/></td>

                                            <td><button data-panel-id="<?= $s->res_id ?>" onclick="selectid(this)">Accept</button></td>

                                        </tr>

                                    <?php
                                $count++;
                            }
                            ?>
                                </table>


                            </div>

                            <div id="myModal3" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">×</span>

                                    <h2>Edit Content</h2>
                                    <div id="txtHint"></div>

                                </div>


                            </div>

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
<script>


    // Get the modal
    // var modal = document.getElementById('myModal');

    var modal3 = document.getElementById('myModal3');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");


    var span2 = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');




    function selectid(x) {
       // modal3.style.display = "block";
        btn = $(x).data('panel-id');

        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Restaurant_Req/insert_res/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                //alert("Restaurant request accepted");
            alert(data);
            }

        });


    }
    span2.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }


</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


</body>

</html>
