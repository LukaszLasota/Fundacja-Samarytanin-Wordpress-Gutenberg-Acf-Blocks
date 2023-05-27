<?php

function up_register_blocks() {
  $blocks = [
    [ 'name' => 'pdf-block', ],

    // Example
    // [ 'name' => 'daily-recipe',  'options' => [
    //   'render_callback' => 'up_daily_recipe_cb'
    // ]],
    
  ];

  foreach($blocks as $block) {
    register_block_type(
      UP_PLUGIN_DIR . 'build/blocks/' . $block['name'],
      isset($block['options']) ? $block['options'] : []
    );
  }
}