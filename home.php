<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAABAAAAAgAAAAcAAAATAAAAFQAAABUAAAASAAAABgAAAAEAAAABAAAAAQAAAAAAAAAAAAAAAAAAAAIAAAAxAAAASgAAAEgAAABhAAAAsQAAALQAAAC0AAAAsAAAAFcAAABIAAAASgAAACoAAAACAAAAAAAAAAAAAAAEAAAAbgAAAKUAAABNAAAASwAAAE0AAABNAAAATQAAAE0AAABLAAAATwAAALQAAABWAAAAAgAAAAAAAAAAAAAAAgAAAGMAAACVAAAABwAAAAEAAAABAAAAAQAAAAEAAAABAAAAAQAAAAoAAACtAAAASAAAAAEAAAAAAAAAAAAAAAIAAABjAAAAlgAAAAYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAJAAAArgAAAEgAAAABAAAAAAAAAAAAAAACAAAAYwAAAJYAAAAGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAAK4AAABIAAAAAQAAAAAAAAAAAAAAAgAAAGMAAACXAAAABgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAACvAAAASAAAAAEAAAAAAAAAAAAAAAIAAABjAAAAmAAAAAYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAsAAAAEgAAAABAAAAAAAAAAAAAAAGAAAAZgAAAJkAAAAGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAALAAAABMAAAABQAAAAAAAAADAAAAaAAAAKIAAACRAAAABwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAACkAAAAmwAAAFUAAAACAAAAAgAAADcAAADJAAAAuwAAADAAAAAGAAAAAAAAAAAAAAAAAAAAAAAAAAcAAAA4AAAAxQAAAL0AAAAtAAAAAQAAAAAAAAADAAAAGQAAAIcAAADfAAAAawAAABIAAAACAAAAAgAAABQAAAB1AAAA3gAAAHgAAAAVAAAAAgAAAAAAAAAAAAAAAAAAAAEAAAAKAAAARgAAAM8AAAC0AAAAMwAAADgAAAC9AAAA1QAAADsAAAAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAcAAAAkAAAANcAAADdAAAApwAAAJoAAAAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAoAAAA0AAAALwAAAD0AAAB8AAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAEAAAAGAAAACQAAAAEAAAAAAAAAAAAAAAAAAAAAgAEAAIABAACAAQAAgAEAAIfhAACH4QAAh+EAAIfhAAAH4AAAA8AAAAGAAAAAAAAAwAMAAOAHAAD4DwAA/A8AAA=="
          rel="icon" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
    <link rel="stylesheet" href="../css/main.css">
    <title>iMob</title>
</head>
<body background="../others/background.jpg">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="home.php"><img src="../others/house.png" id="logo"></a>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="home.php" id="nav-pagina-inicial">Página Inicial</a>
        <a class="p-2 text-dark" href="#" id="nav-inquilinos">Inquilinos</a>
        <a class="p-2 text-dark" href="#" id="nav-senhorios">Senhorios</a>
    </nav>
    <button type="button" onclick="location.href = '../index.php';" class="btn btn-outline-primary">Sair</button>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4" style="color:white">iMob</h1>
    <p class="lead" style="color:orange">Sua casa. Seu jeito.</p>
</div>

