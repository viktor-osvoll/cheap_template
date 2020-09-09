<?php
$context = Timber::get_context();
$context['posts'] = new Timber\PostQuery();
$context['fields'] = get_fields(8);
/* $context['abouts'] = get_fields(12);
$context['tests'] = new Timber\Post(); */
$templates = array( 'index.twig' );

if ( is_home() ) {
    array_unshift( $templates, 'home.twig' );
}

Timber::render( $templates, $context );