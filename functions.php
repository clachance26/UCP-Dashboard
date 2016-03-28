<?php
    function checkLogin ($uname, $pw) {
        if ($uname == "admin") {
            return (checkPassAdmin($pw));
        }
        if ($uname == "parent") {
            return (checkPassUser($pw));
        }
    }

    function checkPassAdmin ($pw) {
        if ($pw == "21232f297a57a5a743894a0e4a801fc3") {
            return "admin";
        }
        else {
            return false;
        }
    }

    function checkPassUser ($pw) {
        if ($pw == "d0e45878043844ffc41aac437e86b602") {
            return "user";
        }
        else {
            return false;
        }
    }

?>
