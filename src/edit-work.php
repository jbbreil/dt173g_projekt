<!-- Gianluca Incandela, 
    HT 2020, 
    giin1900@student.miun.se
    webbutveckling III.
    Mittuniversitetet.
-->
<?php 
session_start();
/* Skyddskontroll om användaren är inloggad innan något HTML-kod i admin.php ska skriva ut på skärmen. */
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
    $work = new Works();


    /* Ta fram ICKE-uppdaterat meddelande */
    $updateWork = $work->getWorkById($id);

    $oldDate= $updateWork['date'];
    $oldCompany = $updateWork['company'];
    $oldTitle = $updateWork['title'];
?>
</head>

<body>


<div class="login-success">
<p>Du är inloggad med användarnamn: <b>admin</b>.</p>
<a href="logout.php" class="logout-btn">Logga ut</a>
</div>


<div id="admin-body">

<section id="add-work-form-wrap">
    <h2>Jobbsuppdatering</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-box-b">
            <label for="date">Date:</label>
            <br>
            <input type="text" name="date" id="date" value="<?php echo $oldDate; ?>">
            <br>
            <label for="company">Company:</label>
            <br>
            <input type="text" name="company" id="company" value="<?php echo $oldCompany; ?>">
            <br>
            <label for="title">Title:</label>
            <br>
            <input type="text" name="title" id="title" value="<?php echo $oldTitle; ?>">
            <br>
        </div>
    </form>
            <input class="submit-btn" type="submit" value="UPPDATERA JOBB" onclick="editWork(<?php echo $id; ?>)" id="editWork">
</section>

</div>

</body>

