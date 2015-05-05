$(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;

    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});

$(function() {
  var $form = $("#checkout");
  var client = new braintree.api.Client({clientToken: clientToken});

  $form.on('submit', function(e) {
    // if (!$form.data('cc-on-file')) {
      e.preventDefault();
      client.tokenizeCard({number: $('#card-number').val(), expirationDate: $('#expiration_date').val()}, function (err, nonce) {
        // Send nonce to your server
        if(!err){
            console.log(err);
            console.log(nonce);
        }
        else {
            $form.append("<input type='hidden' name='payment_method_nonce' value='" + nonce + "'/>");
            $form.get(0).submit();
         }

      });

    // }
  });

  // function stripeResponseHandler(status, response) {
  //   if (response.error) {
  //     $('.error')
  //       .removeClass('hide')
  //       .find('.alert')
  //       .text(response.error.message);
  //   } else {
  //     // token contains id, last4, and card type
  //     var token = response['id'];
  //     // insert the token into the form so it gets submitted to the server
  //     $form.find('input[type=text]').empty();
  //     $form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
  //     $form.get(0).submit();
  //   }
  // }
})