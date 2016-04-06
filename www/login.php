<?php require_once("functions.php"); ?>
<?php
    // check to see if teacher's name is in database
    $username = $_POST["uname"];
    $passwordHash = md5($_POST["pw"]);

    $loginStat = checkLogin($username,$passwordHash);

    if (!$loginStat) {
        header("Location: badLogin.php");
    }
    else if ($loginStat == "admin") {
        header("Location: sb_admin/index.html");
    }
    else {
        //$loginStat == "user"
        header("Location: user.php");
    }
?>

<script>
    function incorrectLoginPopup() {
        alert("Incorrect Login");
    }
    function unrecognizedLoginPopup() {
        alert("Unrecognized Username");
    }
</script>
