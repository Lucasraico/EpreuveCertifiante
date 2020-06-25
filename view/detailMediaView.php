<?php ob_start(); ?>

<?php if(isset($detailEpisode)){ ?>
 
    <p><?php echo($detailEpisode[0]['title'])?></p>
    <p><?php echo("Saison : " .$detailEpisode[0]['season'])?></p>
    <p><?php echo("Episode : " .$detailEpisode[0]['episode'])?></p>
    <p><?php echo($detailEpisode[0]['release_date'])?></p>
    <p><?php echo($detailEpisode[0]['summary'])?></p> 

<?php }else{ ?>

    <!--INFORMATIONS MEDIA  -->
<div class="col-md-10 offset-md-1 bg-white">  
    <p ><?php echo($detail[0]['title'])?></p>
    <p>
    
    
    <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                            src="<?= $detail[0]['trailer_url']; ?>" ></iframe>
                </div>
    </div> 
    
    
    
    </p>
    <p><?php echo($detail[0]['type'])?></p>
    <p><?php echo($detail[0]['status'])?></p>
    <p><?php echo($detail[0]['release_date'])?></p>
    <p><?php echo($detail[0]['summary'])?></p> 

</div>


<?php  }if($detail[0]['type'] == 'series'){ ?>
    <select name="season" onchange="location = this.value;">

    <?php 
    $i=1;
    if($season_id == null){ // If it's the first details page for series

        echo('<option selected value="index.php?action=detailMedia&detailmedia='. $detail[0]["id"] .'">Tout</option>');
            
        while($i <= $nbSeason){
            echo('<option value="index.php?action=detailMedia&detailmedia='. $detail[0]["id"] .'&season='.$i.'">Saison '.$i.'</option>');
            $i++;
        }

    }else{ // If user already selected a season

        echo('<option value="index.php?action=detailMedia&detailmedia='. $detail[0]["id"] .'">Tout</option>');

        while($i <= $nbSeason){

            if($season_id == $i ){
                echo('<option selected value="index.php?action=detailMedia&detailmedia='. $detail[0]["id"] .'&season='.$i.'">Saison '.$i.'</option>');
            }else{
                echo('<option value="index.php?action=detailMedia&detailmedia='. $detail[0]["id"] .'&season='.$i.'">Saison '.$i.'</option>');
            }

            $i++;
        }

    }
    ?>

</select>
<!-- EPISODE LIST -->
<div class="media-list">
    <?php foreach( $episodes as $episode ):?>
        <a class="item" href="index.php?action=detailMedia&detailmedia=<?= $detail[0]['id']; ?>&episode=<?= $episode['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                            src="<?= $episode['media_url']; ?>" ></iframe>
                </div>
            </div>
            <div class="title"><?= $episode['title']; ?></div>
        </a>
    <?php endforeach; ?>
</div>




<?php
}
?>



<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