<div class="container" id="pagina-inicial">
    <div class="card-deck mb-3 text-center">

        <div class="card mb-12 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Pesquisar</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Qual tipo?</label>
                            </div>
                            <select class="custom-select">
                                <option>Apartamento</option>
                                <option>Casa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Cidade</label>
                            </div>
                            <select class="custom-select">
                                <option>São Bernardo do Campo</option>
                                <option>São Caetano do Sul</option>
                                <option>São Paulo</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="jumbotron bg-warning" id="jb-avan" style="display: none">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Valor Mínimo</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"
                                       aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Valor Máximo</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"
                                       aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Área Útil</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"
                                       aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Dormitórios</label>
                                </div>
                                <select class="custom-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>Usa camisinha, parça.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Condomínio</label>
                                </div>
                                <select class="custom-select">
                                    <option>Não</option>
                                    <option>Sim</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex bd-highlight mb-2">
                    <div class="mr-auto p-2 bd-highlight">
                        <button type="button" class="btn btn-sm  btn-warning" style="color:white" id="btn-busca-a">Busca
                            Avançada
                        </button>
                    </div>
                    <div class="p-2 bd-highlight">
                        <button type="button" class="btn btn-lg  btn-primary" id="btn-buscar">Buscar</button>
                    </div>
                </div>
                <div class="jumbotron" id="jb-res" style="display: none">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active" id="btn-lista">
                            <input type="radio" name="options" autocomplete="off" checked> Lista
                        </label>
                        <label class="btn btn-secondary" id="btn-galeria">
                            <input type="radio" name="options" autocomplete="off"> Galeria
                        </label>
                    </div>
                    <div id="lista">
                        <table id="table_id" class="display">
                            <thead>
                            <tr>
                                <th>Endereço</th>
                                <th>Fotos</th>
                                <th>Valor</th>
                            </tr>
                            </thead>
                            <tbody class="dinamico">
                            <tr id="anuncio1">
                                <td>Avenida Paulista</td>
                                <td>
                                    <div id="car1" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="img-car "
                                                     src="../others/casa1.jpg"
                                                     alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-car"
                                                     src="../others/casa2.jpg"
                                                     alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-car"
                                                     src="../others/casa3.jpg"
                                                     alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#car1" role="button"
                                           data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#car1" role="button"
                                           data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </td>
                                <td> 1000,00</td>
                            </tr>
                            <tr id="anuncio2">
                                <td>Rua Maua</td>
                                <td>
                                    <div id="car2" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="img-car"
                                                     src="../others/casa1.jpg"
                                                     alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-car"
                                                     src="../others/casa2.jpg"
                                                     alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-car"
                                                     src="../others/casa3.jpg"
                                                     alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#car2" role="button"
                                           data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#car2" role="button"
                                           data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </td>
                                <td> 2000,00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="container my-3" id="galeria" style="display: none">
                        <div class="row">
                            <div class="col">
                                <div id="car4" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa1.jpg"
                                                 alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa2.jpg"
                                                 alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa3.jpg"
                                                 alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#car4" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#car4" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div id="car5" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa1.jpg"
                                                 alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa2.jpg"
                                                 alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa3.jpg"
                                                 alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#car5" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#car5" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>
                            <div class="col">
                                <div id="car6" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa1.jpg"
                                                 alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa2.jpg"
                                                 alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-car"
                                                 src="../others/casa3.jpg"
                                                 alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Lucas</h5>
                                                <p>legal</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#car6" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#car6" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumbotron" id="jb-det" style="display: none">
                <div class="row">
                    <div class="col-7">
                        <div class="card info">
                            <div id="car7" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" id="carousel-detalhado">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                             src="../others/casa1.jpg"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                             src="../others/casa2.jpg"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                             src="../others/casa3.jpg"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#car7" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#car7" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--
                            <div class="card-body">
                                <h5 class="card-title">ID - 3141</h5>
                                <p class="card-text">Casa</p>
                                <p class="card-text">Rua Conch, 1</p>
                                <p class="card-text">São Paulo - SP</p>
                                <p class="card-text">R$ 1000,00</p>
                            </div>
                            -->
                        </div>

                    </div>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Contato Anunciante</h5>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <p class="font-weight-bold">Nome</p>
                                        </div>
                                        <div class="col">
                                            <p>Mr. Esponja</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <p class="font-weight-bold">Telefone</p>
                                        </div>
                                        <div class="col">
                                            <p>(10) 98765-4321</p>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h5 class="card-title">Envie um e-mail</h5>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                           placeholder="Nome@email.com">
                                </div>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="DDD">
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" placeholder="Telefone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3" placeholder="Mensagem"></textarea>
                                </div>
                                <button class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div sty>
