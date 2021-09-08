<?php // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
} ?>

<div class="iconlift">
    <div class="iconlift__grid">
    <?php

        // Check rows exists.
        if( have_rows('icon_lift') ):

            // Loop through rows.
            while( have_rows('icon_lift') ) : the_row();?>
                <div class="iconlift__grid__item">
                    <?php // Load sub field value.
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');?>
                    <div class="iconlift__grid__item__icon">
                        <img src="<?php echo esc_url($icon); ?>" alt="">
                    </div>
                    <div class="iconlift__grid__item__title">
                       <h2><?php echo esc_html($title); ?></h2>
                    </div>
                    <div class="iconlift__grid__item__paragraph">
                        <p><?php echo esc_html($paragraph); ?></p>
                    </div>
               </div>
           <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;?>
    </div>
</div>
