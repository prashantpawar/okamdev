<html>
<head>
<title>Welcome to CodeIgniter</title>

<link rel="stylesheet" href="<?=base_url();?>public/css/default.css" type="text/css" media="screen"/> 
</head>
<body>

<div class='container'>
  <div class='column span-17'>
  </div>
  <div class='column last span-7'>
  </div>
</div>
<div class='container'>
</div>
<div class='container'>
  <div class='column span-17'>

<?php
if(!$loggedin){
?>
<code>Welcome</code>
<?php
    echo "<a href=\"".site_url('auth/login')."\" >Login</a>";
}else{
?>
<code>Welcome <?= $username?></code>
<?
    echo "<a href=\"".site_url('auth/logout')."\" >Logout</a>";
}
?>
  </div>
  <div class='column last span-7'>
  </div>
</div>

<div class='container'>
</div> 
</body>
</html>
