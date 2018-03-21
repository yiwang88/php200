<?php
if ( ini_get('realpath_cache_size') != 2048) {
    echo "Current realpath_cache_size = " . ini_get('realpath_cache_size') . ", </ br>";
    
    echo "</br > Change this to 2048 KB" . "</ br>";
}
else {
    //phpinfo();
    echo "realpath_cache_size is ". ini_get('realpath_cache_size') . "now </br >";
}

?>
