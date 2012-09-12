$(document).ready
(
    function()
    {		
	

	
		$("#selects").hide();
		$("#sql-results").hide(); // UKRYWAM RESULTAT
		$("#sql_insert").hide(); //UKRYWAM SQL
        $('.link-mysql-structure').click
        (
            function()
            {
				$("#first-widget").show();
				$("#sql_insert").hide();
				$("#message").hide();
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
					 $("#lists_tabel").append("<input type=\"hidden\" name=\"selected_db\" id=\"selected_db\" value=\""+dane.db+"\">");
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
						$("#first-widget").show();
						$("#sql_insert").hide();
						$("#message").hide();
							//WYBIERAM BAZE I LADUJE DANE!!!
							$("#result").show();
							
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
						 $("#lists_tabel").append("<input type=\"hidden\" name=\"selected_db\" id=\"selected_db\" value=\""+dane.db+"\">");
						 for(i=0; i<json.length; i++) {
						$("#lists_tabel").append("<li id=\"show_tables\"><a href=\"\" alt=\""+dane.db+"\" onclick=\"klikam('"+dane.db+"','"+dand.nazwa[i]+"'); return false;\" class=\"show_tables\">"+dand.nazwa[i]+"</a></li>");
							 }
						 });


							
						}
					);
					
					//WSTAWIANIE KODU SQL :))
					$("#sql").click
					(
					function() {
						$("#first-widget").hide();
						$("#sql_insert").show();			
					    $("#message").hide();
							
							var db = $("#selected_db").val();  
							$("#result").hide();
							$("#sql_insert .widget_title h5").html("Zapytanie Sql");
							$("#sql_insert .widget_body").html('<ul class="form_fields_container" id="sql_hide"><li><label>Zapytanie</label> <div class="form_input" style="width: 85%;"><textarea name="" id="editttt" cols="" rows="6">SELECT * FROM `'+db+'` WHERE 1</textarea></div></li><li><label></label><a class="button_small bluishBtn fl_right" style="margin-right:30px;" href="#" id="sql_send"><span class="iconsweet">=</span>Wyślij Zapytanie</a></li></ul>');
							
							var editor = CodeMirror.fromTextArea(document.getElementById("editttt"), {
							mode: "text/x-mysql",
							tabMode: "indent",
							lineNumbers: true,
							matchBrackets: true
     						});
						
						
						//Wysyłanie Zapytania do bazy
						$("#sql_send").click
						(
							function() {
								
								
						$("#sql-results").show(); // POKAZ RESULTATY 
						$("#message").show();
						
					   $.post("/sql/mysql_send_sql", {db: $("#selected_db").val(), dane: editor.getValue() },
					   function(data) {
						
						 var rowArr=JSON.parse(data);
						   	    if(rowArr.code_error==2) {
								$("#message").attr("class","msgbar msg_Error hide_onC");
								$("#message_icon").html("X");
								$("#message_text").html("Wystąpił Błąd: "+ rowArr.error);	
								$("#sql-results").html(rowArr.error);
								}else 
								if(rowArr.code_error==1) {
								$("#message").attr("class","msgbar msg_Success hide_onC");
								$("#message_icon").html("=");
								$("#message_text").html("Suksec Zapytania: "+ rowArr.error);	
								$("#sql-results").html(rowArr.error);
								}    
								 
						 var dane = JSON.parse(data);
						 var json = eval(dane);
						 var dand = dane;
						 	//alert(dane[0].wyniki);					
						var array = new Array();
			
								i=1;
								
								var p;
								$("#sql-results").html();
for (var key in json.wyniki) 
{
	is=1;
	for(var item in json.wyniki[i]) {
	var value = json.wyniki[i][item];
	//alert(item);
	//$("#sql-results").append("<tr><td>"+value+"</td></tr>");
	array[is]=value;
	console.log(array);
	//alert(value);
	is++;
	}
	i++;
}

								
								
								for(json in danee)
								{
								var info = json.wyniki_+i;
								alert(info.lp);	
								i++;
								}
						for(i=0; i<data.length; i++) {
							
//console.log(info.lp);
							  var danes = data[i].wyniki;
							  for (var item in danes) {
								  alert("TU");
								var value = dane[item];  
								array[i] = item;
								array[i] = value;
								console.log(array);
							  }
						
						

							 }
							
							
							
							
						 });
								//rowArr.error
								
								//$("#message").attr("class","msgbar msg_Info hide_onC"); //INFO
								//$("#message").attr("class","msgbar msg_Success hide_onC"); //Success
								//$("#message").attr("class","msgbar msg_Error hide_onC"); //Error
								//$("#message").attr("class","msgbar msg_Alert hide_onC"); //Alert
								
								//$("#message_icon").html("*"); //IKONA INFO
								//$("#message_icon").html("="); //IKONA Success
								//$("#message_icon").html("X"); //IKONA Error
							//$("#message_icon").html("!"); //IKONA Alert
								
								//$("#message_text").html("WYJATEK KRYTYCZNY :P CZYLI NIC NIE ROBIE TYLKO ALERCIK ZE ZAPISUJE");
								
							}
						)
						
						
						}
					);
					
					

                return false;
            }
        )
		
    }
)				  