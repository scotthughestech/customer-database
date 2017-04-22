// When the page has loaded
$(document).ready(function () {
    // Set up the datatable    
    table = $('#ctable').DataTable({
        //select: true,
        select: {
            items: 'row', // Select on row instead of column or cell
            style: 'os', // Select like an operating system
            selector: 'td:not(:last-child)' // Don't select on Edit button
        },
        buttons: [
            'selectAll',
            'selectNone',
            {
                text: 'Delete selected',
                action: function () {
                    // Collect selected rows into a variable
                    var rows = table.rows({selected: true}).data();
                    // Loop through the selected rows and collect ids
                    ids = [];
                    for (i = 0; i < rows.length; i++) {
                        ids.push(rows[i].id);
                    }
                    // Post the data to the server
                    data = JSON.stringify(ids);
                    // Make sure you really want to delete them
                    if (confirm('Delete these customers?')) {
                        // Do it
                        $.post(site_url('view/delete'), data, function (response) {
                            // Decode response
                            message = JSON.parse(response);
                            if (message === 'yes') {
                                // Delete selected rows from table
                                table.rows('.selected').remove().draw();
                            } else {
                                // Problem
                                alert('There was a problem deleting the selected rows.');
                            }
                        });
                    } else {
                        // Do nothing!
                    }

                }
            },
            'csv'
        ],
        data: {},
        columns: [
            {title: 'First Name', data: 'fname'},
            {title: 'Last Name', data: 'lname'},
            {title: 'Company', data: 'company'},
            {title: 'Address 1', data: 'address1', visible: false, searchable: false},
            {title: 'Address 2', data: 'address2', visible: false, searchable: false},
            {title: 'City', data: 'city'},
            {title: 'State', data: 'state'},
            {title: 'ZIP', data: 'zip'},
            {title: 'Country', data: 'country'},
            {title: 'Email', data: 'email'},
            {title: 'Phone', data: 'phone', visible: false, searchable: false},
            {title: 'Custom 1', data: 'custom1', visible: false, searchable: false},
            {title: 'Custom 2', data: 'custom2', visible: false, searchable: false},
            {title: 'Custom 3', data: 'custom3', visible: false, searchable: false},
            {title: 'Custom 4', data: 'custom4', visible: false, searchable: false},
            {title: 'Custom 5', data: 'custom5', visible: false, searchable: false},
            {title: 'Custom 6', data: 'custom6', visible: false, searchable: false},
            {title: 'Custom 7', data: 'custom7', visible: false, searchable: false},
            {title: 'Custom 8', data: 'custom8', visible: false, searchable: false},
            {title: 'Custom 9', data: 'custom9', visible: false, searchable: false},
            {title: 'Custom 10', data: 'custom10', visible: false, searchable: false},
            {title: 'Edit', data: 'id', render: function (data, type, row, meta) {
                    return '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#editModal" data-id="' + data + '" aria-label="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>';
                }, orderable: false
            }
        ]
    });
    // Append the buttons to the table
    table.buttons().container()
            .appendTo($('.col-sm-6:eq(0)', table.table().container()));

    // Set up the modal form...
    var view = {
        DT_RowId: ko.observable(''),
        id: ko.observable(''),
        fname: ko.observable(''),
        lname: ko.observable(''),
        company: ko.observable(''),
        address1: ko.observable(''),
        address2: ko.observable(''),
        city: ko.observable(''),
        state: ko.observable(''),
        zip: ko.observable(''),
        country: ko.observable(''),
        email: ko.observable(''),
        phone: ko.observable(''),
        custom1: ko.observable(''),
        custom2: ko.observable(''),
        custom3: ko.observable(''),
        custom4: ko.observable(''),
        custom5: ko.observable(''),
        custom6: ko.observable(''),
        custom7: ko.observable(''),
        custom8: ko.observable(''),
        custom9: ko.observable(''),
        custom10: ko.observable(''),
        submitForm: function () {
            // Convert object to JSON
            var data = ko.toJSON(view);
            //console.log(data);
            // Post data to server
            $.post(site_url('view/update'), data, function (response) {
                // Decode message
                message = JSON.parse(response);
                if (message === 'yes') {
                    // Convert the observables to JS object
                    var viewData = ko.toJS(view);
                    // Find the row using the id
                    var row = table.row('#' + view.id());
                    // Assign the view data to the row
                    row.data(viewData);
                    // Hide the modal form
                    $('#editModal').modal('hide');
                    // Redraw the table
                    table.draw();                    
                } else {
                    // Problem
                    console.log('Problem with the update');
                }
            });
        }
    };

    // Activate Knockout on view
    ko.applyBindings(view, document.getElementById('editModal'));

    // Next start loading the customers from the db into memory
    $.getJSON(site_url('view/select'), function (data) {
        console.log(data);
        // Add data to table
        table.rows.add(data);
        // Draw table
        table.draw();
        // Hide the ajax loader
        $('.ajax-loader').hide();
    });

    // When you show the modal...
    $('#editModal').on('show.bs.modal', function (event) {
        // Put the focus on the first name input
        $('#fname').focus();
        // Button that triggered the modal
        var button = $(event.relatedTarget);
        // Extract info from data-id attribute
        var id = button.data('id');
        // Use the extracted id to find the row in the table
        var row = table.row('#' + id).data();
        // Assign row data to observables
        view.DT_RowId(row.DT_RowId);
        view.id(row.id);
        view.fname(row.fname);
        view.lname(row.lname);
        view.company(row.company);
        view.address1(row.address1);
        view.address2(row.address2);
        view.city(row.city);
        view.state(row.state);
        view.zip(row.zip);
        view.country(row.country);
        view.email(row.email);
        view.phone(row.phone);
        view.custom1(row.custom1);
        view.custom2(row.custom2);
        view.custom3(row.custom3);
        view.custom4(row.custom4);
        view.custom5(row.custom5);
        view.custom6(row.custom6);
        view.custom7(row.custom7);
        view.custom8(row.custom8);
        view.custom9(row.custom9);
        view.custom10(row.custom10);
    });
});

