<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Gooey Templates : CMS Style App</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="Pragma" content="no-cache" />
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/reset-fonts.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/gt-styles.css" type="text/css" media="screen, projection" />
    </head>
    <body>
        <!-- head -->
        <div class="gt-hd clearfix">
            <!-- logo -->
            <div class="gt-logo">
                Okamdev
            </div>
            <!-- / logo -->
            
            <!-- navigation -->
            <div class="gt-nav">
                <ul>
                    <li><?= anchor('welcome','Welcome'); ?></li>
                    <li><?= anchor('questions/show','Question'); ?></li>
                    <li><?= anchor('answers/view','Answers'); ?></li>
                </ul>
            </div>
            <!-- / navigation -->
            
        </div>
        <!-- / head -->
        
        <!-- body -->
        <div class="gt-bd gt-cols clearfix">
                    
            <!-- main content -->