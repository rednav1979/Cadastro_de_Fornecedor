<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body onLoad="abrePop()">
    <div id="art-page-background-gradient"></div>
    <div id="art-main">
        <div class="art-Sheet">
                
        
                                       
                        <h1 id="name-text" class="art-Logo-name"><a href="#">AGENDA DE CONTATOS - COSTA SUL</a></h1>
                        
                        <div id="slogan-text" class="art-Logo-text">Tecnologia da Informa��o</div>
                        
                    </div>
                </div>
                <div class="art-contentLayout">                    
                                              
                        
                                                                              
                                         
                                        </h2>
                                     Hoje, 
                                        

<script language=javascript>
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=1000,height=600,scrollbars=YES")
}


</script> 
                                        
                                        <script Language="JavaScript">
<!--
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Ter�a - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " S�bado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Mar�o " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
// -->


                </script>
                                        
de 2015.   

<br><br>
<font size=2><br>
    <a href="cadastro_fornecedor.php">Cadastrar</a><br>
       <a href="cadastro_fornecedor_update.php">Atualizar</a>
<hr>

<form name="form1" action="cadastro_fornecedor_like.php" method="POST">

<thead>
<td>Pesquisar Por Nome?:
<br>
<input type="text" name="contato_procura"  class="campo"/></td></tr>




<tr>
<td></td>
<td><input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" /></td>
</tr>


</tbody>

</table>

</form>


   <?php 
   include "sql_t.i.php";//conex�o com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   
if(isset($_POST['done'])){   

    $contato_retorno = $_POST['contato_procura'];
    

           $sqltudo = mysql_query("select  * FROM cadastro_fornecedor  where nome like UPPER('$contato_retorno%') ")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);
	print 'Encontrados ';
	print  $colunas ;
	print ',Registros ';
	
	   print'<br>';	
	
	   print'<br>';	
	   	
                             print'<table border="1"   bordercolor="#00BFFF" >';
	   print'<tr>';
	    print'<td><b>ID</td>';
	   print'<td><b>NOME</td>';
	   print'<td><b>CONTATO</td>';
	   print'<td><b>TELEFONE1</td>';
	   print'<td><b>TELEFONE2</td>';
	   print'<td><b>FAX</td>';
	   print'<td><b>EMAIL</td>';
	   print'<td><b>SITE</td>';
	   print'<td><b>OBSERVACOES</td>';
	   print'</tr></b>';




         for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $id = @mysql_result($sqltudo, $j, "id");/*pegando os valores do banco referente ao evento*/
           $nome = @mysql_result($sqltudo, $j, "nome");
           $contato = @mysql_result($sqltudo, $j, "contato");
           $telefone1 = @mysql_result($sqltudo, $j, "telefone1");
           $telefone2 = @mysql_result($sqltudo, $j, "telefone2");
           $fax = @mysql_result($sqltudo, $j, "fax");
           $email = @mysql_result($sqltudo, $j, "email");
           $site = @mysql_result($sqltudo, $j, "site");
           $observacoes = @mysql_result($sqltudo, $j, "observacoes");





	   /*print '<table border=1>';/*monta a tabela de eventos*/

	    print'<tr>';
	   print '<td>'.$id.'	</td>';
	   print '<td>'.$nome.'</td>';
	   print '<td>'.$contato.'</td>';
	   print '<td>'.$telefone1.'</td>';
	   print '<td>'.$telefone2.'</td>';
	   print '<td>'.$fax.'</td>';
	   print '<td>'.$email.'</td>';
	   print '<td>'.$site.'</td>';
	   print '<td>'.$observacoes.'</td>';
           }
}
	   print'</table>';

	


?>
     <a href="cadastro_fornecedor.php">Cadastrar</a><br>
       <a href="cadastro_fornecedor_update.php">Atualizar</a>
</body>
</html>
