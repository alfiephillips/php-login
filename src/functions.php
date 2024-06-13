<?php

function console_log($message) {
    if (is_array($message)) {
        $message = inplode(",", $message);
    }

    echo "<script>console.log('Debug Objects: " . $message . "' );</script>";
}

?>