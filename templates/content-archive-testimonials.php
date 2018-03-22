<?php
/**
 * @package lsx-testimonials
 */
?>

<?php
	global $lsx_testimonials;

	$thumbnail = $lsx_testimonials->get_thumbnail( get_the_ID(), 128 );
	$byline = get_post_meta( get_the_ID(), 'lsx_testimonial_byline', true );
	$url = get_post_meta( get_the_ID(), 'lsx_testimonial_url', true );
?>

<div class="col-xs-12 lsx-testimonials-container">
	<article class="lsx-testimonials-slot">
		<figure class="lsx-testimonials-avatar">
			<?php echo wp_kses_post( $thumbnail ); ?>
		</figure>

		<h5 class="lsx-testimonials-title"><?php the_title(); ?></h5>

		<?php if ( ! empty( $byline ) ) : ?>
			<small class="lsx-testimonials-meta-wrap">
				<i class="fa fa-briefcase"></i> <span class="lsx-testimonials-meta"><?php esc_html_e( 'Role & Company', 'lsx-testimonials' ); ?>:</span>

				<?php if ( ! empty( $url ) ) : ?>
					<a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php echo esc_html( $byline ); ?></a>
				<?php else : ?>
					<?php echo esc_html( $byline ); ?>
				<?php endif; ?>
			</small>
		<?php endif; ?>

		<blockquote class="lsx-testimonials-content"><?php the_excerpt(); ?></blockquote>
	</article>
</div>
