<?php

$file = 'setup/index.php';
if(file_exists($file)){
    header("Location: setup/");
}
else{
header("Location: ./web/");
}
?>
