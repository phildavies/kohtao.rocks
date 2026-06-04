<?php if(get_theme_mod('scuba_diving_sport_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'scuba-diving-sport' ),
			'next_text' => esc_html__( 'Next page', 'scuba-diving-sport' ),
		) );
	?>		
<?php endif; ?>