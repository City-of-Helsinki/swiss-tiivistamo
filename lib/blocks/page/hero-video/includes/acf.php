<?php

// https://www.advancedcustomfields.com/resources/register-fields-via-php/

return array (
    'key' => 'group_'.$blockName,
    'name' => $blockName,
    'label' => str_replace('-', ' ', ucfirst($blockName)),
    'display' => 'block',
    'sub_fields' => array(
		array(
            'key' => 'field_'.$blockName.'_hide',
            'label' => 'Hide this block',
            'name' => 'hide',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '48',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
			'key' => 'field_'.$blockName.'_tab1',
			'label' => 'Video',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
        array(
            'key' => 'field_'.$blockName.'_video',
            'label' => 'Background Video (Vimeo id)',
            'name' => 'video_id',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_'.$blockName.'_wide_video',
            'label' => 'Matala video',
            'name' => 'wide_video',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '248',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
			'key' => 'field_'.$blockName.'_tab2',
			'label' => 'Settings',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
        array(
			'key' => 'field_'.$blockName.'_koro_color',
			'label' => 'Koro color',
			'name' => 'koro_color',
			'type' => 'select',
			'instructions' => 'Select the color of the Koro',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'yellow' => 'Yellow',
				'pink' => 'Pink',
				'turquoise' => 'Turquoise',
				'blue' => 'Blue',
				'white' => 'White'
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
        ),
        array(
			'key' => 'field_'.$blockName.'_koro_position',
			'label' => 'Koro position',
			'name' => 'koro_position',
			'type' => 'select',
			'instructions' => 'Placement of the Koro',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => 'Top',
				'bottom' => 'Bottom',
				'both' => 'Both',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
    ),
    'min' => '',
    'max' => '',
);
