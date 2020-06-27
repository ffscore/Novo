<?
include("./conecta/conecta.php");
include("./conf.php/conf_funcoes.php");

?>
<!DOCTYPE html>
<html  lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title> Aprendizado Git </title>
  <script type="text/javascript"></script>
</head>
<body>
  
<?
 //  FAZ A BUSCA NA TABELA
 $QUERY = $MYSQL->query("
 SELECT ID_COPIA, Usuario
 FROM sis_login
 WHERE EXC_DATA IS NULL
 ");
//  CHECO SE EXISTEM DADOS NA TABELA
if($QUERY->rowCount()>0){

//  CRIO A VERIAVEL DE CONTAGEM
 $i = 0;

//  DEFINO A VARIAVEL DE RESULTADO JUNTO AO WHILE
 while($QUERY_r = $QUERY->fetch(PDO::FETCH_OBJ)){

//  INCREMENTO A VARIAVEL DE CONTAGEM
 $i++;

//  MOSTRO OS CAMPOS NA TELA
     echo $QUERY_r->Usuario. " está Conectado!";
 }
} else {
// SE NÃO ENCONTRAR DADOS INFORMA A MENSAGEM
 echo 'Não foram encontrados registros na TABELA';
}
?>
</body>
</html>
