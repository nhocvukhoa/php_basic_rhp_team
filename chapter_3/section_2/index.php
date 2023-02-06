<?php 
    $global = 10;

    function convertGlobal() {
        echo $GLOBALS['global'];
    }

    convertGlobal();
?>
