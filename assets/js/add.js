// Create view model of Add Customer form
var view = {
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
    submitForm: function() {
        // Convert object to JSON
        var data = ko.toJSON(view);
        // Post data to server
        $.post(site_url('add/insert'), data, function(response) {
            // Decode message
            message = JSON.parse(response);
            if (message === 'yes') {
                // Blank the form
                view.fname('');
                view.lname('');
                view.company('');
                view.address1('');
                view.address2('');
                view.city('');
                view.state('');
                view.zip('');
                view.country('');
                view.email('');
                view.phone('');
                view.custom1('');
                view.custom2('');
                view.custom3('');
                view.custom4('');
                view.custom5('');
                view.custom6('');
                view.custom7('');
                view.custom8('');
                view.custom9('');
                view.custom10('');
            } else {
                // Problem, so don't blank the form
                alert('Problem adding the customer.');
            }
        });
    }
};

// Activate Knockout on view
ko.applyBindings(view);