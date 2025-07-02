<?php

/**
 * Title: Hero
 * Slug: writepoetry-website/banner-blankspace
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--90);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:site-logo {"width":30,"isLink":false,"shouldSyncIcon":false,"align":"center"} /--></div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
   <!-- wp:media-text {"align":"wide","mediaId":1, "mediaLink":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/blankspace-demo-screenshot.png","mediaType":"image","className":"is-style-rounded-image"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-rounded-image" id="blankspace">
   <figure class="wp-block-media-text__media">
      <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/blankspace-demo-screenshot.png" alt="" class="wp-image-1 size-full" />
   </figure>
   <div class="wp-block-media-text__content">
      <!-- wp:pattern {"slug":"writepoetry-website/logo-blankspace"} /-->

      <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"secondary","fontSize":"medium"} -->
      <p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="text-transform:uppercase">Kickstart Your Development with BlankSpace – <br>Your Ultimate White Theme for WordPress.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <p>Introducing <em>BlankSpace</em>, a minimal yet powerful white theme designed specifically for developers. With a clean, flexible codebase, <em>BlankSpace</em> is the perfect foundation for building custom WordPress sites, offering essential tools to streamline the development process.</p>
      <!-- /wp:paragraph -->
 
      <!-- wp:paragraph -->
      <p>Built to integrate smoothly with the Write Poetry plugin, this theme provides an intuitive environment for rapid bootstrapping and customization.</p>
      <!-- /wp:paragraph -->     
      
      <!-- wp:paragraph -->
      <p>Whether you're creating your first WordPress project or refining advanced solutions, <em>BlankSpace</em> gives you a solid starting point that adapts to any project’s needs. Save time, focus on creativity, and bring your development ideas to life with this versatile theme – built for developers, by developers.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"right"}} -->
      <div class="wp-block-group alignwide">
            <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide" style="padding-right:0;padding-left:0">
               <!-- wp:buttons -->
               <div class="wp-block-buttons">
                  <!-- wp:button -->
                  <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://write-poetry.com/blankspace-demo">View BlankSpace theme demo -></a></div>
                  <!-- /wp:button -->
               </div>
               <!-- /wp:buttons -->
               
               <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
               <div class="wp-block-group has-small-font-size" style="margin-top:0;margin-bottom:0">
                  <!-- wp:paragraph -->
                  <p>BlankSpace theme current version:</p>
                  <!-- /wp:paragraph -->

                  <!-- wp:write-poetry/api-fetcher {"url":"https://api.github.com/repos/WritePoetry/blankspace-theme/releases/latest","text":"tag_name","link":"html_url"} -->
                  <span data-url="https://api.github.com/repos/WritePoetry/blankspace-theme/releases/latest" data-link="html_url" data-text="tag_name" class="wp-block-write-poetry-api-fetcher">Fetching data…</span>
                  <!-- /wp:write-poetry/api-fetcher -->
               </div>
               <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
         
      </div>
      <!-- /wp:group -->
   </div>
</div>
<!-- /wp:media-text -->


</div>
<!-- /wp:group -->
 
<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
 