<?php
/**
 * Title:       Footer with Address, Four Columns
 * Slug:        extendable/footer-with-address-four-columns
 * Categories:  footer
 * blockTypes:  core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"1rem"}}} -->
			<div class="wp-block-column" style="flex-basis:40%"><!-- wp:site-title {"level":2,"fontSize":"large"} /-->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Empower Your Path to Success', 'extendable' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"22.5%"} -->
			<div class="wp-block-column" style="flex-basis:22.5%"><!-- wp:paragraph -->
				<p>123 Demo Street<br>Brooklyn, NY 12345</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"22.5%"} -->
			<div class="wp-block-column" style="flex-basis:22.5%"><!-- wp:paragraph -->
				<p>email@example.com<br>(555) 555-5555</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"15%"} -->
			<div class="wp-block-column" style="flex-basis:15%">
				<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#0B0620","align":"right","style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
				<ul class="wp-block-social-links alignright has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
				<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->