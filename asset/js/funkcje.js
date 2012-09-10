$(document).ready
(
    function()
    {		
	

	
		$("#selects").hide();
        $('.link-mysql-structure').click
        (
            function()
            {
				$("#result").html("");
                // alert($(this).attr('alt'));
                $.post("/welcome/mysqlstruktura", {db: $(this).attr('alt') },
				   function(data) {
					 var dane = JSON.parse(data);
					 var i=0;
					 var json = eval(dane.nazwa);
					 var dand = dane;
					 
					 for(i=0; i<json.length; i++) {
				
					 $("#result").append("<tr><td>"+dand.nazwa[i]+"</td><td><span class=\"green_highlight pj_cat\">"+dand.silnik[i]+"</span></td><td><a href=\"#\">"+dand.wpisow[i]+"</a></td><td><span class=\"stat_up\">"+dand.kodowanie[i]+" <span class=\"arrow_up iconsweet\">]</span></span></td><td>"+dand.rozmiar[i]+"</td><td><span class=\"data_actions iconsweet\"><a class=\"tip_north\" original-title=\"User\" href=\"#\">a</a> <a class=\"tip_north\" original-title=\"Edit\" href=\"#\">C</a><a class=\"tip_north\" original-title=\"Delete\" href=\"#\">X</a></span></td></tr>"); 
					 }
					 $("#lists_tabel").append("<li> </li>");
  				 });
              
             $.post("/welcome/mysql_show_db_tables_list", {db: $(this).attr('alt') },
				   function(data) {
					 var dane = JSON.parse(data);
					 var i=0;
					 var json = eval(dane.nazwa);
					 var dand = dane;
					 $("#lists_tabel").html("");
					// $("#js").html("");
					//$("#lists_tabel").append("<li id=\"show_tables\"><a href=\"\" onclick=\"show_database('"+dane.db+"'); return false;\" style=\"font-weight: bold;\"><b>"+dane.db+"</b></a></li>");
					 for(i=0; i<json.length; i++) {
					$("#lists_tabel").append("<li id=\"show_tables\"><a href=\"\" alt=\""+dane.db+"\" onclick=\"klikam('"+dane.db+"','"+dand.nazwa[i]+"'); return false;\" class=\"show_tables\">"+dand.nazwa[i]+"</a></li>");
						 }
					 
				   });
			 //POBIERAM DO SELECTA BAZYY
			 $("#selects").show();
			
			  $.post("/welcome/mysql_currents_db", {db: $(this).attr('alt') },
				   function(data) {
					 var dane = JSON.parse(data);
					 var i=0;
					 var json = eval(dane.bazy);
					 var dand = dane;
						$("#selectss").html("");
						$("#selectss").append("<option selected>Wybierz</option>");
							 for(i=0; i<json.length; i++) {
									$("#selectss").append("<option value=\""+dand.bazy[i]+"\">"+dand.bazy[i]+"</option>");
							 }
				 
			   });
			   
			   $("#selects").change
			   		(
			   		function()
						{


							//WYBIERAM BAZE I LADUJE DANE!!!
							
				$("#result").html("");
                // alert($(this).attr('alt'));
                $.post("/welcome/mysqlstruktura", {db: $("#selectss option:selected").val() },
				   function(data) {
					 var dane = JSON.parse(data);
					 var i=0;
					 var json = eval(dane.nazwa);
					 var dand = dane;
					 
					 for(i=0; i<json.length; i++) {
				
					 $("#result").append("<tr><td>"+dand.nazwa[i]+"</td><td><span class=\"green_highlight pj_cat\">"+dand.silnik[i]+"</span></td><td><a href=\"#\">"+dand.wpisow[i]+"</a></td><td><span class=\"stat_up\">"+dand.kodowanie[i]+" <span class=\"arrow_up iconsweet\">]</span></span></td><td>"+dand.rozmiar[i]+"</td><td><span class=\"data_actions iconsweet\"><a class=\"tip_north\" original-title=\"User\" href=\"#\">a</a> <a class=\"tip_north\" original-title=\"Edit\" href=\"#\">C</a><a class=\"tip_north\" original-title=\"Delete\" href=\"#\">X</a></span></td></tr>"); 
					 }
					 $("#lists_tabel").append("<li> </li>");
				   });
				   
				   //LADUJE LEWE MENU WYBRANEJ BAZY
				   
				    $.post("/welcome/mysql_show_db_tables_list", {db: $("#selectss option:selected").val() },
					   function(data) {
						 var dane = JSON.parse(data);
						 var i=0;
						 var json = eval(dane.nazwa);
						 var dand = dane;
						 $("#lists_tabel").html("");
						 for(i=0; i<json.length; i++) {
						$("#lists_tabel").append("<li id=\"show_tables\"><a href=\"\" alt=\""+dane.db+"\" onclick=\"klikam('"+dane.db+"','"+dand.nazwa[i]+"'); return false;\" class=\"show_tables\">"+dand.nazwa[i]+"</a></li>");
							 }
						 });


							
						}
					);
					
					
					$("#sql").click
					(
					function() {
									
					
							
							
							$("#result").hide();
							$(".widget_title h5").html("Zapytanie Sql");
							$(".widget_body").html('<ul class="form_fields_container"><li><label>Zapytanie</label> <div class="form_input" style="width: 85%;"><textarea name="" id="editttt" cols="" rows="6">Select</textarea></div></li><li><label></label><a href="#" style="float:right; margin-right: 30px;" class="button_small whitishBtn"><span class="iconsweet">s</span>Wyślij Zapytanie</a></li></ul>');
								var editor = CodeMirror.fromTextArea(document.getElementById("editttt"), {
					 mode: "text/x-mysql",
					lineNumbers: true,
					tabMode: "indent",
					onChange: function() {
					  clearTimeout(pending);
					  setTimeout(update, 400);
					}
				  });
				  var pending;
				  function looksLikeScheme(code) {
					return !/^\s*\(\s*function\b/.test(code) && /^\s*[;\(]/.test(code);
				  }
				  function update() {
					editor.setOption("mode", looksLikeScheme(editor.getValue()) ? "mysql" : "javascript");
				  }
						     alert("SQL");	
						}
					);

                return false;
            }
        )
		
    }
)