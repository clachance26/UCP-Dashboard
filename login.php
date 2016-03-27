<?php
    // check to see if teacher's name is in database
    $passwordHash = md5($_POST["pw"]);

    if ($_POST["uname"] == "adminA") {
        if ($passwordHash == "e1a52ea772e8d91e4af11baa5a0201a3") {
            echo "Welcome " . $_POST["uname"];
        }
        else {
            echo "Incorrect login";
        }

    }
    else if ($_POST["uname"] == "studentA") {
        echo "You are a student";
    }
    else {
        echo "unreconized user";
        echo $passwordHash;
    }

/*
<script>
    function incorrectLoginPopup() {
        alert("Incorrect Login");
    }
    function unrecognizedLoginPopup() {
        alert("Unrecognized Username");
    }
</script>

<?php
    // check to see if teacher's name is in database
    $hashAndSalt = password_hash($_POST["pw"], PASSWORD_BCRYPT);
    $username = $_POST["uname"];
    $userpass = $_POST["pw"];

    if ($username == "admin") {
        // DANGEROUSLY INSECURE 111
        if (password_verify("admin", $hashAndSalt)) {
            echo "Welcome " . $username;
        }
        else {
            echo '<script>incorrectLoginPopup()</script>';
        }

    }
    else {
        echo '<script>unrecognizedLoginPopup()</script>';
    }
?>
*/

?>
