<?php

if (extension_loaded('zip')) {

    echo "PHP zip extension is installed, we need to remove it.</ br>";
    echo "</br> <a href='https://github.com/projectkudu/kudu/wiki/Xdt-transform-samples#using-a-custom-phpini'>Get instruction here</a>";
}

else {

    phpinfo();

}

?>
