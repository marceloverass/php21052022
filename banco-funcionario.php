<!-- banco-funcionario.php -->
<?php require_once "conecta.php" ?>
<?php require_once "Funcionarios.php" ?>
<?php
 function insereFuncionario($conecta,$funcionario){
 $sql="insert into dados_pessoais
  (nome,cpf,endereco,telefone)values
  ('$funcionario->nome','$funcionario->cpf',
  '$funcionario->endereco','$funcionario->telefone')";
 $resultado= mysqli_query($conecta,$sql);
 return $resultado;
 }//fim do método insere
 
 function deletaFuncionario($conecta,$funcionario){
	$sql="delete from dados_pessoais where 
	id=$funcionario->id ";
    $resultado= mysqli_query($conecta,$sql);
    return $resultado;	
}//fim do método deletar
 function listaFuncionario($conecta){
  $sql="select * from dados_pessoais";
  $resultado= mysqli_query($conecta,$sql);
  while($array=mysqli_fetch_assoc( $resultado)){
	}
   ?>	
	<table border=1>
	  <tr>
	    <td>id</td>
		<td><input type=hidden 
		     value=<?php echo $array['id'];?> name=id>
	    </td>	
	  </tr>
	</table>
 }//fim do método listar 
 
 
 
 
 
 
 
 
 
 
 



?>
