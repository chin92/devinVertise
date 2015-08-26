
<!DOCTYPE HTML>
<html>
<head>
    <title>Devins : Fashions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url(); ?>css/form.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easydropdown.js"></script>
    <!--    //////////////-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styling.css">
    <!--    //////////////-->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <!--///////////////////////////////////////////////-->
    <script type="text/javascript">
        // To conform clear all data in cart.
        function clear_cart() {
            var result = confirm('Are you sure want to clear all bookings?');

            if (result) {
                window.location = "<?php echo base_url(); ?>index.php/shopping/remove/all";
            } else {
                return false; // cancel button
            }
        }
    </script>
    <!--////////////////////////////////////////////////-->
    <!-- start menu -->
    <link href="<?php echo base_url(); ?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo base_url(); ?>js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!-- end menu -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function()
        {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    <!-- top scrolling -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
</head>
<body>
<div class="header-top">
    <div class="wrap">
        <div class="logo">
            <a href="index.html"><img src="<?php echo base_url(); ?>images/logo.png" alt=""/></a>
        </div>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="register.html">Sign up</a></li>
                <li><a href="shop.html">Store Locator</a></li>
                <li><a href="login.html">My Account</a></li>
                <li><a href="checkout.html">CheckOut</a></li>

            </ul>
        </div>
        <ul class="icon2 sub-icon2 profile_img">
            <li><a class="active-icon c2" href="#"> </a>
                <ul class="sub-icon2 list">
                    <!--                    <li><h3>Shopping Bag</h3><a href=""></a></li>-->
                    <!--                    /////////////-->

                    <div id="cart" >
                        <div id = "heading">
                            <h2 align="center">Products on Your Shopping Cart</h2>
                        </div>

                        <div id="text">
                            <?php  $cart_check = $this->cart->contents();

                            // If cart is empty, this will show below message.
                            if(empty($cart_check)) {
                                echo 'To add products to your shopping cart click on "Add to Cart" Button';
                            }  ?> </div>

                        <table id="table" border="0" cellpadding="5px" cellspacing="1px">
                            <?php
                            // All values of cart store in "$cart".
                            if ($cart = $this->cart->contents()): ?>
                                <tr id= "main_heading">
                                    <td>Serial</td>
                                    <td>Name</td>
                                    <td>Price</td>
                                    <td>Qty</td>
                                    <td>Amount</td>
                                    <td>Cancel Product</td>
                                </tr>
                                <?php
                                // Create form and send all values in "shopping/update_cart" function.
                                echo form_open('shopping/update_cart');
                                $grand_total = 0;
                                $i = 1;

                                foreach ($cart as $item):
//                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                    //  Will produce the following output.
//                 <input type="hidden" name="cart[1][id]" value="1" />

                                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                                    ?>
                                    <tr>
                                    <td>
                                        <?php echo $i++; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['name']; ?>
                                    </td>
                                    <td>
                                        $ <?php echo number_format($item['price'], 2); ?>
                                    </td>
                                    <td>
                                        <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                                    </td>
                                    <?php $grand_total = $grand_total + $item['subtotal']; ?>
                                    <td>
                                        $ <?php echo number_format($item['subtotal'], 2) ?>
                                    </td>
                                    <td>

                                        <?php
                                        // cancle image.
                                        $path = "<img src='http://localhost/codeigniter_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                                        echo anchor('shopping/remove/' . $item['rowid'], $path); ?>
                                    </td>
                                <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td><b>Order Total: $<?php

                                            //Grand Total.
                                            echo number_format($grand_total, 2); ?></b></td>

                                    <?php // "clear cart" button call javascript confirmation message ?>
                                    <td colspan="5" align="right"><input type="button" class ='fg-button teal' value="Clear Cart" onclick="clear_cart()">

                                        <?php //submit button. ?>
                                        <input type="submit" class ='fg-button teal' value="Update Cart">
                                        <?php echo form_close(); ?>

                                        <!-- "Place order button" on click send "billing" controller-->
                                        <input type="button" class ='fg-button teal' value="Place Order" onclick="window.location = 'shopping/billing_view'"></td>
                                </tr>
                            <?php endif; ?>
                        </table>

                    </div>
                    <!--                    //////////////-->
                    <!--                    <li><p>You don't have any products in your bag currently-->
                    <!--                            <a href="">adipiscing elit, sed diam</a>-->
                    <!--                        </p></li>-->
                </ul>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<div class="header-bottom">
<div class="wrap">
<!-- start header menu -->
<ul class="megamenu skyblue">
<li><a class="color1" href="#">Home</a></li>
<li class="grid"><a class="color2" href="#">Promotional Products</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Promotional Wear</h4>
                    <ul>
                        <li><a href="shop.html">Promotional T-Shirts</a></li>
                        <li><a href="shop.html">Sports Wear</a></li>
                        <li><a href="shop.html">School Wear</a></li>
                        <li><a href="shop.html">Office Wear</a></li>
                        <li><a href="shop.html">Work Wear</a></li>
                        <li><a href="shop.html">Hospital Wear</a></li>
                    </ul>
                </div>
                <div class="h_nav">
                    <h4 class="top">Tailor-Made</h4>
                    <ul>
                        <li><a href="shop.html">Special Projects</a></li>
                        <div>
                            <!--									<li><a href="shop.html">men</a></li>-->
                            <!--									<li><a href="shop.html">women</a></li>-->
                            <!--									<li><a href="shop.html">accessories</a></li>-->
                            <!--									<li><a href="shop.html">kids</a></li>-->
                            <!--									<li><a href="shop.html">style videos</a></li>-->
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>Promotional Items</h4>
                    <ul>
                        <li><a href="shop.html">Caps</a></li>
                        <li><a href="shop.html">Bags</a></li>
                        <li><a href="shop.html">Umbrellas</a></li>
                        <li><a href="shop.html">Ceramics</a></li>
                        <li><a href="shop.html">Key Tags</a></li>
                        <li><a href="shop.html">Wall Clocks</a></li>
                        <li><a href="shop.html">Wrist Watch</a></li>
                        <li><a href="shop.html">Pens</a></li>
                        <li><a href="shop.html">Mugs</a></li>
                        <li><a href="shop.html">Electric Items</a></li>
                        <li><a href="shop.html">Gift Items</a></li>
                        <li><a href="shop.html">Business Card Folders</a></li>
                        <li><a href="shop.html">Pin Badges</a></li>
                        <li><a href="shop.html">Identification Bands</a></li>
                        <li><a href="shop.html">Lanyards</a></li>
                        <li><a href="shop.html">Paper Weights</a></li>
                        <li><a href="shop.html">Travelling Mugs</a></li>
                        <li><a href="shop.html">Water Bottles</a></li>
                        <li><a href="shop.html">Pen Drive</a></li>
                        <li><a href="shop.html">Car Sunshades</a></li>
                        <li><a href="shop.html">Torch</a></li>
                        <li><a href="shop.html">Organisers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <img src="<?php echo base_url(); ?>images/nav_img.jpg" alt=""/>
        </div>
    </div>
</li>
<li class="active grid"><a class="color4" href="#">Advertising</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Solutions</h4>
                    <ul>
                        <li><a href="shop.html">Web Sites</a></li>
                        <li><a href="shop.html">Membership Cards</a></li>
                        <li><a href="shop.html">ID Cards</a></li>
                        <li><a href="shop.html">Leaflets</a></li>
                        <li><a href="shop.html">Business Cards</a></li>
                        <!--									<li><a href="shop.html">brands</a></li>-->
                    </ul>
                </div>
            </div>
            <div>
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>help</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">trends</a></li>-->
                <!--									<li><a href="shop.html">sale</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--									<li><a href="shop.html">accessories</a></li>-->
                <!--									<li><a href="shop.html">kids</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--								</ul>	-->
                <!--							</div>							-->
                <!--						</div>-->
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>my company</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">trends</a></li>-->
                <!--									<li><a href="shop.html">sale</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--									<li><a href="shop.html">accessories</a></li>-->
                <!--									<li><a href="shop.html">kids</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--								</ul>	-->
                <!--							</div>												-->
                <!--						</div>-->
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>account</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">login</a></li>-->
                <!--									<li><a href="shop.html">create an account</a></li>-->
                <!--									<li><a href="shop.html">create wishlist</a></li>-->
                <!--									<li><a href="shop.html">my shopping bag</a></li>-->
                <!--									<li><a href="shop.html">brands</a></li>-->
                <!--									<li><a href="shop.html">create wishlist</a></li>-->
                <!--								</ul>	-->
                <!--							</div>						-->
                <!--						</div>-->
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>popular</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">new arrivals</a></li>-->
                <!--									<li><a href="shop.html">men</a></li>-->
                <!--									<li><a href="shop.html">women</a></li>-->
                <!--									<li><a href="shop.html">accessories</a></li>-->
                <!--									<li><a href="shop.html">kids</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--								</ul>	-->
                <!--							</div>-->
                <!--						</div>-->
            </div>
            <div class="col1">
                <div class="h_nav">
                    <img src="<?php echo base_url(); ?>images/nav_img1.jpg" alt=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col2"></div>
            <div>
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
            </div>
        </div>
    </div>
</li>
<li><a class="color5" href="#">Hotel Products</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Hotelware</h4>
                    <ul>
                        <li><a href="shop.html">Hotel Wear</a></li>
                        <li><a href="shop.html">Hotel Linen</a></li>
                        <li><a href="shop.html">Hotel Signs</a></li>
                        <li><a href="shop.html">Name Tags</a></li>
                        <li><a href="shop.html">Tailor made Items</a></li>
                        <!--									<li><a href="shop.html">login</a></li>-->
                    </ul>
                </div>

                <div>
                    <!--							<div class="h_nav">-->
                    <!--								<h4 class="top">man</h4>-->
                    <!--								<ul>-->
                    <!--									<li><a href="shop.html">new arrivals</a></li>-->
                    <!--									<li><a href="shop.html">men</a></li>-->
                    <!--									<li><a href="shop.html">women</a></li>-->
                    <!--									<li><a href="shop.html">accessories</a></li>-->
                    <!--									<li><a href="shop.html">kids</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--								</ul>	-->
                    <!--							</div>-->
                    <!--						</div>-->
                    <!--						<div class="col1">-->
                    <!--							<div class="h_nav">-->
                    <!--								<h4>style zone</h4>-->
                    <!--								<ul>-->
                    <!--									<li><a href="shop.html">men</a></li>-->
                    <!--									<li><a href="shop.html">women</a></li>-->
                    <!--									<li><a href="shop.html">accessories</a></li>-->
                    <!--									<li><a href="shop.html">kids</a></li>-->
                    <!--									<li><a href="shop.html">brands</a></li>-->
                    <!--								</ul>	-->
                    <!--							</div>							-->
                    <!--						</div>-->
                </div>
                <div class="col1"></div>
                <div>
                    <!--						<div class="col1"></div>-->
                    <!--						<div class="col1"></div>-->
                    <!--						<div class="col1"></div>-->
                </div>
                <img src="<?php echo base_url(); ?>images/nav_img2.jpg" alt=""/>
            </div>
        </div>
</li>
<li><a class="color6" href="#">Online Store</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="shop.html">Give Aways</a></li>
                        <li><a href="shop.html">Lankan Products </a></li>
                        <div>
                            <!--									<li><a href="shop.html">Fashion Store</a></li>-->
                            <!--									<li><a href="shop.html">accessories</a></li>-->
                            <!--									<li><a href="shop.html">kids</a></li>-->
                            <!--									<li><a href="shop.html">brands</a></li>-->
                        </div>
                    </ul>
                </div>
                <div>
                    <!--							<div class="h_nav">-->
                    <!--								<h4 class="top">my company</h4>-->
                    <!--								<ul>-->
                    <!--									<li><a href="shop.html">trends</a></li>-->
                    <!--									<li><a href="shop.html">sale</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--									<li><a href="shop.html">accessories</a></li>-->
                    <!--									<li><a href="shop.html">kids</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--								</ul>	-->
                    <!--							</div>												-->
                    <!--						</div>-->
                    <!--						<div class="col1">-->
                    <!--							<div class="h_nav">-->
                    <!--								<h4>man</h4>-->
                    <!--								<ul>-->
                    <!--									<li><a href="shop.html">new arrivals</a></li>-->
                    <!--									<li><a href="shop.html">men</a></li>-->
                    <!--									<li><a href="shop.html">women</a></li>-->
                    <!--									<li><a href="shop.html">accessories</a></li>-->
                    <!--									<li><a href="shop.html">kids</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--								</ul>	-->
                    <!--							</div>						-->
                    <!--						</div>-->
                    <!--						<div class="col1">-->
                    <!--							<div class="h_nav">-->
                    <!--								<h4>help</h4>-->
                    <!--								<ul>-->
                    <!--									<li><a href="shop.html">trends</a></li>-->
                    <!--									<li><a href="shop.html">sale</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--									<li><a href="shop.html">accessories</a></li>-->
                    <!--									<li><a href="shop.html">kids</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--								</ul>	-->
                    <!--							</div>							-->
                    <!--						</div>-->
                    <!--						<div class="col1">-->
                    <!--							<div class="h_nav">-->
                    <!--								<h4>account</h4>-->
                    <!--								<ul>-->
                    <!--									<li><a href="shop.html">login</a></li>-->
                    <!--									<li><a href="shop.html">create an account</a></li>-->
                    <!--									<li><a href="shop.html">create wishlist</a></li>-->
                    <!--									<li><a href="shop.html">my shopping bag</a></li>-->
                    <!--									<li><a href="shop.html">brands</a></li>-->
                    <!--									<li><a href="shop.html">create wishlist</a></li>-->
                    <!--								</ul>	-->
                    <!--							</div>						-->
                    <!--						</div>-->
                    <!--						<div class="col1">-->
                    <!--							<div class="h_nav">-->
                    <!--								<h4>my company</h4>-->
                    <!--								<ul>-->
                    <!--									<li><a href="shop.html">trends</a></li>-->
                    <!--									<li><a href="shop.html">sale</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--									<li><a href="shop.html">accessories</a></li>-->
                    <!--									<li><a href="shop.html">kids</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--								</ul>	-->
                    <!--							</div>-->
                    <!--						</div>-->
                    <!--						<div class="col1">-->
                    <!--							<div class="h_nav">-->
                    <!--								<h4>popular</h4>-->
                    <!--								<ul>-->
                    <!--									<li><a href="shop.html">new arrivals</a></li>-->
                    <!--									<li><a href="shop.html">men</a></li>-->
                    <!--									<li><a href="shop.html">women</a></li>-->
                    <!--									<li><a href="shop.html">accessories</a></li>-->
                    <!--									<li><a href="shop.html">kids</a></li>-->
                    <!--									<li><a href="shop.html">style videos</a></li>-->
                    <!--								</ul>	-->
                    <!--							</div>-->
                    <!--						</div>-->
                    <!--					</div>-->
                </div>
                <div class="row">
                    <div class="col2"></div>
                    <div>
                        <!--						<div class="col1"></div>-->
                        <!--						<div class="col1"></div>-->
                        <!--						<div class="col1"></div>-->
                        <!--						<div class="col1"></div>-->
                    </div>
                </div>
            </div>
</li>
<li><a class="color7" href="#">Fashions</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="shop.html">Men</a></li>
                        <li><a href="shop.html">Women</a></li>
                        <li><a href="shop.html">Kids</a></li>
                        <li><a href="shop.html">Accessories</a></li>
                        <!--									<li><a href="shop.html">kids</a></li>-->
                        <!--									<li><a href="shop.html">brands</a></li>-->
                    </ul>
                </div>
            </div>
            <div>
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>help</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">trends</a></li>-->
                <!--									<li><a href="shop.html">sale</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--									<li><a href="shop.html">accessories</a></li>-->
                <!--									<li><a href="shop.html">kids</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--								</ul>	-->
                <!--							</div>							-->
                <!--						</div>-->
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>my company</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">trends</a></li>-->
                <!--									<li><a href="shop.html">sale</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--									<li><a href="shop.html">accessories</a></li>-->
                <!--									<li><a href="shop.html">kids</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--								</ul>	-->
                <!--							</div>												-->
                <!--						</div>-->
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>account</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">login</a></li>-->
                <!--									<li><a href="shop.html">create an account</a></li>-->
                <!--									<li><a href="shop.html">create wishlist</a></li>-->
                <!--									<li><a href="shop.html">my shopping bag</a></li>-->
                <!--									<li><a href="shop.html">brands</a></li>-->
                <!--									<li><a href="shop.html">create wishlist</a></li>-->
                <!--								</ul>	-->
                <!--							</div>						-->
                <!--						</div>-->
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>my company</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">trends</a></li>-->
                <!--									<li><a href="shop.html">sale</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--									<li><a href="shop.html">accessories</a></li>-->
                <!--									<li><a href="shop.html">kids</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--								</ul>	-->
                <!--							</div>-->
                <!--						</div>-->
                <!--						<div class="col1">-->
                <!--							<div class="h_nav">-->
                <!--								<h4>popular</h4>-->
                <!--								<ul>-->
                <!--									<li><a href="shop.html">new arrivals</a></li>-->
                <!--									<li><a href="shop.html">men</a></li>-->
                <!--									<li><a href="shop.html">women</a></li>-->
                <!--									<li><a href="shop.html">accessories</a></li>-->
                <!--									<li><a href="shop.html">kids</a></li>-->
                <!--									<li><a href="shop.html">style videos</a></li>-->
                <!--								</ul>	-->
                <!--							</div>-->
                <!--						</div>-->
                <!--					</div>-->
            </div>
            <div class="row">
                <div class="col2"></div>
                <div>
                    <!--						<div class="col1"></div>-->
                    <!--						<div class="col1"></div>-->
                    <!--						<div class="col1"></div>-->
                    <!--						<div class="col1"></div>-->
                </div>
            </div>
        </div>
</li>
<li><a class="color8" href="#">Innovations</a>
    <div class="megapanel">
        <div>
            <!--					<div class="row">-->
            <!--						<div class="col1">-->
            <!--							<div class="h_nav">-->
            <!--								<h4>style zone</h4>-->
            <!--								<ul>-->
            <!--									<li><a href="shop.html">men</a></li>-->
            <!--									<li><a href="shop.html">women</a></li>-->
            <!--									<li><a href="shop.html">accessories</a></li>-->
            <!--									<li><a href="shop.html">kids</a></li>-->
            <!--									<li><a href="shop.html">brands</a></li>-->
            <!--								</ul>	-->
            <!--							</div>							-->
            <!--						</div>-->
            <!--						<div class="col1">-->
            <!--							<div class="h_nav">-->
            <!--								<h4>popular</h4>-->
            <!--								<ul>-->
            <!--									<li><a href="shop.html">new arrivals</a></li>-->
            <!--									<li><a href="shop.html">men</a></li>-->
            <!--									<li><a href="shop.html">kids</a></li>-->
            <!--									<li><a href="shop.html">accessories</a></li>-->
            <!--									<li><a href="shop.html">login</a></li>-->
            <!--								</ul>	-->
            <!--							</div>-->
            <!--							<div class="h_nav">-->
            <!--								<h4 class="top">man</h4>-->
            <!--								<ul>-->
            <!--									<li><a href="shop.html">new arrivals</a></li>-->
            <!--									<li><a href="shop.html">accessories</a></li>-->
            <!--									<li><a href="shop.html">kids</a></li>-->
            <!--									<li><a href="shop.html">style videos</a></li>-->
            <!--								</ul>	-->
            <!--							</div>-->
            <!--						<div class="col1"></div>-->
            <!--						<div class="col1"></div>-->
            <!--						<div class="col1"></div>-->
            <!--						<div class="col1"></div>-->
            <!--					</div>-->
            <!--				</div>-->
        </div>
</li>
<li><a class="color9" href="#">Portfolio</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <!--								<h4>shop</h4>-->
                    <ul>
                        <li><a href="shop.html">Our Customers</a></li>
                        <li><a href="shop.html">Our Projects</a></li>
                        <li><a href="shop.html">women</a></li>
                        <li><a href="shop.html">accessories</a></li>
                        <li><a href="shop.html">kids</a></li>
                        <li><a href="shop.html">brands</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>help</h4>
                    <ul>
                        <li><a href="shop.html">trends</a></li>
                        <li><a href="shop.html">sale</a></li>
                        <li><a href="shop.html">style videos</a></li>
                        <li><a href="shop.html">accessories</a></li>
                        <li><a href="shop.html">kids</a></li>
                        <li><a href="shop.html">style videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>my company</h4>
                    <ul>
                        <li><a href="shop.html">trends</a></li>
                        <li><a href="shop.html">sale</a></li>
                        <li><a href="shop.html">style videos</a></li>
                        <li><a href="shop.html">accessories</a></li>
                        <li><a href="shop.html">kids</a></li>
                        <li><a href="shop.html">style videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>account</h4>
                    <ul>
                        <li><a href="shop.html">login</a></li>
                        <li><a href="shop.html">create an account</a></li>
                        <li><a href="shop.html">create wishlist</a></li>
                        <li><a href="shop.html">my shopping bag</a></li>
                        <li><a href="shop.html">brands</a></li>
                        <li><a href="shop.html">create wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>my company</h4>
                    <ul>
                        <li><a href="shop.html">trends</a></li>
                        <li><a href="shop.html">sale</a></li>
                        <li><a href="shop.html">style videos</a></li>
                        <li><a href="shop.html">accessories</a></li>
                        <li><a href="shop.html">kids</a></li>
                        <li><a href="shop.html">style videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>popular</h4>
                    <ul>
                        <li><a href="shop.html">new arrivals</a></li>
                        <li><a href="shop.html">men</a></li>
                        <li><a href="shop.html">women</a></li>
                        <li><a href="shop.html">accessories</a></li>
                        <li><a href="shop.html">kids</a></li>
                        <li><a href="shop.html">style videos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col2"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
        </div>
    </div>
</li>
<li><a class="color10" href="#">About Us</a></li>
<li><a class="color11" href="#">Contact Us</a></li>
<!--				<li><a class="color12" href="#">Basketball</a></li>-->
</ul>
<div class="clear"></div>
</div>
</div>
<div class="login">
<div class="wrap">
<div class="rsidebar span_1_of_left">
    <section  class="sky-form">
        <h4>Filters</h4>
        <div class="row row1 scroll-pane">
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Electronics</label>
            </div>
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Toys</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mobile Phones</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tablet Phones</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Laptop Computers</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mobile and Tablet Accessories</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Laptop Accessories</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Cameras and Camcoders</label>
                <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>-->
            </div>
        </div>
        <h4>Style</h4>
        <div class="row row1 scroll-pane">
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flats</label>
            </div>
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Heels</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other</label>
            </div>
        </div>
        <div>
            <!--        <h4>Styles</h4>-->
            <!--        <div class="row row1 scroll-pane">-->
            <!--            <div class="col col-4">-->
            <!--                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>-->
            <!--            </div>-->
            <!--            <div class="col col-4">-->
            <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>-->
            <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>-->
            <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>-->
            <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>-->
            <!--            </div>-->
            <!--        </div>-->
        </div>
    </section>
    <div>
        <!--    <section  class="sky-form">-->
        <!--        <h4>Brand</h4>-->
        <!--        <div class="row row1 scroll-pane">-->
        <!--            <div class="col col-4">-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Adidas by Stella McCartney</label>-->
        <!--            </div>-->
        <!--            <div class="col col-4">-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asics</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch Kids</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Capezio Kids</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </section>-->
        <!--    <section  class="sky-form">-->
        <!--        <h4>Heel Height</h4>-->
        <!--        <div class="row row1 scroll-pane">-->
        <!--            <div class="col col-4">-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flat (20)</label>-->
        <!--            </div>-->
        <!--            <div class="col col-4">-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Under 1in(5)</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1in - 1 3/4 in(5)</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2in - 2 3/4 in(3)</label>-->
        <!--                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>3in - 3 3/4 in(2)</label>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </section>-->
    </div>
    <section  class="sky-form">
        <h4>Price</h4>
        <div class="row row1 scroll-pane">
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under</label>
            </div>
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under</label>
            </div>
        </div>
    </section>
    <section  class="sky-form">
        <h4>Colors</h4>
        <div class="row row1 scroll-pane">
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
            </div>
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Green</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
            </div>
        </div>
    </section>
</div>
<div class="cont span_2_of_3">
<div class="mens-toolbar">
    <div class="sort">
        <div class="sort-by">
            <label>Sort By</label>
            <select>
                <option value="">
                    Popularity               </option>
                <option value="">
                    Price : High to Low               </option>
                <option value="">
                    Price : Low to High               </option>
            </select>
            <!--            <a href=""><img src="--><?php //echo base_url(); ?><!--images/arrow2.gif" alt="" class="v-middle"></a>-->
        </div>
    </div>
    <div class="pager">
        <div class="limiter visible-desktop">
            <label>Show</label>
            <select>
                <option value="" selected="selected">
                    10               </option>
                <option value="">
                    25                </option>
                <option value="">
                    50                </option>
            </select> per page
        </div>
        <ul class="dc_pagination dc_paginationA dc_paginationA06">
            <li><a href="#" class="previous">Pages</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<div>
<!--<div class="box1">-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic11.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic10.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic9.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="clear"></div>-->
<!--</div>-->
<!--<div class="box1">-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic3.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic4.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic5.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="clear"></div>-->
<!--</div>-->
<!--<div class="box1">-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic6.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic7.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic8.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="clear"></div>-->
<!--</div>-->
<!--<div class="box1">-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic2.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic1.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">-->
<!--            <div class="view1 view-fifth1">-->
<!--                <div class="top_box">-->
<!--                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p class="m_2">Lorem ipsum</p>-->
<!--                    <div class="grid_img">-->
<!--                        <div class="css3"><img src="images/pic.jpg" alt=""/></div>-->
<!--                        <div class="mask1">-->
<!--                            <div class="info">Quick View</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="price">Â£480</div>-->
<!--                </div>-->
<!--            </div>-->
<!--					   <span class="rating1">-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
<!--				        <label for="rating-input-1-5" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">-->
<!--				        <label for="rating-input-1-4" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">-->
<!--				        <label for="rating-input-1-3" class="rating-star1"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">-->
<!--				        <label for="rating-input-1-2" class="rating-star"></label>-->
<!--				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">-->
<!--				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;-->
<!--		        	  (45)-->
<!--		    	      </span>-->
<!--            <ul class="list2">-->
<!--                <li>-->
<!--                    <img src="images/plus.png" alt=""/>-->
<!--                    <ul class="icon1 sub-icon1 profile_img">-->
<!--                        <li><a class="active-icon c1" href="#">Add To Bag </a>-->
<!--                            <ul class="sub-icon1 list">-->
<!--                                <li><h3>sed diam nonummy</h3><a href=""></a></li>-->
<!--                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="clear"></div>-->
<!--        </a></div>-->
<!--    <div class="clear"></div>-->
<!--</div>-->
</div>
</div>
<!---->
<!--/////////////////////////////////////////-->
<!--<div id="cart" >-->
<!--    <div id = "heading">-->
<!--        <h2 align="center">Products on Your Shopping Cart</h2>-->
<!--    </div>-->
<!---->
<!--    <div id="text">-->
<!--        --><?php // $cart_check = $this->cart->contents();
//
//        // If cart is empty, this will show below message.
//        if(empty($cart_check)) {
//            echo 'To add products to your shopping cart click on "Add to Cart" Button';
//        }  ?><!-- </div>-->
<!---->
<!--    <table id="table" border="0" cellpadding="5px" cellspacing="1px">-->
<!--        --><?php
//        // All values of cart store in "$cart".
//        if ($cart = $this->cart->contents()): ?>
<!--            <tr id= "main_heading">-->
<!--                <td>Serial</td>-->
<!--                <td>Name</td>-->
<!--                <td>Price</td>-->
<!--                <td>Qty</td>-->
<!--                <td>Amount</td>-->
<!--                <td>Cancel Product</td>-->
<!--            </tr>-->
<!--            --><?php
//            // Create form and send all values in "shopping/update_cart" function.
//            echo form_open('shopping/update_cart');
//            $grand_total = 0;
//            $i = 1;
//
//            foreach ($cart as $item):
////                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
//                //  Will produce the following output.
////                 <input type="hidden" name="cart[1][id]" value="1" />
//
//                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
//                echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
//                echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
//                echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
//                echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
//                ?>
<!--                <tr>-->
<!--                <td>-->
<!--                    --><?php //echo $i++; ?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php //echo $item['name']; ?>
<!--                </td>-->
<!--                <td>-->
<!--                    $ --><?php //echo number_format($item['price'], 2); ?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php //echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
<!--                </td>-->
<!--                --><?php //$grand_total = $grand_total + $item['subtotal']; ?>
<!--                <td>-->
<!--                    $ --><?php //echo number_format($item['subtotal'], 2) ?>
<!--                </td>-->
<!--                <td>-->
<!---->
<!--                    --><?php
//                    // cancle image.
//                    $path = "<img src='http://localhost/codeigniter_cart/images/cart_cross.jpg' width='25px' height='20px'>";
//                    echo anchor('shopping/remove/' . $item['rowid'], $path); ?>
<!--                </td>-->
<!--            --><?php //endforeach; ?>
<!--            </tr>-->
<!--            <tr>-->
<!--                <td><b>Order Total: $--><?php
//
//                        //Grand Total.
//                        echo number_format($grand_total, 2); ?><!--</b></td>-->
<!---->
<!--                --><?php //// "clear cart" button call javascript confirmation message ?>
<!--                <td colspan="5" align="right"><input type="button" class ='fg-button teal' value="Clear Cart" onclick="clear_cart()">-->
<!---->
<!--                    --><?php ////submit button. ?>
<!--                    <input type="submit" class ='fg-button teal' value="Update Cart">-->
<!--                    --><?php //echo form_close(); ?>
<!---->
<!--                    <!-- "Place order button" on click send "billing" controller-->
<!--                    <input type="button" class ='fg-button teal' value="Place Order" onclick="window.location = 'shopping/billing_view'"></td>-->
<!--            </tr>-->
<!--        --><?php //endif; ?>
<!--    </table>-->
<!--</div>-->
<!--/////////////////////////////////////////-->

<div id="products_e" align="center">

    <!--    <h2 id="head" align="center">Products</h2>-->
    <?php

    // "$products" send from "shopping" controller,its stores all product which available in database.
    foreach ($products as $product) {
        $id = $product['serial'];
        $name = $product['name'];
        $description = $product['description'];
        $price = $product['price'];
        ?>

        <div id='product_div'>
            <div id='image_div'>
                <img src="<?php echo base_url() . $product['picture'] ?>"/>
            </div>
            <div id='info_product'>
                <div id='name'><?php echo $name; ?></div>
                <div id='desc'>  <?php echo $description; ?></div>
                <div id='rs'><b>Price</b>:<big style="color:#2B60DE">
                        $<?php echo $price; ?></big></div>
                <?php

                // Create form and send values in 'shopping/add' function.
                echo form_open('shopping/add');
                echo form_hidden('id', $id);
                echo form_hidden('name', $name);
                echo form_hidden('price', $price);
                ?> </div>
            <div id='add_button'>
                <?php
                $btn = array(
                    'class' => 'fg-button teal',
                    'value' => 'Add to Cart',
                    'name' => 'action'
                );

                // Submit Button.
                echo form_submit($btn);
                echo form_close();
                ?>
            </div>
        </div>

    <?php } ?>

</div>
<div class="clear"></div>
</div>
</div>
<div class="footer">
<div class="footer-top">
    <div class="wrap">
        <div class="col_1_of_footer-top span_1_of_footer-top">
            <ul class="f_list">
                <li><img src="<?php echo base_url(); ?>images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over Â£100*</span></li>
            </ul>
        </div>
        <div class="col_1_of_footer-top span_1_of_footer-top">
            <ul class="f_list">
                <li><img src="<?php echo base_url(); ?>images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
            </ul>
        </div>
        <div class="col_1_of_footer-top span_1_of_footer-top">
            <ul class="f_list">
                <li><img src="<?php echo base_url(); ?>images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div>
    <!--<div class="footer-middle">-->
    <!--    <div class="wrap">-->
    <!--        <div class="section group">-->
    <!--            <div class="col_1_of_middle span_1_of_middle">-->
    <!--                <dl id="sample" class="dropdown">-->
    <!--                    <dt><a href="#"><span>Please Select a Country</span></a></dt>-->
    <!--                    <dd>-->
    <!--                        <ul>-->
    <!--                            <li><a href="#">Australia<img class="flag" src="--><?php //echo base_url(); ?><!--images/as.png" alt="" /><span class="value">AS</span></a></li>-->
    <!--                            <li><a href="#">Sri Lanka<img class="flag" src="--><?php //echo base_url(); ?><!--images/srl.png" alt="" /><span class="value">SL</span></a></li>-->
    <!--                            <li><a href="#">Newziland<img class="flag" src="--><?php //echo base_url(); ?><!--images/nz.png" alt="" /><span class="value">NZ</span></a></li>-->
    <!--                            <li><a href="#">Pakistan<img class="flag" src="--><?php //echo base_url(); ?><!--images/pk.png" alt="" /><span class="value">Pk</span></a></li>-->
    <!--                            <li><a href="#">United Kingdom<img class="flag" src="--><?php //echo base_url(); ?><!--images/uk.png" alt="" /><span class="value">UK</span></a></li>-->
    <!--                            <li><a href="#">United States<img class="flag" src="--><?php //echo base_url(); ?><!--images/us.png" alt="" /><span class="value">US</span></a></li>-->
    <!--                        </ul>-->
    <!--                    </dd>-->
    <!--                </dl>-->
    <!--            </div>-->
    <!--            <div class="col_1_of_middle span_1_of_middle">-->
    <!--                <ul class="f_list1">-->
    <!--                    <li><span class="m_8">Sign up for email and Get 15% off</span>-->
    <!--                        <div class="search">-->
    <!--                            <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">-->
    <!--                            <input type="submit" value="Subscribe" id="submit" name="submit">-->
    <!--                            <div id="response"> </div>-->
    <!--                        </div><div class="clear"></div>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--            <div class="clear"></div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="footer-bottom">-->
    <!--    <div class="wrap">-->
    <!--        <div class="section group">-->
    <!--            <div class="col_1_of_5 span_1_of_5">-->
    <!--                <h3 class="m_9">Shop</h3>-->
    <!--                <ul class="sub_list">-->
    <!--                    <h4 class="m_10">Men</h4>-->
    <!--                    <li><a href="shop.html">Men's Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Men's Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Men's Accessories</a></li>-->
    <!--                </ul>-->
    <!--                <ul class="sub_list">-->
    <!--                    <h4 class="m_10">Women</h4>-->
    <!--                    <li><a href="shop.html">Women's Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Women's Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Women's Accessories</a></li>-->
    <!--                </ul>-->
    <!--                <ul class="sub_list">-->
    <!--                    <h4 class="m_10">Kids</h4>-->
    <!--                    <li><a href="shop.html">Kids Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Kids Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Kids Accessories</a></li>-->
    <!--                </ul>-->
    <!--                <ul class="sub_list">-->
    <!--                    <h4 class="m_10">style</h4>-->
    <!--                    <li><a href="shop.html">Porsche Design Sport</a></li>-->
    <!--                    <li><a href="shop.html">Porsche Design Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Porsche Design Clothing</a></li>-->
    <!--                </ul>-->
    <!--                <ul class="sub_list">-->
    <!--                    <h4 class="m_10">Adidas Neo Label</h4>-->
    <!--                    <li><a href="shop.html">Adidas NEO Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Adidas NEO Clothing</a></li>-->
    <!--                </ul>-->
    <!--                <ul class="sub_list1">-->
    <!--                    <h4 class="m_10">Customise</h4>-->
    <!--                    <li><a href="shop.html">mi adidas</a></li>-->
    <!--                    <li><a href="shop.html">mi team</a></li>-->
    <!--                    <li><a href="shop.html">new arrivals</a></li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--            <div class="col_1_of_5 span_1_of_5">-->
    <!--                <h3 class="m_9">Sports</h3>-->
    <!--                <ul class="list1">-->
    <!--                    <li><a href="shop.html">Basketball</a></li>-->
    <!--                    <li><a href="shop.html">Football</a></li>-->
    <!--                    <li><a href="shop.html">Football Boots</a></li>-->
    <!--                    <li><a href="shop.html">Predator</a></li>-->
    <!--                    <li><a href="shop.html">F50</a></li>-->
    <!--                    <li><a href="shop.html">Football Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Golf</a></li>-->
    <!--                    <li><a href="shop.html">Golf Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Golf Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Outdoor</a></li>-->
    <!--                    <li><a href="shop.html">Outdoor Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Outdoor Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Rugby</a></li>-->
    <!--                    <li><a href="shop.html">Running</a></li>-->
    <!--                    <li><a href="shop.html">Running Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Boost</a></li>-->
    <!--                    <li><a href="shop.html">Supernova</a></li>-->
    <!--                    <li><a href="shop.html">Running Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Swimming</a></li>-->
    <!--                    <li><a href="shop.html">Tennis</a></li>-->
    <!--                    <li><a href="shop.html">Tennis Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Tennis Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Training</a></li>-->
    <!--                    <li><a href="shop.html">Training Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Training Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Training Accessories</a></li>-->
    <!--                    <li><a href="shop.html">miCoach</a></li>-->
    <!--                    <li><a href="shop.html">All Sports</a></li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--            <div class="col_1_of_5 span_1_of_5">-->
    <!--                <h3 class="m_9">Originals</h3>-->
    <!--                <ul class="list1">-->
    <!--                    <li><a href="shop.html">Originals Shoes</a></li>-->
    <!--                    <li><a href="shop.html">Gazelle</a></li>-->
    <!--                    <li><a href="shop.html">Samba</a></li>-->
    <!--                    <li><a href="shop.html">LA Trainer</a></li>-->
    <!--                    <li><a href="shop.html">Superstar</a></li>-->
    <!--                    <li><a href="shop.html">SL</a></li>-->
    <!--                    <li><a href="shop.html">ZX</a></li>-->
    <!--                    <li><a href="shop.html">Campus</a></li>-->
    <!--                    <li><a href="shop.html">Spezial</a></li>-->
    <!--                    <li><a href="shop.html">Dragon</a></li>-->
    <!--                    <li><a href="shop.html">Originals Clothing</a></li>-->
    <!--                    <li><a href="shop.html">Firebird</a></li>-->
    <!--                    <li><a href="shop.html">Originals Accessories</a></li>-->
    <!--                    <li><a href="shop.html">Men's Originals</a></li>-->
    <!--                    <li><a href="shop.html">Women's Originals</a></li>-->
    <!--                    <li><a href="shop.html">Kid's Originals</a></li>-->
    <!--                    <li><a href="shop.html">All Originals</a></li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--            <div class="col_1_of_5 span_1_of_5">-->
    <!--                <h3 class="m_9">Product Types</h3>-->
    <!--                <ul class="list1">-->
    <!--                    <li><a href="shop.html">Shirts</a></li>-->
    <!--                    <li><a href="shop.html">Pants & Tights</a></li>-->
    <!--                    <li><a href="shop.html">Shirts</a></li>-->
    <!--                    <li><a href="shop.html">Jerseys</a></li>-->
    <!--                    <li><a href="shop.html">Hoodies & Track Tops</a></li>-->
    <!--                    <li><a href="shop.html">Bags</a></li>-->
    <!--                    <li><a href="shop.html">Jackets</a></li>-->
    <!--                    <li><a href="shop.html">Hi Tops</a></li>-->
    <!--                    <li><a href="shop.html">SweatShirts</a></li>-->
    <!--                    <li><a href="shop.html">Socks</a></li>-->
    <!--                    <li><a href="shop.html">Swimwear</a></li>-->
    <!--                    <li><a href="shop.html">Tracksuits</a></li>-->
    <!--                    <li><a href="shop.html">Hats</a></li>-->
    <!--                    <li><a href="shop.html">Football Boots</a></li>-->
    <!--                    <li><a href="shop.html">Other Accessories</a></li>-->
    <!--                    <li><a href="shop.html">Sandals & Flip Flops</a></li>-->
    <!--                    <li><a href="shop.html">Skirts & Dresseses</a></li>-->
    <!--                    <li><a href="shop.html">Balls</a></li>-->
    <!--                    <li><a href="shop.html">Watches</a></li>-->
    <!--                    <li><a href="shop.html">Fitness Equipment</a></li>-->
    <!--                    <li><a href="shop.html">Eyewear</a></li>-->
    <!--                    <li><a href="shop.html">Gloves</a></li>-->
    <!--                    <li><a href="shop.html">Sports Bras</a></li>-->
    <!--                    <li><a href="shop.html">Scarves</a></li>-->
    <!--                    <li><a href="shop.html">Shinguards</a></li>-->
    <!--                    <li><a href="shop.html">Underwear</a></li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--            <div class="col_1_of_5 span_1_of_5">-->
    <!--                <h3 class="m_9">Support</h3>-->
    <!--                <ul class="list1">-->
    <!--                    <li><a href="shop.html">Store finder</a></li>-->
    <!--                    <li><a href="shop.html">Customer Service</a></li>-->
    <!--                    <li><a href="shop.html">FAQ</a></li>-->
    <!--                    <li><a href="shop.html">Online Shop Contact Us</a></li>-->
    <!--                    <li><a href="shop.html">about adidas Products</a></li>-->
    <!--                    <li><a href="shop.html">Size Charts </a></li>-->
    <!--                    <li><a href="shop.html">Ordering </a></li>-->
    <!--                    <li><a href="shop.html">Payment </a></li>-->
    <!--                    <li><a href="shop.html">Shipping </a></li>-->
    <!--                    <li><a href="shop.html">Returning</a></li>-->
    <!--                    <li><a href="shop.html">Using out Site</a></li>-->
    <!--                    <li><a href="shop.html">Delivery Terms</a></li>-->
    <!--                    <li><a href="shop.html">Site Map</a></li>-->
    <!--                    <li><a href="shop.html">Gift Card</a></li>-->
    <!---->
    <!--                </ul>-->
    <!--                <ul class="sub_list2">-->
    <!--                    <h4 class="m_10">Company Info</h4>-->
    <!--                    <li><a href="shop.html">About Us</a></li>-->
    <!--                    <li><a href="shop.html">Careers</a></li>-->
    <!--                    <li><a href="shop.html">Press</a></li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--            <div class="clear"></div>-->
    <!--        </div>-->
    <!--    </div>-->
</div>

</div>


<script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>