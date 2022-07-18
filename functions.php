<?php 
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// remover admin bar
function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );

function custom_post_type_embalagens() {
	register_post_type('embalagens', array(
		'label' => 'Embalagens',
		'description' => 'Embalagens',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'embalagens', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Embalagens',
			'singular_name' => 'Embalagens',
			'menu_name' => 'Embalagens',
			'add_new' => 'Adicionar Nova',
			'add_new_item' => 'Adicionar Nova Embalagem',
			'edit' => 'Editar',
			'edit_item' => 'Editar Embalagens',
			'new_item' => 'Nova Embalagem',
			'view' => 'Ver Embalagem',
			'view_item' => 'Ver Embalagem',
			'search_items' => 'Procurar embalagens',
			'not_found' => 'Nenhuma Embalagens Encontrada',
			'not_found_in_trash' => 'Nenhuma Embalagem Encontrada no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_embalagens');

function retira_editor() {
	remove_post_type_support( 'embalagens', 'editor' );
}




//Medidas
add_action( 'init', 'create_medidas_nonhierarchical_taxonomy', 0 );
 
function create_medidas_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Medidas', 'taxonomy general name' ),
    'singular_name' => _x( 'Medida', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Medidas' ),
    'popular_items' => __( 'Popular Medidas' ),
    'all_items' => __( 'All Medidas' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Medida' ), 
    'update_item' => __( 'Update Medida' ),
    'add_new_item' => __( 'Add New Medida' ),
    'new_item_name' => __( 'New Medida Name' ),
    'separate_items_with_commas' => __( 'Separate medidas with commas' ),
    'add_or_remove_items' => __( 'Add or remove medidas' ),
    'choose_from_most_used' => __( 'Choose from the most used medidas' ),
    'menu_name' => __( 'medidas' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('medidas','embalagens',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'medida' ),
  ));
}


//Tipo de embalagem
add_action( 'init', 'create_tipos_nonhierarchical_taxonomy', 0 );
 
function create_tipos_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Linha', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Linhas' ),
    'popular_items' => __( 'Popular Linhas' ),
    'all_items' => __( 'All Linhas' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Linha' ), 
    'update_item' => __( 'Update Linha' ),
    'add_new_item' => __( 'Add New Linha' ),
    'new_item_name' => __( 'New Linha Name' ),
    'separate_items_with_commas' => __( 'Separate linha with commas' ),
    'add_or_remove_items' => __( 'Add or remove linha' ),
    'choose_from_most_used' => __( 'Choose from the most used linha' ),
    'menu_name' => __( 'Linhas ' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('tipos','embalagens',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipo' ),
  ));
}

// Habilitar Menus
add_theme_support('menus');

// Registrar o Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'principal' ));
  register_nav_menu('header-menu',__( 'principal-scroll' ));
}
add_action( 'init', 'register_my_menu' );

function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

    //  Custom post type pagination function 
	
    function cpt_pagination($pages = '', $range = 4)
    {
        $showitems = ($range * 2)+1;
        global $paged;
        if(empty($paged)) $paged = 1;
        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }
        if(1 != $pages)
        {
            echo "<nav aria-label='Page navigation example'>  <ul class='pagination'> <span>Page ".$paged." of ".$pages."</span>";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
            if($paged > 1 && $showitems < $pages) echo "<a class='paginacao-anterior' href='".get_pagenum_link($paged - 1)."'>&lsaquo; Anterior</a>";
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
                }
            }
            if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\"><i class='fas fa-undo-alt'></i></a></li>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='fas fa-arrow-right'></i></a></li>";
            echo "</ul></nav>\n";
        }
  }