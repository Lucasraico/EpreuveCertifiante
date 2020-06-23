<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/


function mediaDetail(){
  $id = isset( $_GET['detailmedia'] ) ? $_GET['detailmedia'] : null;
  $detail = Media::getDetailMedia( $id );


  require('view/detailMediaView.php');

}