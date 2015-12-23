<?php include ('header.php'); ?>
  <main class="vp-xs-bottom-3">
    <div class="container vp-xs-top-4">
      <h2 class="text-primary">Every piece of art I do is truly custom &mdash; <strong>Yours will be too.</strong></h2>
      <div class="about-content vp-xs-2">
        <div class="row">
          <div class="col-md-6">
            <img src="/assets/dist/img/about-janna.jpg">
          </div>
          <div class="col-md-5 col-md-offset-1 vm-xl-top-3">
            <p>Folky Strokes is a fully custom folk art shop that specializes in thoughtful paintings, custom art, and personalized gifts. Every order is completely custom made.</p>
            <p>
              Whether it is to match and hang in your living room, decorate for a holiday, commemorate a special memory, support your favorite team, or to give as a thoughtful gift to your family and friends-- 
              Folky Stokes will paint the perfect piece of art, just for you.
            </p>
            <p class="vm-xs-top-2 vm-xs-bottom-2"><a href="/order.php" class="btn btn-lg btn-primary">Start Your Order</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="vp-xs-6 bottom-3 bg-primary">
      <div class="container">
        <div class="row vm-xs-bottom-2">
          <div class="col-md-6 col-md-offset-3 text-center">
              <h3 class="u-text-normal h2">Any color, any size, any order. Your custom work of art.</h3>
          </div>
        </div>
        <div class="row">
          <?php
            $services = array("Paintings on Wood", "Wall Murals", "Home Art &amp; Decor", "Door Hangers", "Indoor &amp; Outdoor Signs", "Seasonal Decorations", "Party Decor", "Abstract Art", "Wedding Art");
            foreach($services as $service){ ?>
              <div class="col-md-3 col-sm-6 vp-xs-2 text-center text-md-left"><h5 class="u-text-sans-serif"><?php echo $service; ?></h5></div>
            <?php }
          ?>
        </div>
      </div>
    </div>
    <div class="container vp-md-6 vp-xs-4">
      <div class="about-content">
        <div class="row vp-xs-top-2 vp-xs-bottom-1">
          <div class="col-md-5">
            <h3 class="text-primary">About the Artist</h3>
              <p>Janna McElveen is the resident artist and owner of Folky Strokes. She paints not only because shes loves it, but for the opportunity to create the art you’ve always wanted, needed and hoped to have.</p>

              <p>Janna cares about all the little details that make your work of art, yours. The meaning behind the painting, the shades of the colors, the scenery, landscapes and characters tht bring it to life.</p>

              <p>Janna paints in her cozy home studio in Chattanooga, TN, while her and her husband’s cute kids run around the house.</p>

              <p>She looks forward to hearing your ideas, so she can bring them to life with a little bit of paint and some folky strokes.</p>
          </div>
          <div class="col-md-7">
            <img src="/assets/dist/img/hike-web.jpg" alt="">
            <div class="row vp-xs-top-2">
              <p class="u-text-bold text-center">Have an idea? Need a quote? Ask Janna today!</p>
              <p class="text-center"><a href="/order.php" class="btn btn-lg btn-primary">Start Your Order</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include ('footer.php'); ?>
