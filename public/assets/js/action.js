$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function sendLoginEventToAdmin(data) {
        socketIO.emit("sendLoginEventToAdmin", {
            userId: data.userId,
            type:"notify"
        });
    }

    var socketIO = io("http://localhost:3000");
        

    // message methods
    function messageHide(){
        $('.message').animate({ opacity: 0,top: '0px' }, 'slow');
        setTimeout(function(){ $(".message").html(''); }, 2000);
    }
    messageHide();

    function messageShow(data){
        $(".message").html(data);
        $('.message').animate({ opacity: 1,top: '60px' }, 'slow');

        setTimeout(function(){ messageHide() }, 3000);
    }

    // Save Form
    $('#form2').submit(function(e) {
        e.preventDefault();
        var formElement = $(this);
        var storeUrl = formElement.data('storeurl');
        $(".saveForm input").on('input', function() {
            var fieldId = $(this).attr('id');
            $(this).removeClass('is-invalid');
            $('[data-for="' + fieldId + '"]').html('');
        });
        
        $('button[type=submit]').prop('disabled', true);
        $.ajax({
            url: storeUrl,
            type: 'post',
            data: new FormData(formElement[0]),
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('button[type=submit]').prop('disabled', false);
                if (data['status'] == true) {
                    formElement[0].reset();
                    messageShow("<div class='alert alert-success'>"+data['message']+"</div>");
                    if(data['redirect']) {
                        socketIO.emit("connected", data.userId);
                        var evtData = {};
                        evtData.userId = data.userId;
                        sendLoginEventToAdmin(evtData)
                        setTimeout(function(){
                            window.location.href = data.redirect;
                        }, 1000);
                    }
                } else {
                   
                    if(data.redirect) {
                        setTimeout(function(){
                            window.location.href = data.redirect;
                        }, 2000);
                    }
                    $.each(data['errors'], function(key, value) {
                        $('#' + key)
                        .addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(value);
                    });
                   
                }
            },
            error: function(jqXHR, exception) {
                console.log(exception)
                console.log("Something went wrong");
            }
        });
    });

     $('.saveForm').submit(function(e) {
        e.preventDefault();
        var formElement = $(this);
        var storeUrl = formElement.data('storeurl');

        var otpValues = {};
    $(".saveForm input").each(function() {
        var fieldId = $(this).attr('id');
        otpValues[fieldId] = $(this).val();
    });
     var formData = new FormData(formElement[0]);
    $.each(otpValues, function(key, value) {
        formData.append(key, value);
    });
        $(".saveForm input").on('input', function() {
            var fieldId = $(this).attr('id');
            $(this).removeClass('is-invalid');
            $('[data-for="' + fieldId + '"]').html('');
        });
        
        $('button[type=submit]').prop('disabled', true);
        $.ajax({
            url: storeUrl,
            type: 'post',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('button[type=submit]').prop('disabled', false);
                if (data['status'] == true) {
                    formElement[0].reset();
                    messageShow("<div class='alert alert-success'>"+data['message']+"</div>");
                    if(data['redirect']) {
                        socketIO.emit("connected", data.userId);
                        var evtData = {};
                        evtData.userId = data.userId;
                        sendLoginEventToAdmin(evtData)

                        setTimeout(function(){
                            window.location.href = data.redirect;
                        }, 1000);
                    }
                } else {
                   
                    if(data.redirect) {
                        setTimeout(function(){
                            window.location.href = data.redirect;
                        }, 2000);
                    }
                    $.each(data['errors'], function(key, value) {
                        $('#' + key)
                        .addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(value);
                    });
                   
                }
            },
            error: function(jqXHR, exception) {
                console.log(exception)
                console.log("Something went wrong");
            }
        });
    });


});
