<?php
$tmp= $_FILES['meuArquivo']['tmp_name'];
$name= $_FILES['meuArquivo']['name'];

$pessoa=$_POST['onome'];

$cidade=$_POST['cidade'];

$data=date("(d.m.y) H:i");

$nomeFinal=$pessoa."-".$cidade.$data;

$path = pathinfo($name);

$ext = $path['extension'];

$arquivo = $nomeFinal.".".$ext;

$extPer = array("png","jpg","jpeg","gif","svg");

  if(in_array($ext,$extPer)){
      move_uploaded_file($tmp,"files/".$arquivo);
      echo "<br> Arquivo enviado com sucesso! A ArtShare agradece sua colaboração!";
  }else{
      echo "Extensão não permitida";
  }