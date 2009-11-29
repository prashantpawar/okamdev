<html>
<head>
<title>Welcome to CodeIgniter</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

.container { width: 950px; margin: 0 auto; }
.column { float: left; margin-right: 10px; }
.span-17 { width: 670px; }
.last { margin-right: 0; }
.span-7 { width: 270px; }

</style>
</head>
<body>

<div class='container'>
  <div class='column span-17'>
  </div>
  <div class='column last span-7'>
  </div>
</div>
<div class='container'>
<h1>Welcome to CodeIgniter!</h1>
</div>
<div class='container'>
  <div class='column span-17'>
  <code><?= $flash?></code>
  <?php
if($displaylink){
    echo "<a href=\"".site_url('auth/login')."\" >Login</a>";
}else{
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
