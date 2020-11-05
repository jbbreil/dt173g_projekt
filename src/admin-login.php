<!-- Gianluca Incandela, 
    HT 2020, 
    giin1900@student.miun.se
    webbutveckling III.
    Mittuniversitetet.
-->

<?php include("../includes/header.php"); ?>
<div id="admin-login">

<h1>
<?php $title = "Adminstratör Inloggning"; ?>
</h1>

</head>

<?php
$error = '';

/* Kontroll om username och password existera */
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin = new Admin();
    if ($admin->loginAdmin($username, $password)) {
        header('Location: admin.php');   
    }else if(empty($username) || empty($password)){
        $error = '<p class="alert">Både fälten måste fyllas i!</p>';
    }
    else{
        $error = '<p class="alert">Felaktivt Användarnamn / Lösenord!</p>';
    }
}

    
/* Kontroll om message existera */
if(isset($_GET['message'])){
    $error = '<p class="alert">'. $_GET['message']. '</p>';
        }


?>

<body>
    
<div id="admin-form">
<h3><?= $title ?></h3>
<p>(Inloggning här är: admin/password)</p>
<?= $error ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
        Användarnamn: <br><input class="input-admin" type="text" name="username">
        </p>
        <p>
        Lösenord:<br><input class="input-admin" type="password" name="password">
        </p>
        <p>
        <input class="admin-btn" type="submit" name="login" value="Logga in">
        </p>
    </form>
</div>
</div>
</body>


