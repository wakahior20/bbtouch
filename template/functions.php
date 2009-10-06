<?php
function bbt_uri($filename) {
    printf(bbt_get_uri($filename));
}
function bbt_get_uri($filename) {
    return bb_get_active_theme_uri() . $filename;
}
?>
