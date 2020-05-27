<?php
// Dump all hooks onto page for review in dev
add_action( 'all', create_function( '', 'var_dump( current_filter());' ) );
