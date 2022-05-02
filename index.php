<!doctype html>
<html lang="pt-BR">

<head>
    <title>PROVA A1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="card-title">Pesquisa</h3>
            </div>
            <div class="card-body">
                <form action="processa_dados.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome"
                            placeholder="Digite aqui seu nome">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select class="form-control" name="sexo" id="sexo">
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="escolaridade">Escolaridade</label>
                        <select class="form-control" name="escolaridade" id="escolaridade">
                            <option>Superior</option>
                            <option>Especialização</option>
                            <option>Mestrado</option>
                            <option>Doutorado</option>
                        </select>
                    </div>
                    <button type="enviar" class="btn btn-success">Enviar</button>
                    <button type="limpar" class="btn btn-danger">Limpar</button>


                </form>
            </div>

            <?php if (isset($_COOKIE['erro'])) {
                echo "<div class='alert alert-danger' role='alert'>" . $_COOKIE['erro'] . "</div>";
            } elseif (isset($_COOKIE['ok'])) {
                echo "<div class='alert alert-success' role='alert'> Respostas registradas com sucesso. Obrigado!</div>";
            }

            unset($_COOKIE['ok']);
            setcookie('ok', null, -1, '/');
            unset($_COOKIE['erro']);
            setcookie('erro', null, -1, '/');


            ?>

        </div>

        <div class="card-footer text-muted">
            <span>Obrigado por sua participação</span>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
