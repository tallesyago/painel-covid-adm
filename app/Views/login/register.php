<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
            <div class="form-group">
              <label for="firstname">Primeiro nome</label>
              <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="lastname">Último nome</label>
              <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control" name="password" id="password" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password_confirm">Repita a senha</label>
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
            <a href="/">Já possuo uma conta</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>