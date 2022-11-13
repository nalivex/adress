<!DOCTYPE html>
<html>

<head>
  <title> MEU CEP </title>
</head>

<body>
  <header class="header-top">
    <h1>MEU CEP</h1>
  </header>

  <section class="container-box">

    <section class="container-box-secondary">
      <form action="{{ route('address') }}" method="POST" class="form-cep">
        @csrf
        <input type="text" name="cep" placeholder="Insira o CEP" minlength="8" maxlength="8">
        <input type="submit" value="Enviar">
      </form>
    </section>


    @if (!empty($address))
      <section class="container-dt">
        <aside class="dt-right">
          <div class="datas">
            <h5 class="text-uppercase text-muted ls-1 mb-1">
              CEP
            </h5>
            <h2 class="mb-0">{{ empty($address->cep) ? '--' : $address->cep }}</h2>
          </div>
          <div class="datas">
            <h5 class="text-uppercase text-muted ls-1 mb-1">
              Rua
            </h5>
            <h2 class="mb-0">{{ empty($address->logradouro) ? '--' : $address->logradouro }}</h2>
          </div>
          <div class="datas">
            <h5 class="text-uppercase text-muted ls-1 mb-1">
              Bairro
            </h5>
            <h2 class="mb-0">{{ empty($address->bairro) ? '--' : $address->bairro }}</h2>
          </div>
          <div class="datas">
            <h5 class="text-uppercase text-muted ls-1 mb-1">
              Estado
            </h5>
            <h2 class="mb-0">{{ empty($address->uf) ? '--' : $address->uf }}</h2>
          </div>
        </aside>
      </section>
    @endif

  </section>
</body>

</html>

<style>
  * {
    margin: 0px;
    padding: 0px;
  }

  html,
  body {
    font-family: monospace;
    background-color: #fff;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    min-height: 100%;
  }

  .header-top {
    background-color: rgb(0, 0, 0);
    width: 100%;
    height: 70px;
  }

  .header-top h1 {
    color: white;
    font-size: 22px;
    padding: 20px 10px 20px 15px;
  }

  .container-box {
    width: 500px;
    padding: 40px 40px;
  }


  .container-box-secondary {
    background-color: white;
    border-left: 40px solid white;
    border-right: 40px solid white;
  }


  /* Form CEP*/
  .form-cep {
    background-color: white;
    border-top: 40px solid white;
    border-bottom: 40px solid white;
  }

  .form-cep input[type=submit] {
    display: none;
  }

  .form-cep input[type=text] {
    width: 100%;
    background-color: rgb(226, 226, 226);
    font-size: 15px;
    padding: 20px 0px 20px 10px;
    margin-left: -5px;
    border: none;
    border-radius: 12px;
  }

  /* Datas */

  .container-dt {
    background-color: white;
    border-left: 40px solid white;
    border-right: 40px solid white;
    display: flex;
    padding: 0px 0px 20px 0px;
  }

  .container-dt>.dt-right {
    width: 70%;
    float: right;
  }

  .dt-right>.datas {
    border-bottom: solid white;
    border-radius: 12px;
    background-color: rgb(0, 0, 0);
    width: 100%;
    height: 70px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-inline-start: 15px;
  }

  .datas>h5 {
    color: rgb(75, 75, 75);
    font-size: 16px;

  }

  .datas>h2 {
    color: white;
    font-size: 16px;

  }
</style>
