<?php

/**
 * Contact Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'contact-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$contacts =  get_field('contacts');

?>

<!-- Contact Box Start --->
<div id="<?php echo esc_attr($id); ?>" class="container">
    <div class="<?php echo esc_attr($className); ?>">
        <?php
            if($contacts) {
                foreach($contacts as $contact) {
                    ?>
                        <div class="contact__box">
                            <i class="<?php echo $contact['contact_icon'];?>"></i>
                            <h4><?php echo $contact['contact_title'];?></h4>
                            <p><?php echo $contact['contact_info'];?></p>
                        </div>
                    <?php 
                }
            }
        ?>
    </div>	
    <div class="grid">
        <div class="col-md-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14476.740340612827!2d91.8738355!3d24.8916676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab2b25be8105%3A0x4e97a32cf9300bf4!2sInfinity%20Flame%20Soft!5e0!3m2!1sen!2sbd!4v1689148424419!5m2!1sen!2sbd" class="contact__iframe"></iframe>
        </div>
        <div class="col-md-8">
            <?php echo do_shortcode('[contact-form-7 id="104" title="Contact form 1"]');?>
        </div>
    </div>    
</div>
<!-- Contact Box Section End -->	