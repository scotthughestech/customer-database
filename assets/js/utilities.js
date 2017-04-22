// Wait until page has loaded
$(document).ready(function () {
    // Set up view for purge custom data utility
    var customView = {
        custom1: ko.observable(false),
        custom2: ko.observable(false),
        custom3: ko.observable(false),
        custom4: ko.observable(false),
        custom5: ko.observable(false),
        custom6: ko.observable(false),
        custom7: ko.observable(false),
        custom8: ko.observable(false),
        custom9: ko.observable(false),
        custom10: ko.observable(false),        
        purgeCustom: function () {
            if (confirm('Are you sure you want to do this? You can\'t undo it.')) {
                // Convert view model to json
                var data = ko.toJSON(customView);
                // Post data to ajax controller
                $.post(site_url('utilities/custom'), data, function (response) {
                    // Decode message
                    message = JSON.parse(response);
                    if (message === 'yes') {
                        // Blank the form
                        customView.custom1(false);
                        customView.custom2(false);
                        customView.custom3(false);
                        customView.custom4(false);
                        customView.custom5(false);
                        customView.custom6(false);
                        customView.custom7(false);
                        customView.custom8(false);
                        customView.custom9(false);
                        customView.custom10(false);
                    } else {
                        // Problem, so don't blank the form
                        alert('There was a problem purging the data.');
                    }
                });
            }
        }
    };
    // Apply Knockout to view
    ko.applyBindings(customView, document.getElementById('customPanel'));
});