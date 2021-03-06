<?php include ('header.php'); ?>
      <div class="masonry">
<?php
        $count = 33;
        $range = range(1, $count);
        shuffle($range);
        for ($i=1; $i < $count; $i++){
          $img_name = "image-$range[$i]";
        ?>
          <div class="painting-tile" data-id="<?php echo $range[$i]; ?>">
            <img src="/assets/dist/img/<?php echo $img_name ?>.jpg">
          </div>
        <?php } ?>
      </div>
      <div class="overlay">
        <div class="close-btn">&times;</div>
        <div class="slick">
          <?php for ($i=1; $i < $count; $i++){
            $img_name = "image-" . $range[$i];
          ?>
            <div class="painting-single" data-id="<?php echo $range[$i]; ?>">
              <img src="/assets/dist/img/<?php echo $img_name ?>.jpg">
            </div>
          <?php } ?>
        </div>
      </div>
<?php include ('footer.php'); ?>
