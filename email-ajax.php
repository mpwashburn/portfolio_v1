<?php

add_action('wp_ajax_nopriv_do_ajax', 'our_ajax_function');
add_action('wp_ajax_do_ajax', 'our_ajax_function');


function our_ajax_function(){
    switch($_POST['fn']) {
        case 'email_form':
            $output = email_form($_POST);
            break;
        default:
            $output = 'No Function';
            break;
    }
    $output = json_encode($output);

    if( is_array($output) ){
        print_r($output);
    }else{
        echo $output;
    }

    wp_die();
}

function email_form($data){
  $notify = array();
  $html  = '<div style="width: 600px; margin: 0 auto;">';
  $html .= '<div style="text-align: center; padding: 15px; margin-bottom: 1em; background: #eee;">';
  $html .= '<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('title').'"><h1>From the desk of Michael Washburn</h1></a>';
  $html .= '</div>';
  $html .= '<table style="border: 1px solid #ccc; border-collapse: collapse; width: 100%;">';
  foreach($data['data'] as $data){

    if($data['name'] == 'name'){ $name = ucwords($data['value']); }
    if($data['name'] == 'email'){ $email = $data['value']; }
    if( strtolower( $data['name'] ) == 'location' ){
      $data['value'] = get_the_title( $data['value'] );
    }

    $html .= '<tr style="border: 1px solid #ccc;"><td style="width: 30%; padding: 10px; border: 1px solid #ccc;">'.str_replace('_',' ', ucfirst($data['name'])).'</td><td style="width: 70%; padding: 10px; border: 1px solid #ccc;">'.ucfirst($data['value']).'</td></tr>';

  }
  $html .= '</table>';
  $html .= '</div>';

  $email_message = $html;

  /* Enter Receiving Email Below */
  $notify[] = 'michael@urgeinteractive.com';

  $headers = array();
  /* Enter Sending Email Below */
  $headers[] = 'From: '.get_bloginfo('name').' <michael@urgeinteractive.com>' . "\r\n";
  $headers[] = 'Content-Type: text/html; charset=UTF-8';

  $mail = wp_mail( $notify , 'User generated mail from '.get_bloginfo('name').'', $email_message, $headers );

  if( true == $mail ){
    $message = '<p class="alert alert-success" id="contact-success">Your message was sent successfully!';
  }else{
    $message = '<p class="alert alert-danger" id="contact-success">There was a problem sending the email.</p>';
  }
  return $message;
}


?>
