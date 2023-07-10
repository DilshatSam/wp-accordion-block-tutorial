<div class="container-accord">
  <div class="text-block-accord">
    <h2><?php echo esc_html(get_field('text_block_subtitle')); ?></h2>
    <p><?php echo esc_html(get_field('text_block_title')); ?></p>
  </div>

  <div class="accordion-wrapper">
    <?php
    // Check if the repeater field has rows of data
    if (have_rows('accordion_repeater')) :
      // Loop through the rows of data for the accordion items
      while (have_rows('accordion_repeater')) : the_row();
        $header = get_sub_field('tips_title');
        $content = get_sub_field('tips_content');
        ?>
        <button class="accordion"><?php echo $header; ?></button>
        <div class="panel">
          <p><?php echo $content; ?></p>
        </div>
        <?php

        $header = get_sub_field('weather_title');
        $content = get_sub_field('weather_content');
        ?>
        <button class="accordion"><?php echo $header; ?></button>
        <div class="panel">
          <p><?php echo $content; ?></p>
        </div>
        <?php

        $header = get_sub_field('visa_title');
        $content = get_sub_field('visa_content');
        ?>
        <button class="accordion"><?php echo $header; ?></button>
        <div class="panel">
          <p><?php echo $content; ?></p>
        </div>
        <?php

        $header = get_sub_field('destinations_title');
        $content = get_sub_field('destinations_content');
        ?>
        <button class="accordion"><?php echo $header; ?></button>
        <div class="panel">
          <p><?php echo $content; ?></p>
        </div>
        <?php

      endwhile;
    else :
      echo '';
    endif;
    ?>
  </div>
</div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/blocks/accordion/accordion.js"></script>
