<section class="content">
    <!-- form elements-->
    <section class="content">

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Compose Messages</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->


            <div class="box-body">
                <?php echo validation_errors(); ?>

                <?php echo form_open('ctrl_sendmail'); ?>
                <form role="form">





                    <div class="box-body">
                        <div class="form-group">
                            <label>To </label>
                            <input type="text" placeholder="Enter Receiver's Email Address" value="<?php echo set_value('txt_receivermail'); ?>" name="txt_receivermail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Subject </label>
                            <input type="text" placeholder="Email Subject" value="<?php echo set_value('txt_mailsubject'); ?>" name="txt_mailsubject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Body </label>
                            <input type="textarea" name="txtarea_mailcontent" value="<?php echo set_value('txtarea_mailcontent'); ?>" class="form-control">
                        </div>

                        <!--<div class="form-group">
                            <label>Product Image Upload</label>
                            <input type="file" id="imageUpload">
                            <p class="help-block">Please select a jpg/png file</p>
                        </div>-->

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Send</button>
                        <button class="btn btn-primary" type="submit" onclick="return confirm('Send the email to all the customers ?')">Send the mail to all the customers</button>
                    </div>



                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->  <!--Add details box-->



    </section>
    </form>
</section>