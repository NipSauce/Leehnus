<?php get_header() ?>
	<main id="main" class="site-main" role="main">
	
		<h1>This is page-contact.php</h1>
		
		<?php
		    $contacts = new WP_Query( array('post_type' => 'contact') );
		    if( $contacts->have_posts() ) {
		      while( $contacts->have_posts() ) {
		        $contacts->the_post();
		        ?>
		          <h1><?php the_title() ?></h1>
		          <div class="contactThumb">
			          <?php the_post_thumbnail () ?>
		          </div>
		          <div class='content'>
		            <?php the_content() ?>
		          </div>
		        <?php
		      }
		    }
		    else {
		      echo 'There are no contact(s) to display. Create a "Leehnus Contact" in the wordpress admin side-menu';
		    }
		  ?>
	</main><!-- #main -->
<?php get_footer() ?>