<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercicio 1</title>
	</head>
	<body>
		<form action="" method="POST">
			<table align="center" border="1">
				<tr>
					<td colspan="2">
						Digite a quantidade de Alunos que deseja Cadastrar no Max 10
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<input type="number" name="qtdeAlunos" 
						value="<?php 
									if(isset($_POST['qtdeAlunos']))
									{
										echo $_POST['qtdeAlunos'];
									}

								?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="criar_inputs" value="Gerar Campos">
					</td>
				</tr>
				
				<tr></tr>
				<tr></tr>
				<tr></tr>

				<?php

					if (isset($_POST["criar_inputs"]) && ($_POST["qtdeAlunos"] != ""))
					{
						$qtdeAlunos = $_POST["qtdeAlunos"];

						if ($qtdeAlunos > 10)
						{
							echo "<br>Você não pode cadastrar mais do que 10 alunos de uma vez!";
							die();
						}

						for ($i=0; $i < $qtdeAlunos; $i++)
						{ 
							?>
							<tr>
								<td>
									Aluno:
								</td>
								<td>
									<input type="text" name="<?php echo 'aluno'.$i; ?>"
									value="<?php 
											if(isset($_POST['aluno'.$i]))
											{
												echo $_POST['aluno'.$i];
											}

										?>">
								</td>
							</tr>

							<?php 
						}
					}
				?>	
				<tr>
					<td></td>
					<td>
						<input type="submit" name="cadastrar" value="Cadastrar">
					</td>
				</tr>

				<?php
					if (isset($_POST["cadastrar"])) 
					{
						for ($i=0; $i < $_POST["qtdeAlunos"]; $i++)
						{
							$alunos[$i] = $_POST["aluno".$i];
						}

						foreach ($alunos as $key => $aluno) 
						{
							?>
							<tr>
								<td>Aluno</td>
								<td><?php echo $aluno; ?></td>
							</tr>
							<?php
						}	
					}

				?>
				
			</table>
		</form>
	</body>
</html>	


