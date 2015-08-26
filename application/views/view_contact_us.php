<html>
<head>


    <link href="<?php echo base_url(); ?>chinthana/dist/css/contactus.css" rel="stylesheet" type="text/css" />
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

                <li class="active"><a href="<?php echo base_url().'index.php/Register'; ?>">Sign up</li>
                <li><a href="shop.html">Store Locator</a></li>

                <li><a href="<?php echo base_url(). 'index.php/Login'; ?>">My Account</a></li>
                <li><a href="<?php echo base_url().'index.php/customise'?>">Customise</a></li>
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
            <li class="color1"> <a href="<?php echo base_url().'index.php/home '; ?>">Home</a></li>
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
            <li class="color5"><a href="<?php echo base_url().'index.php/ViewHotelWearProducts '; ?>">Hotel Products</a>
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
                                </ul>
                            </div>

                            <div class="col1"></div>
                            <img src="<?php echo base_url(); ?>images/nav_img2.jpg" alt=""/>
                        </div>
                    </div>
            </li>
            <li class="color6"> <a href="<?php echo base_url().'index.php/Shopping '; ?>">Online Store</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Shop</h4>
                                <ul>
                                    <li><a href="shop.html">Give Aways</a></li>
                                    <li><a href="shop.html">Lankan Products </a></li>
                                </ul>
                            </div>
                            <!--					<div class="row">-->
                            <div class="col2">
                                <img src="<?php echo base_url(); ?>images/nav_img4.jpg" alt=""/>
                            </div>
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
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                <img src="<?php echo base_url(); ?>images/nav_img5.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
            </li>
            <li><a class="color8" href="<?php echo base_url().'index.php/Innovation'; ?>">Innovations</a>
            <li><a class="color9" href="#">Portfolio</a></li>
            <li><a class="color10" href="#">About Us</a></li>
            <li class="color11"><a href="<?php echo base_url().'index.php/ctrl_contact'; ?>">Contact Us</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<div class="container" style="margin-top:0px;">

<div class="row">
<div class="span7" id="contact-info">

<div class="tabs">
</div>
<div id="general-inquiry" class="article clearfix">


<div id="contact-form"><h2>General Inquiry or Feedback</h2>
<?php echo validation_errors(); ?>

<?php echo form_open('ctrl_contact'); ?>
<form role="form">
<p>Thank you for your interest in Devins Advertising. Fields marked with an asterisk (*) are required.</p>
<div class="geui-form-messages" data-target="contact-us-form"></div><form class="geui-form" data-validate="true" data-message="Thank you for getting in touch with us." action="/contact/general" method="post" id="contact-us-form" accept-charset="UTF-8"><div><div class="form-field clearfix span5"><div class="form-item form-type-select form-item-relationship">
        <label for="edit-relationship">What is your relationship to Devins Advertising? <span class="form-required" title="This field is required.">*</span></label>
        <select class="form-control" value="<?php echo set_value('combo_relationship'); ?>" name="combo_relationship">
            <option>Journalist/Media Professional</option>
            <option>Investor</option>
            <option>Job Seeker</option>
            <option>Business Customer</option>
            <option>General Customer</option>
            <option>Employee</option>
            <option>Government Employee</option>
            <option>Other/I'm just interested in Devins Advertising</option>
        </select>
    </div>
</div>
<div class="form-field clearfix span5"><div class="form-item form-type-select form-item-subject">
        <label for="edit-subject">Subject <span class="form-required" title="This field is required.">*</span></label>
        <input class="form-text required" name="text_subject" value="<?php echo set_value('text_subject'); ?>" size="60" maxlength="128" type="text">
    </div>
</div><div class="form-field clearfix span5"><div style="display: block;" class="form-item form-type-select form-item-Other">
        <label for="edit-other">Area of Interest <span class="form-required">*</span></label>
        <input class="form-text required" name="text_interest" value="<?php echo set_value('text_interest'); ?>" size="60" maxlength="128" type="text">
    </div>

