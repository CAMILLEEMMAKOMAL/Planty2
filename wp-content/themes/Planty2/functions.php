<?php 

function theme_enqueue_styles()

{ wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
   wp_enqueue_style( 'child_theme_style', get_stylesheet_uri() ); }
   add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


/*hook*/
add_filter('wp_nav_menu_items', 'ajouter_lien_personnalise_menu', 10, 2);
function ajouter_lien_personnalise_menu($items, $args) 
{
   if  (is_user_logged_in()) {
      $items_array = array();
      while ( false !== ( $item_pos = strpos ( $items, '<li', 3 ) ) )
      {
         $items_array[] = substr($items, 0, $item_pos);
         $items = substr($items, $item_pos);
      }
      $items_array[] = $items;
      array_splice($items_array, 1, 0, '<li class="menu-item"><a id="bouton-admin" href="'. admin_url() .'">Admin</a></li>'); 
      $items = implode('', $items_array);
   }
   return $items;
}


// add_filter('wp_nav_menu_items', 'ajouter_lien_personnalise_menu', 10, 2);
// function ajouter_lien_personnalise_menu($items, $args) 
// {
  
//    echo "<script>";
// echo "console.log('this is a Variable: " . $items. "' );";

// echo "</script>";

// if  (is_user_logged_in() && $args->menu === "menu-testmenu") {
//        //l'emplacement de menu
 
//       //  echo "<script>";
//       //  echo "console.log('on est dans le if: ' );";
       
//       //  echo "</script>";
       
//        // Le code HTML du lien personnalisé que vous souhaitez ajouter
//        $items .= '<li><a href="https://www.exemple.com">Lien personnalisé</a></li>';

//        // Ajoutez le lien personnalisé à la fin des éléments du menu
//       //  $items .= $lien_personnalise;
//    }
//    return $items;
// }


/* LOGGED*/

// if (is_user_logged_in()) {
//    // L'utilisateur est connecté, vous pouvez exécuter du code spécifique pour les utilisateurs connectés ici.
// } else {
//    // L'utilisateur n'est pas connecté, vous pouvez exécuter du code spécifique pour les utilisateurs non connectés ici.
// }