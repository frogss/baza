<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Dreamworks - Responsive admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
<!--Stylesheets-->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/reset.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/main.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/typography.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/tipsy.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/js/cl_editor/jquery.cleditor.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/uploadify/uploadify.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.ui.all.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/js/fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/highlight.css" />
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
<!--Javascript-->
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/highcharts.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/exporting.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.quicksand.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.easing.1.3.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.tipsy.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/cl_editor/jquery.cleditor.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/uploadify/swfobject.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.autogrowtextarea.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/form_elements.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.ui.mouse.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.ui.slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.ui.progressbar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.ui.tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/fullcalendar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/gcal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/highlight.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/main.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/funkcje.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.deserialize.js"></script>


	<script src="<?php echo base_url(); ?>asset/js/codemirror/lib/codemirror.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/codemirror/mode/mysql/mysql.js"></script>
    
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/js/codemirror/lib/codemirror.css">

<meta charset="UTF-8"></head>
<body>
<!--Header-->
<header>
    <!--Logo-->
    <div id="logo"><a href="#"><img src="<?php echo base_url(); ?>asset/images/logo.png" alt="" /></a></div>
    <!--Search-->
    <div class="header_search">
        <form action="">
            <input type="text" name="search" placeholder="Search" id="ac">
            <input type="submit" value="">
        </form>
    </div>
</header>
<!--Dreamworks Container-->
<div id="dreamworks_container">
    <!--Primary Navigation-->
    <nav id="primary_nav">
        <ul>
            <li class="nav_dashboard active"><a href="./index.html">Dashboard</a></li>
            <li class="nav_graphs"><a href="./charts.html">Graphs</a></li>
            <li class="nav_forms"><a href="./forms.html">Forms</a></li>
            <li class="nav_typography"><a href="./typography.html">Typography</a></li>
            <li class="nav_uielements"><a href="./ui_elements.html">UI Elements</a></li>
            <li class="nav_pages"><a href="./pages.html">Pages</a></li>
        </ul>
    </nav>
<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->
<nav id="secondary_nav"> 
<!--UserInfo-->
<dl class="user_info">
	<dt><a href="#"><img src="<?php echo base_url(); ?>asset/images/avatar.png" alt="" /></a></dt>
    <dd>

    </dd>
</dl>
<h2>Dashboard</h2>

<div id="selects" style="padding-left:5px;">
<div class="form_input"><select id="selectss">

</select>
</div>
</div>

                 
<dd>

<ul id="lists_tabel">
    
<?php foreach($db_list as $dbs) {

   ?>
    
    <li> <a class="link-mysql-structure" href="" alt="<?php echo $dbs ?>"><?php echo $dbs ?> </a> </li>
    <?php
} ?>

<li><a id="show_tables"></a></li>

</ul>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/funkcje_ul.js"> </script>
    </dd>
</nav>
<!--Content Wrap-->
<div id="content_wrap">	<!--Activity Stats-->
    
    <?= $content_body ?>
    
</div>
</section>
</div>

</body>
</html>