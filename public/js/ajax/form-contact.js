$(function() {
    $('#form-contact').on(submit, function(e) {
        $.ajaxSetup({
            header:$('meta[name="_token"]').attr('content')
        })
        e.preventDefault();
        // var name = $('#name').val();
        // var company = $('#company').val();
        // var email = $('#email').val();
        // var subject = $('#subject').val();
        // var message = $('#message').val();
        // var dataString = {
        //     name: name,
        //     company: company,
        //     email: email,
        //     subject: subject,
        //     message: message
        // };
        $.ajax({
            type: "POST",
            url: host+'/contact',
            data: $(this).serialize(),
            dataType: 'json',
            success: function( data ) {
                console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown + ' : ' + errorThrown);
            }
    });
    });
});
