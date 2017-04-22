<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form data-bind="submit: saveEvent">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input data-bind="textInput: title" type="text" class="form-control" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="start">Start Datetime</label>
                        <input data-bind="textInput: start" type="text" class="form-control" id="start" required>
                    </div>
                    <div class="form-group">
                        <label for="end">End Datetime</label>
                        <input data-bind="textInput: end" type="text" class="form-control" id="end" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-bind="click: deleteEvent" type="button" class="btn btn-danger" id="deleteBtn" style="display:none;">Delete</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Todo Calendar -->
<h1>Todo List</h1>
<div id='calendar'></div>