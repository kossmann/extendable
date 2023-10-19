<?php
/**
 * Title:       Footer with Three Center Columns of Menus
 * Slug:        extendable/footer-with-three-center-columns-of-menus
 * Categories:  footer
 * blockTypes:  core/template-part/footer
 */
?>

<!-- wp:group {"tagName":"footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:site-logo /-->

                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns alignwide">
                <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"1.5rem"}}} -->
                <div class="wp-block-column">
                    <!-- wp:heading {"level":3,"fontSize":"medium"} -->
                    <h3 class="has-medium-font-size">Products</h3>
                    <!-- /wp:heading -->
                    <!-- wp:navigation {"overlayMenu":"never","overlayTextColor":"foreground","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
                        <!-- wp:navigation-link {"label":"Product Overview","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Pricing Plans","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Product Support","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Product FAQ","url":"#","kind":"custom"} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"1.5rem"}}} -->
                <div class="wp-block-column">
                    <!-- wp:heading {"level":3,"fontSize":"medium"} -->
                    <h3 class="has-medium-font-size">Articles</h3>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"overlayMenu":"never","overlayTextColor":"foreground","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
                        <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Case Studies","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Whitepapers","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Industry Insights","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"News","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Webinars","url":"#","kind":"custom"} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"1.5rem"}}} -->
                <div class="wp-block-column">
                    <!-- wp:heading {"level":3,"fontSize":"medium"} -->
                    <h3 class="has-medium-font-size">About</h3>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"overlayMenu":"never","overlayTextColor":"foreground","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
                        <!-- wp:navigation-link {"label":"About Us","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Our Team","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Careers","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Awards","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Testimonials","url":"#","kind":"custom"} /-->
                        <!-- wp:navigation-link {"label":"Contact Us","url":"#","kind":"custom"} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%">
            <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dforeground)","size":"has-small-icon-size","style":{"spacing":{"blockGap":"1rem"}},"className":"is-style-logos-only ext-justify-start tablet:ext-justify-end","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <ul
                class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only ext-justify-start tablet:ext-justify-end">
                <!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

                <!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

                <!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">© Your Company LLC</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</footer>
<!-- /wp:group -->