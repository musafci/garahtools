<?php
/**
 * Plugin Name: WP Dynamic Keywords Injector
 * Plugin URI: https://wordpress.org/plugins/wp-dynamic-keywords-injector/
 * Description: WP Dynamic Keywords Injector inserts dynamic keywords, spintax, page title and meta title.
 * Version: 2.3.5
 * Author: Seerox
 * Author URI: https://www.seerox.com
 * Requires at least: 3.8
 * Tested up to: 5.7.1
 */

/**
 * Shortcode for Dynamic Keywords
 * @param   array   $atts
 * @return  string  $keyword
 */
function seerox_wpdki_insert_dynamic_keywords( $atts = array() ) {
    // Variables initialization
    $default         = '';
    $dyn_keyword     = '';
    $spintax_keyword = '';

    $atts = shortcode_atts( array(
        'spintax' => false,
        'default' => false,
    ), $atts, 'seerox_wpdki_dyn_keywords' );

    $search_keyword = isset( $_GET["search_keyword"] ) ? $_GET["search_keyword"] : false;
    $dyn_keyword = isset( $_GET["dyn_keyword"] ) ? $_GET["dyn_keyword"] : false;
    if ( ! $dyn_keyword ) {
        $default         = esc_html( $atts['default'] );
        $spintax         = esc_html( $atts['spintax'] );
        $spintax_keyword = seerox_wpdki_spintax_tool( $spintax );
    }
    $rplc_dflt_txt = str_replace('SEARCH_KEYWORD',  $search_keyword , $default);

    if ( $dyn_keyword ) {
        $dyn_keyword = str_replace('-', ' ', $dyn_keyword);
        $keyword = stripslashes_deep( $dyn_keyword );
    } elseif ( '' != $spintax_keyword ) {
        $keyword = $spintax_keyword;
    } else {
        $keyword = $rplc_dflt_txt;
    }

    return $keyword;
}
add_shortcode( 'seerox_wpdki_dyn_keywords', 'seerox_wpdki_insert_dynamic_keywords' );

/**
 * creates as many unique versions of a piece of text as you want
 *
 * @param string $content
 * @return string $content
 */
function seerox_wpdki_spintax_tool( $content ) {
    if( ! $content ) return;

    $content = str_replace( "'", "`", $content );
    while ( seerox_wpdki_is_occurence_found( "}", $content ) ) {
        $rbracket       = strpos( $content, "}", 0 );
        $t_string       = substr( $content, 0, $rbracket );
        $t_string_token = explode( "{", $t_string );
        $t_string_count = count( $t_string_token ) - 1;
        $t_string       = $t_string_token[ $t_string_count ];
        $t_string_token = explode( "|", $t_string );
        $t_string_count = count( $t_string_token ) - 1;
        $i              = rand( 0, $t_string_count );
        $replace        = $t_string_token[ $i ];
        $t_string       = "{" . $t_string . "}";
        $content        = seerox_wpdki_string_replace( $t_string, $replace, $content );
    }

    return $content;
}

/**
 * Returns the index if the needle found in haystack else false
 * @param  string   $needle   string to find
 * @param  string   $haystack string in which we want to make search
 * @return int|bool
 */
function seerox_wpdki_is_occurence_found( $needle, $haystack ) {
    return false !== @strpos( $haystack, $needle );
}

/**
 * Replace first occurence
 * @param  string $needle       string to find
 * @param  string $middle_part  string to insert in the middle
 * @param  string $haystack     this is a string in which the search is made
 * @return string $temp         replaced string     
 */
function seerox_wpdki_string_replace( $needle, $middle_part, $haystack ) {
    $length = strlen( $haystack );
    $start  = strpos( $haystack, $needle );
    $end    = $start + strlen( $needle );
    $temp   = substr( $haystack, 0, $start ) . $middle_part . substr( $haystack, $end, ( $length - $end ) );

    return $temp;
}

/**
 * Change the Page/Post Title.
 * @param  string $current_page_title
 * @return string $page_title|$current_page_title
 */
function seerox_wpdki_dynamic_title( $current_page_title ) {
    
    global $post;
    $search_keyword = isset( $_GET["search_keyword"] ) ? $_GET["search_keyword"] : false;
    $page_title    = !empty( $_GET["page_title"] ) ? sanitize_text_field( $_GET["page_title"] ) : false;
    $get_whtkwd = get_option('srx-whitelist-kwd-box');
    $get_whtkwd_arr = explode( ",", $get_whtkwd ); 

    if ( $page_title && strtolower( $current_page_title ) == strtolower( $post->post_title ) ) {

        $rplc_page_title = str_replace('SEARCH_KEYWORD',  $search_keyword , $page_title);
        $str_replc_white_list = str_replace('SEARCH_KEYWORD',  $search_keyword , $get_whtkwd_arr);

        if( in_array($rplc_page_title, $str_replc_white_list) && get_option("srx-whitelist-kwd") == 1 ) {
            return $rplc_page_title;
        }else if( !in_array($rplc_page_title, $str_replc_white_list) && get_option("srx-whitelist-kwd") == 1 ) {
            return $current_page_title;
        } else {
            return $rplc_page_title;
        }

    }

    return $current_page_title;
}
add_filter( 'the_title', 'seerox_wpdki_dynamic_title', 1 );

