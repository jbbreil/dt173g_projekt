<!-- Gianluca Incandela, 
    HT 2020, 
    giin1900@student.miun.se
    webbutveckling III.
    Mittuniversitetet.
-->
<?php 
session_start();
/* Skyddskontroll om användaren är inloggad innan något HTML-kod i admin.php ska skriva ut till skärm. */
if(!isset($_SESSION['username'])) {
    /* Redirect besökaren vidare till inloggningssidan om inmatade data är felaktiga eller saknar */
    header("location: admin-login.php?message=Du måste vara inloggad för att få tillgång till denna sida.");
}

$id = false;
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    
    //echo $id;
}

?> 

<?php
     include('../includes/header.php');
     $title = "Administration";

     /* INITIALIZE CLASS COURSES */
    $course = new Courses();


    /* Ta fram ICKE-uppdaterat meddelande */
    $updateCourse = $course->getCourseById($id);

    $oldCode = $updateCourse['code'];
    $oldName = $updateCourse['name'];
    $oldProgression = $updateCourse['progression'];
    $oldSyllabus = $updateCourse['syllabus'];
?>
</head>

<body>


<div class="login-success">
<p>Du är inloggad med användarnamn: <b>admin</b>.</p>
<a href="logout.php" class="logout-btn">Logga ut</a>
</div>


<div id="admin-body">


<section id="add-course-form-wrap">
    <h2>Lägg till kurs</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-box-a">
            <label for="code">Code:</label>
            <br>
            <input type="text" name="code" id="code" value="<?php echo $oldCode; ?>">
            <br>
            <label for="name">Name:</label>
            <br>
            <input type="text" name="name" id="name" value="<?php echo $oldName; ?>">
            <br>
            <label for="progression">Progression:</label>
            <br>
            <input type="text" name="progression" id="progression" value="<?php echo $oldProgression; ?>">
            <br>
            <label for="syllabus">Syllabus:</label>
            <br>
            <input type="text" name="syllabus" id="syllabus" value="<?php echo $oldSyllabus; ?>">
            <br>
        </div>
    </form>
            <input class="submit-btn" type="submit" value="UPPDATERA KURS" onclick="editCourse(<?php echo $id; ?>)" id="editCourse">
</section>




</div>

</body>

