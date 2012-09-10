<!--Content Wrap-->

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
            <a class="button_big" href="#" id="sql"><span class="iconsweet">r</span>Sql</a>
            <a class="button_big" href="<?php echo base_url(); ?>login/logout"><span class="iconsweet">y</span>Wyloguj</a>
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
