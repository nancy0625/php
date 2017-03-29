<?php
if (!isset($_COOKIE["visttime"])){
    setcookie("visttime",date("Y-m-d H:i:s"));
    echo "欢迎您第一次访问网站";
}else{
    setcookie("visttime",date("Y-m-d H:i:s"),time()+60);
    echo "您上次的访问时间是：".$_COOKIE["visttime"];
  
    echo "<br>";
}
echo "您本次访问网站的时间是：".date("Y-m-d H:i:s");
?>