<!DOCTYPE html>
<html lang="PT-pt">
<head>
  <title>Formulario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Formulario</h2>
  <img src="img/pensil.png" alt="pensil" class="float-right" width="100" > <br>
  <form action="dados.php" method="post" >
    <div class="form-group">
      <label for="nomef">Nome:</label>
      <input type="text" class="form-control" placeholder="Insira o seu nome" name="nomef" required>
      <label for="passwdf">Password:</label>
      <input type="password" class="form-control"  placeholder="Insira a sua Password" name="passwd" required>
      <label for="emailf">Email:</label>
      <input type="email" name="emailf" class="form-control" placeholder="Insira o seu Email" required>
      <label for="dataf">Data de Nacimento</label>
      <input type="date" name="dataf" class="form-control" required>
      <label for="Anof">Ano</label>
      <select name="Anof" class="form-control">
      <option >Selecione uma opção</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      </select>
      <label for="cursof">Curso</label>
      <select name="cursof" class="form-control">
      <option >Selecione uma opção</option>
      <option value="Psi">Psi</option>
      <option value="Pigr">Pigr</option>
      <option value="Ptur">Ptur</option>
      </select>

      <br>
      <label for="divRadio">Sexo</label>
      <br>
      <div class="form-check  " id="divRadio">
        <label class="form-check-label">
          <input type="radio" class="form-check-input custom-radio " name="optradio">Masculino
        </label>
        <br>
      </div>
      <div class="form-check">
          <input type="radio" class="form-check-input custom-radio " name="optradio">Feminino
        </label>
      </div>
      <br>
      <label for="divRadio">Repetente</label>
      <br>
      <div class="form-check  " id="divRadio">
        <label class="form-check-label">
          <input type="radio" class="form-check-input custom-radio " name="optradio">Masculino
        </label>
        <br>
      </div>
      <div class="form-check">
          <input type="radio" class="form-check-input custom-radio " name="optradio">Feminino
        </label>
      </div>
      </div>
      <label for="filef">Enviar sua fotografia</label><br>
      <input type="file" name="filef"><br><br>
      <button type="submit" class="btn btn-primary">Submeter</button>
      <button type="reset" class="btn btn-danger">Limpar dados</button>
      </div>
  </form>
</div>

</body>
</html>
