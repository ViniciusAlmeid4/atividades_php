<form method="post">
	<select name="teste">
		<option 
			<?php 
				if (isset($_POST['teste']))
				{
					if($_POST['teste'] == "teste 1")
					{ 
					  	echo "selected"; 
					} 
				}
				?>>
				teste 1
		</option>
		<option 
			<?php 
				if (isset($_POST['teste']))
				{
					if($_POST['teste'] == "teste 2")
					{ 
					  	echo "selected"; 
					} 
				}
				?>>
				teste 2
		</option>
	</select>	
	<input type="submit" name="enviar">
</form>	
