<?php
/**
 * Title: Hero
 * Slug: write-white/banner-hero-full-screen
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:group {"tagName":"main","style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<main class="wp-block-group" style="min-height:100vh;">

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:html -->
<h1 class="logo">
			<span style="font-weight: 200;">W</span>
			<span style="font-weight: 300;">r</span>
			<span style="font-weight: 400;">it</span>
			<span style="font-weight: 500;">e</span>
			<span style="font-weight: 900;">P</span>
			<span style="font-weight: 900;">o</span>
			<span style="font-weight: 700;">et</span>
			<span style="font-weight: 500;">r</span>
			<span style="font-weight: 300;">y</span>
			<span style="font-weight: 300;">&nbsp;</span>
		</h1>

		<span class="beta">Beta</span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70);">The Swiss Knife for WordPress.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://github.com/giacomo-secchi/write-poetry/releases/latest" target="_blank" rel=" noreferrer noopener nofollow">Get WritePoetry Plugin ➜</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"contrast","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-background-color has-background wp-element-button" href="https://github.com/giacomo-secchi/write-poetry/blob/trunk/CONTRIBUTING.md" target="_blank" rel=" noreferrer noopener nofollow">CONTRIBUTE to WritePoetry &lt;/&gt;</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#361C1C","openInNewTab":true,"showLabels":true,"size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://github.com/giacomo-secchi/write-poetry","service":"github","label":"GitHub Repository","rel":""} /--></ul>
<!-- /wp:social-links -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph -->
	<p>Current version:</p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<div class="api-fetch" data-api-url="https://api.github.com/repos/giacomo-secchi/write-poetry/releases/latest" data-api-link="html_url" data-api-text="tag_name"></div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->



</main>
<!-- /wp:group -->






