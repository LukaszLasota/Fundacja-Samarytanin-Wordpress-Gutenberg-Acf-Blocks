<?php
add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a marcy block
		acf_register_block(array(
			'name'				=> 'marcy',
			'title'				=> __('Marcy'),
			'description'		=> __('Blok na stronę główną'),
			'render_template'   => get_template_directory() . '/blocks/template/sm-marcy-block.php',
			'category'          => 'layout',
			'icon'              => 'tagcloud',
			'align_content' 	=> true,
			'align_content' 	=> 'matrix',
			'keywords'          => array( 'frontpage', 'marcy', 'heading' ),
			'supports'          => array( 'anchor' => true )
		));

		acf_register_block(array(
			'name'				=> 'about',
			'title'				=> __('About'),
			'description'		=> __('Blok o nas na stronę główną'),
			'render_template'   => get_template_directory() . '/blocks/template/sm-about-block.php',
			'category'          => 'layout',
			'icon'              => 'tagcloud',
			'align_content' 	=> true,
			'align_content' 	=> 'matrix',
			'keywords'          => array( 'frontpage', 'about', 'main' ),
			'supports'          => array( 'anchor' => true )
		));

		acf_register_block(array(
			'name'				=> 'services',
			'title'				=> __('Services'),
			'description'		=> __('Blok usługi na stronę główną'),
			'render_template'   => get_template_directory() . '/blocks/template/sm-services-block.php',
			'category'          => 'layout',
			'icon'              => 'tagcloud',
			'align_content' 	=> true,
			'align_content' 	=> 'matrix',
			'keywords'          => array( 'frontpage', 'services', 'main' ),
			'supports'          => array( 'anchor' => true )
		));

		acf_register_block(array(
			'name'				=> 'contact',
			'title'				=> __('Contact'),
			'description'		=> __('Blok kontakt na stronę główną'),
			'render_template'   => get_template_directory() . '/blocks/template/sm-contact-block.php',
			'category'          => 'layout',
			'icon'              => 'tagcloud',
			'align_content'	 	=> true,
			'align_content' 	=> 'matrix',
			'keywords'          => array( 'frontpage', 'contact', 'main' ),
			'supports'          => array( 'anchor' => true )
		));

		acf_register_block(array(
			'name'				=> 'header subpage',
			'title'				=> __('Header subpage'),
			'description'		=> __('Header na podstrony'),
			'render_template'   => get_template_directory() . '/blocks/template/sm-header-subpage-block.php',
			'category'          => 'layout',
			'icon'              => 'tagcloud',
			'align_content' 	=> true,
			'align_content' 	=> 'matrix',
			'keywords'          => array( 'frontpage', 'contact', 'subpage' ),
			'supports'          => array( 'anchor' => true )
		));

		acf_register_block(array(
			'name'				=> 'contact element',
			'title'				=> __('Contact element'),
			'description'		=> __('Blok sekcji kontakt'),
			'render_template'   => get_template_directory() . '/blocks/template/sm-contact-element-block.php',
			'category'          => 'layout',
			'icon'              => 'tagcloud',
			'align_content' 	=> true,
			'align_content' 	=> 'matrix',
			'keywords'          => array( 'frontpage', 'contact', 'subpage' ),
			'supports'          => array( 'anchor' => true )
		));
		acf_register_block(array(
			'name'				=> 'about person block',
			'title'				=> __('About person block'),
			'description'		=> __('Blok osoby na stronie o nas'),
			'render_template'   => get_template_directory() . '/blocks/template/sm-about-person-block.php',
			'category'          => 'layout',
			'icon'              => 'tagcloud',
			'align_content' 	=> true,
			'align_content' 	=> 'matrix',
			'keywords'          => array( 'frontpage', 'about', 'subpage' ),
			'supports'          => array( 'anchor' => true )
		));


	}
}

