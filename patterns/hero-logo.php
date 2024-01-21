<?php
/**
 * Title: Website logo in csv format
 * Slug: writepoetrywebsite/hero-logo
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>



<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:html -->
    <object data="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/write-poetry-logo-beta.svg">
        Write Poetry
    </object>
    <!-- /wp:html --> 
</div>
<!-- /wp:group -->