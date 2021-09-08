<?php // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
} ?>

<div class="page-container">
<div class="heroarrow" style="background-color:<?php esc_html(the_field('color'));?>">
<img src="<?php esc_html(the_field('arrow')); ?>" alt="">

</div>
</div>


