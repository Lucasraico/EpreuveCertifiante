<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once( 'controller/mediaController.php' );
require_once( 'controller/historiqueController.php' );
require_once( 'controller/favoriteController.php');
require_once( 'controller/contactUsController.php');
require_once( 'controller/detailController.php');
require_once( 'controller/userController.php');

/**************************
* ----- HANDLE ACTION -----
***************************/

if ( isset( $_GET['action'] ) ):

  switch( $_GET['action']):

    case 'login':

      if ( !empty( $_POST ) ) login( $_POST );
      else loginPage();

    break;

    case 'signup':

      signupPage();
        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm']) ){
          verificationSignUpForm($_POST);
        }

    break;
    

    case 'logout':

      logout();

    break;

    case 'historique':

      historiquePage();
    
    break;

    case 'favorite':

      favoritePage();
    
    break;

    case 'contactUs':

      contactUs();
    
    break;

    case 'detailMedia':

      mediaDetail();
    
    break;

    case 'settingProfil':

      myProfile();

    break;


  endswitch;

else:

  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( $user_id ):
    mediaPage();
  else:
    homePage();
  endif;

endif;
