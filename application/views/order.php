<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rak</title>

    <!--autocomplete search-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- search box-->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
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
                        Order Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Order Content</h3></div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class=" table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Restaurant Name</th>
                                            <th>Oder</th>
                                            <th>Order Time</th>
                                            <th>Order Day</th>
                                            <th>Date</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                    <form method="post"   >
                                        <?php
                                        $count =1;
                                        foreach ($this->data['te'] as $e) {?>

                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count ?> </td>
                                                    <td><?php echo $e->name ?></td>
                                                    <td><?php echo $e->phone ?></td>
                                                    <td><?php echo $e->email?></td>
                                                    <td><?php echo $e->address ?></td>
                                                    <td><?php echo $e->res_name ?></td>
                                                    <td>
                                                        <table class="table-bordered table-responsive">
                                                            <tr>
                                                            <th>
                                                                Item Name
                                                            </th>
                                                            <th>
                                                                Size
                                                            </th>
                                                            <th>
                                                                Quantity
                                                            </th>
                                                            <th>
                                                                price
                                                            </th>
                                                            </tr>
                                                            <?php
                                                            $res_id=$e->res_id;
                                                            $date=$e->date;
                                                            $query=$this->db->query("SELECT * FROM `order_cart` WHERE `res_id` = '$res_id' and `date`='$date'" );
                                                            $total=1;
                                                            foreach ( $query->result() as $s ) {

                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $s->item_name ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $s->item_attr ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $s->quantity ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $s->price ?>
                                                                    </td>
                                                                </tr>

                                                                <?php
                                                            
                                                            }

                                                            ?>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>total</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td><?php echo $e->order_time ?></td>
                                                    <td><?php echo $e->order_day ?></td>
                                                    <td><?php echo $e->date ?></td>
                                                    <!--<td><button  data-panel-id=="<?= $e->id ?>" onclick="selectid4(this)">Accept</button></td>-->
                                                    <td><button class="btn btn-success" type="submit"  formaction="<?php echo base_url()?>Order/accept_order/<?php echo $e->id ?>" onclick="return confirm('Are you confirm to accept this Order?')" >Accept</button></td>

                                                    <td><button class="btn btn-danger" type="submit"  formaction="<?php echo base_url()?>Order/delete_order/<?php echo $e->id ?>" onclick="return confirm('Are you confirm to delete this Order?')" >Delete</button></td>

                                                </tr>
                                            </tbody>

                                        <?php
                                        $count++;
                                        } ?>
                                    </form>

                                </table>
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
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>



<!--autocomplete search-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
    $(function x() {
        $( "#skills" ).autocomplete({
            source: '<?php echo base_url(); ?>Admin_menu_attribute/autocomplete'
        });
    });

</script>

<script>
    $(function(){
        $("#srch_menu_attr").autocomplete({
            source: "<?php echo site_url('Admin_menu_attribute/get_search_menu_attr_autocomplete');?>" // path to the get_birds method
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>



</body>

</html>
