<?php
require_once './pmp/loader.php';

if(1 == 2){
    include $_SERVER['DOCUMENT_ROOT'] . "/views/marketplace-listing.view.php";
}
else{
    include $_SERVER['DOCUMENT_ROOT'] . "/views/marketplace-item-details.view.php";
}

?>