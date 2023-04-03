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
                        
                        <div id="slogan-text" class="art-Logo-text">Tecnologia da Informação</div>
                        
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
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

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

<font size=2><br>

<a href="index.php">Voltar</a><br>

<hr>

<form name="form1" action="cadastro_fornecedor_update.php" method="POST">

<table border=1 color=red>
<tr>

<td>Qual ID para Atualizar?:</td>
</font>

<td><input type="text" name="id_update" size=2  class="campo"/></td>

<td><input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" /></td>

</table>

</form>


   <?php 
   include "sql_t.i.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   
if(isset($_POST['done'])){   

    $id_retorno = $_POST['id_update'];
    

           $sqltudo = mysql_query("select  * FROM cadastro_fornecedor  where id= $id_retorno ")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);
	print 'Encontrados ';
	print  $colunas ;
	print ',Contato(s) ';
	
	   print'<br>';	
	
	   print'<br>';	
	   	
         


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


	  

           }
}
	   print'</table>';

?>
<form name="form2" action="atualiza_cadastro_fornecedor.php" method="POST">
<table border=1 border color=red gbcolor=blue>
<tr><td>ID:</td><td><input type="text" enable="false" name="id" value="<?php echo $id; ?>" size=20/></td></tr>
<tr><td>Nome:</td><td><input type="text" name="nome" value="<?php echo $nome; ?>" size=20/></td></tr>
<tr><td>Contato:</td><td><input type="text" name="contato"  value="<?php echo $contato; ?>"  class="campo" size=20/></td></tr>
<tr><td>Telefone1:</td><td><input type="text" name="telefone1" value="<?php echo $telefone1; ?>"  class="campo" size=20/></td></tr>
<tr><td>Telefone2:</td><td><input type="text" name="telefone2" value="<?php echo $telefone2; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Fax:</td><td><input type="text" name="fax"  value="<?php echo $fax; ?>"  class="campo"size=20 /></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="email"  value="<?php echo $email; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Site:</td><td><input type="text" name="site" value="<?php echo $site; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Observacoes:</td><td><input type="text" name="observacoes" value="<?php echo $observacoes; ?>"  class="campo"size=100 /></td></tr>

</table>
<input type="submit" value="Atualizar" /><input type="hidden" name="done"  value="" />
</form>

<a href="index.php">Voltar</a><br>

</body>
</html>
