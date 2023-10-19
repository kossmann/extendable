<?php
/**
 * Title:       Footer with Six Columns of Menus
 * Slug:        extendable/footer-with-six-columns-of-menus
 * Categories:  footer
 * blockTypes:  core/template-part/footer
 */
?>

<!-- wp:group {"tagName":"footer","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<footer class="wp-block-group has-background-background-color has-background" style="padding-top:0;padding-bottom:0">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide"
        style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size">Articles</h3>
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

        <!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size">Products</h3>
            <!-- /wp:heading -->

            <!-- wp:navigation {"overlayMenu":"never","overlayTextColor":"foreground","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
            <!-- wp:navigation-link {"label":"Product Overview","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Pricing Plans","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Product Support","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Product FAQ","url":"#","kind":"custom"} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size">Use cases</h3>
            <!-- /wp:heading -->

            <!-- wp:navigation {"overlayMenu":"never","overlayTextColor":"foreground","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
            <!-- wp:navigation-link {"label":"E-commerce","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Marketing","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Education","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Non-profit","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Healthcare","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Real Estate","url":"#","kind":"custom"} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size">Resources</h3>
            <!-- /wp:heading -->

            <!-- wp:navigation {"overlayMenu":"never","overlayTextColor":"foreground","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
            <!-- wp:navigation-link {"label":"Guides","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Tutorials","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Templates","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Videos","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Webinars","url":"#","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"FAQ","url":"#","kind":"custom"} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size">Company</h3>
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

        <!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size">Follow</h3>
            <!-- /wp:heading -->

            <!-- wp:navigation {"overlayMenu":"never","overlayTextColor":"foreground","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
            <!-- wp:navigation-link {"label":"Facebook","url":"https://www.facebook.com/","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Twitter","url":"https://twitter.com/","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"Instagram","url":"https://www.instagram.com/","kind":"custom"} /-->

            <!-- wp:navigation-link {"label":"YouTube","url":"https://www.youtube.com/","kind":"custom"} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-tertiary-background-color has-background"
        style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size">© Your Company LLC</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo /-->

                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dforeground)","size":"has-normal-icon-size","style":{"spacing":{"blockGap":"1rem"}},"className":"is-style-logos-only ext-justify-start tablet:ext-justify-end","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <ul
                class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only ext-justify-start tablet:ext-justify-end">
                <!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

                <!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

                <!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</footer>
<!-- /wp:group -->