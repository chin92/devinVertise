<section class="content">
    <!-- form elements-->
    <section class="content">

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">All the Inquiries</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->


            <div class="box-body">
                <?php echo validation_errors(); ?>

                <div class="box-body">


                    <form>

                        <?php foreach($reviews as $review): ?>
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title"><?php echo $review->subject; ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <dl class="dl-horizontal">
                                        <dt>Inquiry</dt>
                                        <dd><?php echo $review->inquiry; ?></dd>
                                        <dt>Date and Time</dt>
                                        <dd><?php echo $review->date; ?></dd>
                                        <dt>Customer Type</dt>
                                        <dd><?php echo $review->relationship; ?></dd>
                                        <dt>Customer's E-mail address</dt>
                                        <dd><?php echo $review->customer_email; ?></dd>
                                        <dt>Country</dt>
                                        <dd><?php echo $review->country; ?></dd>
                                        <dt>Area of Interest</dt>
                                        <dd><?php echo $review->interest; ?></dd>
                                    </dl>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button class="btn btn-primary" formaction="<?php echo base_url('index.php/reviews/delete/'.$review->inquiryID); ?>" onclick="return confirm('Delete entry?')" >Delete Inquiry</button>
                                    <button class="btn btn-primary" formaction="<?php echo base_url('index.php/ctrl_sendmail'); ?>">Respond to the Inquiry</button>
                                </div>
                            </div><!-- /.box -->




                        <?php endforeach ?>
                    </form>

                </div><!-- /.box-body -->


                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->  <!--Add details box-->



    </section>

</section>