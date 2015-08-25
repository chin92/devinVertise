<section class="content">
<!-- form elements-->
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Enter New Products</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->


            <div class="box-body">
                <?php echo validation_errors(); ?>

                <?php echo form_open('/controller_products'); ?>
                <form role="form">



                    <!--Enter new product details-->

                    <div class="box-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" placeholder="Enter Product Name" value="<?php echo set_value('txt_productName'); ?>" name="txt_productName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Product ID</label>
                            <input type="text" placeholder="Enter Product ID" value="<?php echo set_value('txt_productId'); ?>" name="txt_productId" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" placeholder="Enter price" name="txt_productPrice" value="<?php echo set_value('txt_productPrice'); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Product Category</label>
                            <select class="form-control" value="<?php echo set_value('combo_productCategory'); ?>" name="combo_productCategory">
                                <option>Gent's Wear</option>
                                <option>Lady's Collection</option>
                                <option>Ornaments</option>
                                <option>Baby Items</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Type</label>
                            <select class="form-control" value="<?php echo set_value('combo_productType'); ?>" name="combo_productType">
                                <option>Jeans</option>
                                <option>Undergarments</option>
                                <option>Accessories</option>
                                <option>Party Wear</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" placeholder="Enter Quantity" value="<?php echo set_value('txt_productQty'); ?>" name="txt_productQty" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" placeholder="Enter Product Desription" value="<?php echo set_value('txt_productDesc'); ?>" name="txt_productDesc" class="form-control">
                        </div>

                        <!--<div class="form-group">
                            <label>Product Image Upload</label>
                            <input type="file" id="imageUpload">
                            <p class="help-block">Please select a jpg/png file</p>
                        </div>-->

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit" onclick="">Submit</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->  <!--Add details box-->

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Update and Delete Products</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->

            <!--Update product details-->


            <div class="box-body">

                <div class="box-body">

                    <div class="box-body">
                        <div role="grid" class="dataTables_wrapper form-inline" id="example1_wrapper"><div class="row"><div class="col-xs-6"><div id="example1_length" class="dataTables_length"><label><select name="example1_length" size="1" aria-controls="example1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-xs-6"><div class="dataTables_filter" id="example1_filter"><label>Search: <input type="text" aria-controls="example1"></label></div></div></div>
                            <table class="table table-bordered table-striped dataTable" id="example1" aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 193px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Product ID</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 267px;" aria-label="Browser: activate to sort column ascending">Product Name</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 246px;" aria-label="Price: activate to sort column ascending">Price</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 164px;" aria-label="Engine version: activate to sort column ascending">Category</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 114px;" aria-label="CSS grade: activate to sort column ascending">Quantity</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 114px;" aria-label="CSS grade: activate to sort column ascending">Update</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 114px;" aria-label="CSS grade: activate to sort column ascending">Delete</th>
                                </tr>
                                </thead>

                                <!--<tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                                </tfoot>-->
                                <tbody role="alert" aria-live="polite" aria-relevant="all">

                                <?php foreach($products as $product): ?>
                                    <tr class="odd">
                                        <td class="  sorting_1"><?php echo $product->productID; ?></td>
                                        <td class=" "><?php echo $product->productName; ?></td>
                                        <td class=" "><?php echo $product->price; ?></td>
                                        <td class=" "><?php echo $product->category; ?></td>
                                        <td class=" "><?php echo $product->quantity; ?></td>

                                        <td class=" ">
                                            <form>
                                                <button class="btn btn-primary" formaction="<?php echo base_url() . "index.php/update_ctrl/show_product_id/" . $product->productID; ?>">Update</button>
                                            </form>

                                        </td>
                                        <td class=" ">
                                            <form>
                                                <button class="btn btn-primary" formaction="<?php echo base_url('index.php/controller_products/delete/'.$product->productID); ?>" onclick="return confirm('Delete entry?')"> Delete </Button>
                                            </form>


                                        </td>
                                    </tr>

                                <?php endforeach ?>
                                ></tbody>
                            </table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
                    </div><!-- /.box-body -->
                </div><!-- /.box-body -->




                <?php echo form_open('update_ctrl/update_product_id1'); ?>

                <form role="form">
                    <?php if (isset($single_product)) : ?>
                        <?php foreach ($single_product as $product): ?>
                            <form method="post" action="<?php echo base_url() . "/update_ctrl/update_product_id1"?>">

                                <?php echo validation_errors(); ?>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" placeholder="Enter Product Name" name="txt_productName" value="<?php echo $product->productName; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Product ID</label>
                                        <input type="text" disabled placeholder="Enter Product ID" value="<?php echo $product->productID; ?>" name="txt_productId" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" placeholder="Enter price" value="<?php echo $product->price; ?>" name="txt_productPrice" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Category</label>
                                        <select class="form-control" name="combo_productCategory">
                                            <option>Gent's Wear</option>
                                            <option>Lady's Collection</option>
                                            <option>Ornaments</option>
                                            <option>Baby Items</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Type</label>
                                        <select class="form-control" name="combo_productType">
                                            <option>Jeans</option>
                                            <option>Undergarments</option>
                                            <option>Accessories</option>
                                            <option>Party Wear</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" placeholder="Enter Quantity" value="<?php echo $product->quantity; ?>" name="txt_productQty" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" placeholder="Enter Product Desription" value="<?php echo $product->description; ?>" name="txt_productDesc" class="form-control">
                                    </div>

                                    <!-- <div class="form-group">
                                         <label>Product Image Upload</label>
                                         <input type="file" id="imageUpload">
                                         <p class="help-block">Please select a jpg/png file</p>
                                     </div>-->

                                </div><!-- /.box-body -->

                                <div class="box-footer">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    <?php endif; ?>

            </div><!-- /.box-body -->
        </div><!-- /.box -->  <!--Update Product information -->
    </section>
</section>