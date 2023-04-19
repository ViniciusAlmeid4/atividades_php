<?php

/* Os números primos representam o conjunto dos números naturais,
 maiores que 1, que possuem apenas dois divisores (1 e ele próprio).*/

if (isset($_POST["enviar"]))
{
	// inicia sendo um número primo => variação de vefiricação
	$primo = 1;
	// no final se a variável $primo == 1 é primo, se não, não é primo
	
	$n1 =  $_POST["n1"];

	// verifica se o número é igual ou menor a 1, se for não é número primo
	if ($n1 <= 1) 
	{
		$primo = false;	
	}
	else
	{
		/* se for maior do que 1 passa o valor para o contador para comparar se o resto da divisão
		com todos os seus antecessores */
		for ($i = $n1; $i  > 0 ; $i--) 
		{ 
			$resto_divisao = number_format($n1 % $i, 2);
						
			/* aqui comparamos se o número é divisivel, se ele é diferente dele mesmo, e se é maior que 1
			ou seja conseguiu dividir, o número é diferente dele mesmo e maior que um não é primo
			*/
			if (($resto_divisao == 00) && ($n1 != $i) && ($i > 1))
			{				
				$primo = false;
			}
			/* se ele não entrar nenhuma vez nesse if acima, significa que ele é divísivel apenas 
			por ele mesmo, e por 1, então não é primo*/
		}
	}	

	echo !$primo ? "O número $n1 não é um número primo" : 
	"O número $n1 é um número primo";	
}