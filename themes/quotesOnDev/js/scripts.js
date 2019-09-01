(function( $ ) {

    $('.showMeBTN').on('click', function(event) {
       event.preventDefault();
       $.ajax({
          method: 'get',
          url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&per_page=1', //randomized (end point)
          beforeSend: function(xhr) {
             xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
          }
       }).done( function(response) {
          console.log(response);
        $('.quotesContainer').empty().append(response[0].content.rendered);
        $('.author').empty().append(response[0].title.rendered);
        $('.source').empty().append(response[0]._qod_quote_source);
       });
    });


   $('.submitQuote').on('click', function(event) {
      event.preventDefault();

      let $form = $('.quoteForm').serializeArray();

      $newjson = {};

      $.each( $form, function() {
         $newjson [this.name] = this.value || '';
       });

      $newquote = JSON.stringify($newjson);

      $.ajax({
         type: "POST",
         method: 'post',
         url: red_vars.rest_url + 'wp/v2/posts',
         data: $newjson,
         beforeSend: function(xhr) {
            xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
         }
      }).done( function(response) {
         $('.quoteForm')[0].reset();
         alert('Success! Your post has been submitted!');
      })
      .fail(function() { 
        $('.submitForm').hide();
         $('.errorSubmit').show();

     });
   });
})( jQuery );







