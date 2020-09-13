<?php
$userName = array("pro_rohit","g_mac123","abhishek_492","rohitg_100","rampal_109","dhruv_147");
$passWord = array("pro_rohit010","gmac256smart","dangerabhi512","ipro_rohit10","rampalias182","dhruvf710");

function authenticate($uname,$pswd){
    global $userName,$passWord;
    for($i=0;$i<count($userName);$i++){
      // if($uname == $userName[$i] && $pswd == $passWord[$i])
      if(strcmp($uname,$userName[$i])==0 && strcmp($pswd,$passWord[$i])==0)
        return true; 
    }  
    return false;
}
?>
<!-- 

Username => pro_rohit
password => pro_rohit010

Username => g_mac123
password => gmac256smart

Username => abhishek_492
password => dangerabhi512

Username => rohitg_100
password => ipro_rohit10

Username => rampal_109
password => rampalias182

Username => dhruv_147
password => dhruvf710

 -->