<?php
/**
 * Title: Hero — Default
 * Slug: my-theme/hero-default
 * Categories: concrete-and-light
 * Description: Full-width hero with title, standfirst and CTA. Uses default (light) group style.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignfull">

  <!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
  <h1 class="wp-block-heading has-text-align-center">We Restore What Time Has Honoured</h1>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|lg"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"top":"var:preset|spacing|md"}}}} -->
  <p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--lg);margin-top:var(--wp--preset--spacing--md)">Concrete &amp; Light is a Mumbai-based architecture and restoration studio. We bring heritage buildings back to life — with patience, precision, and deep respect for the original hand.</p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|lg"}}}} -->
  <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--lg)">
    <!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">View Our Work</a></div>
    <!-- /wp:button -->
    <!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Talk to Us</a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
