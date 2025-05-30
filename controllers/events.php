<?php
require_once './pmp/loader.php';
if(1 == 1){
    include $_SERVER['DOCUMENT_ROOT'] . "/views/event-listing.view.php";
}
else{
    include $_SERVER['DOCUMENT_ROOT'] . "/views/event-details.view.php";
}

?>