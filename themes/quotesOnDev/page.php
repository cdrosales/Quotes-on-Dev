
<?php get_header(); ?>


<section class="homePage">

<i class="fas fa-quote-left"></i>

    <div class="about">

        <div class="title"><?php the_title();?></div>

        <div class="submitForm">
        <form method="post" class="quoteForm">

        <h1>Author of Quote</h1>
        <input type="text" name="title" class="authorSubmit">

        <h1>Quote</h1>
        <textarea class="quoteSubmit" name="excerpt"></textarea>

        <h1>Where did you find this quote?(e.g. book name)</h1>
        <input type="text" name="_qod_quote_source" class="findQuoteSource">
        
        <h1>Provide the URL of the quote source, if available.</h1>
        <input type="text" name="_qod_quote_source_url" class="quoteSourceSubmit">


        <div class="submitQuoteBTN">
            <button type="submit" class="submitQuote">Submit quote</button>
        </div>
        </div>

        </form>

        <div class="errorSubmit"> 
            <p> Sorry you must be logged in to submit a quote! </p>
            <a href="<?php echo esc_url( wp_login_url() ); ?>" class="errorLogin">Click here to login.</a>
        </div>

        
    </div>

<i class="fas fa-quote-right"></i>


</section>

<?php get_footer(); ?>

