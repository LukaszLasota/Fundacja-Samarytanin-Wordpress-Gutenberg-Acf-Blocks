<?php
/**
 * Header subpage block - Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'about-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about';
if( !empty($block['className'])){
    $className .= ' ' . $block['className'];
}

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Load values and assing defaults.
$img_background = get_field('img_background');
$img_main = get_field('img_main');
$img_main_phone = get_field('img_main_phone');
$text_color = get_field('text_color');
?>

<section class="content-header">
    
    <div class="content-header-one">
        <div class="content-header-absolute">
            <img 
            class="content-header-image" 
            src="<?php echo esc_url($img_main["url"]); ?>" 
            alt="<?php echo esc_html_e($img_main["alt"]); ?>"
            loading="lazy"
            >
            <h2 class="content-header-h2" style='color: <?php echo $text_color; ?>'><?php echo get_the_title(); ?></h2>
        </div>
    </div>

    <div class="content-header-two">
        <img 
        src="<?php echo esc_url($img_background["url"]); ?>" 
        alt="<?php echo esc_html_e($img_background["alt"]); ?>"
        loading="lazy"
        >
        <div class="content-header-space"></div>
    </div>
    <div class="content-header-padding"></div>
</section>

<section class="content-mobile-subpage">
        <div class="one">
            <div class="one-text">
                <h2 class="one-h2" style='color: <?php echo $text_color; ?>'><?php echo get_the_title(); ?></h2>
            </div>
        </div>
        <div class="two">
            <img 
            src="<?php echo esc_url($img_background["url"]); ?>" 
            alt="<?php echo esc_html_e($img_background["alt"]); ?>"
            loading="lazy"
            >
            <img 
            class="image-main" 
            src="<?php echo esc_url($img_main["url"]); ?>" 
            alt="<?php echo esc_html_e($img_main["alt"]); ?>"
            loading="lazy"
            >
        </div>
    </section>






