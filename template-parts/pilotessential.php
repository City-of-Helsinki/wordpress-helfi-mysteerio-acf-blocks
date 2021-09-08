<?php // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
} ?>

<?php
$paragraph = get_field('paragraph');
$icon = get_field('icon');
$title = get_field('title');
$asiasanat = get_field('asiasanat');



?>
<div class="pilotessential__wrap">
<div class="pilotessential">
   <div class="pilotessential__icon">
    <img src="<?php echo esc_url($icon); ?>" alt="">
   </div>
   <div class="pilotessential__paragraph">
    <?php echo wp_kses_post($paragraph); ?>
   </div>
    <div class="pilotessential__teemat">
        <div class="pilotessential__subtitle"><?php echo esc_html($title); ?></div>
        <?php echo wp_kses_post($asiasanat); ?>
    </div>



</div>
</div>

