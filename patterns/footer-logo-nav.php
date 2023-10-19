<?php
/**
 * Title:       Footer, Logo and Navigation
 * Slug:        extendable/footer-logo-nav
 * Categories:  footer
 * blockTypes:  core/template-part/footer
 */
?>

<!-- wp:group {"tagName":"footer","align":"full"} -->
<footer class="wp-block-group alignfull">
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"clamp(1.5rem, 5vw, 2rem)","right":"clamp(1.5rem, 5vw, 2rem)","bottom":"clamp(1.5rem, 5vw, 2rem)","left":"clamp(1.5rem, 5vw, 2rem)"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignfull"
		style="padding-top:clamp(1.5rem, 5vw, 2rem);padding-right:clamp(1.5rem, 5vw, 2rem);padding-bottom:clamp(1.5rem, 5vw, 2rem);padding-left:clamp(1.5rem, 5vw, 2rem)">
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"className":"is-style-rounded"} /-->

			<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
			<p class="has-text-align-right has-small-font-size"><?php echo esc_html__( 'Empower Your Path to Success', 'extendable' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap"}} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Solutions','extendable' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Awards','extendable' ); ?>","type":"","id":"","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Privacy Policy','extendable' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Terms Conditions','extendable' ); ?>","url":"#","kind":"custom"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
