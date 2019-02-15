<?php

if ( !defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest[ 'name' ]         = __( 'Contact form', 'crumina' );
$manifest[ 'description' ]  = __( 'Contact form.', 'crumina' );
$manifest[ 'github_repo' ]  = 'https://github.com/crumina/FW_Extension_Contact_Form';
$manifest[ 'version' ]      = '1.0.10';
$manifest[ 'thumbnail' ]    = plugins_url( 'unyson/framework/extensions/contact-form/static/img/thumbnail.png' );
$manifest[ 'display' ]      = true;
$manifest[ 'standalone' ]   = false;
$manifest[ 'requirements' ] = array(
    'extensions' => array(
        'shortcodes' => array(),
        'builder' => array(),
        'forms' => array(),
    )
);
