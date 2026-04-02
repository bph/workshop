<?php
/**
 * Title: Call to Action
 * Slug: concrete-and-light/cta
 * Categories: call-to-action, featured
 * Description: Centered contact call-to-action with heading, description, and button.
 */
?>
<!-- wp:cover {"overlayColor":"deep","isUserOverlayColor":true,"minHeight":500,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50);min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-deep-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"accent","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontWeight":"300","letterSpacing":"0.2em","textTransform":"uppercase","fontSize":"0.7rem","textAlign":"center"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
<h4 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="margin-bottom:1.5rem;font-family:var(--wp--preset--font-family--body);font-size:0.7rem;font-weight:300;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Begin a conversation', 'concrete-and-light' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|heading","fontSize":"clamp(2rem, 4vw, 3rem)","fontWeight":"500","lineHeight":"1.15","textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2rem, 4vw, 3rem);font-weight:500;line-height:1.15"><?php echo __( 'Every structure begins with a question.<br>What is yours?', 'concrete-and-light' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","className":"has-muted-color has-text-color","style":{"typography":{"fontSize":"1rem","lineHeight":"1.7","fontFamily":"var:preset|font-family|body","fontWeight":"200","textAlign":"center"},"spacing":{"margin":{"top":"1.5rem","bottom":"2.5rem"}}}} -->
<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:1.5rem;margin-bottom:2.5rem;font-family:var(--wp--preset--font-family--body);font-size:1rem;font-weight:200;line-height:1.7"><?php echo esc_html__( 'We welcome conversations about projects of any scale. Reach out to discuss how we might bring your vision into concrete form.', 'concrete-and-light' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"0.8125rem","letterSpacing":"0.15em","textTransform":"uppercase","fontFamily":"var:preset|font-family|body","fontWeight":"400"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2.5rem","right":"2.5rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="padding-top:1rem;padding-right:2.5rem;padding-bottom:1rem;padding-left:2.5rem;font-family:var(--wp--preset--font-family--body);font-size:0.8125rem;font-weight:400;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html__( 'Get in touch', 'concrete-and-light' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"muted","className":"has-muted-color has-text-color","style":{"typography":{"fontSize":"0.8125rem","fontFamily":"var:preset|font-family|body","fontWeight":"200","letterSpacing":"0.05em","textAlign":"center"},"spacing":{"margin":{"top":"1.5rem"}}}} -->
<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:1.5rem;font-family:var(--wp--preset--font-family--body);font-size:0.8125rem;font-weight:200;letter-spacing:0.05em">studio@concreteandlight.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
