<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<a href="#" class="search-toggle" aria-hidden="true">
			
		</a>
		<label>
			<input type="search" class="search-field" placeholder="Search ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<!-- <input type="submit" id="search-submit" class="screen-reader-text"/> -->
		<button class="submit" type="submit"><i class="fa fa-search"></i></button>
	</fieldset>
</form>