jQuery(document).ready(function($){

$('#email-form').submit(function(e){
    e.preventDefault();
    var form = $(this);
    var form_results = $('#form-results');

    form_results.html(' ');
    form_results.removeClass('alert');
    form_results.removeClass('alert-error');
    form_results.removeClass('alert-success');

    form.find('.btn').prop('disabled', true);

    var errors = [];

    if( form.find('input[name=name]').val() == "" ) { errors.push('The name field is required'); }
    if( form.find('input[name=email]').val()  == "" ) { errors.push('The email field is required'); }
    if( form.find('input[name=message]').val()      == "" ) { errors.push('The message field is required'); }

    if( errors.length > 0 ){

      var error_html = '<ul>';
      form_results.addClass('alert');
      form_results.addClass('alert-info');

      $.each(errors, function( index, value ) {
        error_html += '<li>' +value+ '</li>';
      });
      error_html += '</ul>';

      form_results.html(error_html);
      form.find('.btn').prop('disabled', false);
//       $.scrollTo( '#form-results', 1000, { offset:-50 } );
      return false;
    }

    var data = {
      action: 'do_ajax',
      fn: 'email_form',
      data: form.serializeArray()
    };

    jQuery.post( mw_theme.url + '/wp-admin/admin-ajax.php' , data, function(response) {

      // console.log(response);
      form.find('.btn').prop('disabled', false);
      $('#form-results').html(response);
      // Use window.location to move user to thank you page, page template
//       window.location = "http://urgelabs.com/dev/amskin/thank-you/";


    }, 'json');

  });
});
