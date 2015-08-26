
<!DOCTYPE HTML>
<html>


<head>

    <title>Devins : Customise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url(); ?>css/form.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easydropdown.js"></script>

    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="Sat, 01 Dec 2001 00:00:00 GMT">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootswatch_paper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/JS/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/Designer.css">
    <style type="text/css">
        .ui-autocomplete{
            position:absolute;
            z-index:2147483647;
        }
        .ui-helper-hidden-accessible{
            display:none;
        }
    </style>

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
                <li class="active"><a href="<?php echo base_url().'index.php/Register'; ?>">Sign up</a></li>
                <li><a href="<?php echo base_url().'index.php/ctrl_contact'; ?>">Store Locator</a></li>
                <li><a href="<?php echo base_url().'index.php/login'; ?>">My Account</a></li>
                <li><a href="<?php echo base_url().'index.php/customise'; ?>">CheckOut</a></li>
            </ul>
        </div>

        <ul class="icon2 sub-icon2 profile_img">
            <li><a class="active-icon c2" href="#"> </a>
                <ul class="sub-icon2 list">


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
<li><a class="color1"><a href="<?php echo base_url(). 'index.php/home'; ?>">Home</a></li>
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
                            <!--									<li><a href="shop.html">style videos</a></li>
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
            <img src="<?php /*echo base_url(); */?>images/nav_img.jpg" alt=""/>
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
                    <img src="<?php /*echo base_url(); */?>images/nav_img1.jpg" alt=""/>
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
<li><a class="color5">Hotel Products</a>
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
                <img src="<?php /*echo base_url(); */?>images/nav_img2.jpg" alt=""/>
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
    <div class="myDevin-navigation-bar">

        <div class=" toogleBtn btn btn-default" id="toogleBtn" >

            <span class="">Select Type</span>
        </div>
        <div class=" toogleBtn btn btn-default" id="toogleBtn" >

            <span class="">Archives</span>
        </div>
    </div>
    <div class="SidePanel" id="SidePanel">
        <div class="btn btn-default btn-lg btn-block" id="selectShirt">T-Shirt</div>
        <div class="btn btn-default btn-lg btn-block" id="selectTshirt">Shirt</div>
        <div class="btn btn-default btn-lg btn-block" id="selectshort">Shorts</div>
        <div class="btn btn-default btn-lg btn-block" id="selectCap">Caps</div>
    </div>
    <div class="ProfilePageOneContainer" id="shirtPage">
        <canvas id="canvas" width="1000px" height="400px" style="margin-top:50px"></canvas>

    </div>


    <div class="buttonsGroup">
        <button class="myBtnDown btn btn-primary" type="button"id="buttonDownload"><a id="dl" download="DevinsDesigner.png" >Download Canvas</a></button>
        <button  class="myBtn btn btn-primary"type="button" id="DeleteCanvas">Delete</button>
        <button class="myBtn btn btn-primary"type="button" id="AddText">Add Text</button>
        <input class="myColorBtn" type="color" id="myColor">
        <input type="button" class="myBtn btn btn-primary" id="save" name="save" value="Save">
        <input type="button" class="myBtn btn btn-primary" id="load" name="load" value="Load Previous Designs">

        <div class="fileUpload btn btn-primary"><span>Upload</span>  <input class="myBtn upload"  type="file" id="file-input" value="Add Logo" id="AddLogo"></div>


    </div>

    <!-- Save dialogbox content -->
    <div id="saveAs" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="saveAsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Save As</h4>
                </div>
                <div class="modal-body">
                    <p>Changes have been made in the design canvas.</p>
                    <input class="form-control" type="text" id="txtSave" name="txtSave">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnSaveAs">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of save dialogbox content -->
    <!-- Load dialogbox content -->
    <div id="loadModal" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="saveAsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Load Previous Designs</h4>
                </div>
                <div class="modal-body">
                    <p>Changes have been made in the design canvas.</p>
                    <input type="text" class="form-control" id="typeahead" name="typeahead">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnLoad">Load</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of save dialogbox content -->

    <script type="text/javascript" src="<?php echo base_url(); ?>css/bower_components/fabric/dist/fabric.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>css/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>css/JS/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>css/JS/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>css/JS/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>css/designer.js"></script>

</div>

</body>
</html>