// Wait until the page is fully loaded
$( document ).ready(function() {
    // Set up user view model
    var userView = {
        user: ko.observable(),
        password: ko.observable(),
        oldpassword: ko.observable(),
        updateUser: function() {
            // Convert user to JSON
            var userData = ko.toJSON(userView);
            // Post user data to ajax controller
            $.post(site_url('settings/user'), userData, function(response){
            console.log(response);
            // Decode message
            message = JSON.parse(response);
            if (message === 'yes') {
                // Blank the form
                userView.user('');
                userView.password('');
                userView.oldpassword('');                
            } else {
                // Problem, so don't blank the form
                alert('There was a problem updating the username and password.');
            }
            });
        }
    };
    // Activate Knockout on user view
    ko.applyBindings(userView, document.getElementById('userPanel'));
    
    // Set up custom attribute view model
    var customView = {
        custom1: ko.observable(),
        custom2: ko.observable(),
        custom3: ko.observable(),
        custom4: ko.observable(),
        custom5: ko.observable(),
        custom6: ko.observable(),
        custom7: ko.observable(),
        custom8: ko.observable(),
        custom9: ko.observable(),
        custom10: ko.observable(),
        updateCustom: function() {
            // Convert customView to JSON
            data = ko.toJSON(customView);
            // Post data to ajax controller
            $.post(site_url('settings/postcustom'), data, function(response) {
                
            });
        }
    };
    
    // Start by fetching the current attribute labels
    $.getJSON(site_url('settings/getcustom'), function(data) {
        for (i=0; i < 10; i++) {
            obj = data[i];
            switch (obj.skey) {
                case "custom1":
                    customView.custom1(obj.svalue);
                    break;
                case "custom2":
                    customView.custom2(obj.svalue);
                    break;
                case "custom3":
                    customView.custom3(obj.svalue);
                    break;
                case "custom4":
                    customView.custom4(obj.svalue);
                    break;
                case "custom5":
                    customView.custom5(obj.svalue);
                    break;
                case "custom6":
                    customView.custom6(obj.svalue);
                    break;
                case "custom7":
                    customView.custom7(obj.svalue);
                    break;
                case "custom8":
                    customView.custom8(obj.svalue);
                    break;
                case "custom9":
                    customView.custom9(obj.svalue);
                    break;
                case "custom10":
                    customView.custom10(obj.svalue);
                    break;               
            }
        }      
    });
    // Activate Knockout on custom attributes labels view
    ko.applyBindings(customView, document.getElementById('customPanel'));
});