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
<meta charset="UTF-8"></head>
<body>
<!--Header-->
<header>
    <!--Logo-->
    <div id="logo"><a href="#"><img src="./images/logo.png" alt="" /></a></div>
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
	<dt><a href="#"><img src="./images/avatar.png" alt="" /></a></dt>
    <dd>

    </dd>
</dl>
<h2>Dashboard</h2>

<dd>

<ul id="lists_tabel">
    
<?php foreach($db_list as $dbs) {

   ?>
    
    <li> <a class="link-mysql-structure" href="" alt="<?php echo $dbs ?>"><?php echo $dbs ?> </a> </li>
    <?php
} ?>

<li><a id="show_tables"></a></li>

</ul>
<script type="text/javascript" src="/asset/js/funkcje_ul.js"> </script>
    </dd>
</nav>
<!--Content Wrap-->
<div id="content_wrap">	<!--Activity Stats-->
    	<div id="activity_stats">
        	<h3>Activity</h3>
            <div class="activity_column">
            	<span class="iconsweet">+</span> <span class="big_txt rd_txt">12</span>Added
            </div>
            <div class="activity_column">
            	<span class="iconsweet">Y</span> <span class="big_txt gr_txt">6</span>Flagged
            </div>
            <div class="activity_column">
            	<span class="iconsweet">#</span> <span class="big_txt">2</span>Answer pending
            </div>                         
        </div>                  
        <!--Quick Actions-->
        <div id="quick_actions">
        	<a class="button_big" href="#"><span class="iconsweet">+</span>Add new Project</a>
            <a class="button_big" href="#"><span class="iconsweet">w</span>Export Report</a>
            <a class="button_big btn_grey" href="#"><span class="iconsweet">f</span>Manage Projects</a>
        </div>
	<!--Notification Message-->
    	<div class="msgbar msg_Info hide_onC">
            <span class="iconsweet">*</span><p>Thanks for choosing Dreamworks!</p>
        </div>
	<!--One_TWO-->



	<!--One_Wrap-->
 	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">f</span><h5>Activity across your projects</h5></div>
            <div class="widget_body">
            	<!--Activity Table-->
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" id="result" cellpadding="8">
                    <tr>
                        <th width="8%">Nazwa</th>
                        <th width="15%">Silnik</th>
                        <th width="10%">Wpisów</th>
                        <th width="20%">Kodowanie</th>
                        <th width="10%">Rozmiar</th>
                        <th width="13%">Actions</th>
                    </tr>
            
                             
                </table>
				<div class="action_bar">
                    <a class="button_small whitishBtn" href="#"><span class="iconsweet">l</span>Export Table</a>
                </div>
            </div>
        </div>
    </div>          
</div>
</section>
</div>

</body>
</html>