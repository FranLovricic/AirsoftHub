<?php
require_once './pmp/loader.php';

if(1 == 1){
    //ovo je kad si ulogiran
    include $_SERVER['DOCUMENT_ROOT'] . '/views/account.view.php';

}
elseif(1 == 1){
    //ovo je login
    include include $_SERVER['DOCUMENT_ROOT'] . "/views/account-login.view.php";
}
else{
    //ovo je registracija
    include include $_SERVER['DOCUMENT_ROOT'] . "/views/account-register.view.php";
}


?>