

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
          console.log(response);
        $('.quotesContainer').empty().append(response[0].content.rendered);
        $('.author').empty().append(response[0].title.rendered);
        $('.source').empty().append(response[0]._qod_quote_source);
       });
    });


   $('.submitQuote').on('click', function(event) {
      event.preventDefault();

      let $form = $('.quoteForm').serializeArray();
      // console.log($form);

      $newjson = {};

      $.each( $form, function() {
         $newjson [this.name] = this.value || '';
         // console.log($newjson)
       });

      $newquote = JSON.stringify($newjson);
      console.log($newquote)

      $.ajax({
         type: "POST",
         method: 'post',
         url: red_vars.rest_url + 'wp/v2/posts',
         data: $newjson,
         beforeSend: function(xhr) {
            xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
         }
      }).done( function(response) {
         alert('Success! Your post has been submitted!');
      });
      
   
        


   });


   // $.ajax({
   //    method: 'post',
   //    url: red_vars.rest_url + 'wp/v2/posts',
   //    data: {
   //       'action': 'red_post_ajax',
   //       'security': red_vars.comment_nonce,
   //       'the_post_id': red_vars.post_id
   //    },
   //    beforeSend: function(xhr) {
   //       xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
   //    }     
   // }).done( function(response) {
   //    alert('Success! Post is posted!');

   // });


   // let $form = $('.quoteForm').serializeArray();
   // console.log($form);

   
   // click button
   // turn form into json object
   // get input value
   // post the input value 



})( jQuery );







