<?php
/**
 * @file
 * Template file for ZURB clearing.
 */
?>

<div class="clearing-container">
  <ul class="clearing-thumbs" data-clearing>
    <?php foreach ($images as $image) : ?>
      <li><?php print $image['thumbnail']; ?></li>
    <?php endforeach; ?>
  </ul>
</div>