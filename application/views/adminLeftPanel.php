<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>chinthana/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Chinthana Mallikarachchi</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Product Management</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() . "index.php/controller_products" ?>"><i class="fa fa-circle-o"></i> View Products </a></li>
                   <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Manage Products</a></li>-->
                </ul>
            </li>
            <li class="treeview">

                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>chinthana/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="<?php echo base_url(); ?>chinthana/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="<?php echo base_url(); ?>chinthana/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="<?php echo base_url(); ?>chinthana/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Customer Management</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url() . "index.php/reviews" ?>"><i class="fa fa-circle-o"></i> View All Inquiries </a></li>
                    <li><a href="<?php echo base_url() . "index.php/ctrl_sendmail" ?>"><i class="fa fa-circle-o"></i> Compose Mail</a></li>

                </ul>
            </li>

           </ul>
    </section>
    <!-- /.sidebar -->
</aside>