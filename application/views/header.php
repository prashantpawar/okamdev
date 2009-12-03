<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>OKamdev</title>
<!-- add your meta tags here -->
<link href="<?=base_url();?>public/css/my_layout.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
<link href="<?=base_url();?>public/css/patches/patch_my_layout.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
  <div class="page_margins">
    <div class="page">
      <div id="header">
        <div id="topnav">
          <!-- start: skip link navigation -->
          <a class="skip" title="skip link" href="#navigation">Skip to the navigation</a><span class="hideme">.</span>
          <a class="skip" title="skip link" href="#content">Skip to the content</a><span class="hideme">.</span>
          <!-- end: skip link navigation --><a href="#">Login</a> | <a href="#">Contact</a> | <a href="#">Imprint</a>
        </div>
        <h1 class="siteheader">Kamdev</h1>
      </div>
      <div id="nav">
        <!-- skiplink anchor: navigation -->
        <a id="navigation" name="navigation"></a>
        <div class="hlist">
          <!-- main navigation: horizontal list -->
          <ul>
            <li <? if($page=='welcome') echo 'class="active"'; ?>><strong>Welcome</strong></li>
            <li <? if($page=='question') echo 'class="active"'; ?>><?= anchor('questions/view','Questions');?></li>
            <li <? if($page=='welcome') echo 'class="active"'; ?>><a href="#">Button 3</a></li>
            <li <? if($page=='welcome') echo 'class="active"'; ?>><a href="#">Button 4</a></li>
            <li <? if($page=='welcome') echo 'class="active"'; ?>><a href="#">Button 5</a></li>
          </ul>
        </div>
      </div>
      <div id="main">
        <div id="col1">
          <div id="col1_content" class="clearfix">
            <!-- add your content here -->
            <ul>
              <li>List Item 1</li>
              <li>List Item 2</li>
              <li>List Item 3</li>
              <li>List Item 4</li>
              <li>List Item 5</li>
            </ul>
          </div>
        </div>
        <div id="col3">
          <div id="col3_content" class="clearfix">
            <!-- add your content here -->
            <b class="rrect">
  			<b class="rrect1"><b></b></b>
  			<b class="rrect2"><b></b></b>
  			<b class="rrect3"></b>
  			<b class="rrect4"></b>
  			<b class="rrect5"></b></b>

  			<div class="rrectfg">