<?php
/**
 * Title: Hero
 * Slug: writepoetry-website/banner-hero-full-screen
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:group {"tagName":"main","style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<main class="wp-block-group" style="min-height:100vh;">

<!-- wp:pattern {"slug":"writepoetry-website/logo-writepoetry"} /-->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70);">The Swiss Knife<br>for WordPress Developers.</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0"><!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://github.com/WritePoetry/wordpress-plugin/releases/latest" target="_blank" rel=" noreferrer noopener nofollow">Get WritePoetry Plugin -></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-small-font-size" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph -->
<p>Current version:</p>
<!-- /wp:paragraph -->

<!-- wp:write-poetry/api-fetcher {"url":" https://api.github.com/repos/WritePoetry/wordpress-plugin/releases/latest","text":"tag_name","link":"html_url"} -->
<span data-url=" https://api.github.com/repos/WritePoetry/wordpress-plugin/releases/latest" data-link="html_url" data-text="tag_name" class="wp-block-write-poetry-api-fetcher">Fetching data…</span>
<!-- /wp:write-poetry/api-fetcher --></div>
<!-- /wp:group -->
 

</div>
<!-- /wp:group -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"backgroundColor":"contrast","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-background-color has-background wp-element-button" href="https://github.com/WritePoetry/wordpress-plugin/blob/trunk/CONTRIBUTING.md" target="_blank" rel=" noreferrer noopener nofollow">CONTRIBUTE to WritePoetry &lt;/&gt;</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->



<!-- wp:social-links {"iconColor":"contrast","openInNewTab":true,"size":"has-normal-icon-size","className":"has-visible-labels has-icon-color is-style-logos-only","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color is-style-logos-only" style="margin-bottom:var(--wp--preset--spacing--50)">
    <!-- wp:social-link {"url":"https://github.com/WritePoetry/wordpress-plugin","service":"github","label":"WritePoetry GitHub organization account","rel":""} /-->
    <!-- wp:social-link {"url":"https://www.youtube.com/@WritePoetrywithWordPress","service":"youtube","label":"WritePoetry YouTube Channel"} /-->
</ul>
<!-- /wp:social-links -->




</main>
<!-- /wp:group -->






