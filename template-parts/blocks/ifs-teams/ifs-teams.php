<?php

/**
 * Teams Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'teams-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'teams';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$teams =  get_field('teams');
$team_page_link =  get_field('team_page_link');

?>

<!-- Teams Start --->
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">	
    <div class="grid">
        <?php 
            if($teams) {
                foreach($teams as $team) {
                    ?>
                    <div class="col-md-3">
                        <div class="team__single">
                            <div class="team__img" style="background-image: url('<?php echo esc_url($team['team_image']); ?>');"></div>
                            <div class="team__content">
                                <h4 class="team__title"><?php echo $team['team_name']; ?><span class="team__desg"><?php echo $team['team_designation']; ?></span></h4>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
    <div class="grid">
        <div class="col-12 text-center mt-30">
        <a href="<?php echo esc_url($team_page_link); ?>" class="btn btn-primary">
        View All Members</a>
        </div>
    </div>
</div>

<!-- Teams Section End -->	