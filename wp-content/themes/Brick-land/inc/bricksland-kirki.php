<?php

new \Kirki\Panel(
    'bricksland_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('Bricksland Option', 'kirki'),
        'description' => esc_html__('My Option Description.', 'kirki'),
    ]
);

new \Kirki\Section(
    'header_section_id',
    [
        'title'       => esc_html__('Header Section', 'kirki'),
        'description' => esc_html__('My Header Section Description.', 'kirki'),
        'panel'       => 'bricksland_panel_id',
        'priority'    => 160,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'address_text',
        'label'    => esc_html__('Address', 'kirki'),
        'section'  => 'header_section_id',
        'default'  => esc_html__('2005 Old Spartanburg Rd, South Carolina, USA', 'kirki'),
        'priority' => 10,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'email_id',
        'label'    => esc_html__('Email', 'kirki'),
        'section'  => 'header_section_id',
        'default'  => esc_html__('(+864) 292-6100', 'kirki'),
        'priority' => 10,
    ]
);

// Social 
new \Kirki\Section(
    'header_social_section',
    [
        'title'       => esc_html__('Header Social Section', 'kirki'),
        'description' => esc_html__('My Header Social Description.', 'kirki'),
        'panel'       => 'bricksland_panel_id',
        'priority'    => 160,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'fb_url',
        'label'    => esc_html__('Facebook URL', 'kirki'),
        'section'  => 'header_social_section',
        'default'  => esc_html__('#', 'kirki'),
        'priority' => 10,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'ins_url',
        'label'    => esc_html__('Instagram URL', 'kirki'),
        'section'  => 'header_social_section',
        'default'  => esc_html__('#', 'kirki'),
        'priority' => 10,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'wp_url',
        'label'    => esc_html__('WhatsApp URL', 'kirki'),
        'section'  => 'header_social_section',
        'default'  => esc_html__('#', 'kirki'),
        'priority' => 10,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'yu_url',
        'label'    => esc_html__('YouTube URL', 'kirki'),
        'section'  => 'header_social_section',
        'default'  => esc_html__('#', 'kirki'),
        'priority' => 10,
    ]
);
