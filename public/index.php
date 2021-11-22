<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LC Engenharia</title>
  <link rel="shortcut icon" href="./../image/icon.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="../public/assets/css/bootstrapCustun.css" rel="stylesheet">
  <link href="../public/assets/css/global.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="row m-4 ">
      <h2 class="text-uppercase d-flex justify-content-center ">
        <span class="text-primary h1" style="font-family:'Exo'; font-weight: 400;text-shadow: 1px 1px 2px #213671 ;">
          Solicite um Orçamento
      </h2>
      </span>
      <h3 class="lead d-flex justify-content-center " style="margin-top: -.9rem; color:rgba(33, 54, 113, 0.7); font-weight: 200; ">
        Quer saber quanto você pode economizar produzindo sua própria energia?
      </h3>
    </div>


    <div class="container">
      <div class="row mt-3">
        <!-- <span class="text-primary text-uppercase">Dados do Cliente</span> -->

        <div class="row">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="nome" class="form-label" required>Nome Completo</label>
              <input type="text" class="form-control" id="nome" value="" required />
              <!-- <div class="invalid-feedback">
                Campo Obrigatório
              </div> -->
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label" required>E-mail</label>
              <input type="email" class="form-control" id="validationCustom02" value="" placeholder="email@provedor.com ..." required />
              <!-- <div class="invalid-feedback">
                Campo Obrigatório
              </div> -->
            </div>

            <div class="col-md-2 ">
              <label for="stCepPessoa">CEP</label>
              <input type="text" name="stCepPessoa" class="form-control text-uppercase js_cep" id="stCepPessoa" size="10" maxlength="9" onblur="pesquisacep(this.value)" placeholder="" />
              <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
            </div>

            <div class="col-md-5 ">
              <label for="stLogradouroPessoa" required>Endereço </label>
              <input type="text" name="stLogradouroPessoa" class="form-control text-uppercase" id="stLogradouroPessoa" placeholder="" required />
              <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
            </div>
            <div class="col-md-2 ">
              <label for="nnCasaPessoa" required>Nº</label>
              <input type="number" name="nnCasaPessoa" class="form-control text-uppercase" id="nnCasaPessoa" placeholder="" required>
              <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
            </div>

            <div class="col-md-3">
              <label for="stBairroPessoa" required>Bairro</label>
              <input type="text" name="stBairroPessoa" class="form-control text-uppercase" id="stBairroPessoa" placeholder="" required>
              <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
            </div>
            <div class="col-md-4 ">
              <label for="stCidadePessoa" required>Cidade</label>
              <input type="text" name="stCidadePessoa" class="form-control text-uppercase" id="stCidadePessoa" placeholder="" required>
              <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
            </div>
            <div class="col-md-2 ">
              <label for="stEstadoPessoa" required>UF</label>
              <input type="text" name="stEstadoPessoa" maxlength="2" class="form-control text-uppercase" id="stEstadoPessoa" placeholder="" required>
              <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
            </div>

            <div class="col-md-3">
              <label for="nnTelefonePessoa" required>Telefone</label>
              <input type="text" name="nnTelefonePessoa" class="form-control text-uppercase" id="nnTelefonePessoa" placeholder="" required>
              <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
            </div>
            <div class="col-md-3 ">
              <label class="form-check-label" for="flexSwitchCheckDefault"> </label>
              <div class="form-check form-switch">
                <input class="form-check-input mt-md-2 d-flex align-items-center" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width:3.5rem; height:1.6rem;" />
                <label class="form-check-label ml-3" for="flexSwitchCheckDefault" style="">Este Telefone é Whataspp?</label>
              </div>
            </div>


            <div class="col-md-12">
              <label for="nnTelefonePessoa" required>Tipo de Projeto</label>
              <select class="form-select" id="tipoProjeto" onChange="selectTipoProjeto()" required>
                <option selected disabled value="">Selecione o Tipo de Projeto que deseja fazer Orçamento</option>
                <option value="solar">Energia Solar</option>
                <option value="iPublica">Iluminação Publica</option>
                <option value="Subestacao">Subestação</option>
                <option value="ProjEletrico">Projeto Elétrico</option>
                <option value="SPDA">Projeto SPDA</option>
                <option value="MUC">MUC</option>
                <option value="Loteamento">Loteamento</option>
              </select>
              <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
            </div>

            <!-- Div com JS -->
            <div class="mt-3" id="solar" style="display: none;">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label for="nnTelefonePessoa" required>Perfil</label>
                    <select class="form-select" id="validationCustom04" required>
                      <option selected disabled value="">Selecione um Perfil</option>
                      <option value="Residencial">Residencial</option>
                      <option value="Comercial">Comercial</option>
                      <option value="Agro">Agro</option>
                      <option value="Industrial">Industrial</option>
                    </select>
                    <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
                  </div>

                  <div class="col-md-4">
                    <label for="nnTelefonePessoa" required>Tipo de Ligação </label>
                    <select class="form-select" id="validationCustom04" required>
                      <option selected disabled value=""> - </option>
                      <option value="mono">Monofásica</option>
                      <option value="bi">Bifásica</option>
                      <option value="tri">Trifásica</option>
                    </select>
                    <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
                  </div>
                  <div class="col-md-4">
                    <label for="nnTelefonePessoa" required>Consumo de Mensal em KWh </label>
                    <input type="number" id="" class="form-control" />
                    <!-- <div class="invalid-feedback">
                  Obrigatório !
                </div> -->
                  </div>
                </div>
              </div>


            </div>

            <!-- Final Div com JS -->



        </div>


        <div class="row">

          <div class="col-12 my-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <!-- <div class="invalid-feedback">
                You must agree before submitting.
              </div> -->
            </div>
          </div>
        </div>

        <div class="col-12">
          <button class="btn btn-lg btn-outline-primary" type="submit">Solicitar orçamento</button>
        </div>
        </form>
      </div>


      <script type="text/javascript" src="../public/assets/js/app.js"></script>


      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>

</html>
