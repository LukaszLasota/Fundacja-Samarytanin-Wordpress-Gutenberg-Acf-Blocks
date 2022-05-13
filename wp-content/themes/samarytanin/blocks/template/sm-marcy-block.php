<?php
/**
 * Marcy Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'marcy-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'marcy';
if( !empty($block['className'])){
    $className .= ' ' . $block['className'];
}

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Load values and assing defaults.
$background_color = get_field('color_bg');
$link = get_field('url_link');
$blockquote_one = get_field('blockquote_one');
$blockquote_two = get_field('blockquote_two');
$blockquote_three = get_field('blockquote_three');
$blockquote_four = get_field('blockquote_four');
$img_front = get_field('img_front');
$img_backend = get_field('img_backend');

?>

<section class="content" id="<?php echo $id; ?>" <?php echo $align_class; ?>>
    <div class="one" >
        <div class="one-text">
            <div class="color-bg" style='background-color: <?php echo $background_color; ?>' >
                <blockquote cite="<?php echo $link; ?>">
                    <p class="one-blockquote"><?php echo $blockquote_one; ?></p>
                    <p class="one-blockquote"><?php echo $blockquote_two; ?></p>
                    <p class="one-blockquote"><?php echo $blockquote_three; ?></p>
                </blockquote>
            </div>
            <blockquote cite="<?php echo $link; ?>">
                <p class="one-blockquote color-txt"><?php echo $blockquote_four; ?></p>
            </blockquote> 
        </div>
    </div>
    <div class="two">
        <img class="image-main" src="<?php echo $img_front["url"]; ?>" alt="<?php echo $img_front["alt"]; ?>" loading="lazy">
        <img class="" src="<?php echo $img_backend["url"]; ?>" alt="<?php echo $img_front["alt"]; ?>" loading="lazy">
    </div>
</section>






