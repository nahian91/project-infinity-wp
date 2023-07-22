<?php

/**
 * Services Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'services-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'services';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$services =  get_field('services');

?>

<!-- Services Start --->
<div id="<?php echo esc_attr($id); ?>" class="container <?php echo esc_attr($className); ?>">
    <div class="grid">
        <?php 
            if($services) {
                
                foreach($services as $service) {
                    ?>
                        <div class="col-12 col-sm-4">
                            <div class="services__single">
                                <?php 
                                    if(!empty($service['service_number'])) {
                                        ?>
                                            <span class="services__number"><?php echo $service['service_number']; ?></span>
                                        <?php
                                    }
                                ?>

                                <?php 
                                    if(!empty($service['service_icon'])) {
                                        ?>
                                            <i class="<?php echo $service['service_icon']; ?> services__icon"></i>
                                        <?php
                                    }
                                ?>

                                <?php 
                                    if(!empty($service['service_image']['sizes']['medium'])) {
                                        ?>
                                            <img src="<?php echo $service['service_image']['sizes']['medium']; ?>" alt="">
                                        <?php
                                    }
                                ?>
                                
                                <h4 class="services__title"><?php echo $service['service_title']; ?></h4>
                                <p class="services__desc"><?php echo $service['service_description']; ?></p>

                                <?php 
                                    if(!empty($service['service_button'])) {
                                        ?>
                                            <a class="services__btn" href="<?php echo $service['service_button']; ?>">read more</a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    <?php 
                }
            }
        ?>
    </div>
</div>

<!-- Services Section End -->	