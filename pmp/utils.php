<?php

    function utils_uriSegment($elem)
    {
        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);
        
        if($uri_segments.count() >= $elem)
        {
            return $uri_segments[elem];
        }
        else{
            exit;
        }
    }

?>