$().ready(function(){
    $("#signupForm").validate({
        rules: {
            corr: {
                required: true,
                corr: true
            }
        },

        messages: {
            corr: {
                required: "Por favor introduzca el correo"
            }

        }
    });
});