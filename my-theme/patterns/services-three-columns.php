<?php
/**
 * Title: Services — Three Columns
 * Slug: my-theme/services-three-columns
 * Categories: concrete-and-light
 * Description: Three-column services overview on dark purple background. Uses Accent Band group style variation.
 */
?>
<!-- wp:group {"align":"full","className":"is-style-accent-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-accent-band">

  <!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} -->
  <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--xl)">
    <!-- wp:heading {"level":2,"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">What We Do</h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|lg"},"spacing":{"margin":{"top":"var:preset|spacing|sm"}}}} -->
    <p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--lg);margin-top:var(--wp--preset--spacing--sm)">A focused range of services built around one discipline — bringing historic buildings back to full life.</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|lg","left":"var:preset|spacing|xl"}}}} -->
  <div class="wp-block-columns alignwide">

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
      <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xl)">Structural Restoration</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|sm"}}}} -->
      <p style="margin-top:var(--wp--preset--spacing--sm)">We assess, stabilise, and repair historic structures using materials sympathetic to the original build — lime plaster, Malad stone, Mangalore tile, Burma teak.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
      <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xl)">Adaptive Reuse</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|sm"}}}} -->
      <p style="margin-top:var(--wp--preset--spacing--sm)">We convert disused warehouses, mansions, and colonial offices into residences, studios, and hospitality spaces — without erasing what makes them extraordinary.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
      <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xl)">Documentation &amp; Conservation</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|sm"}}}} -->
      <p style="margin-top:var(--wp--preset--spacing--sm)">Before a single stone is moved, we document. Measured drawings, photographic surveys, material analysis — a complete record that guides restoration and satisfies heritage authority requirements.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</div>
<!-- /wp:group -->
