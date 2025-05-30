<?php


if(1 == 2){
    include $_SERVER['DOCUMENT_ROOT'] . "/views/teams.view.php";
}
else{
    include $_SERVER['DOCUMENT_ROOT'] . "/views/team-details.view.php";
}

?>