<?php ob_start(); ?>

<div>
<p><?php echo($detail[0]['title']) ?></p>


</div>
<div class="video">
    <div>
        <iframe allowfullscreen="" frameborder="0"
        src="<?= $detail[0]['trailer_url']; ?>" ></iframe>
    </div>
</div>
<p><?php echo($detail[0]['type']) ?></p>
<p><?php echo($detail[0]['release_date']) ?></p>
<p><?php echo($detail[0]['summary']) ?></p>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>