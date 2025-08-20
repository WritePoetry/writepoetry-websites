<?php
/**
 * Title: Centered call to action
 * Slug: writepoetry-website/cta-brevo-subscribe
 * Categories: call-to-action
 * Keywords: newsletter, subscribe, button
 */
?>
<!-- wp:group {"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-background-color has-background">

	<!-- wp:heading {"textAlign":"center","level":3,"textColor":"base"} -->
	<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color">Keep up with the WritePoetry Development newsletter</h3>
	<!-- /wp:heading -->

	<!-- wp:html -->
	<?php
		// print the newsletter shortcode this way to prevent the <p> tags from being added
	 	echo do_shortcode( '[sibwp_form id=1]' );
	?>
	<!-- /wp:html --></div>
	<!-- /wp:group -->
