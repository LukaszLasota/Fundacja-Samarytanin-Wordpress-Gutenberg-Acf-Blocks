<?php
/**
 * About Person Block Template.
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
$name = get_field('name');
$function = get_field('function');
$image = get_field('image');

?>

<div class="person-box">
    <figure>
        <img class="person-image" src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
        <figcaption class="person-image-name"><?php echo esc_html_e($name); ?></figcaption>
        <figcaption class="person-image-function"><?php echo esc_html_e($function); ?></figcaption>
    </figure>
</div>




