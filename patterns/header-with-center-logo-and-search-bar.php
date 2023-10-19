<?php
/**
 * Title:       Header with Center Logo and Search bar
 * Slug:        extendable/header-with-center-logo-and-search-bar
 * Categories:  header
 * blockTypes:  core/template-part/header
 */
?>
<!-- wp:group {"tagName":"header","layout":{"type":"constrained"}} -->
<header class="wp-block-group">
    <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignfull are-vertically-aligned-center is-not-stacked-on-mobile"
        style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} -->
			<!-- /wp:navigation -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"16%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:16%">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:site-logo /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
            <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"no-button","align":"right","style":{"typography":{"lineHeight":1.6},"border":{"width":"1px","radius":"4px"}},"className":"ext-hidden tablet:ext-block","fontSize":"small"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</header>
<!-- /wp:group -->