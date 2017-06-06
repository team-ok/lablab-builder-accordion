<?php

/**
 * Field definitions for the lablab builder accordion module.
 *
 * @link       https://github.com/team-ok/lablab-builder-accordion
 * @since      1.0.0
 * @author     Timo Klemm
 */

if( ! defined( 'ABSPATH' ) ) exit;

return array (
    array (
        'key' => 'field_584d244646e2c',
        'label' => __('Elements', 'lablab-accordion'),
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
    ),
    array (
        'key' => 'field_584acbc953634',
        'label' => __('Accordion Elements', 'lablab-accordion'),
        'name' => 'lablab-accordion-element',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'collapsed' => 'field_584acc7e53635',
        'min' => 0,
        'max' => 0,
        'layout' => 'block',
        'button_label' => __('Add Accordion Element', 'lablab-accordion'),
        'sub_fields' => array (
            array (
                'key' => 'field_584acc7e53635',
                'label' => __('Title', 'lablab-accordion'),
                'name' => 'lablab-accordion-title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_584acce153636',
                'label' => __('Content', 'lablab-accordion'),
                'name' => 'lablab-accordion-content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
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
        ),
    ),
    array (
        'key' => 'field_584d23f72d04a',
        'label' => __('Options', 'lablab-accordion'),
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
    ),
    array (
        'key' => 'field_584d1e7f0e6f9',
        'label' => __('Expand first element on page load?', 'lablab-accordion'),
        'name' => 'lablab-accordion-show-first',
        'type' => 'radio',
        'instructions' => __('Should the first accordion element be expanded on page load?', 'lablab-accordion'),
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'choices' => array (
            1 => __('Yes', 'lablab-accordion'),
            0 => __('No', 'lablab-accordion'),
        ),
        'allow_null' => 0,
        'other_choice' => 0,
        'save_other_choice' => 0,
        'default_value' => 0,
        'layout' => 'horizontal',
        'return_format' => 'value',
    ),
    array (
        'key' => 'field_584d214b0e6fa',
        'label' => __('Expand only one element at a time?', 'lablab-accordion'),
        'name' => 'lablab-accordion-collapse',
        'type' => 'radio',
        'instructions' => __('Should only one element be expanded at a time?', 'lablab-accordion'),
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'choices' => array (
            1 => __('Yes', 'lablab-accordion'),
            0 => __('No', 'lablab-accordion'),
        ),
        'allow_null' => 0,
        'other_choice' => 0,
        'save_other_choice' => 0,
        'default_value' => 1,
        'layout' => 'horizontal',
        'return_format' => 'value',
    ),
);