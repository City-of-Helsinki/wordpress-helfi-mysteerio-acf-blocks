<?php // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
} ?>

<div class="page-container">
    <div class="resources">

        <?php
        $downloadlogo = get_field('download_logo');
        $linklogo = get_field('link_logo');
        // Check rows exists.
        if( have_rows('downloads') ): ?>
            <h3>
                <?php if ( function_exists ( 'pll_e' ) ){
                    pll_e( 'Ladattava aineisto' );
                }else{
                    echo 'Ladattava aineisto';
                } ?>
           </h3>
            <div class="resources__download"><?php
            // Loop through rows.
            while( have_rows('downloads') ) : the_row();

                // Load sub field value. $url = $file['url'];
                $file = get_sub_field('document');
                $url = $file['url'];
                if(get_sub_field('file_type')){
                    $type = get_sub_field('file_type');
                }else{
                    $type = $file['subtype'];
                }
                if(get_sub_field('title')){
                    $title= get_sub_field('title');
                }else{
                    $title = $file['title'];
                }
                // Do something...?>
                <?php //var_dump($file); ?>
                <div class="resources__dowload__file">
                    <a href="<?php echo esc_url($url); ?>">
                        <?php if($downloadlogo ){ ?>
                            <img src="<?php echo esc_url($downloadlogo); ?>" alt="">
                        <?php } ?>
                        <?php echo esc_html($title); ?>
                        <span class="resources__download__subtype"><?php echo esc_html($type) ?></span>
                    </a>
                </div>
            <?php // End loop.
            endwhile; ?>
            </div>
        <?php // No value.
        else :
            // Do something...
        endif; ?>


        <?php

        // Check rows exists.
        if( have_rows('links') ): ?>
            <h3>
                <?php if ( function_exists ( 'pll_e' ) ){
                    pll_e( 'Linkit' );
                }else{
                    echo 'Linkit';
                } ?>
            </h3>
            <div class="resources__links">
           <?php // Loop through rows.
            while( have_rows('links') ) : the_row();

                // Load sub field value.
                $name = get_sub_field('name');
                $link = get_sub_field('link');
                // Do something... ?>
                <div class="resources__links__link">
                    <a href="<?php echo $link; ?>">
                        <?php if($linklogo){ ?>
                            <img src="<?php echo $linklogo; ?>" alt="">
                        <?php }else{ ?><span></span> <?php } ?>
                        <?php echo $name; ?>
                    </a>
                </div>
            <?php // End loop.
            endwhile; ?>
            </div>
        <?php // No value.
        else :
            // Do something...
        endif; ?>

    </div>
</div>
