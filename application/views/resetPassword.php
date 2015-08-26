<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
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
    <!-- start menu -->
    <link href="<?php echo base_url(); ?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo base_url(); ?>js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!-- end menu -->
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


                <li class="active"><a href="<?php echo base_url().'index.php/Register'; ?>">Sign up & Save</a></li>
                <li><a href="shop.html">Store Locator</a></li>
                <li><a href="<?php echo base_url(). 'index.php/Login'; ?>">My Account</a></li>
                <li><a href="checkout.html">CheckOut</a></li>
            </ul>
        </div>
        <ul class="icon2 sub-icon2 profile_img">
            <li><a class="active-icon c2" href="#"> </a>
                <ul class="sub-icon2 list">
                    <li><h3>Products</h3><a href=""></a></li>
                    <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
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
<li><a class="color1" href="<?php echo base_url().'index.php'; ?>">Home</a></li>
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
                        <!--									<li><a href="shop.html">men</a></li>-->
                        <!--									<li><a href="shop.html">women</a></li>-->
                        <!--									<li><a href="shop.html">accessories</a></li>-->
                        <!--									<li><a href="shop.html">kids</a></li>-->
                        <!--									<li><a href="shop.html">style videos</a></li>-->
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
            <div class="col1">
                <div class="h_nav">
                    <img src="<?php echo base_url(); ?>images/nav_img1.jpg" alt=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col2"></div>
            <!--						<div class="col1"></div>-->
            <!--						<div class="col1"></div>-->
            <!--						<div class="col1"></div>-->
            <!--						<div class="col1"></div>-->
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
                        <li><a href="<?php echo base_url().'index.php/ViewHotelWearProducts'; ?>">Hotel Wear</a></li>
                        <li><a href="shop.html">Hotel Linen</a></li>
                        <li><a href="shop.html">Hotel Signs</a></li>
                        <li><a href="shop.html">Name Tags</a></li>
                        <li><a href="shop.html">Tailor made Items</a></li>
                        <!--									<li><a href="shop.html">login</a></li>-->
                    </ul>
                </div>
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
                <div class="col1"></div>
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
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
                        <!--									<li><a href="shop.html">Fashion Store</a></li>-->
                        <!--									<li><a href="shop.html">accessories</a></li>-->
                        <!--									<li><a href="shop.html">kids</a></li>-->
                        <!--									<li><a href="shop.html">brands</a></li>-->
                    </ul>
                </div>
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
                <div class="row">
                    <div class="col2"></div>
                    <!--						<div class="col1"></div>-->
                    <!--						<div class="col1"></div>-->
                    <!--						<div class="col1"></div>-->
                    <!--						<div class="col1"></div>-->
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
            <div class="row">
                <div class="col2"></div>
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
            </div>
        </div>
</li>
<li><a class="color8" href="<?php echo base_url().'index.php/Innovation'; ?>">Innovations</a>
    <!--<div class="megapanel">
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
</li>-->
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
                        <li><a href="<?php echo base_url().'index.php/Login'; ?>">login</a></li>
                        <li><a href="<?php echo base_url().'index.php/Register'; ?>">create an account</a></li>
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


<div class="register_account">
<div class="wrap">
<h4 class="title">Reset Password</h4>

<?php echo form_open('')
?>
<form>



<div class="col_1_of_2 span_1_of_2">
    <div><input type="text"  name="email" value="<?php echo $this->input->post('email');?>" placeholder="Email Address"></div>
    <button class="grey">Submit</button>

</div>







<div class="clear"></div>


</form>
<?php echo validation_errors('<p class="error">'); ?>


