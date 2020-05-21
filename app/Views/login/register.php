<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - Painel de Informações e Emissão de Alertas no Enfrentamento ao COVID-19 nas Microrregiões de Ubá e Juiz de Fora</title>
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
          <div class="col-12 col-sm-12">
            <div class="form-group">
              <label for="firstname"><b>Nome</b></label>
              <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label for="email"><b>Email</b></label>
              <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
            </div>
          </div>
          <div class="col-12 col-sm-12">
            <label><b>Municípios abrangidos pela microrregião de Ubá</b></label>
          </div>
          <div class="col-6 col-sm-5">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Astolfo Dutra</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">São Geraldo</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Dores do Turvo</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Senador Firmino</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Guidoval</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Visconde do Rio Branco</label>
              </div>
            </div>
          </div>
          <div class="col-5 col-sm-3">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Guiricema</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Mercês</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Piraúba</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Rio Pomba</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Tabuleiro</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Silverânia</label>
              </div>
            </div>
          </div>
          <div class="col-5 col-sm-3">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Rodeiro</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Divinésia</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Guarani</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Tocantins</label>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12">
            <label><b>Municípios abrangidos pela microrregião de Juiz de Fora</b></label>
          </div>
          <div class="col-6 col-sm-4">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Ewbank da Câmara</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Belmiro Braga</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Bias Fortes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Lima Duarte</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Chácara</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Coronel Pacheco</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Oliveiras Fortes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Maripá de Minas</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Matias Barbosa</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Mar de Espanha</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Paiva</label>
              </div>
            </div>
          </div>
          <div class="col-5 col-sm-3">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Descoberto</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Aracitava</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Goianá</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Guarará</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Bicas</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Pequeri</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Piau</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Rio Novo</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Rio Preto</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Piau</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Olaria</label>
              </div>
            </div>
          </div>
          <div class="col-5 col-sm-5">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Pedro Teixeira</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Simão Pereira</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Senador Cortes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">São João Nepomuceno</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Santos Dumont</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Santana do Deserto</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Santa Rita do Jacutinga</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Santa Rita do Ibitipoca</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Rochedo de Minas</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="option1">
                <label class="form-check-label" for="">Santa Bárbara do Monte Verde</label>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password"><b>Senha</b></label>
              <input type="password" class="form-control" name="password" id="password" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password_confirm"><b>Repita a senha</b></label>
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