<?php
  include('../includes/header.php');
  $title = "JbBreil" .$divider. "Vem?";
?>
  </head>
  <body>
  <div id="linktotop"></div>
  <header class="work-main">
      <div class="logo">
          <a href="./index.php"
            ><img src="images/logo/logo.svg" alt="Webbplatsens logo"/>
          </a>
        </div>

        <!-- HAMBURGER MENU --> 
        <?php include('../includes/hamburger.php');?>
        
      <nav class="main-nav main-work-nav">
        <ul>
        <li class="one"><a href="./index.php">Intro</a></li><!--
          --><li class="two"><a href="./who.php">Vem</a></li><!--
          --><li class="three"><a href="./what.php">Vad</a></li><!--
          --><li class="four is-active"><a href="./work.php">verk</a></li>
              <hr />
        </ul>
      </nav>

  </script>
      <nav class="admin-nav">
          <ul>
          <li class="work-link"><a href="admin-login.php" target="_blank">Admin Login</a></li><!--
          --><li class="work-link"><a href="#contact" ><i class="fa fa-angle-double-down"></i>kontakt</a></li>   
          </ul>
      </nav>

      <div id="swup" class="transition-fade slide-wrapper">
          <img src="images/avatar/work-avatar.png" alt="webbsidas avatar"/>
      <!-- Who? letters -->
      <h1 class="letter-split">
          <span class="char1">v</span>
          <span class="char2">e</span>
          <span class="char3">r</span>
          <span class="char4">k</span>
      </h1>
      
      </div>
  </header>

  <main>

  <div class="page-wrapper">

    <!-- PROJECT CARDS -->
    <section id="project" class="main-subpage">
    <div class="project-wrapper">
    <h1>JbBreils Projekt</h1>

      <ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--one"></div>
      <div class="card__content">
        <div class="card__title">Projekt 1</div>
        <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
        <button onclick=" window.open('http://studenter.miun.se/~giin1900/GD008G/Moment%202/','_blank')" class="btn btn--block card__btn">Besök Webbplatsen</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--two"></div>
      <div class="card__content">
        <div class="card__title">Projekt 2</div>
        <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
        <button onclick=" window.open('http://studenter.miun.se/~giin1900/DT163G/Moment%204%20-%20Projekt/','_blank')" class="btn btn--block card__btn">Besök Webbplatsen</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--three"></div>
      <div class="card__content">
        <div class="card__title">Projekt 3</div>
        <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
        <button onclick=" window.open('http://studenter.miun.se/~giin1900/dt057g/Projekt/','_blank')" class="btn btn--block card__btn">Besök Webbplatsen</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--four"></div>
      <div class="card__content">
        <div class="card__title">Projekt 4</div>
        <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
        <button onclick=" window.open('http://studenter.miun.se/~giin1900/writeable/wordpress/','_blank')" class="btn btn--block card__btn">Besök Webbplatsen</button>
      </div>
    </div>
  </li>

  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--five"></div>
      <div class="card__content">
        <div class="card__title">Projekt 5</div>
        <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
        <button onclick=" window.open('http://studenter.miun.se/~giin1900/GD008G/Moment%205/','_blank')" class="btn btn--block card__btn">Besök Webbplatsen</button>
      </div>
    </div>
  </li>

  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--six"></div>
      <div class="card__content">
        <div class="card__title">Projekt 6</div>
        <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
        <button onclick=" window.open('http://studenter.miun.se/~giin1900/DT093G/Moment4/guestbook_db/index.php','_blank')" class="btn btn--block card__btn">Besök Webbplatsen</button>
      </div>
    </div>
  </li>
</ul>
     
   
  </div> 
  </section>
  </div>
  </main>

  <?php include('../includes/footer.php');?>

  </body>
</html>
