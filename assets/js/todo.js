$(document).ready(function () {

    // Set up event view model
    var eventViewModel = {
        id: ko.observable(),
        title: ko.observable(),
        start: ko.observable(),
        end: ko.observable(),
        saveEvent: function () {
            if (this.end() <= this.start()) {
                alert('Please fix your dates');
            } else {
                // Convert view model to JSON
                var data = ko.toJSON(this);
                // Post the data to the server
                $.post(site_url('todo/save'), data, function (response) {
                    // Decode message
                    message = JSON.parse(response);
                    if (message === 'yes') {
                        // Hide the modal
                        $('#myModal').modal('hide');
                        // Refetch events
                        $('#calendar').fullCalendar('refetchEvents');
                    } else {
                        // Problem, so don't hide the form
                        alert('There was a problem saving the event.');
                    }
                });
            }
        },
        deleteEvent: function() {
            // Confirm you really want to delete event
            var answer = confirm('Are you sure you want to delete the event?');
            
            if (answer) {
                // Convert view model to JSON
                var data = ko.toJSON(this);
                // Post the data to the server
                $.post(site_url('todo/delete'), data, function (response) {
                    // Decode message
                    message = JSON.parse(response);
                    if (message === 'yes') {
                        // Hide the modal
                        $('#myModal').modal('hide');
                        // Refetch events
                        $('#calendar').fullCalendar('refetchEvents');
                    } else {
                        // Problem, so don't hide the form
                        alert('There was a problem deleting the event.');
                    }
                });
                
            }
        }
    };

    // Activate Knockout
    ko.applyBindings(eventViewModel, document.getElementById('myModal'));

    // Set up datetime pickers
    $('#start').flatpickr({enableTime: true});
    $('#end').flatpickr({enableTime: true});

    // Set up calendar
    $('#calendar').fullCalendar({
        // Custom Buttons
        customButtons: {
            add: {
                text: 'add',
                click: function () {                    
                    // Show the modal
                    $('#myModal').modal('show');
                    // Change modal title
                    $('#myModalLabel').text('Add Event');
                    // Hide the Delete button
                    $('#deleteBtn').hide();
                }
            }
        },
        // Header object
        header: {
            left: 'prev,next today add',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        events: {
            url: site_url('todo/feed')
        },
        eventClick: function(calEvent, jsEvent, view) {
            // Assign the event to the view model
            eventViewModel.id(calEvent.id);
            eventViewModel.title(calEvent.title);
            eventViewModel.start(calEvent.start);
            eventViewModel.end(calEvent.end);
            // Show the modal
            $('#myModal').modal('show');
            // Change modal title
            $('#myModalLabel').text('Edit Event');
            // Show the Delete button
            $('#deleteBtn').show();
        },
        timeFormat: 'h:mma'
    });

    $('#myModal').on('hidden.bs.modal', function () {
        // Clear the event view model
        eventViewModel.id('');
        eventViewModel.title('');
        eventViewModel.start('');
        eventViewModel.end('');
    });

});