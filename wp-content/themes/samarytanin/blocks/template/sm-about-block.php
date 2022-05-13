<?php
/**
 * About Block Template.
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
$title = get_field('title');
$text = get_field('text');
$text_two = get_field('text_two');
$image = get_field('image');
$image_bg = get_field('image_bg');
$image_mobile = get_field('image_mobile');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
?>

<article id="one">
    <section class="about" >
        <img class="" src="<?php echo esc_url($image_bg["url"]); ?>" alt="<?php echo esc_html_e($image_bg["alt"]); ?>">
        <div class="about-one">
            <div class="about-one-white">
                <img 
                class="about-one-image" 
                src="<?php echo esc_url($image["url"]); ?>" 
                alt="<?php echo esc_html_e($image["alt"]); ?>"
                loading="lazy"
                >
            </div>
        </div>
        <div class="about-two">
            <div class="about-two-white">
                <div class="about-two-text">
                    <h2 class="main-h2"><?php echo esc_html_e($title); ?></h2>
                    <div class="about-two-paragraph">
                        <p><?php echo esc_html_e($text); ?></p>
                        <p><?php echo esc_html_e($text_two); ?></p>
                     </div>
                    <a class="more" 
                    href="<?php echo esc_url(home_url( '/' ) . $button_link);  ?>">
                    <?php echo esc_html_e($button_text); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mobile-main">
        <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>">
            <div class="mobile-text">
                <h2 class="main-h2"><?php echo esc_html_e($title); ?></h2>
                    <div class="mobile-paragraph">
                        <p class=""><?php echo esc_html_e($text); ?></p>
                        <p class=""><?php echo esc_html_e($text_two); ?></p>
                     </div>
                    <a href="<?php echo esc_url(home_url( '/' ) . $button_link);  ?>" class="more"><?php echo esc_html_e($button_text); ?></a>
            </div>
            <div class="mobile-bg"></div>
    </section>
</article>






