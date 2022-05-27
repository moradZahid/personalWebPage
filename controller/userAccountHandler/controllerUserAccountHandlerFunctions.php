<?php

function saveFormInput($login,$password1,$password2,$email,$code) {
    $_SESSION['create_account_login'] = $login;
    $_SESSION['create_account_password1'] = $password1;
    $_SESSION['create_account_password2'] = $password2;
    $_SESSION['create_account_email'] = $email;
    $_SESSION['create_account_code'] = $code;
}