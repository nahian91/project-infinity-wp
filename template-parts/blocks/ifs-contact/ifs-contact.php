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

$contact_icon =  get_field('contact_icon');
$contact_title =  get_field('contact_title');
$contact_info =  get_field('contact_info');

?>

<!-- Contact Box Start --->
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">	
    <div class="contact__box">
        <i class="<?php echo $contact_icon;?>"></i>
        <h4><?php echo $contact_title;?></h4>
        <p><?php echo $contact_info;?></p>
    </div>
</div>

<!-- Contact Box Section End -->	