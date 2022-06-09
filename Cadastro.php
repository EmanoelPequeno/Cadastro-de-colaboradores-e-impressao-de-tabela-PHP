<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastro</title>
    <style>
       .container {     
        position: absolute;
        top: 0; bottom: 0;
        left: 0; right: 0;
        margin: auto;
       }
    </style>
</head>
<body>
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-6">
                <h1>Cadastro de Colaboradores</h1><br>
                <form action="Grava.php" method="post">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nomeCol" placeholder="Nome"><br>
                    <label class="form-label">Matricula</label>
                    <input type="text" class="form-control" name="matrCol" placeholder="Matrícula"><br>
                    <label class="form-label">Data nascimento</label>
                    <input type="date" class="form-control" name="nascCol"><br>
                    <label class="form-label">PIS</label>
                    <input type="text" class="form-control" name="pisCol" placeholder="Número do PIS"><br>
                    <label class="form-label">Data Admissão</label>
                    <input type="date" class="form-control" name="admisCol"><br>
                    <button class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>