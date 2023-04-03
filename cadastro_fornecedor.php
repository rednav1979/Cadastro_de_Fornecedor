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

<?php

//criar a conexÃ£o com o banco

include "sql_t.i.php";



if(isset($_POST['done'])){   

    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    $site = $_POST['site'];
    $observacoes = $_POST['observacoes'];

    if(empty($nome) || empty($contato)|| empty($telefone1)){

        $erro = "Atenção, você deve preencher todos os campos";

    }else{        

       $sql = mysql_query("INSERT INTO `cadastro_fornecedor`(`data_cadastro`,`nome`, `contato`, `telefone1`, `telefone2`,`fax`,`email`,`site`,`observacoes`) VALUES (now(),'$nome ', '$contato', '$telefone1','$telefone2', '$fax','$email','$site','$observacoes')") or die(mysql_error());

            if($sql){

                $erro = "Dados cadastrados com sucesso!";

              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }

    }

}

?>
   
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml">
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   
   </head>
   
<script type="text/JavaScript">
function up(lstr){ // converte minusculas em maiusculas
var str=lstr.value; //obtem o valor
lstr.value=str.toUpperCase(); //converte as strings e retorna ao campo
}
function down(lstr){ // converte maiusculas em minusculas
var str=lstr.value; //obtem o valor
lstr.value=str.toLowerCase(); //converte as strings e retorna ao campo
}
</script>

<blockquote>

<font size=5><center>
</center>
 <br>


<hr width=80%>
<hr width=60%>
<hr width=20%>



<font size=2>

<form name="form1" action="cadastro_fornecedor.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}

?>

<table>

<thead>

<tr>


</tr>

</thead>

<tbody>



<tr><td>PROBLEMA:</td><td><input type="text" name="nome" value="" size=70 onkeyup="up(this)"/></td></tr>
<tr><td>SETOR:</td><td><input type="text" name="contato"  value=""  class="campo" size=70 onkeyup="up(this)"/></td></tr>
<tr><td>SOLICITANTE:</td><td><input type="text" name="telefone1" value=""  class="campo" size=70 onkeyup="up(this)"/></td></tr>
<tr><td>GRAVIDADE:</td><td><input type="text" name="telefone2" value=""  class="campo"size=70 onkeyup="up(this)" /></td></tr>
<tr><td>Observacoes</td><td><input type="text" name="observacoes" value=""  class="campo"size=70 onkeyup="up(this)" /></td></tr>
<tr>


</select>
</td>
</tr>



<tr>
<td></td>
<td><input type="submit" value="Cadastrar" /><input type="hidden" name="done"  value="" /></td>
</tr>


</tbody>

</table>

</form>

</blockquote>
  
<br>
<br>
<hr>
       <a href="index.php">Voltar</a><br>


        <br>



</body>
</html>
