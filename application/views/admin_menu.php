New Text Document.txt
DETAILS
ACTIVITY
Today

mujtaba rumi uploaded an item
2:41 PM
Text
New Text Document.txt
No recorded activity before March 6, 2017
All selections cleared

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
                        Menu Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">



                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Restaurant Content</h3></div>
                        <div class="panel-body">
                            <form role="form" method="post"  >
                                <div class="form-group">
                                    <label>Name</label>
                                    <select class="form-group" data-style="btn-primary" name="name" >
                                        <option class="form-control" selected="selected">select name</option>

                                        <?php foreach ($show_res_content as $s){?>


                                            <option class="form-control" value="<?= $s->res_id ?>"><?php echo $s->name ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                    <div class="form-group">
                                        <label>Item Type</label>
                                        <input class="form-control"type="text" name="item_type">
                                    </div>
                                    <div class="form-group">
                                        <label>Item Name</label>
                                        <input class="form-control"type="text" name="Item_name">
                                        <label>If u want to add some attribute. click +</label>
                                        <button data-panel-id="<?= $s->res_id ?>" onclick="selectid4(this)">ADD</button>
                                    </div>
                                    <div class="form-group">
                                        <label>Item Description</label>
                                        <input class="form-control"type="text" name="Item_description">
                                    </div>
                                    <div class="form-group">
                                        <label>Item Price</label>
                                        <input class="form-control"type="text" name="Item_price">
                                    </div>


                                    <input class="btn btn-success" type="submit" value="Submit" formaction="<?php echo base_url("Admin_menu/insert_res")?>"">
                            </form>

                        </div>


                    </div>

                    <div id="myModal4" class="modal">

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

    var modal4 = document.getElementById('myModal4');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];


    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');




    function selectid4(x) {
        modal4.style.display = "block";
        btn = $(x).data('panel-id');

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("")?>'+btn,
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


</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


</body>

</html>