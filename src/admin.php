<?php
session_start();
/* Skyddskontroll om användaren är inloggad innan något HTML-kod i admin.php ska skriva ut till skärm. */
if(!isset($_SESSION['username'])) {
    /* Redirect besökaren vidare till inloggningssidan om inmatade data är felaktiga eller saknar */
    header("location: admin-login.php?message=Du måste vara inloggad för att få tillgång till denna sida.");
}
?>
<!-- DENNA ÄR ADMIN SKYDDAD SIDA -->

<?php
     include('../includes/header.php');
     $title = "Administration";
?>
</head>

<body>


<div class="login-success">
<p>Du är inloggad med användarnamn: <b>admin</b>.</p>
<a href="logout.php" class="logout-btn">Logga ut</a>
</div>




<div id="admin-body">

<section id="courses">
    <h2>Utbildning</h2>
    <!-- Fetch-anrop i main.js för att anropa webbtjänsten och läsa ut data --> 
    <table id="courses-table">
        <thead>
            <tr>
                <th>CODE</th>
                <th>NAME</th>
                <th>PROGRESSION</th>
                <th>SYLLABUS</th>
            </tr>
        </thead>
        <tbody id="admin-course-output"></tbody>
    </table>
</section>

<section id="add-course-form-wrap">
    <h2>Lägg till kurs</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-box-a">
            <label for="code">Code:</label>
            <br>
            <input type="text" name="code" id="code">
            <br>
            <label for="name">Name:</label>
            <br>
            <input type="text" name="name" id="name">
            <br>
            <label for="progression">Progression:</label>
            <br>
            <input type="text" name="progression" id="progression">
            <br>
            <label for="syllabus">Syllabus:</label>
            <br>
            <input type="text" name="syllabus" id="syllabus">
            <br>
        </div>
    </form>
            <input class="submit-btn" type="submit" value="LÄGG TILL" id="addCourse">
</section>

<section id="works">
    <h2>CV</h2>
    <!-- Fetch-anrop i main.js för att anropa webbtjänsten och läsa ut data --> 
    <table id="works-table">
        <thead>
            <tr>
                <th>DATA</th>
                <th>COMPANY</th>
                <th>TITLE</th>
            </tr>
        </thead>
        <tbody id="admin-work-output"></tbody>
    </table>
</section>

<section id="add-work-form-wrap">
    <h2>Lägg till jobb</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-box-b">
            <label for="date">Date:</label>
            <br>
            <input type="text" name="date" id="date">
            <br>
            <label for="company">Company:</label>
            <br>
            <input type="text" name="company" id="company">
            <br>
            <label for="title">Title:</label>
            <br>
            <input type="text" name="title" id="title">
            <br>
        </div>
    </form>
            <input class="submit-btn" type="submit" value="LÄGG TILL" id="addWork">
</section>

</div>

</body>

