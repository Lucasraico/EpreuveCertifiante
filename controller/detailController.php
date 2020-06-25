<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/


function mediaDetail(){
  $id = isset( $_GET['detailmedia'] ) ? $_GET['detailmedia'] : null;
  $season_id = isset( $_GET['season'] ) ? $_GET['season'] : null;
  $episode_id = isset( $_GET['episode'] ) ? $_GET['episode'] : null;



  $detail = Media::getDetailMedia( $id );
  
  if($episode_id !== null){
    $detailEpisode = Media::detailEpisode($episode_id);
    var_dump($episode_id);
  }
  
  if($detail[0]['type'] == 'series'){
    
    $episodes = Media::detailSeason($id, $season_id);
    $tabSeason = Media::getNbSeason($id);
    $nbSeason = $tabSeason[0][0];
  
    
  }


  require('view/detailMediaView.php');

}