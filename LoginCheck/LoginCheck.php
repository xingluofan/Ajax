<?php
$arr = array("一","二","三","四","五");
$name = $_POST["name"];
$inner = in_array($name,$arr);
//echo $inner;
if($inner){
   echo "重名" ;
}else{
    echo "可以";
}