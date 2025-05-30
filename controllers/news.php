<?php


if(1 == 2){
    include $_SERVER['DOCUMENT_ROOT'] . "/views/news.view.php";
}
else{
    include $_SERVER['DOCUMENT_ROOT'] . "/views/news-details.view.php";
}

?>