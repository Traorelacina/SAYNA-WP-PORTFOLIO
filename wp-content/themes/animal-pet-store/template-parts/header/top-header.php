<?php
/*
* Display topbar details
*/
?>
<div class="topbar">
  <div class="container">
    <div class="top-header py-2">
      <?php if( get_theme_mod( 'animal_pet_store_topbar_text' ) != '') { ?>
        <p class="mb-0"><?php echo esc_html( get_theme_mod('animal_pet_store_topbar_text','')); ?></p>
      <?php } ?>
    </div>
  </div>
</div>


