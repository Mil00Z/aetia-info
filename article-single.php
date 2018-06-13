<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Aetia Informatique - ARTICLE </title>
  <meta name="description" content="Le site d'Aetia Informatique">
  <meta name="author" content="Aetia Informatique">
  <meta name="theme-color" content="#2c317d">

  <!-- OPEN GRAPH OBLIGATOIRE -->
  <meta property="og:title" content="Le site d'Aetia Informatique">
  <meta property="og:type" content="Website" />
    <meta property="og:url" content="http://www.aetia.fr/actus" />
  <meta property="og:image" content="photo interne ou en externe" />
  <!-- OG NON NECESSAIRE -->
  <meta property="og:description" content="Blabla Descriptif pour RS" />
  <meta property="og:locale" content="fr_FR">
  <meta property="og:site_name" content="">

<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <!-- Slick -->
<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>-->
<!--    <link rel="stylesheet" href="/assets/css/plugins/slick/slick.css">-->
<!--    <link rel="stylesheet" href="/assets/css/plugins/slick/slick-theme.css">-->
    <!-- Main Css -->
  <link rel="stylesheet" href="assets/css/actus.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- favicon -->
  <link rel="shortcut icon" href="/assets/img/favicon.ico">

</head>

<body>

<!-- Header To Bar -->

      <!-- Header NAV -->
      <?php require_once('layout/header.php') ;?>

    <!-- Contenu Principal-->
      <main>

          <!--          Banner TOP ARTICLE-->
          <?php require_once('layout/banner-top-article.php') ;?>

          <section class="article-container container">

              <article class="article_content" data-number="1">

                  <h1>Titre Article</h1>

                    <!--entete article-->
                  <div class="article_content-top">

                      <div class="article_content-top--author">
                          <span class="label-author">Auteur</span>
                          <span class="author">Admin</span>
                      </div>

                      <div class="article_content-top--date">
                          <span class="label-date">Date</span>
                          <span class="date"><?php echo date("d-m-Y") ;?></span>
                      </div>

                  </div>

                    <!--contenu de l'article-->
                  <div class="article_content-main">
                      <p>Nostris tumore varietate rectoreque ex ingentes firmitate et conpulit nostris glorioso rectoreque atque castellis erexit.
                          Si digesto tractatur sportularum quibus excubat pro apparari consilio digesto quaedam secretiora nosse aut profitetur.
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, maiores?</p>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="more">Accusamus</a>, aliquid blanditiis consectetur ducimus enim esse in ipsam obcaecati quae ratione rerum sapiente soluta tempore, voluptate?
                          Si digesto tractatur sportularum quibus excubat pro apparari consilio digesto quaedam secretiora nosse aut profitetur</p>

                      <p>Hominum disputabunt cognitam nec atque habent semper velit esse est diffluentes deorum audiendi fides benevolentiae.</p>
                      <img src="assets/img/solution_reseaux2.jpeg" alt="photo de ...">
                      <p>Hominum disputabunt cognitam nec atque habent semper velit esse est diffluentes deorum audiendi fides benevolentiae.</p>
                      <p>Si digesto tractatur sportularum quibus excubat pro apparari consilio digesto quaedam secretiora nosse aut profitetur.</p>
                      <p><a href="#" class="more">Lorem ipsum</a> dolor sit amet, consectetur adipisicing elit. Accusamus, aliquid blanditiis consectetur ducimus enim esse in ipsam obcaecati quae ratione rerum sapiente soluta tempore, voluptate?</p>
                      <p>Nostris tumore varietate rectoreque ex ingentes firmitate et conpulit nostris glorioso rectoreque atque castellis erexit.

                          Si digesto tractatur sportularum quibus excubat pro apparari consilio digesto quaedam secretiora nosse aut profitetur.
                      </p>
                      <img src="assets/img/solution_reseaux2.jpeg" alt="photo de ...">
                      <p>Hominum disputabunt cognitam nec atque habent semper velit esse est diffluentes deorum audiendi fides benevolentiae.

                          Si digesto tractatur sportularum quibus excubat pro apparari consilio digesto quaedam secretiora nosse aut profitetur.
                      </p>



                  </div>

                    <!--nav sharing post-->
                  <div class="article_content-bottom">
                      <span class="label-sharing">Partager sur:</span>
                      <ul>
                          <li><a href="#"><img src="assets/img/icon/facebook-share.svg" alt="icone facebook"></a></li>
                          <li><a href="#"><img src="assets/img/icon/twitter-share.svg" alt="icone twitter"></a></li>
                          <li><a href="#"><img src="assets/img/icon/linkedin-share.svg" alt="icone linkedin"></a></li>
                      </ul>
                  </div>





              </article>
          </section>




      </main>

      <!-- Footer  -->
      <?php require_once('layout/footer.php'); ?>



</body>


<!--Boostrap Requirements-->
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Fontawesome -->
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<!-- Slick -->
<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>-->
<!-- <script type="text/javascript" src="assets/js/plugins/slick/slick.js"></script> -->

<!-- Isotope -->
<!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> -->
<!-- Personnal JS -->
  <script src="assets/js/main.js"></script>

</html>
