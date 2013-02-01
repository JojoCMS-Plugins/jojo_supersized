<?php
/* add javascript to foot */
Jojo::addHook('foot', 'foot', 'jojo_supersized');

$_options[] = array(
    'id'          => 'supersized_slideshow',
    'category'    => 'Supersized',
    'label'       => 'Enable slideshow',
    'description' => 'Show rotating slideshow rather than a single image',
    'type'        => 'radio',
    'default'     => 'no',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_supersized'
);

$_options[] = array(
    'id'          => 'supersized_random',
    'category'    => 'Supersized',
    'label'       => 'Randomise selection',
    'description' => 'Pick single image at random from full set or randomise order for slideshows',
    'type'        => 'radio',
    'default'     => 'yes',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_supersized'
);

$_options[] = array(
    'id'          => 'supersized_size',
    'category'    => 'Supersized',
    'label'       => 'Image size',
    'description' => 'Resize uploaded image(s) to this',
    'type'        => 'text',
    'default'     => '1200x800',
    'options'     => '',
    'plugin'      => 'jojo_supersized'
);
