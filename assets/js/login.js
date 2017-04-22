// Set up view
var view = {
    user: ko.observable(''),
    password: ko.observable(''),
    login: function() {
        data = ko.toJSON(view);
        $.post(site_url('login/check'), data, function(response) {
           message = JSON.parse(response);
           if (message === 'yes') {
               window.location.href = site_url('view/index');
           } else {
               console.log('Couldn\'t login');
           }
        });
    }
};

// Activate Knockout on the view
ko.applyBindings(view);