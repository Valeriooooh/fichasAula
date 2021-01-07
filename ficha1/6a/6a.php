<html lang="pt">
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-group">
  <label for="">Formulario</label>
  <input type="text" name="userf" class="form-control" placeholder="utilizador" aria-describedby="helpId">
  <input type="email" name="emailf" class="form-control" placeholder="email" aria-describedby="helpId">
  <input type="date" name="idadef" class="form-control"  aria-describedby="helpId">
  <input type="password" name="passwdf" class="form-control" placeholder="password" aria-describedby="helpId">
  
  <small id="helpId" class="text-muted">Help text</small>
</div>





<form action="dadosPost.php" method="post">
Nome: <input type="text" name="userf"><br>
Email: <input type="email" name="emailf"><br>
Idade: <input type="number" name="idadef"><br>
Password: <input type="password" name="passwdf"><br>
<input type="submit">
</form>
</body>
</html>