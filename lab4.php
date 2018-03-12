
<?php

$allext = get_loaded_extensions(true);
if (!in_array("the ionCube PHP Loader", $allext)) {

    echo "The web site needs ionCube Loader, plesae install this extension. </ br>";
    echo "</br> <a href='https://www.ioncube.com/loaders.php'>Download ionCube Loader Here</a>";
    //echo "</br> <a href='https://github.com/projectkudu/kudu/wiki/Xdt-transform-samples#using-a-custom-phpini'>Get instruction here</a>";
}

else {
    echo "Zend extension ionCube Loader is installed, you are ready to go! </br >";
    var_dump($allext);

}

?>
