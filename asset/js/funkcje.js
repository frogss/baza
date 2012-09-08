$(document).ready
(
    function()
    {		
		
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
	$("#lists_tabel").append("<li id=\"show_tables\"><a href=\"\" onclick=\"show_database('"+dane.db+"'); return false;\" style=\"font-weight: bold;\"><b>"+dane.db+"</b></a></li>");
	 for(i=0; i<json.length; i++) {
	$("#lists_tabel").append("<li id=\"show_tables\"><a href=\"\" alt=\""+dane.db+"\" onclick=\"klikam('"+dane.db+"','"+dand.nazwa[i]+"'); return false;\" class=\"show_tables\">"+dand.nazwa[i]+"</a></li>");
		 }
	 
   });
			 
			    
                return false;
            }
        )
		
    }
)