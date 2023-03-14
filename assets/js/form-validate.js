$("#requestQuoteForm").validate({
    rules: {
        name: {
            minlength: 3,
            required: !0
        },
        email: {
            required: !0,
            email: !0
        },
        phone: {
            minlength: 10,
            required: !0
        },
        project: {
            required: !0
        },
        country: {
            required: !0
        },
    },
    highlight: function(e, i, t) {
        $(e).closest(".input-group").addClass("has-error")
    },
    unhighlight: function(e, i, t) {
        $(e).closest(".input-group").removeClass("has-error")
    },
    errorPlacement: function(e, i) {
        i.parent(".input-group").length || "checkbox" === i.prop("type") || "radio" === i.prop("type") ? e.insertAfter(i.parent()) : e.insertAfter(i)
    },
    submitHandler: function(e) {
        Swal.fire({
            icon: 'warning',
            title: 'Warning',
            text: 'There is error while submit!',
            allowOutsideClick: true,
            allowEscapeKey: true,
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonColor: '#2651be',
            confirmButtonText: `Ok`,
        }).then((result) => {
          if (result.isConfirmed) {
            // $('#requestQuoteForm')[0].reset();
          }
        });
        // $("#requestQuoteForm__result").html(""),
        // $("#requestQuoteForm button[type='submit']").html("Processing..."),
        // $("#requestQuoteForm button[type='submit']").prop("disabled", !0);
        var i = $(e).serializeArray();
        $.ajax({
            url: "./includes/inc/get-quote.php",
            type: "POST",
            data: i,
            success: function(e) {
                // window.location.href = "thank-you.php";
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Success!',
                    allowOutsideClick: true,
                    allowEscapeKey: true,
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#2651be',
                    confirmButtonText: `Ok`,
                }).then((result) => {
                  if (result.isConfirmed) {
                    $('#requestQuoteForm')[0].reset();
                  }
                });
            },
            error: function() {
                // $("#requestQuoteForm__result").html('<div class="alert alert-danger text-center">There is error while submit</div>')
            }
        })
    }
});