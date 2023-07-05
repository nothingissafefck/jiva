<?php
define( 'SITE_NAME', get_bloginfo('name') );
define( 'ADMIN_EMAIL', get_bloginfo('admin_email') );
define( 'THEME_PATH', get_template_directory_uri() );
define( 'USER_SETTINGS', array(
  'AJAX_URL' => admin_url( 'admin-ajax.php?action=send_mail' ),
) );

function get_theme_settings() {
  wp_enqueue_style('style', THEME_PATH );
  wp_enqueue_style( 'my-styles', THEME_PATH.'/assets/index-9f57f1c0.css', null, '1.0.0', 'all');

  wp_enqueue_script( 'my-scripts', THEME_PATH.'/assets/main-b36aa938.js', null, '1.0.0', true);
  // wp_localize_script( 'my-scripts', 'WP_Options', USER_SETTINGS );
}

function add_setting_site() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title' 	=> 'Настройки сайта',
      'menu_title'	=> 'Настройки сайта',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
  }
}

function send_mail() {
	$headers = array(
	  'From: '. SITE_NAME .' <noreply@'.$_SERVER['HTTP_HOST'].'>',
	  'content-type: text/html',
	);
	$to = ADMIN_EMAIL;
	$subject = 'Обратная связь с сайта '.$_SERVER['HTTP_HOST'];

  $c = true;
  // CSS стили таблицы
  $style_table = '
    width: 100%;
    border-collapse: collapse;
  ';
  // CSS стили строки таблицы
  $style_tr = '
    background-color: #f2f2f2;
  ';
  // CSS стили ячейки таблицы
  $style_td = '
    padding: 10px;
    border: #e2e2e2 2px solid;
    vertical-align: top;
  ';

  // Перебор всех заполненных полей форм и запись в переменную $message
  foreach ( $_POST as $key => $value ) {
    if ( $value != "" ) {
      $message .= "
      " . ( ($c = !$c) ? '<tr>':'<tr style="'.$style_tr.'">' ) . "
        <td style='".$style_td."'><b>$key</b></td>
        <td style='".$style_td."'>$value</td>
      </tr>
      ";
    }
  }
  // Создание "тела" письма
  $body = "<table style='".$style_table."'>$message</table>";
  wp_mail( $to, $subject, $body, $headers);
  wp_die();
}

function get_phone($phone_str, $class_name = null) {
  if (!$phone_str) return;
  $selector = $class_name ? "class=\"$class_name\"" : '';
  $phone_href = preg_replace('/[^+\d]/', '', $phone_str);
  return "<a $selector href=\"tel:$phone_href\">$phone_str</a>";
}

add_action( 'wp_enqueue_scripts', 'get_theme_settings' );
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );
add_setting_site();