</div><div class="form-field clearfix span5"><div class="form-item form-type-select form-item-country">
    <label for="edit-country">Country </label>
    <select class="form-control" value="<?php echo set_value('combo_country'); ?>" name="combo_country">


<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, the Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Côte d'Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan, Province of China</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>
</div>
</div><div class="form-field clearfix span5"><div class="form-item form-type-textfield form-item-email">
        <label for="edit-email">Email Address <span class="form-required" title="This field is required.">*</span></label>
        <input class="geui-form-email-validate form-text required" id="edit-email" value="<?php echo set_value('text_email'); ?>" name="text_email" size="60" maxlength="128" type="text">


    </div>
</div><div class="form-field clearfix span5"><div class="form-item form-type-textarea form-item-msg">
        <label for="edit-msg">Comments or Questions <br>(8,000 characters max.) <span class="form-required" title="This field is required.">*</span></label>
        <div class="form-textarea-wrapper"><textarea id="edit-msg" name="msg" cols="60" rows="5" value="<?php echo set_value('msg'); ?>" class="form-textarea required"></textarea></div>
    </div>
</div>
<div class="form-field clearfix span5">
    <button class="btn btn-primary" type="submit">Submit</button>
    <!--<input class="geui-button form-field pull-right clearfix desaturated-red form-submit" id="edit-button" name="op" value="Submit" type="submit">-->
</div>
    <input name="honeypot_time" value="1431313433" type="hidden">
    <input name="form_build_id" value="form-yiKPgLrHaoz81TitOc2mbr_3VbDL0S6ligg0J9A_kD0" type="hidden">
    <input name="form_id" value="contact_us_form" type="hidden">
    <div class="url-textfield"><div class="form-item form-type-textfield form-item-url"><input autocomplete="off" id="edit-url" name="url" value="" size="20" maxlength="128" class="form-text" type="hidden">
    </div>
</div></div>
</form>
</div>
</div>
<!-- end building sections -->
</div>

<div class="span4 offset1 sidebar">







    <div id="block-1639" class="block block-sidebar contextual-links-region">

        <div class="contextual-links-wrapper">
            <ul class="contextual-links">
                <li></li>
                <li></li>
            </ul>
        </div>

        <div class="desaturated-grey stretch " data-ga-category="sidebar Contact Information">



            <span class="geui-circle hidden-phone"><i class="geui-icon geui-icon-white geui-icon-phone"></i></span>


            <h3>Contact Information</h3>

            <div class="article">




                <p><strong><a href="http://www.geappliances.com">Devins Advertising</a></strong><br>
                    Phone: +94 502 452 4311 *<br>
                    Appliance Answer Center: +94 800 626 2000 *</p>
                <p><strong><a href="http://www.gelighting.com">Devins Customer Services </a></strong><br>
                    Phone: +94 216 266 2121 *<br>
                    Customer Service: +94 800 435 4448 *</p>
                <p>&nbsp;</p>
                <p><strong><a href="http://www.gecapital.com">Devins Fashions </a></strong><br>
                    Devins Fashion Contact Information: +94 800 243 2222 *<br>
                    Devins Hospitality: +94 855 730 7283 *<br>
                    Devins Sevices (formerly Capital Retail): +94 866 419 4096 *<br>
                    Devins Corporate Relations: +94 866 419 4096 *</p>





            </div>




        </div> <!-- .highlights -->
    </div>



    <div id="block-1024" class="block block-sidebar contextual-links-region">

        <div class="contextual-links-wrapper">
            <ul class="contextual-links">
                <li></li>
                <li></li>
            </ul>
        </div>

        <div class="desaturated-grey stretch " data-ga-category="sidebar Have an idea for GE?">



            <span class="geui-circle hidden-phone"><i class="geui-icon geui-icon-white geui-icon-bulb"></i></span>


            <h3>Have an idea for Devins?</h3>

            <div class="article">




                <p>Please visit our Submitting Ideas and Inventions section for information on submitting ideas to GE.</p>
                <p><a href="submitted-ideas/index">Submitting Ideas and Inventions </a></p>


            </div>




        </div> <!-- .highlights -->
    </div>



</div>
</div>
</div>
</body>
</html>
	