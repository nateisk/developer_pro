<?php
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);


/* add browser identification to the body classes */
function browser_body_class($classes) {
		global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
 
		if($is_lynx) $classes[] = 'lynx';
		elseif($is_gecko) $classes[] = 'gecko';
		elseif($is_opera) $classes[] = 'opera';
		elseif($is_NS4) $classes[] = 'ns4';
		elseif($is_safari) $classes[] = 'safari';
		elseif($is_chrome) $classes[] = 'chrome';
		elseif($is_IE) $classes[] = 'ie';
		else $classes[] = 'unknown_browser';
 
		if($is_iphone) $classes[] = 'iphone';
		return $classes;
}
add_filter('body_class','browser_body_class');


/*End browser identification to the body classes */


/*Add DNS Prefetch*/
function consumer_dns_prefetch() {
echo '<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="dns-prefetch" href="//vjs.zencdn.net" />
<link rel="dns-prefetch" href="//connect.facebook.net" /> 
<link rel="dns-prefetch" href="//www.facebook.com" /> 
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com" /> 
<link rel="dns-prefetch" href="//f.vimeocdn.com" /> 
<link rel="dns-prefetch" href="//i.vimeocdn.com" /> 
<link rel="dns-prefetch" href="//fresnel.vimeocdn.com" /> 
<link rel="dns-prefetch" href="//player.vimeo.com" /> 
<link rel="dns-prefetch" href="//cdn.jsdelivr.net" /> 
<link rel="dns-prefetch" href="//stackpath.bootstrapcdn.com" />   
<link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com" />   
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />   
<link rel="dns-prefetch" href="//www.googletagmanager.com" />   
<link rel="dns-prefetch" href="//www.google-analytics.com" />   
<link rel="dns-prefetch" href="//0.gravatar.com/" />
<link rel="dns-prefetch" href="//2.gravatar.com/" />
<link rel="dns-prefetch" href="//1.gravatar.com/" />';
}
add_action('wp_head', 'consumer_dns_prefetch', 0);
/*End Add DNS Prefetch*/


/*Defer parsing js*/
if ( ! is_admin() ) {
function defer_parsing_of_js ( $url ) {

    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return "$url' defer='defer";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}
/*End Defer parsing js*/

/*Remove Script Version*/
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
/*End Remove Script Version*/


add_filter( 'xmlrpc_methods', function( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} );

/*echo html_entity_decode(get_field('zendesk_support_code', 'option'), ENT_QUOTES, 'UTF-8');  */