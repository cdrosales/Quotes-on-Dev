(function( $ ) {
    $('.showMeBTN').on('click', function(event) {
       event.preventDefault();
       $.ajax({
          method: 'get',
          url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&per_page=1', //randomized (end point)
        //take out data because 'get'
          beforeSend: function(xhr) {
             xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
          }
       }).done( function(response) {
        //   console.log('Success!');
        //   console.log(response);
        $('.quotesContainer').empty().append(response[0].content.rendered);
        $('.author').empty().append(response[0].title.rendered);
        $('.source').empty().append(response[0]._qod_quote_source);
       });
    });
 })( jQuery );

