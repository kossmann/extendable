<?php
/**
 * Title:       Footer
 * Slug:        extendable/footer
 * Categories:  footer
 * blockTypes:  core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:site-logo /-->

			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:site-title {"fontSize":"medium"} /--></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">© Your Company LLC</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#0B0620","size":"has-small-icon-size","style":{"spacing":{"blockGap":"1rem"}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

				<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

				<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->