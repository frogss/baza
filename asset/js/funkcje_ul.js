$(document).ready(function() {
	
	 $('.link-mysql-structure').click
        (
            function()
            {
				$("#result").html("");
				
			}
		);
		
		
		
		
});
var baza;
var tabela;
 function klikam(baza,tabela) {
						$.post("/sql/mysql_tabela_struktura", {db: baza, table: tabela },
						   function(data) {
							 var dane = JSON.parse(data);
							 var i=0;
							 var json = eval(dane.nazwa);
							 var dand = dane;
							 $("#result").html("");
							 for(i=0; i<json.length; i++) {
							$("#result").append("<tr id=\"edit_db\"><td>"+dand.nazwa[i]+"</td><td><span class=\"green_highlight pj_cat\">"+dand.typ[i]+"</span></td><td><a href=\"#\">"+dand.aic[i]+"</a></td><td><span class=\"stat_up\">"+dand.klucz[i]+" <span class=\"arrow_up iconsweet\">]</span></span></td><td>"+dand.domyslne[i]+"</td><td>"+dand.extra[i]+"</td><td><span class=\"data_actions iconsweet\"><a class=\"tip_north\" original-title=\"User\" href=\"#\">a</a> <a class=\"tip_north\" original-title=\"Edit\" href=\"#\" onclick=\"mysql_edit_table('"+baza+"','"+dand.nazwa[i]+"','"+dand.typ[i]+"'); return false;\" alt=\"["+i+"]\">C</a><a class=\"tip_north\" original-title=\"Delete\" href=\"#\">X</a></span></td></tr>");
							
								 }
						});
						
				return false;
		
	  }


//STRUKTURA BAZY DANYCH
var base; // PRZECHWYTUJE NAZWE BAZY
  function show_database(base) {
	$("#result").html("");
                // alert($(this).attr('alt'));
                $.post("/welcome/mysqlstruktura", {db: base },
   function(data) {
	 var dane = JSON.parse(data);
	 var i=0;
	 var json = eval(dane.nazwa);
	 var dand = dane;
	 
	 for(i=0; i<json.length; i++) {

	 $("#result").append("<tr><td>"+dand.nazwa[i]+"</td><td><span class=\"green_highlight pj_cat\">"+dand.silnik[i]+"</span></td><td><a href=\"#\">"+dand.wpisow[i]+"</a></td><td><span class=\"stat_up\">"+dand.kodowanie[i]+" <span class=\"arrow_up iconsweet\">]</span></span></td><td>"+dand.rozmiar[i]+"</td><td><span class=\"data_actions iconsweet\"><a class=\"tip_north\" original-title=\"User\" href=\"#\">a</a> <a class=\"tip_north\" original-title=\"Edit\" href=\"#\">C</a><a class=\"tip_north\" original-title=\"Delete\" href=\"#\">X</a></span></td></tr>"); 
	 
	 }
   });  
  }
  
  
var edit_baza;
var tabela;
var nazwa;

	function mysql_edit_table(edit_baza,tabela,typ) {
	
	alert(edit_baza);
	alert(tabela);
	alert(typ);	
		
	}