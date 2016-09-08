(function () {

    var timeout = null;
    jQuery('#email').keyup(function () {

        if (timeout !== null) {
            clearTimeout(timeout);
        }

        timeout = setTimeout(function () {
           jQuery('html').css("cursor", "progress");
           jQuery.ajax({
               'url': '/user/lookup',
               'method': 'POST',
               'data' : {
                    'email':jQuery("#email").val()
               },
               'success' : function(response) {
                   if (response.exists) {
                       jQuery("#email_message").html("The email already exists.")
                   } else {
                       jQuery("#email_message").html('The email is available.');
                   }
               },
               'error' : function(response) {
                   jQuery("#email_message").html('Please specify a valid email.');
               },
               'complete' : function() {
                   jQuery('html').css("cursor", "default");
               }
           })

           timeout = null;
        }, 2000);

    });
})();