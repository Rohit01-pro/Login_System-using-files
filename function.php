<?php
$userName = array();
$userPswd = array();
$userEmail = array();
$myFile = fopen("data.txt", "a+") or die("Unable to Open!");

fseek($myFile, 0);
while (!feof($myFile)) {
  $userStr =fgets($myFile);
  if ($userStr!="") {
    $user = explode("+",$userStr);
    $userName[] = trim($user[0]);
    $userPswd[] = trim($user[1]);
    $userEmail[] = trim($user[2]);
  }
}
// echo "<pre>";
// var_dump($userName);
// var_dump($userPswd);
// var_dump($userEmail);
// echo "</pre>";

// Check Weather UserName Exists. 
function existsUserName($uname)
{
  global $userName;
  if (in_array(trim($uname), $userName))
    return true;
  else
    return false;
}

// Check Weather User Password Exists. 
function existsUserPswd($upswd)
{
  global $userPswd;
  if (in_array(trim($upswd), $userPswd))
    return true;
  else
    return false;
}

// Check Weather User Email Exists. 
function existsUserEmail($uemail)
{
  global $userEmail;
  if (in_array(trim($uemail), $userEmail))
    return true;
  else
    return false;
}
