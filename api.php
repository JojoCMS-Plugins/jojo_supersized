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
    'id'          => 'supersized_slidecontrols',
    'category'    => 'Supersized',
    'label'       => 'Prev/Next',
    'description' => 'Display control buttons for Prev/Next slide',
    'type'        => 'radio',
    'default'     => 'no',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_supersized'
);

$_options[] = array(
    'id'          => 'supersized_slideprogress',
    'category'    => 'Supersized',
    'label'       => 'Progress',
    'description' => 'Display a progress slider',
    'type'        => 'radio',
    'default'     => 'no',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_supersized'
);

$_options[] = array(
    'id'          => 'supersized_slidenav',
    'category'    => 'Supersized',
    'label'       => 'Slide Nav',
    'description' => 'Display nav icons for slides',
    'type'        => 'radio',
    'default'     => 'no',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_supersized'
);

$_options[] = array(
    'id'          => 'supersized_slidecaptions',
    'category'    => 'Supersized',
    'label'       => 'Captions',
    'description' => 'Display ccaptions for slides',
    'type'        => 'radio',
    'default'     => 'no',
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

$_options[] = array(
    'id'          => 'supersized_code',
    'category'    => 'Supersized',
    'label'       => 'Initialise',
    'description' => 'Set to no if you want to use your own initialise scripts',
    'type'        => 'radio',
    'default'     => 'yes',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_supersized'
);
