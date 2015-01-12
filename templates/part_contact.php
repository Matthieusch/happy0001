<div id="contact" class="lightbrown box">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="cream">Contact</h2>
      </div>
      <p class="text-center col-xs-12">
        N’hésitez pas à nous contacter pour toute information<br />
        <a href="mailto:happyhours.asso@gmail.com" title="Allez viens, on est bien bien bien !">happyhours.asso@gmail.com</a>
      </p>
      <div class="col-xs-12 spacer140"></div>
      <?php
        if(!empty($errors)){
          print '<p class="col-xs-12 bg-orange"><strong>'._('Erreur, ').' </strong> '._('veuillez vérifier les champs').' : <br /><br />- <span class="required">'.implodeLast($errors, '</span>,<br />- <span class="required">', '</span><br />- <span class="required">').'</span></p>';
        }
      ?>
      <?php
        if(isset($_GET['success']) && $_GET['success'] == 'true' && empty($_POST)){
          print '<p class="col-xs-12 bg-orange text-center">Le message a bien été envoyé.<strong> Merci !</strong>';
        }
        else {
          if($success === 'error'){
            print '<p class="bg-orange text-center">Le message n\'a pu être envoyé.</strong>';
          }
        }
      ?>
      <form action="/index.php#contact" method="POST">
        <div class="col-xs-12 col-md-6">
          <label for="name" class="col-xs-12 col-md-4 col-lg-3">Nom <sup>*</sup></label>
          <input type="text" name="name" id="name" value="<?php print $name; ?>" class="col-xs-12 col-md-8 col-lg-9" />
        </div>
        <div class="col-xs-12 col-md-6">
          <label for="email" class="col-xs-12 col-md-4 col-lg-3">E-mail <sup>*</sup></label>
          <input type="email" name="email" id="email" value="<?php print $email; ?>" class="col-xs-12 col-md-8 col-lg-9" />
        </div>
        <div class="col-xs-12 spacer20"></div>
        <div class="col-xs-12 col-md-6">
          <label for="subject" class="col-xs-12 col-md-4 col-lg-3">Sujet <sup>*</sup></label>
          <input type="text" name="subject" id="subject" value="<?php print $subject; ?>" class="col-xs-12 col-md-8 col-lg-9" />
        </div>
        <div class="col-xs-12 col-md-6">
          <label for="message" class="col-xs-12 col-md-4 col-lg-3">Message <sup>*</sup></label>
          <textarea name="message" id="message" class="col-xs-12 col-md-8 col-lg-9" rows="5"><?php print $message; ?></textarea>
        </div>
        <div class="col-xs-12 spacer20"></div>
        <div class="col-xs-12 col-md-6 col-md-offset-6">
          <img src="/lib/captcha/captcha.php" id="captcha" class="col-xs-12 col-md-8 col-md-offset-4 col-lg-9 col-lg-offset-3"/>
          <div class="col-xs-12 spacer20"></div>
          <label for="captcha-form" class="col-xs-12 col-md-4 col-lg-3">Captcha <sup>*</sup></label>
          <input type="text" name="captcha" id="captcha-form" autocomplete="off" class="col-xs-12 col-md-8 col-lg-9" />
          <span class="helper-block col-xs-12 col-md-8 col-md-offset-4 col-lg-9 col-lg-offset-3">Recopiez le texte présent dans l'image ci-dessus.<br /><a href="#" onclick="document.getElementById('captcha').src='/lib/captcha/captcha.php?'+Math.random(); document.getElementById('captcha-form').focus();" id="change-image">Illisible ? Changer le texte !</a></span>
        </div>
        <div class="col-xs-12 spacer20"></div>
        <div class="col-xs-12">
          <input type="submit" value="Envoyer" class="btn pull-right" />
        </div>
        <div class="col-xs-12 spacer40"></div>
        <div class="col-xs-12">
          <p class="pull-right"><sup>*</sup> Tous les champs sont obligatoires.</p>
        </div>
      </form>
    </div>
  </div>
</div>
