<?php
  include('../includes/header.php');
  $title = "JbBreil" .$divider. "Vem?";
?>
  </head>

  <body>
    <div id="linktotop"></div>
    <header class="who-main">
        <div class="logo">
            <a href="./index.php"><img src="images/logo/logo.svg" alt="Webbplatsens logo"/></a>
          </div>

          <!-- HAMBURGER MENU --> 
          <?php include('../includes/hamburger.php');?>

        <nav class="main-nav main-who-nav">
          <ul>
            <li class="one"><a href="./index.php">Intro</a></li><!--
            --><li class="two is-active"><a href="./who.php">Vem</a></li><!--
            --><li class="three"><a href="./what.php">Vad</a></li><!--
            --><li class="four"><a href="./work.php">verk</a></li>
               <hr />
          </ul>
        </nav>
        
        <nav class="admin-nav">
            <ul>
            <li class="who-link"><a href="admin-login.php" target="_blank">Admin Login</a></li><!--
            --><li class="who-link"><a href="#contact" ><i class="fa fa-angle-double-down"></i>kontakt</a></li>   
            </ul>
        </nav>

        <div id="swup" class="transition-fade slide-wrapper">
            <img src="images/avatar/who-avatar.svg" alt="webbsidas avatar"/>
        <!-- Who? letters -->
        <h1 class="letter-split">
            <span class="char1">v</span>
            <span class="char2">e</span>
            <span class="char3">m</span>
            <span class="char4">?</span>
        </h1>
       
        </div>    
    </header>

    <main>

        <div class="page-wrapper">

        <section id="who" class="main-subpage">

          <div id="who-img-wrapper">
            <img src="images/portratt.png" alt="Webbutvecklares bild" />
            <h3 class="caption">Gianluca Incandela - grundare / Webbutvecklare</h3>
            <cite class="brand-name">JbBreil<i class="rights">®</i></cite>
          </div>

          <div class="who-text-wrapper">
            <h2>Vem är Jb Breil</h2>
            <h4>En liten beskrivning av mig</h4>
            <p id="p-text">
              Jag heter Gianluca, är 40 år gammal och bor i Umeå i
              Västerbotten med min fru och våra två barn. Jag har alltid varit
              väldigt IT-intresserad men har hittills jobbat inom service som
              restaurang och hotellreception. Efter många år inom service tog
              jag äntligen modet till mig och sökte till Mittuniversitet för att
              studera Webbutveckling. Det var ett läskigt beslut men bland det
              bästa jag gjort. Webbutveckling är väldigt utmanande men för någon
              som jag, som alltid fått min motivation från utmaningar, så är det
              en perfekt matchning. Titta gärna runt här på min hemsida och se
              vad jag gjort tidigare!
            </p>
          </div>
    
      </section>
    </div> 
    </main>

    <?php include('../includes/footer.php');?>
    
  </body>
</html>
