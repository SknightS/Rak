<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    
    <?php include ('head.php') ?>
    <title>RAK - Quality Delivery or Take Away Food</title>

</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->
    
    <!-- Header ================================================== -->
    <?php include ('menu.php') ?>
	<!-- End Header =============================================== -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_2.php" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_3.php" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
			<div class="col-md-3">
            
				<div class="box_style_2 hidden-xs info">
					<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
					<hr>
					<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
				</div><!-- End box_style_1 -->
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://004542344599" class="phone">+45 423 445 99</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
                
			</div><!-- End col-md-3 -->
            
			<div class="col-md-6">
				<div class="box_style_2" id="order_process">
					<h2 class="inner">Your order details</h2>

                    <?php if ($this->session->userdata('type') == "User") {
                    foreach ($this->data['show_userinfo'] as $e){?>
                    <form method="post" action="<?php echo base_url("Item_Menu/order_confirm/")?>">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control"  name="name_order" placeholder="name" value="<?php echo $e->name?>">
					</div>

					<div class="form-group">
						<label>Telephone/mobile</label>
						<input type="text" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile" value="<?php echo $e->phone?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email_booking_2" name="email_order" class="form-control" placeholder="Your email" value="<?php echo $e->email?>">
					</div>
					<div class="form-group">
						<label>Your full address</label>
						<input type="text" id="address_order" name="address_order" class="form-control" placeholder=" Your full address" value="<?php echo $e->full_address?>">
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>City</label>
								<input type="text" id="city_order" name="city_order" class="form-control" placeholder="Your city" value="<?php echo $e->city?>">
							</div>
						</div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" id="city_order" name="state_order" class="form-control" placeholder="Your state" value="<?php echo $e->state?>">
                            </div>
                        </div>

						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Postal code</label>
								<input type="text" id="pcode_oder" name="pcode_oder" class="form-control" placeholder=" Your postal code" value="<?php echo $e->postcode?>">
							</div>
						</div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" id="city_order" name="country_order" class="form-control" placeholder="Your county" value="<?php echo $e->country?>">
                            </div>
                        </div>
					</div>
					<hr>
                        <?php }} else{?>

                        <form method="post" action="<?php echo base_url("Item_Menu/order_confirm/")?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control"  name="name_order" placeholder="name" >
                            </div>

                            <div class="form-group">
                                <label>Telephone/mobile</label>
                                <input type="text" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile" >
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email_booking_2" name="email_order" class="form-control" placeholder="Your email" >
                            </div>
                            <div class="form-group">
                                <label>Your full address</label>
                                <input type="text" id="address_order" name="address_order" class="form-control" placeholder=" Your full address" >
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" id="city_order" name="city_order" class="form-control" placeholder="Your city" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" id="city_order" name="state_order" class="form-control" placeholder="Your state" >
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Postal code</label>
                                        <input type="text" id="pcode_oder" name="pcode_oder" class="form-control" placeholder=" Your postal code" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" id="city_order" name="country_order" class="form-control" placeholder="Your county" >
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php }?>

					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Delivery Day</label>
								<select class="form-control" name="delivery_schedule_day" id="delivery_schedule_day">
									<option value="" selected>Select day</option>
									<option value="Today">Today</option>
									<option value="Tomorrow">Tomorrow</option>
								</select>
							</div>
						</div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">


                                    <?php
                                    date_default_timezone_set("America/New_York");

                                    ?>
                                    <input type="hidden" id="order_time" name="order_time" class="form-control" placeholder="Order Time"  value="<?php echo  date("h:i:sa");?>" readonly>
                                <input type="hidden" id="date" name="date" class="form-control" placeholder="Date"  value="<?php echo  date("Y-m-d");?>" readonly>


                            </div>
                        </div>
					</div>
					<hr>

				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->
            
			<div class="col-md-3" id="sidebar">
            	<div class="theiaStickySidebar">
                    <div id="cart_box" >
                        <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>

                        <table class="table table_summary">

                            <tbody>
                            <?php foreach ($this->cart->contents() as $c) {    ?>

                                <tr>

                                    <!--  <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a>  <input type='button' value='-' class='qtyminus' field='--><?php //echo $c['id']?><!--' />-->
                                    <!--  <input type='text' name='--><?php //echo $c['id']?><!--' value="--><?php //echo $c['qty']?><!--" class='qty' style="width: 20px" />-->
                                    <!--  <input type='button' onclick="plus()" value='+' class='qtyplus' field='--><?php //echo $c['id']?><!--' /> --><?php //echo $c['name'];?>
                                    <div>
                                        <td>
                                            <input type="button"  class="btn btn-success" style="width: 20px; float: left" data-panel-id="<?= $c['rowid'] ?>" onclick="minus(this)" value="-">
                                            <input type="text"  name="qty" id="<?php echo $c['rowid']?>" class="form-control" style="width: 45px; height:auto; float: left" value="<?php echo $c['qty']?>">
                                            <input type="hidden" name="res_id" class="form-control"  value="<?php echo $c['coupon']?>"/>
                                            <input type="hidden" name="attr_id" class="form-control"  value="<?php echo $c['id']?>"/>
                                            <input type="hidden" name="item_name" class="form-control"  value="<?php echo $c['name']?>"/>
                                            <input type="hidden" name="price" class="form-control"  value="<?php echo $c['price']*$c['qty'];?>"/>
                                            <input type="button" class="btn btn-success" data-panel-id="<?= $c['rowid'] ?>" onclick="plus(this)" style="width: 20px; float: left" value="+"> <?php echo $c['name']?>
                                        </td>
                                    </div>
                                    <td>
                                        <strong class="pull-right"><?php echo $c['price']*$c['qty'];?></strong>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>

                        <hr>
                        <div class="row" id="options_2">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
                            </div>
                        </div><!-- Edn options 2 -->

                        <hr>
                        <table class="table table_summary">
                            <tbody>
                            <tr>
                                <td>
                                    Subtotal <span class="pull-right">$56</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Delivery fee <span class="pull-right">$10</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="total">
                                    TOTAL <span class="pull-right">$66</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <hr>
					<!--<a class="btn_full" href="<?php echo base_url("Item_Menu/order_confirm/")?>">Go to checkout</a>-->
                        <button type="submit" class="btn btn-submit">Go to checkout</button>
					<a class="btn_full_outline" href="<?php echo base_url("Item_Menu")?>"><i class="icon-right"></i> Add other items</a>
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
            </form>
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
	<?php include ('footer.php') ?>
<!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myLogin">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Username">
					<input type="text" class="form-control form-white" placeholder="Password">
					<div class="text-left">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myRegister">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div><!-- End Register modal -->
    
     <!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->
    
<!-- COMMON SCRIPTS -->
<script src=<?php echo base_url()?>js/jquery-2.2.4.min.js></script>
<script src=<?php echo base_url()?>js/common_scripts_min.js></script>
<script src=<?php echo base_url()?>js/functions.js></script>
<script src=<?php echo base_url()?>assets/validate.js></script>

<!-- SPECIFIC SCRIPTS -->
<script src=<?php echo base_url()?>js/theia-sticky-sidebar.js></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>

    <script>
        function plus(x) {

            var btn = $(x).data('panel-id');
            var x = parseInt(document.getElementById(btn).value);
            var newx= x+1;

            document.getElementById(btn).value = newx;
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("Item_Menu/update_add_cart/")?>' + btn,
                data: {'id':btn, 'amount':newx },
                cache: false,
                success: function (data) {
                    // $('#txt').html(data);
                    //  alert(data);

                }

            });

        }

        function minus(x) {

            var btn = $(x).data('panel-id');
            var x = parseInt(document.getElementById(btn).value);
            var newx= x-1;

            document.getElementById(btn).value = newx;

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("Item_Menu/update_add_cart/")?>' + btn,
                data: {'id':btn, 'amount':newx },
                cache: false,
                success: function (data) {
                    // $('#txt').html(data);
                    //  alert(data);

                }

            });
        }

    </script>

</body>
</html>