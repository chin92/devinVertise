<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Devins Advertising : Register</title>
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
            <a href="<?php echo base_url().'index.php/home'; ?>"><img src="<?php echo base_url(); ?>images/logo.png" alt=""/></a>
        </div>
        <div class="cssmenu">
            <ul>
                <!--<li>Welcome <?php /*echo $this->session->userdata('username');*/?></li>-->
                <li class="active"><a href="<?php echo base_url().'index.php/Register'; ?>">Sign up</a></li>
                <li><a href="<?php echo base_url().'index.php/ctrl_contact'; ?>">Store Locator</a></li>

                <li><a href="<?php echo base_url(). 'index.php/Login'; ?>">My Account</a></li>
                <li><a href="<?php echo base_url().'index.php/customise'; ?>">Customise</a></li>
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
<li><a class="color1"><a href="<?php echo base_url().'index.php/home'; ?>">Home</a></li>
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
            <div class="col1">
                <div class="h_nav">
                    <img src="<?php echo base_url(); ?>images/nav_img1.jpg" alt=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col2"></div>
        </div>
    </div>
</li>
<li><a class="color5" href="<?php echo base_url().'index.php/ViewHotelWearProducts'; ?>">Hotel Products</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Hotelware</h4>
                    <ul>
                        <li><a href="<?php echo base_url().'index.php/ViewHotelWearProducts'; ?>l">Hotel Wear</a></li>
                        <li><a href="<?php echo base_url().'index.php/ViewHotelWearProducts'; ?>">Hotel Linen</a></li>
                        <li><a href="<?php echo base_url().'index.php/ViewHotelWearProducts'; ?>">Hotel Signs</a></li>
                        <li><a href="<?php echo base_url().'index.php/ViewHotelWearProducts'; ?>">Name Tags</a></li>
                        <li><a href="<?php echo base_url().'index.php/ViewHotelWearProducts'; ?>">Tailor made Items</a></li>

                    </ul>
                </div>
                <div class="col1"></div>
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
                <!--						<div class="col1"></div>-->
                <img src="<?php echo base_url(); ?>images/nav_img2.jpg" alt=""/>
            </div>
        </div>
</li>
<li><a class="color6" href="<?php echo base_url().'index.php/Shopping'; ?>">Online Store</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="<?php echo base_url().'index.php/Shopping'; ?>">Give Aways</a></li>
                        <li><a href="<?php echo base_url().'index.php/Register'; ?>">Lankan Products </a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col2"></div>

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
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col2"></div>

            </div>
        </div>
</li>
<li><a class="color8" href="<?php echo base_url().'index.php/Innovation'; ?>">Innovations</a>
    <div class="megapanel">
</li>
<li><a class="color9" href="#">Portfolio</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">

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

</ul>
<div class="clear"></div>
</div>
</div>


<div class="register_account">
<div class="wrap">
<h4 class="title">Create an Account</h4>

<?php echo form_open('Register/create_member')
?>
<form>



<div class="col_1_of_2 span_1_of_2">
    <div><input type="text" name="firstName" id="firstName" value="<?php echo $this->input->post('firstName');?>" placeholder="First Name"></div>
   <div> <input type="text" name="lastName" id="lastName" value="<?php echo $this->input->post('lastName');?>" placeholder="Last Name"></div>
    <div><input type="text" name="address" id="address" value="<?php echo $this->input->post('address');?>" placeholder="Address"></div>
    <div><input type="text"  name="email" value="<?php echo $this->input->post('email');?>" placeholder="Email Address"></div>

</div>
<div class="col_1_of_2 span_1_of_2">
<div><input type="text" class="mydevinLogin-Text form-control" datepicker-popup="{{format}}" name="dob" ng-model="dt" is-open="opened" min-date="'1900-01-01'" max-date="'2000-01-01'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" value="<?php echo $this->input->post('dob');?>" placeholder="Date Of Birth">

</div>

<div><input type="text" name="phone" id="phone" value="<?php echo $this->input->post('phone');?>" placeholder="Contact Number"></div>
<div><input type="text" name="username" id="username" value="<?php echo $this->input->post('username');?>" placeholder="Username"></div>
<div> <input type="password" name="password" class="mydevinLogin-Text form-control" id="password" placeholder="Password"> </div>
<div><input type="password" name="passwordCon"  id="passwordCon" placeholder="Password"></div>

</div>


    <button class="grey">Submit</button>

<p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>


<div class="clear"></div>


</form>
<?php echo validation_errors('<p class="error">'); ?>


</div>
</div>
<div class="footer">

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

    <div class="footer-top">
        <div class="wrap">
            <div class="col_1_of_footer-top span_1_of_footer-top">
                <ul class="f_list">
                    <li><img src="<?php echo base_url(); ?>images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over LKR 1000*</span></li>
                </ul>
            </div>
            <div class="col_1_of_footer-top span_1_of_footer-top">
                <ul class="f_list">
                    <li><img src="<?php echo base_url(); ?>images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> 077 7123 123</span></span></li>

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