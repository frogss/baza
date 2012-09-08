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
    <script src="<?php echo base_url(); ?>asset/js/html5.js"></script>
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
<meta charset="UTF-8"></head>


<body id="login_container">

<!--Dreamworks Container-->
<div id="dreamworks_container">
<?php echo validation_errors(); ?>
	<div id="login">
    	<img src="<?php echo base_url(); ?>asset/images/logo_login.png" />
        <div style="color:red"><?php echo form_error('username','',''); 
									 echo form_error('password','',''); ?></div>
        <?php echo form_open(); ?>
        
        <div class="input_box"> <span class="iconsweet">b</span><?php $data = array(
              'name'        => 'server',
              'id'          => 'server',
              'placeholder' => 'server',
			  'value' 		=> 'localhost'
            );

			echo form_input($data); 
?></div>
        
        	<div class="input_box"> <span class="iconsweet">a</span><?php $data = array(
              'name'        => 'username',
              'id'          => 'username',
              'placeholder' => 'username'
            );

			echo form_input($data); 
?></div>
            <div class="input_box"> <span class="iconsweet">y</span><?php $data = array(
              'name'        => 'password',
              'id'          => 'password',
              'placeholder' => 'password'
            );

			echo form_password($data); ?></div>
            <div> <?php echo form_submit('submit', 'Zaloguj'); ?></div>
        </form>
    </div>

</div>

</body>
</html>