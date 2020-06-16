<?php
session_start();

if(!$_SESSION['name'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Beta Zone</title>
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="loginstyle.css">
     <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="60x60" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#f50000">
    <meta name="apple-mobile-web-app-title" content="&lt;co/wa&gt;">
    <meta name="application-name" content="&lt;co/wa&gt;">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ff0000">
</head>
<body id="bodyWel">


  <!-- header
    ================================================== -->
  <header class="s-header">

    <div class="header-logo">
      <a class="site-logo" href="../index.php" ><img src="../img/logo.png" alt="Homepage"><span class="entete">Espace Membres</span></a>

    </div>

  </header>
  <!-- end s-header -->


  <!-- home
    ================================================== -->
  <section id="home" class="s-home target-section" data-parallax="scroll" src="../img/fav2.png" class="responsive">


    <div class="overlay"></div>
    <div class="shadow-overlay"><img src="../img/fav2.png" alt="" class="responsive"></div>

    <div class="home-content">

      <div>

        <h3></h3>

        <h1 id="php">Welcome</h1>
        <h3 id="wel">
        <?php
        echo $_SESSION['name'];
        ?>
        , in the Beta test ZONE</h3>
    <p id="intro">This a Client Zone. Here you can try your Platform, Web site, ...</p>

        <div class="home-content__buttons">
          <a href="logout.php" class="btn btn-hels btn-lg" id="logout">Deconnection</a>
        </div>

      </div>
	   <a href="#gallery2" class="btn btn-circle page-scroll">
                <i class="fa fa-angle-double-down animated"></i>
       </a>
    <!-- end home-content -->

  </section>
  <!-- end s-home -->

  <!-- About Section -->
    <section id="about">
        <div class="about container content-section text-center">
            <div class="row">
                <h2>Hi</h2>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>
                        HELLO Guys You Can Test Your Website Here !!!
                    </p>
                </div>
            </div>
        </div>
    </section>

  <!-- Gallery -->
   <section id="gallery2">
        <div class="gallery2">
			<div class="container">
			 <ul class="row">
                <li class="col-4">
                    <a class="image" href="https://www.corentinw.xyz/betatest/helsjdrone/">
                        <img class="imgDrone" src="../img/helsdronemobile.png" alt="Julien Helsmoortel">
                    </a>
                </li>
                <li class="col-4">
                    <a class="image" href="https://www.corentinw.xyz/betatest/imdavedash/">
                        <img class="imgDrone" src="../img/imdavedash.commobile2.png" alt="David-Adrian Porzio">
                    </a>
                </li>
				<li class="col-4">
                    <a class="image" href="https://www.corentinw.xyz/betatest/justunchocolat/">
                        <img class="imgDrone" src="../img/justunchocolat.bemobile.png" alt="Just'un Chocolat">
                    </a>
                </li>
			</ul>
			</div>
        </div>
    </section>

  <section>
	<div>
		<p>
           <a href=""><i class="fa fa-phone"></i>+32(0)488/... Mail me first. Thank you.</a>
        </p>
        <p>
           <i><a href="codeveloper@corentinw.xyz" style="border-bottom:1px dashed #ccc;" target="_blank">codeveloper@corentinw.xyz</a></i>
        </p>
        <ul class="list-inline banner-social-buttons">
           <li>
              <a href="https://www.linkedin.com/in/corentin-warin-22a91044/" class="btn btn-hels btn-lg"><i class="fab fa-linkedin"></i></i><span class="network-name"> Linkedin</span></a>
           </li>
           <li>
              <a href="https://www.facebook.com/kokolight" class="btn btn-hels btn-lg"><i class="fab fa-facebook-square"></i><span class="network-name"> Facebook</span></a>
           </li>
           <li>
             <a href="https://github.com/corent01" class="btn btn-hels btn-lg"><i class="fab fa-github"></i><span class="network-name"> GitHub</span></a>
           </li>
         </ul>
	</div>
  </section>

 <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="credits">
                Copyright &copy; Corentin W. 2018<br /> @ BeCode.org
            </p>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</body>

</html>
