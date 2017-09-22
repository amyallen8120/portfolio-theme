<?php

if ( have_rows( 'experience' ) ): ?>

<section class="module__about module__experience">
	
	<h2>Experience<span>.</span></h2>
	
	<?php while ( have_rows( 'experience' ) ) : the_row();

	$position = get_sub_field('position');
	$organization = get_sub_field('organization');
	$experience_period = get_sub_field('experience_period');
	$experience_details = get_sub_field('experience_details'); ?>
	
	<div class="module__experience-position-ctn">
		<h4 class="module__experience-position"><?php echo $position; ?>,</h4>
		<span class="module__experience-organization"><?php echo $organization; ?>,</span>
		<p class="module__experience-period"><?php echo $experience_period; ?></p>

		<div class="module__experience-details"><?php echo $experience_details; ?></div>
	</div>
	<?php endwhile; ?>

</section>

<?php endif; ?>