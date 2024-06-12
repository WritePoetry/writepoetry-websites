<?php
/**
 * Title: Centered call to action
 * Slug: write-white/brevo-cta-subscribe
 * Categories: call-to-action
 * Keywords: newsletter, subscribe, button
 */
?>
<!-- wp:group {"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-background-color has-background">

	<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-x-large-font-size">Keep up with the WritePoetry Development newsletter</h2>
	<!-- /wp:heading -->

	<!-- wp:html -->
	<?php
		// print the newsletter shortcode this way to prevent the <p> tags from being added
	 	echo do_shortcode( '[sibwp_form id=1]' );
	?>
	<!-- /wp:html --></div>
	<!-- /wp:group -->
