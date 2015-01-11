<?php session_start(); ?>
<?php

include('services/coworkers.php');
include('inc/functions.php');
require('lib/phpmailer/class.phpmailer.php');

$name = isset($_POST['name']) ? $_POST['name'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$subject = isset($_POST['subject']) ? $_POST['subject'] : "";
$message = isset($_POST['message']) ? $_POST['message'] : "";

$success = false;

// POST DATA DETECTED
if(!empty($_POST)){

  // CHECK FORM ERRORS
  if(empty($name)) $errors['name'] = _('Nom');
  if(empty($email) || !eregi('^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$', $email)) $errors['email'] = _('E-mail');
  if(empty($subject)) $errors['subject'] = _('Sujet');
  if(empty($message)) $errors['message'] = _('Message');

  // CHECK CAPTCHA
  if (!empty($_REQUEST['captcha'])) {
    if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {
      $errors['captcha'] = _('Captcha');
      $style = "background-color: #FF606C";
    }

    $request_captcha = htmlspecialchars($_REQUEST['captcha']);
    unset($_SESSION['captcha']);
  }
  else {
    $errors['captcha'] = _('Captcha');
  }

  // GO SEND MAILS NOW !
  if(empty($errors)){

    //SEND EACH MAIL ONE BY ONE
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->From = $email;
    $mail->FromName = $name;
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AddAddress('happyhours.asso@gmail.com');
    if(!$mail->Send()) {
      $success = true;
    }
    else {
      $success = 'error';
    }
    // CLEAR FORM DATA AND DISPLAY SUCCESSFUL SENDING MESSAGE
    if($success){
      // Redirect and set $_GET variable
      header('Location:'.$_SERVER['PHP_SELF'].'?success=true#contact');
    }
  }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="fr" class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="fr" class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="fr" class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- SEO -->
  <title>Happy Hours - Coworking tranquille à Rennes</title>
  <meta name="description" content="Happy Hours est une association d’entrepreneurs qui propose un espace de coworking en plein centre-ville de Rennes">
  <link rel="canonical" href="http://happyh0urs.com/">
  <link rel="shortlink" href="http://happyh0urs.com/">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Apple mobile status bar -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Happy Hours - Coworking tranquille à Rennes">

  <link rel="stylesheet" href="/assets/css/screen.css">
  <link rel="stylesheet" href="/bower_components/bolster.bxSlider/jquery.bxslider.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon-180x180.png">
  <link rel="shortcut icon" href="/assets/img/favicons/favicon.ico">
  <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="/assets/img/favicons/browserconfig.xml">

  <!-- Authors -->
  <link type="text/plain" rel="author" href="http://happyh0urs.com//humans.txt" />

  <script src="/bower_components/modernizr/modernizr.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?libraries=visualization&key=AIzaSyD88o6mq4vTL93m0B_uF9ko0TkqGfi72Qw"></script>
</head>
<body>

  <?php include('inc/header.php'); ?>

  <div id="content" class="snap-content">
    <?php 
      $host = $_SERVER['REQUEST_URI'];
      if($host !== '/conditions-generales-d-utilisation'){
        include('templates/home.php');
      }
      else {
        include('templates/page.php');
      }
    ?>

    <?php include('inc/footer.php'); ?>
  </div>

  <script src="/bower_components/jquery/jquery.min.js"></script>
  <script src="/bower_components/jquery.browser/dist/jquery.browser.min.js"></script>
  <script src="/bower_components/jquery.cookie/jquery.cookie.js"></script>
  <script src="/bower_components/snapjs/dist/2.0.0-rc1/snap.js"></script>
  <script src="/bower_components/bolster.bxSlider/jquery.bxslider.min.js"></script>
  <script src="/bower_components/eu-cookie-alert/eu-cookie-alert.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/events.js"></script>
  <script src="/js/functions.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-58056114-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>

</html>
