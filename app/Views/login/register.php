<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel COVID</title>
  <link href="../assets/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
    <div class="container">
      <h3 class="text-center" style="color: red;">Registro</h3>
      <h3 class="text-center">Painel de Informações e Emissão de Alertas no Enfrentamento ao COVID-19 nas Microrregiões de Ubá e Juiz de Fora</h3>
      <hr>
      <form class="" action="/registro" method="post">
        <div class="row">
          <div class="col-12 col-sm-6">
            <label for="firstname"><b>Nome</b></label>
            <div class="form-group">
              <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <label for="municipio"><b>Municipio</b></label>
            <div class="form-group">
              <?php echo '<select class="form-control" id="municipio">';
              foreach ($data as $row) {
                echo "<option>" . $row['nomeMunicipio'] . "</option>";
              }
              echo "</select>";
              ?>
            </div>
          </div>
          <div class="col-12">
            <label for="email"><b>Email</b></label>
            <div class="form-group">
              <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <label for="password"><b>Senha</b></label>
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="password" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <label for="password_confirm"><b>Repita a senha</b></label>
            <div class="form-group">
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
            </div>
          </div>
          <?php if (isset($validation)) : ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <div class="row">
          <div class="col-12 col-sm-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
          <div class="col-12 col-sm-8 text-right">
            <a href="/">Voltar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>