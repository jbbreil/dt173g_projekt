<?php
  include('../includes/header.php');
  $title = "JbBreil" .$divider. "Vad?";
?>
  </head>
  <body>
  <div id="linktotop"></div>
  <header class="what-main">
      <div class="logo">
          <a href="./index.php"><img src="images/logo/logo.svg" alt="Webbplatsens logo"/></a>
        </div>

        <!-- HAMBURGER MENU --> 
        <?php include('../includes/hamburger.php');?>
        
      <nav class="main-nav main-what-nav">
        <ul>
        <li class="one"><a href="./index.php">Intro</a></li><!--
          --><li class="two"><a href="./who.php">Vem</a></li><!--
          --><li class="three is-active"><a href="./what.php">Vad</a></li><!--
          --><li class="four"><a href="./work.php">verk</a></li>
              <hr />
        </ul>
      </nav>

      <nav class="admin-nav">
          <ul>
          <li class="what-link"><a href="admin-login.php" target="_blank">Admin Login</a></li><!--
          --><li class="what-link"><a href="#contact" ><i class="fa fa-angle-double-down"></i>kontakt</a></li>           
          </ul>
      </nav>

      <div id="swup" class="transition-fade slide-wrapper">
          <img src="images/avatar/what-avatar.png" alt="webbsidas avatar"/>
      <!-- Who? letters -->
      <h1 class="letter-split">
          <span class="char1">v</span>
          <span class="char2">a</span>
          <span class="char3">d</span>
          <span class="char4">?</span>
      </h1>
      </div>  
  </header>

  <main>
    <div class="page-wrapper">
      <!--WORK TABLE -->
      

      <section id="tables" class="main-subpage">
        <section id="tables-wrapper">
        <h1>Erfarenhet & Utbildning</h1>

        <section id="cv">
          <div class="cv-wrap">
          <h2>CV</h2>
            <table id="cv-table">
              <thead>
              <tr>
                <th>Datum</th>
                <th>Företag</th>
                <th>Titel</th>
              </tr>
              </thead>
                <tbody id="work-output"></tbody>
            </table>
          </div>
        </section>
        <!--cv TABLE -->
        <section id="what">
          
          <div class="what-wrap">
          <h2>Utbildning</h2>
            <table id="what-table">
              <thead>
              <tr>
                <th>code</th>
                <th>name</th>
                <th>progression</th>
                <th>syllabus</th>
              </tr>
              </thead>
                <tbody id="course-output"></tbody>
            </table>
          </div>
        </section>
      </section>
      </section><!-- /tables-wrapper -->
    </div>     
  </main>

  <?php include('../includes/footer.php');?>
  
  </body>
</html>