<div class="container" id="inquilinos" style="display: none">
    <div class="card text-center my-2">
        <h5 class="card-header">Alugar</h5>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Digite o ID do Anuncio</span>
                </div>
                <input type="text" class="form-control" aria-label="Default"
                       aria-describedby="inputGroup-sizing-default">
            </div>
            <p class="card-text">Após digitar o ID, clique em alugar</p>
            <a href="../others/boleto.pdf" class="btn btn-primary" download>Alugar</a>
        </div>
    </div>
    <div class="card text-center my-2">
        <h5 class="card-header">2ª Via do Boleto</h5>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Digite o ID do Anuncio</span>
                </div>
                <input type="text" class="form-control" aria-label="Default"
                       aria-describedby="inputGroup-sizing-default">
            </div>
            <p class="card-text">Após digitar o ID, baixe a segunda via</p>
            <a href="../others/boleto.pdf" class="btn btn-primary" download>Baixar</a>
        </div>
    </div>
    <div class="card text-center my-2">
        <h5 class="card-header">Reclamação</h5>
        <div class="card-body">
            <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Digite a sua reclamação"></textarea>
            </div>
            <button class="btn btn-primary">Enviar</button>
        </div>
    </div>
</div>
<div class="container" id="senhorios" style="display: none">
    <div class="card text-center my-2">
        <h5 class="card-header">Criar Anúncios</h5>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Endereço</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Preco</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Area</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Dormitorios</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Qual tipo?</label>
                        </div>
                        <select class="custom-select">
                            <option>Apartamento</option>
                            <option>Casa</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Alugar ou Vender</label>
                        </div>
                        <select class="custom-select">
                            <option>Alugar</option>
                            <option>Vender</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Enviar Fotos</label>
                </div>
            </div>
            <button class="btn btn-primary">Criar</button>

        </div>
    </div>
    <div class="card text-center my-2">
        <h5 class="card-header">Editar Anúncios</h5>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">ID do Anuncio</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Endereço</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Preco</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Area</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Dormitorios</span>
                </div>
                <input type="text" class="form-control"">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Qual tipo?</label>
                        </div>
                        <select class="custom-select">
                            <option>Apartamento</option>
                            <option>Casa</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Alugar ou Vender</label>
                        </div>
                        <select class="custom-select">
                            <option>Alugar</option>
                            <option>Vender</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Enviar Fotos</label>
                </div>
            </div>
            <button class="btn btn-danger">Editar</button>

        </div>
    </div>

    <div class="card text-center my-2">
        <h5 class="card-header">Relatório resumo</h5>
        <div class="card-body">
            <table class="table table-striped table-hover text-center text-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Status</th>
                    <th scope="col">Valor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Rua Augusta, 421</td>
                    <td>Pago</td>
                    <td>R$ 300,00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rua Augusta, 421</td>
                    <td>Aguardando pagamento</td>
                    <td>R$ 200,00</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card text-center my-2">
        <h5 class="card-header">Reclamação</h5>
        <div class="card-body">
            <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Digite a sua reclamação"></textarea>
            </div>
            <button class="btn btn-primary">Enviar</button>
        </div>
    </div>
</div>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 text-center " style="color:white">
            <small class="d-block mb-3">&copy; 2018</small>
        </div>

        <div class="col-12" style="color:white">
            <h5 class="text-center">Sobre</h5>
            <ul class="list-unstyled text-small text-center">
                <li><a href="#" style="color:white" data-toggle="modal"
                       data-target="#desenvolvedores">Desenvolvedores</a></li>
            </ul>
            <ul class="list-unstyled text-small text-center">
                <li><a href="#" style="color:white" data-toggle="modal" data-target="#professor">Professor</a></li>
            </ul>
        </div>
    </div>
</footer>
</div>

<!-- Modal -->
<div class="modal fade" id="professor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tiago Sanches da Silva</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="../others/tiago.jpg" class="img-fluid" alt="Responsive image"
                     style="height: auto;width: auto;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="desenvolvedores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Levon, Raul e Lucas Rodrigues</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="../others/levon.jpg" class="img-fluid" alt="Responsive image"
                     style="height: auto;width: auto;">
                <img src="../others/raul.jpg" class="img-fluid" alt="Responsive image"
                     style="height: auto;width: auto;">
                <img src="../others/lucas.jpg" class="img-fluid" alt="Responsive image"
                     style="height: auto;width: auto;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

</body>
</html>