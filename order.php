<?php include ('header.php'); ?>
  <main>
    <div class="container vp-xs-top-4">
      <h3>Get In Touch</h3>
      <p>Because every order is custom, the first step to placing an order with me is to get in touch.</p>
      <p>If you'd prefer to talk on the phone, feel free to call me at <a href="tel:13347181507">+1-334-718-1507</a>!</p>
      <form action="//formspree.io/folkystrokes@gmail.com" method="POST">
        <div class="row vm-xs-top-1">
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Name" class="form-control">
          </div>
          
          <div class="col-md-6">
            <input type="email" name="_replyto" required placeholder="Your best email address" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="vm-xs-top-1 vm-xs-bottom-1 col-md-8">
            <label for="reason">What would you like to do?</label>
            <select name="reason" class="form-control">
              <option value="order">I'm ready to place an order!</option>
              <option value="quote">I'm looking for a quote.</option>
              <option value="on-site">I want you to come and paint something on-site.</option>
              <option value="hello">I just want to say hi.</option>
            </select>
          </div>
        </div>
          

        <input type="hidden" name="_next" value="http://folkystrokes.com">
        <div>
            <textarea placeholder="Order details, requests, and extra information..." class="form-control" name="message" cols="30" rows="10"></textarea>
        </div>
        <div class="actions vm-xs-top-2">
            <input type="submit" class="btn btn-primary btn-lg" value="Send">
        </div>
      </form>
    </div>
  </main>
<?php include ('footer.php'); ?>
