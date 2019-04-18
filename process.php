<?php
  $username= $_POST['user'];
  $password= $_POST['pass'];

  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);
  mysql_connect("localhost","root","");
  mysql_select_db("Login");

  $result = mysql_query("SELECT * FROM users where username= '$username' and password = '$password' ")
    or die("Failed to query data base" .mysql_error());
  $row = mysql_fetch_array($result);
  if ($row['username'] == $username && $row['password'] == $password){
    echo "Login success!! welcome" .$row['username'];
  }else {
    echo "Failed to login!";
  }

?>