/**
 * Change the Meta Title.
 * @return string $title|$current_title
 */
function seerox_wpdki_change_the_title() {
    $current_title = '';
    $search_keyword = isset( $_GET["search_keyword"] ) ? $_GET["search_keyword"] : false;
    $title    = !empty( $_GET["title"] ) ? sanitize_text_field( $_GET["title"] ) : false;
    $get_whtkwd = get_option('srx-whitelist-kwd-box');
    $str_whtkwd = str_replace(array("\r", "\n"), ',', $get_whtkwd);
    $get_whtkwd_arr = explode( ",", $str_whtkwd );


    if( $title ) {

        $rplc_title = str_replace('SEARCH_KEYWORD',  $search_keyword , $title);
        $str_replc_white_list = str_replace('SEARCH_KEYWORD',  $search_keyword , $get_whtkwd_arr);

        if ( in_array( $rplc_title, $str_replc_white_list ) && get_option("srx-whitelist-kwd") == 1 ) {
            return $rplc_title;
        }else if( !in_array( $rplc_title, $str_replc_white_list ) && get_option("srx-whitelist-kwd") == 1 ) {
            return $current_title;
        } else {
            return $rplc_title;
        }

    }
        
    return $current_title;
}
if(get_option( 'srx-metatitle-check' ) == 1)
{
    add_filter('pre_get_document_title', 'seerox_wpdki_change_the_title', 1);
}

/**
 * Update body content links.
 * @return string $current
 */
if(get_option( 'srx_internal_check' ) == 1)
{
    add_filter ('the_content', 'seerox_wpdki_update_body_link') ;
}
function seerox_wpdki_update_body_link($content)
{
    if(isset($_GET['dyn_keyword']) || isset($_GET['title']) || isset($_GET['page_title'])){
        global $post;
        $content = $post->post_content;
        preg_match_all('/<a href="(.*)">/',$content,$a);
        $count = count($a[1]);

        for ($row = 0; $row < $count ; $row++) {
            $link = $a[1]["$row"];
            if(strpos($link,home_url()) !== false || preg_match('/^(\/.*)$/', $link))
            {

                //----- Already query found in URL
                //---- Parsed and append on dynamic url
                $qs = parse_url($link,PHP_URL_QUERY);
                $preq='';$oldq=array('/?');
                parse_str($qs, $vars);
                foreach ($vars as $key => $value) {
                    if(strlen($key)>0)
                    {
                         $preq .= '&'.$key.'='.$value;
                         array_push($oldq, $key.'='.$value);
                    }
                }
                //-- change only home url
                if($link == home_url('/'))
                {
                    $content = str_replace('"'.$link.'"','"'.$link.'?'.$_SERVER['QUERY_STRING'].$preq.'"',$content);
                }else{
                    $content = str_replace('"'.$link.'"','"'.str_replace($oldq,'', $link).'/?'.$_SERVER['QUERY_STRING'].$preq.'"',$content);
                }
            }
        }
    }
    return $content;
}

/**
 * Updates canonical url's & Permalinks.
 * @return $permalink
 */
$filters = array (
    'post_link',       // when post_type == 'post'
    'page_link',       // when post_type == 'page'
    'attachment_link', // when post_type == 'attachment'
    'post_type_link',  // when post_type is not one of the above
    ) ;
if(get_option( 'srx_internal_check' ) == 1 && isset($_GET['dyn_keyword']) || isset($_GET['title']) || isset($_GET['page_title']))
{
    foreach ($filters as $filter) {
        add_filter ($filter, 'seerox_wpdki_add_query_args') ;
    }
}


function seerox_wpdki_add_query_args($permalink)
{
    if(is_singular())
    {
        if(isset($_GET['dyn_keyword']) || isset($_GET['title']) || isset($_GET['page_title'])){
        return (esc_url (add_query_arg($_GET, $permalink))) ;
         }
    }else{
        return $permalink;
    }
    
}


/**
 * Fireup Shortcode for Dynamic Keywords in SEO Meta
 * @return  string  $keyword
 */
$seerox_wpdki_Meta = array (
    'wpseo_metadesc',
    'wpseo_opengraph_title',
    'wpseo_opengraph_description',
    'wpseo_twitter_title',
    'wpseo_twitter_description',
) ;

if(get_option( 'srx_metaval_check' ) == 1)
{
    foreach ( $seerox_wpdki_Meta as $seoMeta ) {
        add_filter ( $seoMeta, 'do_shortcode' );
    }  
}


/**
 * Enable WPDKI Shortcode in Yoast Title
 * @return $title
 */
