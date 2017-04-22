<div id="editModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form data-bind="submit: submitForm" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Customer</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: fname" type="text" class="form-control" id="fname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lname" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: lname" type="text" class="form-control" id="lname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company" class="col-sm-3 control-label">Company</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: company" type="text" class="form-control" id="company">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address1" class="col-sm-3 control-label">Address 1</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: address1" type="text" class="form-control" id="address1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address2" class="col-sm-3 control-label">Address 2</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: address2" type="text" class="form-control" id="address2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-sm-3 control-label">City</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: city" type="text" class="form-control" id="city">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="state" class="col-sm-3 control-label">State</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: state" type="text" class="form-control" id="state">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="zip" class="col-sm-3 control-label">ZIP Code</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: zip" type="text" class="form-control" id="zip">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country" class="col-sm-3 control-label">Country</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: country" type="text" class="form-control" id="country">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email Address</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: email" type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input data-bind="textInput: phone" type="text" class="form-control" id="phone">
                        </div>
                    </div>
                    <?php if (isset($custom)): ?>
                        <?php if (isset($custom['custom1'])): ?>
                            <div class="form-group">
                                <label for="custom1" class="col-sm-3 control-label"><?php echo $custom['custom1']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom1" type="text" class="form-control" id="custom1">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom2'])): ?>
                            <div class="form-group">
                                <label for="custom2" class="col-sm-3 control-label"><?php echo $custom['custom2']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom2" type="text" class="form-control" id="custom2">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom3'])): ?>
                            <div class="form-group">
                                <label for="custom3" class="col-sm-3 control-label"><?php echo $custom['custom3']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom3" type="text" class="form-control" id="custom3">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom4'])): ?>
                            <div class="form-group">
                                <label for="custom4" class="col-sm-3 control-label"><?php echo $custom['custom4']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom4" type="text" class="form-control" id="custom4">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom5'])): ?>
                            <div class="form-group">
                                <label for="custom5" class="col-sm-3 control-label"><?php echo $custom['custom5']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom5" type="text" class="form-control" id="custom5">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom6'])): ?>
                            <div class="form-group">
                                <label for="custom6" class="col-sm-3 control-label"><?php echo $custom['custom6']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom6" type="text" class="form-control" id="custom6">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom7'])): ?>
                            <div class="form-group">
                                <label for="custom7" class="col-sm-3 control-label"><?php echo $custom['custom7']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom7" type="text" class="form-control" id="custom7">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom8'])): ?>
                            <div class="form-group">
                                <label for="custom8" class="col-sm-3 control-label"><?php echo $custom['custom8']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom8" type="text" class="form-control" id="custom8">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom9'])): ?>
                            <div class="form-group">
                                <label for="custom9" class="col-sm-3 control-label"><?php echo $custom['custom9']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom9" type="text" class="form-control" id="custom9">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($custom['custom10'])): ?>
                            <div class="form-group">
                                <label for="custom10" class="col-sm-3 control-label"><?php echo $custom['custom10']; ?></label>
                                <div class="col-sm-9">
                                    <input data-bind="textInput: custom10" type="text" class="form-control" id="custom10">
                                </div>
                            </div>
                        <?php endif; ?>                
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>

                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<img class="ajax-loader" src="<?php echo base_url('assets/images/ajax-loader.gif'); ?>" />

<h1>View Customers</h1>
<table class="table" id="ctable"></table>
