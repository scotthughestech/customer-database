<h1>Add Customer</h1>
<form data-bind = "submit: submitForm">
    <div class="form-group">
        <label for="fname">First Name</label>
        <input data-bind="textInput: fname" type="text" class="form-control" id="fname">
    </div>
    <div class="form-group">
        <label for="lname">Last Name</label>
        <input data-bind="textInput: lname" type="text" class="form-control" id="lname">
    </div>
    <div class="form-group">
        <label for="company">Company</label>
        <input data-bind="textInput: company" type="text" class="form-control" id="company">
    </div>
    <div class="form-group">
        <label for="address1">Address 1</label>
        <input data-bind="textInput: address1" type="text" class="form-control" id="address1">
    </div>
    <div class="form-group">
        <label for="address2">Address 2</label>
        <input data-bind="textInput: address2" type="text" class="form-control" id="address2">
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input data-bind="textInput: city" type="text" class="form-control" id="city">
    </div>
    <div class="form-group">
        <label for="state">State</label>
        <input data-bind="textInput: state" type="text" class="form-control" id="state">
    </div>
    <div class="form-group">
        <label for="zip">ZIP Code</label>
        <input data-bind="textInput: zip" type="text" class="form-control" id="zip">
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <input data-bind="textInput: country" type="text" class="form-control" id="country">
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input data-bind="textInput: email" type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input data-bind="textInput: phone" type="text" class="form-control" id="phone">
    </div>
    <?php if (isset($custom)): ?>
        <?php if (isset($custom['custom1'])): ?>
            <div class="form-group">
                <label for="custom1"><?php echo $custom['custom1']; ?></label>
                <input data-bind="textInput: custom1" type="text" class="form-control" id="custom1">
            </div>
        <?php endif; ?>
        <?php if (isset($custom['custom2'])): ?>
            <div class="form-group">
                <label for="custom2"><?php echo $custom['custom2']; ?></label>
                <input data-bind="textInput: custom2" type="text" class="form-control" id="custom2">
            </div>
        <?php endif; ?>
        <?php if (isset($custom['custom3'])): ?>
            <div class="form-group">
                <label for="custom3"><?php echo $custom['custom3']; ?></label>
                <input data-bind="textInput: custom3" type="text" class="form-control" id="custom3">
            </div>
        <?php endif; ?>
        <?php if (isset($custom['custom4'])): ?>
            <div class="form-group">
                <label for="custom4"><?php echo $custom['custom4']; ?></label>
                <input data-bind="textInput: custom4" type="text" class="form-control" id="custom4">
            </div>
        <?php endif; ?>
        <?php if (isset($custom['custom5'])): ?>
            <div class="form-group">
                <label for="custom5"><?php echo $custom['custom5']; ?></label>
                <input data-bind="textInput: custom5" type="text" class="form-control" id="custom5">
            </div>
        <?php endif; ?>
        <?php if (isset($custom['custom6'])): ?>
            <div class="form-group">
                <label for="custom6"><?php echo $custom['custom6']; ?></label>
                <input data-bind="textInput: custom6" type="text" class="form-control" id="custom6">
            </div>
        <?php endif; ?>
        <?php if (isset($custom['custom7'])): ?>
        <div class="form-group">
            <label for="custom7"><?php echo $custom['custom7']; ?></label>
            <input data-bind="textInput: custom7" type="text" class="form-control" id="custom7">
        </div>
        <?php endif; ?>
        <?php if (isset($custom['custom8'])): ?>
            <div class="form-group">
                <label for="custom8"><?php echo $custom['custom8']; ?></label>
                <input data-bind="textInput: custom8" type="text" class="form-control" id="custom8">
            </div>
        <?php endif; ?>
        <?php if (isset($custom['custom9'])): ?>
            <div class="form-group">
                <label for="custom9"><?php echo $custom['custom9']; ?></label>
                <input data-bind="textInput: custom9" type="text" class="form-control" id="custom9">
            </div>
        <?php endif; ?>
        <?php if (isset($custom['custom10'])): ?>
            <div class="form-group">
                <label for="custom10"><?php echo $custom['custom10']; ?></label>
                <input data-bind="textInput: custom10" type="text" class="form-control" id="custom10">
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <button type="submit" class="btn btn-default">Submit</button>
</form>