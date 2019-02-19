<?php 

/* Pagination function start */
function wp_bootstrap_pagination_goladbay( $args = array() ) {
    
    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( '<<', 'text-domain' ),
        'next_string'     => __( '»', 'text-domain' ),
        'before_output'   => '<p class="pages">',
        'after_output'    => '</p>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );

    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    $previous = ltrim($previous, '0');
    if ( $previous && (1 != $page) )
        $echo .= '<small><a href="' . $previous . '" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></small>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<span class="active">' . ltrim(str_pad( (int)$i, 2, '0', STR_PAD_LEFT ),'0') . '</span>';
            } else {
                
                $echo .= sprintf( '<a href="%s">%2d</a>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    $next = ltrim($next, '0');
    if ($next && ($count != $page) )
        $echo .= '<a href="' . $next . '" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a>';
    
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}
/* Pagination function end */