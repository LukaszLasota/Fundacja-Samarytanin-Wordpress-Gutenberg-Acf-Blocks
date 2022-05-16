<?php
/**
 * Contact Block Template.
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

$address_one = get_field('address_one');
$address_two = get_field('address_two');
$image_address = get_field('image_address');

$phone_one = get_field('phone_one');
$phone_two = get_field('phone_two');
$image_phone = get_field('image_phone');

$days = get_field('days');
$hours = get_field('hours');
$image_hours = get_field('image_hours');

$email = get_field('email');
$image_mail = get_field('image_mail');

$button_text = get_field('button_text');
$button_link = get_field('button_link');
$image = get_field('image');
$image_mobile = get_field('image_mobile');

?>

    <article id="three">
    <section class="contact" >  
        <div class="contact-main">
            
            <div class="contact-text">
                <img 
                class="contact-img" 
                src="<?php echo esc_url($image["url"]); ?>" 
                alt="<?php echo esc_html_e($image["alt"]); ?>"
                loading="lazy"
                >
                <h2 class="main-h2"><?php echo esc_html_e($title); ?></h2>
                <div class="contact-image-small">
                    <img class="" src="<?php echo esc_url($image_address["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
                </div>
                <div class="contact-paragraph">  
                    <p class=""><?php echo esc_html_e($address_one); ?></p>
                    <p class=""><?php echo esc_html_e($address_two); ?></p>
                </div> 
                <div class="contact-image-small">
                    <img class="" src="<?php echo esc_url($image_phone["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
                </div>
                <div class="contact-paragraph"> 
                    <p class=""><?php echo esc_html_e($phone_one); ?></p>
                    <p class=""><?php echo esc_html_e($phone_two); ?></p>
                </div>
                <div class="contact-image-small">
                    <img class="" src="<?php echo esc_url($image_hours["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
                </div>
                <div class="contact-paragraph">
                    <p class=""><?php echo esc_html_e($days); ?></p>
                    <p class=""><?php echo esc_html_e($hours); ?></p>
                </div>
                <div class="contact-image-small">
                    <img class="" src="<?php echo esc_url($image_mail["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
                </div>
                <div class="contact-paragraph">
                    <p class=""><?php echo esc_html_e($email); ?></p>
                </div>
                <a class="more" 
                href="<?php echo esc_url(home_url( '/' ) . $button_link);  ?>">
                <?php echo esc_html_e($button_text); ?>
                </a>
            </div>

        </div>     
    </section> 
    
    <section class="mobile-main-contact">
        <img 
            src="<?php echo esc_url($image_mobile["url"]); ?>" 
            alt="<?php echo esc_html_e($image["alt"]); ?>"
            loading="lazy">
            <div class="mobile-text">
                 
                <h2 class="main-h2"><?php echo esc_html_e($title); ?></h2>
        
                <div class="contact-text-one">  
                    <div class="contact-image-small">
                       <img class="" src="<?php echo esc_url($image_address["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
                    </div>
                    <div class="contact-paragraph">  
                        <p class=""><?php echo esc_html_e($address_one); ?></p>
                    <p class=""><?php echo esc_html_e($address_two); ?></p>
                    </div> 
                </div> 
                
                <div class="contact-text-one">  
                    <div class="contact-image-small">
                        <img class="" src="<?php echo esc_url($image_phone["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
                    </div>
                    <div class="contact-paragraph"> 
                        <p class=""><?php echo esc_html_e($phone_one); ?></p>
                        <p class=""><?php echo esc_html_e($phone_two); ?></p>
                    </div>
                </div> 
                
                <div class="contact-text-one">  
                    <div class="contact-image-small">
                        <img class="" src="<?php echo esc_url($image_hours["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
                    </div>
                    <div class="contact-paragraph">
                        <p class=""><?php echo esc_html_e($days); ?></p>
                        <p class=""><?php echo esc_html_e($hours); ?></p>
                    </div>    
                </div>
                
                <div class="contact-text-one text-one-last">  
                    <div class="contact-image-small">
                        <img class="" src="<?php echo esc_url($image_mail["url"]); ?>" alt="<?php echo esc_html_e($image["alt"]); ?>" loading="lazy">
                    </div>
                    <div class="contact-paragraph">
                        <p class=""><?php echo esc_html_e($email); ?></p>
                        <!-- <p class="small-contact">fundacja.samarytanin2020 @wp.pl</p>
                        <p class="medium-contact">fundacja.samarytanin2020@wp.pl</p> -->
                    </div>
                </div>
                <a class="more" 
                href="<?php echo esc_url(home_url( '/' ) . $button_link);  ?>">
                <?php echo esc_html_e($button_text); ?>
                </a>
            </div>
            <div class="mobile-bg"></div>
    </section>
</article> 