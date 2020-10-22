<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title>form</title>
</head>
<body>
   <form action="dados.php" method="post">
   <label for="nomef">Nome:</label>
   <input class="form-control" type="text" name="nomef" 	placeholder="insira o seu nome">
   <label for="emailf">Email:</label>
   <input class="form-control" type="text" name="emailf" 	placeholder="insira o seu email">
   <label for="idadef">Idade:</label>
   <input class="form-control" type="date" name="idadef">
   <label for="passwdf">Password:</label>
   <input class="form-control" type="password" name="passwdf" placeholder="insira a sua password">
   <input class="form-control btn-success" type="submit" value="Submeter"> 
   </form> 
</body>
</html>
