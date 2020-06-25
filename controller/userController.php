<?php

require_once( 'model/user.php' );

/***************************
On page Profile  we will get  some function for make update or delete on table user

function changePassword(){


  make a form with the past_password and the new_password*2 in userProfileView
  verify the form
  if passt_password == select password from user where id = ? && new_password == new_password2
    GET the var new_password for use it in request 

  UPDATE user set password = 'new_password' where id_user = ?

}

function changeMail(){


  make a form with the  new_mail && password_verif
  verify the form
  if( password_verrif == select password from user where id = ? ){
    GET the var of new_mail for use it in request 
    UPDATE user set mail = 'new_mail' where id_user = ?
  }
}

function deleteAccount(){
  make a form with confirmation password
  verify the form
  
  if confirmPassword() == true 

  DELETE CASCADE FROM user where user_id = ? 
}

***************************/

function myProfile() {

  require('view/userProfilView.php');

}