<?php
header ("Content-type:text/html;charset=utf8");
    echo $_GET['callback']."()";
?>