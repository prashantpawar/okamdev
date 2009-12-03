<?php
  if(!$loggedin){
?>
  <h1>Welcome</h1>
<?php
    echo "<a href=\"".site_url('auth/login')."\" >Login</a>";
  }else{
?>
  <h1>Welcome <?= $username?></h1>
<?
    echo "<a href=\"".site_url('auth/logout')."\" >Logout</a>";
  }
?>
