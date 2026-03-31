<?php
/**
 * Title: Featured Project — Split
 * Slug: my-theme/featured-project-split
 * Categories: concrete-and-light
 * Description: Two-column featured project block with image and text. Uses Highlight group style variation.
 */
?>
<!-- wp:group {"align":"full","className":"is-style-highlight","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull is-style-highlight">

  <!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
  <div class="wp-block-columns alignfull">

    <!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-column" style="flex-basis:50%">
      <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
      <figure class="wp-block-image size-full"><img src="" alt="Readymoney Mansion, Malabar Hill — exterior facade after restoration" style="aspect-ratio:1;object-fit:cover"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}}}} -->
    <div class="wp-block-column" style="flex-basis:50%;padding-top:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl)">

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
      <p style="font-size:var(--wp--preset--font-size--xs);font-weight:700;text-transform:uppercase;letter-spacing:0.1em">Featured Project</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"var:preset|spacing|sm"}}}} -->
      <h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--3xl);letter-spacing:-0.02em;margin-top:var(--wp--preset--spacing--sm)">The Readymoney Mansion, Malabar Hill</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|md"},"spacing":{"margin":{"top":"var:preset|spacing|md"}}}} -->
      <p style="font-size:var(--wp--preset--font-size--md);margin-top:var(--wp--preset--spacing--md)">A 127-year-old Parsi family mansion returned to full residential use after four years of painstaking restoration — lime render, original Minton tile floors, and a rooftop garden that breaks no heritage rules.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.06em"},"spacing":{"margin":{"top":"var:preset|spacing|md"}}}} -->
      <p style="font-size:var(--wp--preset--font-size--xs);font-weight:700;text-transform:uppercase;letter-spacing:0.06em;margin-top:var(--wp--preset--spacing--md)">Residential Restoration · 2023</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|lg"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--lg)">
        <!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">See the Full Project →</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->

    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</div>
<!-- /wp:group -->
