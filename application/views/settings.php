<h1>Settings</h1>

<div class="panel panel-default" id="userPanel">
    <div class="panel-heading">
        <h3 class="panel-title">Change Username/Password</h3>
    </div>
    <div class="panel-body">
        <form data-bind="submit: updateUser">
            <div class="form-group">
                <label for="user">Username</label>
                <input data-bind="textInput: user" type="text" class="form-control" id="user" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input data-bind="textInput: password" type="password" class="form-control" id="password" required>
            </div>
            <div class="form-group">
                <label for="oldpassword">Old Password</label>
                <input data-bind="textInput: oldpassword" type="password" class="form-control" id="oldpassword" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

<div class="panel panel-default" id="customPanel">
    <div class="panel-heading">
        <h3 class="panel-title">Custom Attributes</h3>
    </div>
    <div class="panel-body">
        <form data-bind="submit: updateCustom">
            <div class="form-group">
                <label for="custom1">Custom Attribute #1 Label</label>
                <input data-bind="textInput: custom1" type="text" class="form-control" id="custom1">
            </div>
            <div class="form-group">
                <label for="custom2">Custom Attribute #2 Label</label>
                <input data-bind="textInput: custom2" type="text" class="form-control" id="custom2">
            </div>
            <div class="form-group">
                <label for="custom3">Custom Attribute #3 Label</label>
                <input data-bind="textInput: custom3" type="text" class="form-control" id="custom3">
            </div>
            <div class="form-group">
                <label for="custom4">Custom Attribute #4 Label</label>
                <input data-bind="textInput: custom4" type="text" class="form-control" id="custom4">
            </div>
            <div class="form-group">
                <label for="custom5">Custom Attribute #5 Label</label>
                <input data-bind="textInput: custom5" type="text" class="form-control" id="custom5">
            </div>
            <div class="form-group">
                <label for="custom6">Custom Attribute #6 Label</label>
                <input data-bind="textInput: custom6" type="text" class="form-control" id="custom6">
            </div>
            <div class="form-group">
                <label for="custom7">Custom Attribute #7 Label</label>
                <input data-bind="textInput: custom7" type="text" class="form-control" id="custom7">
            </div>
            <div class="form-group">
                <label for="custom8">Custom Attribute #8 Label</label>
                <input data-bind="textInput: custom8" type="text" class="form-control" id="custom8">
            </div>
            <div class="form-group">
                <label for="custom9">Custom Attribute #9 Label</label>
                <input data-bind="textInput: custom9" type="text" class="form-control" id="custom9">
            </div>
            <div class="form-group">
                <label for="custom10">Custom Attribute #10 Label</label>
                <input data-bind="textInput: custom10" type="text" class="form-control" id="custom10">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>