</div>
</div>
<div class="footer">
<div class="footer-top">
    <div class="wrap">
        <div class="col_1_of_footer-top span_1_of_footer-top">
            <ul class="f_list">
                <li><img src="<?php echo base_url(); ?>images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
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
<div class="footer-middle">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_middle span_1_of_middle">
                <dl id="sample" class="dropdown">
                    <dt><a href="#"><span>Please Select a Country</span></a></dt>
                    <dd>
                        <ul>
                            <li><a href="#">Australia<img class="flag" src="<?php echo base_url(); ?>images/as.png" alt="" /><span class="value">AS</span></a></li>
                            <li><a href="#">Sri Lanka<img class="flag" src="<?php echo base_url(); ?>images/srl.png" alt="" /><span class="value">SL</span></a></li>
                            <li><a href="#">Newziland<img class="flag" src="<?php echo base_url(); ?>images/nz.png" alt="" /><span class="value">NZ</span></a></li>
                            <li><a href="#">Pakistan<img class="flag" src="<?php echo base_url(); ?>images/pk.png" alt="" /><span class="value">Pk</span></a></li>
                            <li><a href="#">United Kingdom<img class="flag" src="<?php echo base_url(); ?>images/uk.png" alt="" /><span class="value">UK</span></a></li>
                            <li><a href="#">United States<img class="flag" src="<?php echo base_url(); ?>images/us.png" alt="" /><span class="value">US</span></a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="col_1_of_middle span_1_of_middle">
                <ul class="f_list1">
                    <li><span class="m_8">Sign up for email and Get 15% off</span>
                        <div class="search">

                            <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                            <input type="submit" value="Subscribe" id="submit" name="submit">
                            <div id="response"> </div>
                        </div><div class="clear"></div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_5 span_1_of_5">
                <h3 class="m_9">Shop</h3>
                <ul class="sub_list">
                    <h4 class="m_10">Men</h4>
                    <li><a href="shop.html">Men's Shoes</a></li>
                    <li><a href="shop.html">Men's Clothing</a></li>
                    <li><a href="shop.html">Men's Accessories</a></li>
                </ul>
                <ul class="sub_list">
                    <h4 class="m_10">Women</h4>
                    <li><a href="shop.html">Women's Shoes</a></li>
                    <li><a href="shop.html">Women's Clothing</a></li>
                    <li><a href="shop.html">Women's Accessories</a></li>
                </ul>
                <ul class="sub_list">
                    <h4 class="m_10">Kids</h4>
                    <li><a href="shop.html">Kids Shoes</a></li>
                    <li><a href="shop.html">Kids Clothing</a></li>
                    <li><a href="shop.html">Kids Accessories</a></li>
                </ul>
                <ul class="sub_list">
                    <h4 class="m_10">style</h4>
                    <li><a href="shop.html">Porsche Design Sport</a></li>
                    <li><a href="shop.html">Porsche Design Shoes</a></li>
                    <li><a href="shop.html">Porsche Design Clothing</a></li>
                </ul>
                <ul class="sub_list">
                    <h4 class="m_10">Adidas Neo Label</h4>
                    <li><a href="shop.html">Adidas NEO Shoes</a></li>
                    <li><a href="shop.html">Adidas NEO Clothing</a></li>
                </ul>
                <ul class="sub_list1">
                    <h4 class="m_10">Customise</h4>
                    <li><a href="shop.html">mi adidas</a></li>
                    <li><a href="shop.html">mi team</a></li>
                    <li><a href="shop.html">new arrivals</a></li>
                </ul>
            </div>
            <div class="col_1_of_5 span_1_of_5">
                <h3 class="m_9">Sports</h3>
                <ul class="list1">
                    <li><a href="shop.html">Basketball</a></li>
                    <li><a href="shop.html">Football</a></li>
                    <li><a href="shop.html">Football Boots</a></li>
                    <li><a href="shop.html">Predator</a></li>
                    <li><a href="shop.html">F50</a></li>
                    <li><a href="shop.html">Football Clothing</a></li>
                    <li><a href="shop.html">Golf</a></li>
                    <li><a href="shop.html">Golf Shoes</a></li>
                    <li><a href="shop.html">Golf Clothing</a></li>
                    <li><a href="shop.html">Outdoor</a></li>
                    <li><a href="shop.html">Outdoor Shoes</a></li>
                    <li><a href="shop.html">Outdoor Clothing</a></li>
                    <li><a href="shop.html">Rugby</a></li>
                    <li><a href="shop.html">Running</a></li>
                    <li><a href="shop.html">Running Shoes</a></li>
                    <li><a href="shop.html">Boost</a></li>
                    <li><a href="shop.html">Supernova</a></li>
                    <li><a href="shop.html">Running Clothing</a></li>
                    <li><a href="shop.html">Swimming</a></li>
                    <li><a href="shop.html">Tennis</a></li>
                    <li><a href="shop.html">Tennis Shoes</a></li>
                    <li><a href="shop.html">Tennis Clothing</a></li>
                    <li><a href="shop.html">Training</a></li>
                    <li><a href="shop.html">Training Shoes</a></li>
                    <li><a href="shop.html">Training Clothing</a></li>
                    <li><a href="shop.html">Training Accessories</a></li>
                    <li><a href="shop.html">miCoach</a></li>
                    <li><a href="shop.html">All Sports</a></li>
                </ul>
            </div>
            <div class="col_1_of_5 span_1_of_5">
                <h3 class="m_9">Originals</h3>
                <ul class="list1">
                    <li><a href="shop.html">Originals Shoes</a></li>
                    <li><a href="shop.html">Gazelle</a></li>
                    <li><a href="shop.html">Samba</a></li>
                    <li><a href="shop.html">LA Trainer</a></li>
                    <li><a href="shop.html">Superstar</a></li>
                    <li><a href="shop.html">SL</a></li>
                    <li><a href="shop.html">ZX</a></li>
                    <li><a href="shop.html">Campus</a></li>
                    <li><a href="shop.html">Spezial</a></li>
                    <li><a href="shop.html">Dragon</a></li>
                    <li><a href="shop.html">Originals Clothing</a></li>
                    <li><a href="shop.html">Firebird</a></li>
                    <li><a href="shop.html">Originals Accessories</a></li>
                    <li><a href="shop.html">Men's Originals</a></li>
                    <li><a href="shop.html">Women's Originals</a></li>
                    <li><a href="shop.html">Kid's Originals</a></li>
                    <li><a href="shop.html">All Originals</a></li>
                </ul>
            </div>
            <div class="col_1_of_5 span_1_of_5">
                <h3 class="m_9">Product Types</h3>
                <ul class="list1">
                    <li><a href="shop.html">Shirts</a></li>
                    <li><a href="shop.html">Pants & Tights</a></li>
                    <li><a href="shop.html">Shirts</a></li>
                    <li><a href="shop.html">Jerseys</a></li>
                    <li><a href="shop.html">Hoodies & Track Tops</a></li>
                    <li><a href="shop.html">Bags</a></li>
                    <li><a href="shop.html">Jackets</a></li>
                    <li><a href="shop.html">Hi Tops</a></li>
                    <li><a href="shop.html">SweatShirts</a></li>
                    <li><a href="shop.html">Socks</a></li>
                    <li><a href="shop.html">Swimwear</a></li>
                    <li><a href="shop.html">Tracksuits</a></li>
                    <li><a href="shop.html">Hats</a></li>
                    <li><a href="shop.html">Football Boots</a></li>
                    <li><a href="shop.html">Other Accessories</a></li>
                    <li><a href="shop.html">Sandals & Flip Flops</a></li>
                    <li><a href="shop.html">Skirts & Dresseses</a></li>
                    <li><a href="shop.html">Balls</a></li>
                    <li><a href="shop.html">Watches</a></li>
                    <li><a href="shop.html">Fitness Equipment</a></li>
                    <li><a href="shop.html">Eyewear</a></li>
                    <li><a href="shop.html">Gloves</a></li>
                    <li><a href="shop.html">Sports Bras</a></li>
                    <li><a href="shop.html">Scarves</a></li>
                    <li><a href="shop.html">Shinguards</a></li>
                    <li><a href="shop.html">Underwear</a></li>
                </ul>
            </div>
            <div class="col_1_of_5 span_1_of_5">
                <h3 class="m_9">Support</h3>
                <ul class="list1">
                    <li><a href="shop.html">Store finder</a></li>
                    <li><a href="shop.html">Customer Service</a></li>
                    <li><a href="shop.html">FAQ</a></li>
                    <li><a href="shop.html">Online Shop Contact Us</a></li>
                    <li><a href="shop.html">about adidas Products</a></li>
                    <li><a href="shop.html">Size Charts </a></li>
                    <li><a href="shop.html">Ordering </a></li>
                    <li><a href="shop.html">Payment </a></li>
                    <li><a href="shop.html">Shipping </a></li>
                    <li><a href="shop.html">Returning</a></li>
                    <li><a href="shop.html">Using out Site</a></li>
                    <li><a href="shop.html">Delivery Terms</a></li>
                    <li><a href="shop.html">Site Map</a></li>
                    <li><a href="shop.html">Gift Card</a></li>

                </ul>
                <ul class="sub_list2">
                    <h4 class="m_10">Company Info</h4>
                    <li><a href="shop.html">About Us</a></li>
                    <li><a href="shop.html">Careers</a></li>
                    <li><a href="shop.html">Press</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="copy">
    <div class="wrap">
        <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
    </div>
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