add_filter('wpseo_title', 'seerox_wpdki_enable_title_shortcode');
function seerox_wpdki_enable_title_shortcode($title) {
    $title = do_shortcode($title); 
    $wpdki_ptitle = !empty( $_GET["title"] ) ? sanitize_text_field( $_GET["title"] ) : false;
    $search_keyword = isset( $_GET["search_keyword"] ) ? $_GET["search_keyword"] : false;
    if ($wpdki_ptitle && get_option( 'srx-metatitle-check' ) == 1) {
        $rplc_title = str_replace('SEARCH_KEYWORD',  $search_keyword , $wpdki_ptitle);
        $title = $rplc_title;
    } 
  return $title;
}


/**
 * Enable WPDKI Shortcode in All in One SEO Title
 * @return $title
 */
add_filter( 'aioseop_title', 'seerox_wpdki_aioseop_enable_title_shortcode', 1 );
function seerox_wpdki_aioseop_enable_title_shortcode( $title ){

    $title = do_shortcode($title); 
    $wpdki_ptitle = !empty( $_GET["title"] ) ? sanitize_text_field( $_GET["title"] ) : false;
    $search_keyword = isset( $_GET["search_keyword"] ) ? $_GET["search_keyword"] : false;
    if ($wpdki_ptitle && get_option( 'srx-metatitle-check' ) == 1) {
        $rplc_title = str_replace('SEARCH_KEYWORD',  $search_keyword , $wpdki_ptitle);
        $title = $rplc_title;
    }
    return $title;

}


/**
 * Enable WPDKI Shortcode in All in One SEO Description
 * @return $descr
 */
add_filter ('aioseop_description', 'seerox_wpdki_aioseop_enable_desc_shortcode', 1);
function seerox_wpdki_aioseop_enable_desc_shortcode ($descr)
{
    $descr= do_shortcode($descr);
    return $descr;
}


/**
 * register Canonical Url
 * @return  string  $keyword
 */
remove_action ( 'wp_head' , 'rel_canonical' , 48) ;
add_filter( 'wpseo_canonical', '__return_false' );
add_action ( 'wp_head' , 'seerox_wpdki_rel_canonical' ) ;

function seerox_wpdki_rel_canonical () {
    if(get_option( 'srx_canonical_check' ) == 1)
    {
        $appn = '';
        ob_start () ;
        rel_canonical () ;
        $rel_content = ob_get_contents () ;
        ob_end_clean () ;
        if(isset($_SERVER['QUERY_STRING']) && isset($_GET['dyn_keyword']) || isset($_GET['title']) || isset($_GET['page_title']))
        {
            $appn = '?'.$_SERVER['QUERY_STRING'];
        }
        echo str_replace ( get_page_link() , get_page_link().$appn , $rel_content ) ;
    }
    
}



/**
 * Setting Menu
 * @return  Add Menu in Admin Panel
 */

add_action( 'admin_menu', 'seerox_wpdki_settings_menu' );

function seerox_wpdki_settings_menu ()
{
    add_menu_page( 
        'Wordpress Dynamic Keyword Injector Settings',
        'WP Dynamic Keyword Injector', 
        'manage_options',
        'seerox_wpdki_settings',
        'seerox_wpdki_settings_content'
    );
}

function seerox_wpdki_settings_content () 
{
    if( isset( $_POST['srx_wpdki_upsettings'] ) )
    {
        //-- Update Settings for canonical url
        if( isset( $_POST['srx_canonical_check'] ) )
        {
            update_option( 'srx_canonical_check', 1 );
        }else{
            update_option( 'srx_canonical_check', 0 );
        }
        //-- Update Settings for internal urls
        if( isset( $_POST['srx_internal_check'] ) )
        {
            update_option( 'srx_internal_check', 1 );
        }else{
            update_option( 'srx_internal_check', 0 );
        }
        // -- update settings for meta tags short code trigger
        if( isset( $_POST['srx_metaval_check'] ) )
        {
            update_option( 'srx_metaval_check', 1 );
        }else{
            update_option( 'srx_metaval_check', 0 );
        }
        //-- Update Settings for Meta Title
        if( isset( $_POST['srx-metatitle-check'] ) )
        {
            update_option( 'srx-metatitle-check', 1 );
        }else{
            update_option( 'srx-metatitle-check', 0 );
        }
        //-- Update Settings for Whitelist Keyword
        if( isset( $_POST['srx-whitelist-kwd'] ) )
        {
            update_option( 'srx-whitelist-kwd', 1 );
        }else{
            update_option( 'srx-whitelist-kwd', 0 );
        }
        if( isset( $_POST['srx-whitelist-kwd-box'] ) )
        {
            $srx_whitelist_kwd_box = $_POST['srx-whitelist-kwd-box'];
            update_option( 'srx-whitelist-kwd-box', $srx_whitelist_kwd_box );
        }
    }
    include_once( "settings.php" );
}
    