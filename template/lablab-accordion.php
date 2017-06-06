<?php

// options
$showfirst = (bool) get_sub_field( 'lablab-accordion-show-first' );
$collapse = (bool) get_sub_field( 'lablab-accordion-collapse' );
$data_object = array( 'showfirst' => $showfirst, 'collapse' => $collapse);

// module counter
$counter_prefix = '';
if ( isset( $this->active_modules['lablab-accordion'] ) && $this->active_modules['lablab-accordion'] > 1 ){
	$counter_prefix = $this->active_modules['lablab-accordion'] . '-';
}

if ( have_rows( 'lablab-accordion-element' ) ): ?>

	<ul class="uk-accordion" data-uk-accordion="<?php echo htmlspecialchars( json_encode( $data_object ) ); ?>">

		<?php 
		while ( have_rows( 'lablab-accordion-element' ) ): the_row(); ?>
			<li>
				<h3 id="acc-<?php echo $counter_prefix . sanitize_title( get_sub_field( 'lablab-accordion-title' ) ); ?>" class="uk-accordion-title"><?php echo get_sub_field( 'lablab-accordion-title' ); ?><i class="uk-icon-angle-down"></i></h3>
				<div class="uk-accordion-content"><?php echo get_sub_field( 'lablab-accordion-content' ); ?></div>
			</li>

		<?php
		endwhile; 
		?>

	</ul>
<?php 
endif;